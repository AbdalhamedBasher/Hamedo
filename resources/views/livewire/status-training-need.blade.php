<div class="m-2">
    <div class="font-semibold font-gray-700 text-lg">{{ $confirmationTitle }}</div>
    <hr>
    <div class="py-2">
        <tr>
            <th style="background-color:#e4e5e6;">
                مسمى الدورة:
            </th>
            <td style="background-color:#e4e5e6;">
                {{ $training_need->name }}
            </td>
        </tr>
        <tr>
            <td style="background-color:#fff;">
                <select wire:model="status" name="status" class="mt-2 text-sm sm:text-base pl-2 pr-4 rounded-lg border border-gray-400 w-full py-2 focus:outline-none focus:border-blue-400">
                    <option selected disabled>-- إختر --</option>
                    <option value="انتظار">انتظار </option>
                    <option value="مقبول">مقبول</option>
                    <option value="مرفوض">مرفوض</option>
                </select>
            </td>
        </tr>
{{--        <div class="p-2 bg-white border border-slate-200"--}}
{{--            <table class="table-bordered ">--}}
{{--                <tbody>--}}
{{--                <tr>--}}
{{--                    <th style="background-color:#e4e5e6;">--}}
{{--                        مسمى الدورة:--}}
{{--                    </th>--}}
{{--                    <td style="background-color:#e4e5e6;">--}}
{{--                        {{ $training_need->name }}--}}
{{--                    </td>--}}
{{--                </tr>--}}
{{--                --}}
{{--                </tbody>--}}
{{--            </table>--}}
{{--            <br>--}}
{{--        </div>--}}
        <div class="font-normal text-gray-600">{{ $confirmationDescription }}</div>
        <div class="space-x-2 flex justify-end mt-3">
            <button class="bg-gray-200 cursor-pointer text-black border border-gray-400 p-2 m-1 text-sm"
                    wire:click="cancel">
                تراجع
            </button>
            <button class="bg-red-500 cursor-pointer text-white p-2 m-1 text-sm"
                    wire:click="confirm">
                حفظ
            </button>
        </div>
    </div>

</div>
