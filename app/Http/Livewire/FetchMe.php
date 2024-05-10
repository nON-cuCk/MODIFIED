<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\FireList;

class FetchMe extends Component
{
    public $fire_list;

    public function mount()
    {
        $this->fire_list = FireList::all();

    }

    public function render()
    {
        return view('livewire.fetch-me');
    }
}
