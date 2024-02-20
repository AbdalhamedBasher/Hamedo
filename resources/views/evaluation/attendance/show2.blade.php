@extends('layouts.main2')
<br><br><br><br><br><br>
@section('content')
<div class="flex items-center markdown">
    <h1 style="font-size: 2em;"><b> {{ auth()->guard('evaluation')->user()->username }}</b></h1>
</div>
<div class="container mx-auto">
    <br />

    <br />

    @if(Session::has('message'))
    <p class="alert alert-danger" style="direction: rtl;text-align: right;">{{ Session::get('message') }}</p>
    @endif
    <div class="row">
        @php
        $user= auth()->guard('evaluation')->user();
        $answer= App\Models\Answer::where(['material_id'=>NUll ,'teacher_id'=>NUll,'user_id'=>$user->id])->first();


        @endphp
        @section('content')
        <nav aria-label="breadcrumb" dir="rtl">

        </nav>

        <div class="card">
            <div class="card-header">
                تفاصيل دورة
                [ {{ $course_training_plan->course->name }} ]
                في نشرة
                [ {{ $course_training_plan->training_plan->unit->name }} ]
                للعام التدريبي
                [ {{ $course_training_plan->training_plan->training_plan_year->name }} ]
            </div>


        </div>

        <div class="card">
            <div class="card-header">
            </div>
            <div class="card-body">



                <br>





                <hr>
                <br>

                <!-- Modal -->


                <div class="table-responsive">
                    <table
                        class=" table table-bordered table-striped table-hover datatable datatable-course_training_plans">
                        <thead>
                            <tr>
                                <th class="col col-1 text-center">
                                    ت
                                </th>
                                <th class="col col-1 text-center">
                                    الاسبوع
                                </th>


                                <th class="col col-3 text-center">
                                    التاريخ
                                </th>




                                <th class="col col-1 text-center">
                                    &nbsp;
                                </th>
                            </tr>
                        </thead>

                        <tbody>
                            @php
                            $i=1;
                            @endphp
                            @foreach ( $daya as $days )
                            <tr>
                                @php
                                @endphp

                                <td>
                                    {{$i++}}
                                </td>
                                <td>
                                    @php
                                    $weeks=$days->id;
                                    @endphp
                                    {{$days->week}}
                                </td>
                                @php
                                $today=\Carbon\Carbon::now();
                                $todayhijri=convertToHijri($today);

                                @endphp
                                <td>


                                    @foreach (json_decode($days->start_at) as $value )
                                    {{-- مدير مركز التدريب بالوحدة --}}

                                    @if (!is_null($value))


                                    @if(Gate::check('attendance_edit'))

                                    <form action="{{route('evaluation.attendance.store')}}" method="POST"
                                        enctype="multipart/form-data" style="display: inline-block;" class="p-1">

                                        @csrf

                                        <input type="submit" class="btn btn-primary"
                                            value="{{(convertToHijri(convertToGregorian($value)->format('Y-m-d')))}}">
                                        <input type="hidden" name="lecture_date"
                                            value="{{date('Y-m-d', strtotime($value))}}">
                                        <input type="hidden" name="course_id" value="{{ $course_training_plan->id}}">
                                        <input type="hidden" name="weeks" value="{{ $weeks}}">
                                        <input type="hidden" name="applied_name"
                                            value="{{auth()->guard('evaluation')->user()->id}}">
                                        <input type="hidden" name="type"
                                            value="{{auth()->guard('evaluation')->user()->type}}">
                                    </form>
                                    @else

                                    <form action="{{route('evaluation.attendance.store')}}" method="POST"
                                        enctype="multipart/form-data" style="display: inline-block;" class="p-1">

                                        @csrf

                                        <input type="submit" class="btn btn-primary"
                                            value="{{convertToHijri(convertToGregorian($value)->format('Y-m-d'))}}" {{
                                            (convertToGregorian($value)->addDay()->format('Y-m-d'))==$today->format('Y-m-d')?'':''}}>
                                        <input type="hidden" name="lecture_date"
                                            value="{{date('Y-m-d', strtotime($value))}}">
                                        <input type="hidden" name="course_id" value="{{ $course_training_plan->id}}">
                                        <input type="hidden" name="weeks" value="{{ $weeks}}">
                                        <input type="hidden" name="applied_name"
                                            value="{{auth()->guard('evaluation')->user()->id}}">
                                        <input type="hidden" name="type"
                                            value="{{auth()->guard('evaluation')->user()->type}}">
                                    </form>
                                    @endif

                                    @endif


                                    @endforeach




                                </td>


                                <td>



                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>


            </div>
        </div>

        @endsection
        @section('scripts')
        @parent
        <script>
            $(document).ready(function(){
        $(".btn-success").click(function(){
            var ids=$(this).data("id");
           $("#ids").val(ids)

           $("#course_date2").val($(this).data("date"))
 var op= $(".modal-body  div #course_modal").val( $(this).data("name")).change();

 op.attr("selected","selected");
            $(this).data("name")

           $("#admin2").val($(this).data("admin"))
            $("#course_admin2").val($(this).data("course_admin"))
            console.log( $("#course_date2").val())
        })

    })
        $(function () {
            let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
            @can('user_delete')
            let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
            let deleteButton = {
                text: deleteButtonTrans,
                url: "{{ route('admin.users.massDestroy') }}",
                className: 'btn-danger',
                action: function (e, dt, node, config) {
                    var ids = $.map(dt.rows({selected: true}).nodes(), function (entry) {
                        return $(entry).data('entry-id')
                    });

                    if (ids.length === 0) {
                        alert('{{ trans('global.datatables.zero_selected') }}')

                        return
                    }

                    if (confirm('{{ trans('global.areYouSure') }}')) {
                        $.ajax({
                            headers: {'x-csrf-token': _token},
                            method: 'POST',
                            url: config.url,
                            data: {ids: ids, _method: 'DELETE'}
                        })
                            .done(function () {
                                location.reload()
                            })
                    }
                }
            }
            dtButtons.push(deleteButton)
            @endcan

            $.extend(true, $.fn.dataTable.defaults, {
                order: [[1, 'desc']],
                pageLength: 100,
            });
            $('.datatable-course_training_plans:not(.ajaxTable)').DataTable({buttons: dtButtons})
            $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
                $($.fn.dataTable.tables(true)).DataTable()
                    .columns.adjust();
            });
        })

        </script>
        <script type="text/javascript">
            $(function () {
            $(".dateHijri").hijriDatePicker({
                hijri: true,
                showTodayButton: true
            });
            // $("#end_at").hijriDatePicker({
            //   hijri:true,
            //   showTodayButton: true
            // });
        });
        </script>
        @endsection