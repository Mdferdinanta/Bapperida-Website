@props(['disabled' => false])

<input @disabled($disabled)
    {{ $attributes->merge([
        'type' => 'submit',
        'class' => 'bg-mist-50 px-4 border border-mist-200 rounded-xs shadow-sm',
    ]) }}>
