<div class="p-2 bg-white border border-slate-200">
@php
    $material=\App\Models\Material::with('courses')->find($id)
@endphp
    <table>
        @foreach($material->courses as $course)
        <tr>
            <td>{{ $course->name }}</td>
            <td><a type="button"  href="{{ route("admin.courses.create") }}"     class="p-1 text-xs bg-green-600 text-white ">طباعة</a></td>

        </tr>
        @endforeach
    </table>


    <div class="flex justify-end">
    </div>
</div>
