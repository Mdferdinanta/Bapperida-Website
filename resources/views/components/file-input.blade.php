@props(['disabled' => false])

<input @disabled($disabled)
    {{ $attributes->merge([
        'type' => 'file',
        'class' => 'appearance-none
                    file:mr-4
                    file:px-3
                    file:py-2
                    file:bg-white
                    file:border-mist-300
                    file:rounded-xs
                    file:shadow-sm
                    file:cursor-pointer
                    file:hover:border-primary-600
                    file:active:bg-primary-50',
    ]) }}>
