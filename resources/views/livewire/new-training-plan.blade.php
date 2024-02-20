<div>
  <x-modal form-action="create">
    <x-slot name="title">
        إضافة نشرة للعام [{{ $training_plan_year->name }}]
    </x-slot>

    <x-slot name="content">
      <div class="mt-4">
        <label class="block font-medium text-sm text-gray-700" for="country">
          الوحدة *
        </label>
        <select wire:model="unitId" name="unitId" class="mt-2 text-sm sm:text-base pl-2 pr-4 rounded-lg border border-gray-400 w-full py-2 focus:outline-none focus:border-blue-400">
          <option selected disabled>-- إختر --</option>
          @foreach ($units as $unit)
            <option value="{{ $unit->id }}">@if($unit->unit_id) &nbsp; &nbsp; &crarr; @endif{{ $unit->name }}</option>
          @endforeach
        </select>
      </div>
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
