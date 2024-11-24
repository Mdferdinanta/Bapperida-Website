<?php

use App\Livewire\Actions\Logout;
use Livewire\Volt\Component;

new class extends Component {
    /**
     * Log the current user out of the application.
     */
    // public function logout(Logout $logout): void
    // {
    //     $logout();

    //     $this->redirect('/', navigate: true);
    // }
}; ?>

<footer class="bg-white">
    <div class="px-4 py-6 mx-auto max-w-7xl sm:px-6">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Footer') }}
        </h2>
    </div>
</footer>
