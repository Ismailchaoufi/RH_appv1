@extends('layouts.layout')

@section('content')
<div class="container">
    <h1>Liste des demandes</h1>
    
    <form method="GET" action="{{ route('demandes.index') }}" id="filterForm">
        <div class="form-group">
            <label for="type_demande">Filtrer par type de demande:</label>
            <select id="type_demande" name="type_demande" class="form-control" onchange="document.getElementById('filterForm').submit();">
                <option value="">Tous</option>
                @foreach($typeDemandes as $type)
                    <option value="{{ $type->id }}" {{ $typeDemandeId == $type->id ? 'selected' : '' }}>{{ $type->type_demande }}</option>
                @endforeach
            </select>
        </div>
    </form>
    
    <table class="table mt-3">
        <thead>
            <tr>
                <th>Date de création</th>
                <th>Type de demande</th>
                <th>Status</th>
                <th>Date de début</th>
                <th>Nombre de jours</th>
                <th>Date de fin</th>
            </tr>
        </thead>
        <tbody>
            @foreach($demandes as $demande)
                <tr>
                    <td>{{ $demande->created_at->format('Y-m-d') }}</td>
                    <td>{{ $demande->typeDemande->type_demande }}</td>
                    <td>{{ $demande->statusDemande->status_demande }}</td>
                    <td>
                        @if($demande->id_typeDemande == 3)
                            {{ $demande->date_debut ? $demande->date_debut->format('Y-m-d') : 'N/A' }}
                        @else
                            N/A
                        @endif
                    </td>
                    <td>
                        @if($demande->id_typeDemande == 3)
                            {{ $demande->nbr_jours ?? 'N/A' }}
                        @else
                            N/A
                        @endif
                    </td>
                    <td>
                        @if($demande->id_typeDemande == 3)
                            {{ $demande->date_fin ? $demande->date_fin->format('Y-m-d') : 'N/A' }}
                        @else
                            N/A
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
