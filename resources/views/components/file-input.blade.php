@props(['disabled' => false])

<input @disabled($disabled)
    {{ $attributes->merge([
        'type' => 'file',
        'class' => 'appearance-none
                    file:px-4
                    file:py-2
                    file:bg-white
                    file:border-2
                    file:border-mist-300
                    file:rounded-xs
                    file:shadow-sm
                    file:hover:border-primary-500
                    file:active:bg-primary-50
    ']) }}>
