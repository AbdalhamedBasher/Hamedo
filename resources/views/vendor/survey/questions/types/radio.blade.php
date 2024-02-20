@component('survey::questions.base', compact('question'))
    <div class=" flex justify-around">

    @foreach($question->options as $option)
        <div class="custom-control custom-radio">
            <input type="radio"
                   name="{{ $question->key }}"
                   id="{{ $question->key . '-' . Str::slug($option) }}"
                   value="{{ $option }}"
                   class="custom-control-input"
                    {{ ($value ?? old($question->key)) == $option ? 'checked' : '' }}
                    {{ ($disabled ?? false) ? 'disabled' : '' }}
                required
            >
            <label class="custom-control-label text-2xl"
                   for="{{ $question->key . '-' . Str::slug($option) }}">{{ $option }}
                @if($includeResults ?? false)
                    <span class="text-success">
                    </span>
                @endif
            </label>
        </div>

    @endforeach
                    </div>

@endcomponent
