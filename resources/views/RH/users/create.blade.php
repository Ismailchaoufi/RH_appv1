@extends('layouts.layout')

@section('content')
<div class="container">
    <h1>Ajouter Utilisateur</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('users.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nomFr" class="form-label">Nom</label>
            <input type="text" class="form-control" id="nomFr" name="nomFr" required>
        </div>
        <div class="mb-3">
            <label for="prenomFr" class="form-label">Prénom</label>
            <input type="text" class="form-control" id="prenomFr" name="prenomFr" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="mb-3">
            <label for="id_matricule" class="form-label">Matricule</label>
            <select class="form-control" id="id_matricule" name="id_matricule" >
                @foreach($matricules as $matricule)
                    <option value="{{ $matricule->id }}">{{ $matricule->numero }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="id_grade" class="form-label">Grade</label>
            <select class="form-control" id="id_grade" name="id_grade" >
                @foreach($grades as $grade)
                    <option value="{{ $grade->id }}">{{ $grade->description }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="id_division" class="form-label">Division</label>
            <select class="form-control" id="id_division" name="id_division" >
                @foreach($divisions as $division)
                    <option value="{{ $division->id }}">{{ $division->abbreviation }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="id_service" class="form-label">Service</label>
            <select class="form-control" id="id_service" name="id_service" >
                @foreach($services as $service)
                    <option value="{{ $service->id }}">{{ $service->abbreviation }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary" onclick="return confirm('Êtes-vous sûr de vouloir ajouter cet utilisateur ?')">Ajouter</button>
    </form>
</div>
@endsection
