@extends('user.layout')
@section('content')

<body>
    <section class="container">
        <h3 class="pt-4 pb-2"></h3>
<div class="col-sm-4">
    <form action="{{ route('userservice.store') }}" method="POST">
        @csrf
                    <div class="row form-group">
                        <div class='input-group date' id='datetimepicker1'>
                            <input type='text' class="form-control" name="date_appo"/>
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>   
                    </div>    
                   
                    <!--<div class="dropdown ">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
                          Services
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>-->
        <input type="submit" class="btn btn-success">
		<a href="/dashboard" class="btn btn-warning">Retour</a>
    </form>      
 </div>
           
       
    </section>

    <script type="text/javascript">
        $(function () {
            $('#datetimepicker1').datetimepicker();
        });
     </script>


@endsection
