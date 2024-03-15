<div>
    <div class="div-search">
        <a href="{{ route('add') }}">Créer une réalisation</a>
        <input class="search-annonce" type="text" wire:model.live="search" placeholder="Rechercher ...">
    </div>
    <table class="table-realisation">
        <thead>
            <th>ID</th>
            <th>Titre</th>
            <th>Sous-titre</th>
            <th>Date de Création</th>
            <th>Date de Modification</th>
            <th></th>
        </thead>
        <tbody class="table-body">
            @forelse($realisations as $realisation)
            <tr>
                <th>{{ $realisation->id }}</th>
                <td><a href="{{ route('realisationEdit', $realisation->id) }}">{{ $realisation->titre }}</a></td>
                <td>{{ $realisation->soustitre }}</td>
                <td class="date">{{ date('d/m/Y', strtotime($realisation->created_at)) }}</td>
                <td class="date">{{ date('d/m/Y', strtotime($realisation->updated_at)) }}</td>
                <td class="edit-supp"><a class="edit-a" href="{{ route('realisationEdit', $realisation->id) }}">Editer</a> <a href="{{ route('delete', $realisation->id) }}">Supprimer</a></td>
            </tr>
            @empty
            <tr>
                <td colspan="10">Aucune réalisation</td>
            </tr>
            @endforelse
        </tbody>
    </table>
    {{ $realisations->links('pagination.pagination') }}
</div>