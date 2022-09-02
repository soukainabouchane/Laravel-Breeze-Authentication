@extends('admin.layout')
@section('content')


<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="float-start">
            
            <a class="btn btn-outline-success" href="{{ route('admin_dashboard') }}"><i style="color:black !important;"class="fa-solid fa-grid-horizontal">Dashboard</i></a>
        </div>                                                                               
        <div class="float-end">
            <a class="btn btn-outline-success" href="{{ route('gestperso.create') }}"><i style="color:black !important;"class="fa-solid fa-add"></i></a>
        </div>
    </div>
</div>

    
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <br>

    
   
    <table class="table table-bordered">
        <tr>
            <th>Numéro</th>
            <th>Nom & Prénom</th>
            <th>Email</th>
            <th>Numéro de Telephone</th>
            <th>Agence</th>
            <th>Role</th>
            <th width="280px">Action</th>
        </tr>
        
        
        @foreach ($users as $user)
        @if ($user->role == 'technicien')
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->phone }}</td>
            <td>{{ $user->agency }}</td>
            <td>{{ $user->role }}</td>

            <td>
                

                <form action="{{ route('gestperso.destroy',$user->id) }}" method="POST">
   
                    <a class="btn btn-outline-primary" href="{{ route('gestperso.show',$user->id) }}"><i style="font-size:20px; color:black !important;"class="fa-solid fa-eye"></i></a>
                    <a class="btn btn-outline-success" href="{{ route('gestperso.edit',$user->id) }}"><i style=" font-size:20px; color:black !important;"class="fa-solid fa-edit"></i></a>

                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-outline-danger"><i style=" font-size:20px; color:black !important;"class="fa-solid fa-trash"></i></button>
                </form>

                
            </td>
  
        </tr>
        @endif  
        @endforeach
       
    </table>
    <div class="d-flex justify-content-center pagination-lg">
    {!! $users->links('pagination::bootstrap-4') !!}
    </div>
@endsection