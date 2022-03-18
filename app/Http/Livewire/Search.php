<?php

namespace App\Http\Livewire;

use App\Models\Scoring;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

class Search extends Component
{
    public $search = '';
    public $scoring = null;
    public $type = 0;

    public function render()
    {
        if (strlen($this->search) > 2) {
            $cities = DB::table('scorings')
                        ->select(['id', 'libcom'])
                        ->where('libcom', 'ILIKE', '%'.$this->search.'%')
                        ->orWhere('libcom', 'ILIKE', '%'.str_replace(' ', '-', $this->search).'%')
                        ->orderBy('libcom')
                        ->distinct('libcom')
                        ->get();

            $departments = DB::table('scorings')
                            ->select(['id', 'libdep'])
                            ->where('libdep', 'ILIKE', '%'.$this->search.'%')
                            ->orWhere('libdep', 'ILIKE', '%'.str_replace(' ', '-', $this->search).'%')
                            ->orderBy('libdep')
                            ->distinct('libdep')
                            ->get()
                            ->take(10);

            $states = DB::table('scorings')
                        ->select(['id', 'libreg'])
                        ->where('libreg', 'ILIKE', '%'.$this->search.'%')
                        ->orWhere('libreg', 'ILIKE', '%'.str_replace(' ', '-', $this->search).'%')
                        ->orderBy('libreg')
                        ->distinct('libreg')
                        ->get()
                        ->take(10);
        } else {
            $cities = collect();
            $departments = collect();
            $states = collect();
            $this->scoring = null;
            $this->type = 0;
        }

        return view('livewire.search', compact('cities', 'departments', 'states'));
    }

    public function scoring(Scoring $scoring, int $type)
    {
        $this->type = $type;
        $this->scoring = $scoring;
    }
}
