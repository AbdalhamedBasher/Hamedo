<div class="p-3">
    <div class="font-semibold font-gray-700 text-lg">{{ $confirmationTitle }}</div>

    <div class="py-2">
        @if($materialId)
            المقرر: {{ $material->name }}
        @endif
        @if($materialIds)
            MaterialIds: @json($materialIds)
        @endif
        <div class="font-normal text-gray-600">{{ $confirmationDescription }}</div>
        <div class="space-x-2 flex justify-end mt-3">
            <button class="bg-gray-200 cursor-pointer text-black border border-gray-400 p-2 m-1 text-sm"
                    wire:click="cancel">
                تراجع
            </button>
            <button class="bg-red-500 cursor-pointer text-white p-2 m-1 text-sm"
                    wire:click="confirm">
                حذف
            </button>
        </div>
    </div>

</div>
