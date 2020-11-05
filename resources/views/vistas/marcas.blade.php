@extends('welcome')
@section('contenido')


        
<form class="  border p-3 form "method="POST"  action="/marcas">

    <div class="jumbotron abs-center">
    @csrf
    <div class="form-group active ">
        <div class="content text-center"> 
            <h5>Registrar Marca</h5>
        </div>
        <label for="nombre">Nombre</label>
        <input type="text" class="form-control" name="nombre" id="nombre" aria-describedby="emailHelp">
        <small id="emailHelp" class="form-text text-muted">Solo se permiten texto</small>
    </div>
   <button  type="submit" class="btn btn-primary btn-block">Agreagar</button>


</div>
</form>
@endsection
    

