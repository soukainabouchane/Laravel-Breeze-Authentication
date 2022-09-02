@extends('technicien.layout')
@section('content')

@section('content')
     @if (count($errors))
      @foreach ($errors->all() as $error)
        <p class="alert alert-danger">{{$error}}</p>
      @endforeach
     @endif    
        <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="{{ route('techprofil.update',[$user->id,$user->slug]) }}" method="post">
           @csrf
           @method('PATCH')

                   
                      <div class="form-group">
                          <input type="password" id="first-name" class="form-control col-md-7 col-xs-12"  placeholder="Enter l'ancien mot de passe" name="generated_password"> 
                      </div>

                      <div class="form-group">
                          <input type="password" id="first-name" placeholder="Entrer le nouveau mot de passe" class="form-control col-md-7 col-xs-12" name="password"> 
                      </div>

                      <!-- <div class="form-group">
                          <input type="password" id="first-name"  class="form-control col-md-7 col-xs-12"placeholder="Enter password confirmation"  name="password_confirmation"> 
                      </div> -->

                      
		             

                      <button type="submit" class="btn btn-success">Modifier</button>
                      <a href="{{ route('techprofil.index') }}" class="btn btn-warning">Retour</a>
                     
                    </form>    


@endsection
