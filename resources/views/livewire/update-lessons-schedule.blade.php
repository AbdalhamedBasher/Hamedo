<div>
    <div class="card">
        <div class="card-header">
             اﻹسبوع ({{ $lessons_schedule_detail['week'] }})
        </div>
        <div class="card-body text-center overflow-x-scroll">
            <div class="flex flex-row">
                <div>
                    <div class="flex">
                        <div class="mr-2 bg-gray-400 flex flex-row">
                            <div class="w-12 bg-gray-300 m-1">ت</div>
                            <div class="w-72 bg-gray-300 m-1">المــــــــــــادة</div>
                            <div class="w-16 bg-gray-300 m-1">الساعات</div>
                            <div class="w-24 bg-gray-300 m-1">-</div>
                        </div>
                    </div>
                    @foreach ($lessons_schedule_detail['data'] as $key => $value)

                        <div class="flex">
                            <div class="mr-2 bg-gray-400 flex flex-row">
                                @php
                                    $this->inputs[$key]['sort'] = $key+1;
                                    $this->inputs[$key]['week_namber'] = $value['week_namber'];
                                    $this->inputs[$key]['name'] = $value['name'];
                                @endphp
                                <div class="w-12 bg-gray-300 m-1">
                                    {{ $key+1 }}
                                </div>
                                <div class="w-72 bg-gray-200 m-1">{{ $value['name'] }}</div>
                                <div class="w-16 bg-gray-200 m-1">
                                    <input class="w-12 h-6 text-center appearance-none" type="number" wire:model="inputs.{{ $key }}.value">
                                </div>
                                <div class="w-24 bg-gray-200 m-1">
                                    <select class="w-24 appearance-none text-center" wire:model="inputs.{{ $key }}.extracurricular_hour">
                                        <option value="None" @if ($value['extracurricular_hour'] = "None") selected @endif>-- إختر --</option>
                                        <option value="1" @if ($value['extracurricular_hour'] = "1") selected @endif>يوم الطالب</option>
                                        <option value="2" @if ($value['extracurricular_hour'] = "2") selected @endif>اليوم الوطني</option>
                                        <option value="3" @if ($value['extracurricular_hour'] = "3") selected @endif>افتتاح الدورة</option>
                                        <option value="4" @if ($value['extracurricular_hour'] = "4") selected @endif>اختبار</option>
                                        <option value="5" @if ($value['extracurricular_hour'] = "5") selected @endif>اجراءات التخرج</option>
                                        <option value="6" @if ($value['extracurricular_hour'] = "6") selected @endif>اجراءات منتصف الدورة</option>
                                    </select>
                                </div>
                                {{-- {{ $inputs[$key]['extracurricular_hour'] }} --}}
                            </div>
                        </div>
                    @endforeach


                </div>

            </div>
        </div>
    </div>
    <button class="bg-gray-200 cursor-pointer text-black border border-gray-400 p-2 m-1 text-sm"
    wire:click.prevent="store()">
        تحديث
    </button>
</div>
