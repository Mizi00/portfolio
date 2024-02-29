<div>
    <div class="div-search">
        <input class="search-annonce" type="text" wire:model.live="search" placeholder="Rechercher ...">
    </div>
    <table class="table-realisation">
        <thead>
            <th>ID</th>
            <th>Titre</th>
            <th>Description</th>
            <th>id competence</th>
        </thead>
        <tbody class="table-body">
            @forelse($realisations as $realisation)
            <tr>
                <th>{{ $realisation->id }}</th>
                <td>{{ $realisation->titre }}</td>
                <td>{{ $realisation->description }}</td>
                <td>{{ $realisation->recupCompetence()?->id }}</td>
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