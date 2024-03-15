<div>
    <div class="div-search">
        <a href="{{ route('add') }}">Créer une réalisation</a>
        <input class="search-annonce" type="text" wire:model.live="search" placeholder="Rechercher ...">
    </div>
    <table class="table-realisation">
        <thead>
            <th>ID</th>
            <th>Titre</th>
            <th>Description</th>
            <th></th>
        </thead>
        <tbody class="table-body">
            @forelse($realisations as $realisation)
            <tr>
                <th>{{ $realisation->id }}</th>
                <td>{{ $realisation->titre }}</td>
                <td>{{ Str::limit(strip_tags($realisation->description), 100) }}</td>
                <td><a href="{{ route('realisationEdit', $realisation->id) }}">Editer</a></td>
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