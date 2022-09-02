@extends('admin.layout')
@section('content')
<div class="row m-3">
	<form method="post" action="{{ route('gestperso.update', $user->id) }}">
		@csrf
		@method('PATCH')

        <div class="mb-3">
			<label class="form-label" for="name">Numéro</label>
			<input type="text" name="name" value="{{ $user->id }}" class="form-control" disabled="disabled">
		</div>

		<div class="mb-3">
			<label class="form-label" for="name">Nom & Prénom</label>
			<input type="text" name="name" value="{{ $user->name }}" class="form-control">
		</div>

		<div class="mb-3">
			<label class="form-label" for="email">Email</label>
			<input type="text" name="email" value="{{ $user->email }}" class="form-control">
			@error('email')
				<div class="alert alert-danger">{{ $message }}</div>
			@enderror
		</div>

        <div class="mb-3">
			<label class="form-label" for="phone">Numéro de téléphone</label>
			<input type="text" name="phone" value="{{ $user->phone }}" class="form-control">
			@error('phone')
				<div class="alert alert-danger">{{ $message }}</div>
			@enderror
		</div>

        <div class="mb-3">
			<label class="form-label" for="agence">Agence</label>
			<input type="text" name="agency" value="{{ $user->agency }}" class="form-control">
			@error('agency')
				<div class="alert alert-danger">{{ $message }}</div>
			@enderror
		</div>
		<input type="submit" class="btn btn-success">
		<a href="{{ route('gestperso.index') }}" class="btn btn-warning">Retour</a>
	</form>
</div>
@endsection