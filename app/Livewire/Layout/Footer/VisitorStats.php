<?php

namespace App\Livewire\Layout\Footer;

use Carbon\Carbon;
use Livewire\Component;
use App\Models\WebVisitor;

class VisitorStats extends Component
{
    public $todayCount;
    public $monthCount;
    public $yearCount;
    public $totalCount;

    public function mount()
    {
        $this->updateStats();
    }

    public function updateStats()
    {
        $this->todayCount = WebVisitor::whereDate('visit_date', Carbon::today())->count();
        $this->monthCount = WebVisitor::whereMonth('visit_date', Carbon::now()->month)->count();
        $this->yearCount = WebVisitor::whereYear('visit_date', Carbon::now()->year)->count();
        $this->totalCount = WebVisitor::count();
    }

    public function render()
    {
        return view('livewire.layout.footer.visitor-stats');
    }
}
