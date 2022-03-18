<?php

namespace App\Http\Livewire;

use App\Models\Scoring;
use LivewireUI\Modal\ModalComponent;

class ShowCity extends ModalComponent
{
    public Scoring $city;

    public function mount(int $id)
    {
        $this->city = Scoring::find($id);
    }

    public function render()
    {
        return view('livewire.show-city');
    }
}
