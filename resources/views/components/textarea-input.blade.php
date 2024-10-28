@props(['disabled' => false])

<textarea @disabled($disabled)
    {{ $attributes->merge([
        'type' => 'text',
        'class' => 'px-4 py-3
                    border border-mist-300
                    rounded-xs shadow-sm
                    focus:border-primary-300
                    focus:ring-primary-300',
    ]) }}></textarea>
