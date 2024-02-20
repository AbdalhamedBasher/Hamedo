<div>
    @include('livewire.review-wizard.navigation')

    <h1>الخطوة 1 من 2</h1>
    <hr>

    @if (auth()->user()->isSuperAdmin() || auth()->user()->isadmin())
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
    @endif

        <div class="mt-4">
            <label class="block font-medium text-sm text-gray-700" for="country">
                نوع المراجعة*
            </label>
            <select wire:model="reviewType" name="country" required class="mt-2 text-sm sm:text-base pl-2 pr-4 rounded-lg border border-gray-400 w-full py-2 focus:outline-none focus:border-blue-400">
                <option value="course">إضافة مراجعة لدورة</option>
                <option value="material">إضافة مراجعة لمقرر</option>
            </select>
        </div>

        <div class="mt-4">
            <label class="block font-medium text-sm text-gray-700" for="city">
                نوع الملاحظة*
            </label>

            <select wire:model="processTypeId" name="processTypeId" class="mt-2 text-sm sm:text-base pl-2 pr-4 rounded-lg border border-gray-400 w-full py-2 focus:outline-none focus:border-blue-400" required>
                @if ($processType)
                    <option value="">-- إختر نوع المعالجة أولا --</option>
                @else
                  <option value="">-- إختر --</option>
                @endif
                @foreach ($processType as $value)
                    <option value="{{ $value->id }}">{{ $value->name }}</option>
                @endforeach
            </select>
        </div>

          @if ($reviewType == 'course')
            @if ($processTypeId != 2)
              <div class="mt-4">
                <label class="block font-medium text-sm text-gray-700" for="course">
                    الدورة*
                </label>

                <select wire:model="courseId" required name="courseId" class="mt-2 text-sm sm:text-base pl-2 pr-4 rounded-lg border border-gray-400 w-full py-2 focus:outline-none focus:border-blue-400">
                      <option value="">-- إختر --</option>
                      @foreach ($courses as $value)
                        <option value="{{ $value->id }}">{{ $value->code }} | {{ $value->name }}</option>
                      @endforeach
                </select>
              </div>
            @else
              {{-- @php
                $courseId = 1;
              @endphp --}}
            @endif
          @endif

          @if ($reviewType == 'material')
            <div class="mt-4">
                <label class="block font-medium text-sm text-gray-700" for="material">
                    المقرر*
                </label>

                <select wire:model="materialId" name="materialId" class="mt-2 text-sm sm:text-base pl-2 pr-4 rounded-lg border border-gray-400 w-full py-2 focus:outline-none focus:border-blue-400">
                      <option value="">-- إختر --</option>
                      @foreach ($materials as $value)
                        <option value="{{ $value['id'] }}">{{ $value['code'] }} | {{ $value['name'] }}</option>
                      @endforeach
                </select>

              </div>
          @endif

        <div class="flex items-center mt-4">
            <button type="submit" wire:click="submit"
                    class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                التالي
            </button>
        </div>

</div>
