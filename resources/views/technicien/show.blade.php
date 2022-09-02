@extends('technicien.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="float-start">
                <h2> Votre profil</h2>
            </div>
            <div class="float-end">
                <a class="btn btn-outline-success" href="/technicien_dashboard"> Retour</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Numéro:</strong>
                {{ $user->id }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nom & prénom:</strong>
                {{ $user->name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Email:</strong>
                {{ $user->email }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Numéro de téléphone:</strong>
                {{ $user->phone }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Agence:</strong>
                {{ $user->agency }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Role:</strong>
                {{ $user->role }}
            </div>
        </div>
        <br><br>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <a class="btn btn-outline-primary" href="{{ route('techprofil.edit', $user->id) }}">Modifier votre mot de passe</a> 
            </div> 
           
        </div>
    </div>
@endsection