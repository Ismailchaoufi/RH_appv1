<!-- resources/views/admin/notifications/show.blade.php -->

@extends('Layouts.layout')

@section('content')
<div class="container">
    <h1>Details of Request</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Date of Creation</th>
                <th>Type of Request</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $demande->created_at->format('d/m/Y H:i') }}</td>
                <td>{{ $demande->typeDemande->type_demande }}</td>
                <td>{{ $demande->statusDemande->status_demande }}</td>
                <td>
                    <!-- Add your action here, e.g., verify the profile -->
                    <a href="{{route('profileadmin.show',$demande->id)}}" class="btn btn-primary">Verify Profile</a>
                </td>
            </tr>
        </tbody>
    </table>
</div>
@endsection
