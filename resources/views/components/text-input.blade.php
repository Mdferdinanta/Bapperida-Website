@props(['disabled' => false])

<input @disabled($disabled)
    {{ $attributes->merge([
        'type' => 'text',
        'class' => 'border-mist-300
                    rounded-xs shadow-sm
                    focus:border-primary-600
                    focus:ring-1
                    focus:ring-primary-400'
    ]) }}>
