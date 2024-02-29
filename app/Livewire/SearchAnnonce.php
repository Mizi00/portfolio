<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Realisation;
use Livewire\WithPagination;

class SearchAnnonce extends Component
{
    use WithPagination;
    public $search;
    public function render()
    {
        $realisations = $realisations = Realisation::query()
            ->when($this->search, function ($query) {
                return $query->where('titre', 'like', "%{$this->search}%");
            })->paginate(12);
        return view('livewire.search-annonce', compact('annonces'));
    }
}
