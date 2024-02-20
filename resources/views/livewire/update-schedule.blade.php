<div>
    <div class="card">
        <div class="card-header">
             اﻹسبوع ()
        </div>
        <div class="card-body text-center overflow-x-scroll">
            <div class="flex flex-row">
                <div>
                    <div class="flex">
                        <div class="mr-2 bg-gray-400 flex flex-row">
                            <div class="w-12 bg-gray-300 m-1">ت</div>
                            <div class="w-72 bg-gray-300 m-1">المــــــــــــادة</div>
                            <div class="w-52 flex flex-col m-1">
                                <div class="bg-gray-300 m-1">الحصص</div>
                                <div class="grid grid-cols-3 gap-2">
                                    <div class="bg-gray-300">دراسية</div>
                                    <div class="bg-gray-300">إختبار</div>
                                    <div class="bg-gray-300">المجموع</div>
                                </div>
                            </div>
                            <div class="w-12 bg-gray-300 m-1">الوزن</div>
                        </div>
                    </div>
                    @foreach ($lessons_schedule['details'] as $key => $lesson)
                        <div class="flex">
                            <div class="mr-2 bg-gray-400 flex flex-row">
                                <div class="w-12 bg-gray-300 m-1">{{ $loop->index+1 }}</div>
                                <div class="w-72 bg-gray-200 m-1">{{ $lesson['name'] }}</div>
                                <div class="w-52 flex flex-col m-1">
                                    <div class="grid grid-cols-3 gap-2">
                                        <div class="bg-gray-200">{{ $lesson['lessons_hours'] }}</div>
                                        <div class="bg-gray-200">
                                            <input class="w-12 h-6 text-center appearance-none" type="number" @keyup.enter="$wire.sum('{{$key}}')" wire:model="keys.{{$key}}">
                                        </div>
                                        <div class="bg-gray-200">
                                            <span x-text="{{$key}}"></span>
                                            {{-- <input class="w-12 h-6 text-center appearance-none" type="number"  x-text="inputs.{{ $key }}.test" disabled> --}}
                                        </div>
                                    </div>
                                </div>
                                <div class="w-12 bg-gray-200 m-1">
                                   <input class="w-12 h-6 text-center appearance-none" type="number" wire:model="inputs.{{ $key }}.ratio">
                                </div>
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
