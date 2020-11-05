@extends('welcome')
@section('contenido')


        
<form class="border p-3 form "method="get"  action="/vehiculos">


<div class="jumbotron text-center ">
    <div class="abs-center">
    @csrf
    <label> 
        <h1 >Hola</h1>
        <h5>Elaborado por: Seyling Romero diaz</h5>
        
    </label>

   <button type="submit"   class="btn btn-success">INICIAR</button>

</div>
</div>
</form>
@endsection
    

