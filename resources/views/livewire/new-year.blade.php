<div>
  <x-modal form-action="create">
    <x-slot name="title">
        إضافة عام
        {{-- <button class="float-right" wire:click="$emit('closeModal')">x</button> --}}
    </x-slot>

    <x-slot name="content">
      <div class="my-8">
          <label class="block font-medium text-sm text-gray-700" for="city">
               العام التدريبي*
          </label>
          <div class="flex">
            <input autofocus type="text" name="year_name_from" placeholder="من" wire:model="year_name_from" class="text-sm sm:text-base pl-2 pr-4 rounded-lg border border-gray-400 w-full py-2 mx-2 focus:outline-none focus:border-blue-400" required>
            <i class="fa fas fa-minus nav-icon mx-2 pt-3"></i>
            <input type="text" name="year_name_to" placeholder="إلى" wire:model="year_name_to" class="text-sm sm:text-base pl-2 pr-4 rounded-lg border border-gray-400 w-full py-2 mx-2 focus:outline-none focus:border-blue-400" required>
          </div>
      </div>
    </x-slot>

    <x-slot name="buttons">
      <button type="submit"
      class="p-3 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
      حفظ
    </button>
        {{-- <button type="submit">Start counting</button> --}}
    </x-slot>
</x-modal>
</div>
