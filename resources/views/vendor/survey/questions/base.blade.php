<div class="form-group">
    @php
        $i=0;
    @endphp
    <label style="" class="mb-3 text-2xl" for="{{ $question->key }}">{{ $question->content }}</label>
    {{ $slot }}
    @if($errors->has($question->key))
        <div class="text-danger mt-3">{{ $errors->first($question->key) }}</div>
    @endif
</div>

<div class="text-success">
    {{ $report ?? '' }}
</div>
