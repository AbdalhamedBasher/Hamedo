<div class="p-2 bg-white border border-slate-200">
    <table class="table-bordered ">
        <tbody>
            <tr>
                <th style="background-color:#e4e5e6;">
                    مسمى الدورة:
                </th>
                <td style="background-color:#e4e5e6;">
                    {{ $row->name }}
                </td>
            </tr>
            <tr>
                <th style="background-color:#e4e5e6;">
                    المدة:
                </th>
                <td style="background-color:#e4e5e6;">
                    {{ $row->weeks_number }}
                </td>
            </tr>
            <tr>
                <th style="background-color:#e4e5e6;">
                    عدد المتدربين
                </th>
                <td style="background-color:#e4e5e6;">
                    {{ $row->trainee_number }}
                </td>
            </tr>
            <tr>
                <th style="background-color:#e4e5e6;">
                    مكان الانعقاد
                </th>
                <td style="background-color:#e4e5e6;">
                    {{ $row->place }}
                </td>
            </tr>
            <tr>
                <th style="background-color:#e4e5e6;">
                    نوع التدريب
                </th>
                <td style="background-color:#e4e5e6;">
                    {{ $row->type }}
                </td>
            </tr>
            <tr>
                <th style="background-color:#e4e5e6;">
                    الوحدة
                </th>
                <td style="background-color:#e4e5e6;">
                    {{ $row->unit ?? '' }}
                </td>
            </tr>
            <tr>
                <th style="background-color:#e4e5e6;">
                    الحالة
                </th>
                <td style="background-color:#e4e5e6;">
                    {{ $row->status }}
                </td>
            </tr>
            <tr>
                <th style="background-color:#e4e5e6;">
                    بواسطة
                </th>
                <td style="background-color:#e4e5e6;">
                    {{ $row->user->name ?? '' }}
                </td>
            </tr>
            <tr>
                <th style="background-color:#e4e5e6;">
                    في
                </th>
                <td style="background-color:#e4e5e6;">
                    {{ $row->created_at }}
                </td>
            </tr>
            <tr>
                <th style="background-color:#e4e5e6;">
                    الهدف
                </th>
                <td style="background-color:#e4e5e6;">
                    <pre>{!! $row->goals !!}</pre>
                </td>
            </tr>
        </tbody>
    </table>
{{--    <div>Options: @json($options)</div>--}}
    <br>
    <div class="flex justify-end">
        <button wire:click.prevent="toggleDetail('{{ $id }}')" class="p-2 text-xs bg-red-600 text-white rounded-lg">إغلاق</button>
    </div>
</div>

