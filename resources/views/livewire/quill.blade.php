<div wire:ignore>
    <!-- Create the editor container -->
    <div id="{{ $quillId }}"></div>

    <!-- Initialize Quill editor -->
    {{-- <script>
        const quill = new Quill('#{{ $quillId }}', {
            theme: 'snow'
        });

        quill.on('text-change', function() {
            let value = document.getElementsByClassName('ql-editor')[0].innerHTML;
            @this.set('value', value)
        })
    </script> --}}

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const quill = new Quill('#{{ $quillId }}', {
                theme: 'snow'
            });

            quill.on('text-change', function() {
                let value = quill.root.innerHTML; // Get content of this editor
                @this.set('value', value);
            });

            // Set the initial value of the editor
            quill.root.innerHTML = @this.get('value');
        });
    </script>
</div>
