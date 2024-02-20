<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyCourseRequest;
use App\Models\Course;
use App\Models\CourseMaterialLesson;
use App\Models\CourseTrainingPlan;
use App\Models\Material;
use App\Models\TrainingPlan;
use App\Models\TrainingPlanYear;
use App\Models\Unit;
use App\Models\UserCourseTrainingPlan;
use App\Models\UserSurvey;
use Gate;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TrainingPlanController extends Controller
{

    public function index()
    {
        abort_if(Gate::denies('training_plan_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $training_plan_years = TrainingPlanYear::all();

        return view('admin.training_plans.index', compact('training_plan_years'));
    }

    public function get_training_plan_years()
    {
        return TrainingPlanYear::all();
//      return TrainingPlanYear::all()->toJson();
    }

    public function get_training_plan($id)
    {
        return TrainingPlan::where('training_plan_year_id', $id)->with('unit')->get();
//      return TrainingPlan::where('training_plan_year_id', $id)->with('unit')->get()->toJson();
    }

    public function get_training_plan_unit(TrainingPlan $training_plan, Unit  $unit)
    {
        $course_training_plans = CourseTrainingPlan::where('training_plan_id', $training_plan->id)->get();

        return view('admin.training_plan_unit.index', compact('training_plan', 'unit', 'course_training_plans'));
    }

    public function postTrainingPlan(Request $request)
    {
        // dd($request);
        $course = Course::findOrfail($request->course_id);
        $weeks_number = $course->weeks_number;
        $days = ($weeks_number*7)-2;
        $training_plan_id = $request->training_plan_id;
        $trainee_number = $request->trainee_number;
        $enrollment_conditions = $request->enrollment_conditions;
        $note = $request->note;
        $status = 'مجدولة';
        $start_at = convertToGregorian($request->start_at);
        $end_at = convertToGregorian($request->end_at);
        $created_by = auth()->user()->id;
        $course_training_plans = CourseTrainingPlan::where('course_id', $course->id)->latest()->first();
        $patch_number = ($course_training_plans) ? $course_training_plans->patch_number+1 : 1 ;

        CourseTrainingPlan::create([
            'training_plan_id' => $training_plan_id,
            'course_id' => $course->id,
            'start_at' => $start_at,
            'end_at' => $end_at,
            'trainee_number' => $trainee_number,
            'enrollment_conditions' => $enrollment_conditions,
            'patch_number' => $patch_number,
            'status' => $status,
            'note' => $note,
            'created_by' => $created_by,
        ]);
        return redirect()->back();
    }

    public function editTrainingPlan(Request $request, CourseTrainingPlan $course_training_plan)
    {

        $course_training_plan->update([
            'start_at' => convertToGregorian($request->start_at) ?? $course_training_plan->start_at,
            'end_at' => convertToGregorian($request->end_at) ?? $course_training_plan->end_at,
            'trainee_number' => $request->trainee_number ?? $course_training_plan->trainee_number,
            'enrollment_conditions' => $request->enrollment_conditions ?? $course_training_plan->enrollment_conditions,
        ]);


        return redirect()->back();
    }

    public function showCourseTrainingPlan(CourseTrainingPlan $course_training_plan): view
    {
        abort_if(Gate::denies('training_plan_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $students = (new UserCourseTrainingPlan())->getStudents($course_training_plan->id);
        $teachers = (new UserCourseTrainingPlan())->getTeachers($course_training_plan->id);
        $materials = $course_training_plan->course->materials;
        return view('admin.training_plans.course_training_plan_show', compact('course_training_plan', 'students', 'teachers', 'materials'));
    }

    public function reportCourseTrainingPlan(CourseTrainingPlan $course_training_plan): view
    {
        abort_if(Gate::denies('training_plan_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $students = (new UserCourseTrainingPlan())->getStudents($course_training_plan->id);
        $teachers = (new UserCourseTrainingPlan())->getTeachers($course_training_plan->id);
        $materials = $course_training_plan->course->materials;

        $teacher_Not_Nvaluated =UserSurvey::query()->with('user_course_training_plan')->where(['course_training_plan_id'=>$course_training_plan->id,'material_id'=>null,'done'=>0])->whereHas('user_course_training_plan',function ($q){
            $q->where('type',"T");
        })->count();

        $student_Not_Nvaluated =UserSurvey::query()->with('user_course_training_plan')->where(['course_training_plan_id'=>$course_training_plan->id,'material_id'=>null,'teacher_id'=>null])->whereHas('user_course_training_plan',function ($q){
            $q->where('type',"S");
        })->count();

        return view('admin.training_plans.course_training_plan_report', compact('course_training_plan', 'students', 'teachers', 'materials','teacher_Not_Nvaluated','student_Not_Nvaluated'));
    }
    public function show(TrainingPlanYear $training_plan_year)
    {
        abort_if(Gate::denies('training_plan_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        return view('admin.training_plans.show ', compact('training_plan_year'));
    }

    public function storeUser(Request $request)
    {
        abort_if(Gate::denies('training_plan_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $userCourseTrainingPlan = UserCourseTrainingPlan::create([
            "rank" => $request->rank,
            "username" => $request->username,
            "course_training_plan_id" => $request->course_training_plan_id,
            "type" => $request->type,
        ]);

        if ($request->type == 'T') {
            foreach ($request->materials as $material_id){
                UserSurvey::create([
                    'survey_id' => 5,
                    'user_course_training_plan_id' => $userCourseTrainingPlan->id,
                    'course_training_plan_id' => $userCourseTrainingPlan->course_training_plan->id,
                    'material_id' => $material_id,
                ]);
            }
        }

//        if ($request->type == 'S')
//        {
//
//        }else{
//
//        }
//        'survey_id'
//        'user_course_training_plan_id'
//        'course_training_plan_id'
//        'material_id'

        return redirect()->back();
    }

    public function destroy(UserCourseTrainingPlan $user_course_training_plan)
    {
        abort_if(Gate::denies('training_plan_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $user_course_training_plan->delete();

        return back();
    }

    public function massDestroy(MassDestroyCourseRequest $request)
    {
        Course::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function removeMaterialToCourse(Request $request)
    {
        CourseMaterialLesson::where([
            'course_id' => $request->course_id,
            'material_id' => $request->material_id
        ])->delete();
        $course = Course::findOrfail($request->course_id);
        $course->materials()->detach($request->material_id);

        $course->load('unit');
        $materials = Material::all();
        return view('admin.courses.show', compact('course', 'materials'));
    }

    public function print_unit(TrainingPlan $training_plan, Unit  $unit){
        $course_training_plans = CourseTrainingPlan::where('training_plan_id', $training_plan->id)->get();
        return view('admin.training_plan_unit.print',compact('training_plan', 'unit', 'course_training_plans'));

    }

    public function printCourseTrainingPlan(CourseTrainingPlan $course_training_plan,$type): view
    {
        abort_if(Gate::denies('training_plan_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $user =UserCourseTrainingPlan::where('course_training_plan_id',$course_training_plan->id)->get();
        if($type == "T"){
            $teachers = (new UserCourseTrainingPlan())->getTeachers($course_training_plan->id);
            $count=  count($teachers);
            return view('admin.training_plans.course_training_plan_print', compact('course_training_plan','teachers','count'));
        }else {
            $students = (new UserCourseTrainingPlan())->getStudents($course_training_plan->id);
            $count=  count($students);
            return view('admin.training_plans.course_training_plan_print', compact('course_training_plan', 'students','count'));
        }

    }
    public function CourseTrainingPlanMaterial(UserCourseTrainingPlan $user_course_training_plan, CourseTrainingPlan $course_training_plan)
    {
        $materials = $course_training_plan->course->materials;
        $current_material_ids = $user_course_training_plan->material_user_course_training_plans->pluck('id');

        return view('admin.training_plans.material_user_course_training_plans', compact( 'materials', 'user_course_training_plan', 'course_training_plan', 'current_material_ids'));

    }
    public function storeCourseTrainingPlanMaterial(Request $request)
    {
        $user_course_training_plan = UserCourseTrainingPlan::find($request->user_course_training_plan_id);

        $user_course_training_plan->material_user_course_training_plans()->sync($request->input('materials', []));

        return to_route('admin.course_training_plans.show', $user_course_training_plan->course_training_plan_id);

    }
    public function notHeld(CourseTrainingPlan $course_training_plan)
    {
        $course_training_plan->update([
            'status' => 'not_held'
        ]);
        return redirect()->back();
    }
    public function notEvaluations(CourseTrainingPlan $course_training_plan)
    {
        $course_training_plan->update([
            'evaluations_added' => 0
        ]);
        return redirect()->back();
    }
    public function not_nvaluated(CourseTrainingPlan $course_training_plan,$type){

        if ($type=="S"){
            $student_Not_Nvaluated =UserSurvey::with('user_course_training_plan')->where(['course_training_plan_id'=>$course_training_plan->id,'teacher_id'=>null,'done'=>0,'material_id'=>null])->whereHas('user_course_training_plan',function ($q){
                $q->where('type',"S");
            })->get();
            return view('admin.training_plans.not_nvaluated',compact('student_Not_Nvaluated','type'));
        }else{
            $teacher_Not_Nvaluated =UserSurvey::query()->with('user_course_training_plan')->where(['course_training_plan_id'=>$course_training_plan->id,'material_id'=>null,'done'=>0])->whereHas('user_course_training_plan',function ($q){
                $q->where('type',"T");
            })->get();
            return view('admin.training_plans.not_nvaluated',compact('teacher_Not_Nvaluated','type'));

        }

    }
}
