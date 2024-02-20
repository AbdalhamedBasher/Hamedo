<div>

    <x-modal form-action="create">
        <x-slot name="title">
            {{-- إضافة نشرة للعام [{{ $training_plan_year->name }}] --}}
        </x-slot>

        <x-slot name="content">

            <div class="form-group ">
                <label for="unit">الوحدة</label>
                <select name="unit_id" id="unit" class="form-control select2">
                    @foreach(\App\Models\Unit::all() as $unit)
                        <option value="{{ $unit->id }}">@if($unit->unit_id) &nbsp; &nbsp; &crarr; @endif{{ $unit->name }}</option>
                    @endforeach
                </select>
            </div>


            {{-- <div wire:ignore>
                <select data-pharaonic="select2" data-component-id="{{ $this->id }}" wire:model="country">
                  <option value="EG">Egypt</option>
                  <option value="TW">Taiwan</option>
                </select>
              </div> --}}
        </x-slot>

        <x-slot name="buttons">
            <button type="submit"
                    class="p-3 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                إضافة
            </button>
            {{-- <button type="submit">Start counting</button> --}}
        </x-slot>
    </x-modal>

</div>
