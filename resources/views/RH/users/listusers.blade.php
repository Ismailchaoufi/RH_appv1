@extends('layouts.layout')

@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-header card-header-primary">
            <h4 class="card-title">Liste des Utilisateurs</h4>
            <p class="card-category">Voici la liste des utilisateurs enregistrés.</p>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead class="text-primary">
                        <th>ID</th>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Email</th>
                        <th>Matricule</th>
                        <th>Grade</th>
                        <th>Division</th>
                        <th>Service</th>
                        <th>Action</th>
                    </thead>
                    <tbody >
                        @foreach($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->nomFr }}</td>
                            <td>{{ $user->prenomFr }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                @if ($user->matricule)
                                        {{ $user->matricule->numero }}
                                @else
                                        N/A
                                @endif
                            </td>
                            <td>
                                @if ($user->grade)
                                        {{ $user->grade->description }}
                                @else
                                        N/A
                                @endif
                            </td>
                            <td>
                                @if ($user->division)
                                        {{ $user->division->abbreviation }}
                                @else
                                        N/A
                                @endif
                            </td>
                            <td>
                                @if ($user->service)
                                        {{ $user->service->abbreviation }}
                                @else
                                        N/A
                                @endif
                            </td>
                            
                            
                            <td>
                                <a href="{{ route('users.show', $user->id) }}" class="btn btn-info btn-sm">Voir</a>
                                <a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning btn-sm">Modifier</a>
                                <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display: inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?')">Supprimer</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
