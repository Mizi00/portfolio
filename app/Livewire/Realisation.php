<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Realisation as RealisationModel;
use Livewire\WithPagination;

class Realisation extends Component
{
    use WithPagination;
    public $search;
    public function render()
    {
        $realisations = RealisationModel::query()
            ->when($this->search, function($query){
                return $query->where('titre', 'like', "%{$this->search}%");
            })->paginate(10);
        
        return view('livewire.realisation', compact('realisations'));
    }
}
