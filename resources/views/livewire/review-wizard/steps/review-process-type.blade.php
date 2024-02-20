<div>
    @include('livewire.review-wizard.navigation')

    <h1>الخطوة 2 من 2</h1>
    <div class="text-xs text-under text-gray-400 cursor-pointer" wire:click="previousStep">➡️ رجوع</div>
    <hr>
    <div>
        {{-- 1 9 10 11 12 --}}
        @if ($processType->id == 1 || $processType->id == 9 || $processType->id == 10 || $processType->id == 11 || $processType->id == 12 || $processType->id == 13 || $processType->id == 14)
            <h1 class="text-center text-xl mt-4">{{ $processType->name ?? '' }}</h1>
        @endif

        @if ($processType->id == 2)
            <h1 class="text-center text-xl mt-4">{{ $processType->name ?? '' }}</h1>

            <div class="mt-4 mt-2">
                <label class="block font-medium text-sm text-gray-700" for="city">
                    إسم المقرر*
                </label>
                <input type="text" name="course_name" wire:model="course_name"
                       class="text-sm sm:text-base pl-2 pr-4 rounded-lg border border-gray-400 w-full py-2 focus:outline-none focus:border-blue-400">
            </div>
            <div class="mt-4">
                <label class="block font-medium text-sm text-gray-700" for="city">
                    رقم المقرر*
                </label>
                <input type="number"  min="0" name="course_code" wire:model="course_code"
                       class="text-sm sm:text-base pl-2 pr-4 rounded-lg border border-gray-400 w-full py-2 focus:outline-none focus:border-blue-400">
            </div>
        @endif

        {{-- الساعات اللامنهجية --}}
        @if ($processType->id == 8)
            <h1 class="text-center text-xl mt-4">{{ $processType->name ?? '' }}</h1>

            @foreach (json_decode($course->extracurricular_hours) as $key => $value)
                @if (($loop->index+3)%3 === 0)
                    <div class="mt-4">
                        @endif
                        <label for="block font-medium text-sm text-gray-700 ml-4">{{ \App\Models\ExtracurricularHour::find($key)->name }}
                            ({{ $value }})</label>
                        <input type="number"  min="0" id="{{ $value }}" wire:model="hours.{{ $key }}" name="hours[{{ $key }}]"
                               class="" value="{{ $value ?? '' }}">
                        {{-- <input type="number" id="{{ $value }}" wire:model="hours[{{ $key }}]" name="hours[{{ $key }}]" class="text-sm sm:text-base pl-2 pr-4 rounded-lg border border-gray-400 w-full py-2 focus:outline-none focus:border-blue-400" value="{{ old($value, isset($course) ? $value : '') || '' }}"> --}}
                        @if (($loop->index+3)%3 === 2 || $loop->last)
                    </div>
                @endif
            @endforeach
        @endif

        {{-- زيادة أو نقصان مدة الدورة  --}}
        @if ($processType->id == 4 || $processType->id == 5)
            <h1 class="text-center text-xl mt-4">{{ $processType->name ?? '' }}</h1>

            <div class="mt-4 mt-2">
                <label class="block font-medium text-sm text-gray-700" for="city">
                    مدة الدورة الحالية [{{ $course->weeks_number }}]
                </label>
                <input type="text" name="weeks_number" wire:model="weeks_number" placeholder="مدة الدورة المقترحة"
                       class="text-sm sm:text-base pl-2 pr-4 rounded-lg border border-gray-400 w-full py-2 focus:outline-none focus:border-blue-400">
            </div>
        @endif

        {{-- زيادة أو نقصان مدة مقرر --}}
        @if ($processType->id == 6 || $processType->id == 7)
            <h1 class="text-center text-xl mt-4">{{ $processType->name ?? '' }}</h1>

            <div class="mt-4">
                <table class="table-auto w-full border border-gray-400" border="2">
                    <thead class="border border-gray-400">
                    <th>المقرر</th>
                    <th>الساعات الحالية</th>
                    <th>الساعات المقترحة</th>
                    </thead>
                    <tbody>
                    @foreach ($course->materials as $material)
                        <tr>
                            <td class="border border-gray-400">{{ $material->name }}</td>
                            <td class="border border-gray-400">{{ $material->lessons_hours }}</td>
                            <td class="border border-gray-400 w-auto">
                                <input type="text" wire:model="lessons_hours.{{ $material->id }}"
                                       placeholder="عدد الساعات المقترحة"
                                       class="text-sm sm:text-base pl-2 pr-4 rounded-lg border border-gray-400 w-60 py-2 focus:outline-none focus:border-blue-400">
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        @endif


        <div class="mt-4">
            <label class="block font-medium text-sm text-gray-700" for="city">
                إرفاق ملف
            </label>
            <input type="file" name="file" wire:model="file"
                   class="text-sm sm:text-base pl-2 pr-4 rounded-lg border border-gray-400 w-full py-2 focus:outline-none focus:border-blue-400">
            @error('file') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div class="mt-4">
            <label class="block font-medium text-sm text-gray-700" for="city">
                تعليق*
            </label>
            <textarea name="note" wire:model="note" rows="8" cols="80"
                      class="text-sm sm:text-base pl-2 pr-4 rounded-lg border border-gray-400 w-full py-2 focus:outline-none focus:border-blue-400"></textarea>
            @error('note') <span class="error text-red-500">{{ $message }}</span> @enderror
        </div>


        <div class="flex items-center mt-4">
            <button type="submit" wire:click="submit"
                    class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                حفظ
            </button>
        </div>
    </div>
</div>
