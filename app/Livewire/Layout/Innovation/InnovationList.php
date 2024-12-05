<?php

namespace App\Livewire\Layout\Innovation;

use App\Models\Video;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithoutUrlPagination;

class InnovationList extends Component
{
    use WithPagination, WithoutUrlPagination;

    public $search;

    public function render()
    {
        $innovations = Video::where('video_type',1)
        ->where(function($query){
            $query->where('title','LIKE','%'.$this->search.'%')
            ->orWhere('link_type','LIKE','%'.$this->search.'%')
            ->orWhere('department','LIKE','%'.$this->search.'%');
        })
        ->orderBy('id', 'desc')
        ->paginate(5);

        return view('livewire.layout.innovation.innovation-list', compact('innovations'));
    }
}
