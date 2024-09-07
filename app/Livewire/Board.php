<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Layout;
use App\View\Components\KanbanLayout;

class Board extends Component
{
    #[Layout(KanbanLayout::class)]
    public function render()
    {
        return view('livewire.board');
    }
}
