@extends('templates.website')
@section('content')

  <body background="img/back3.jpg"></body>

      <section  id="cuerpo" >

              </section> 

        <section class="container">

        <form action="/formas" method="post" >
        <h2 class="brand-logo"> <font color="white">Registra mascota</font></h2>
        
        <legend class="indigo-text">Nombre:</legend>
        <input type="text" name="nombre" id="nombre"placeholder="Nombre" required></input><br/>
        <legend class="indigo-text">Edad:</legend>
        <input type="number" name="edad" id="edad" placeholder="Edad" required></input><br/>
        <legend class="indigo-text">Tipo:</legend>
        <input type="text" name="tipo" id="password" placeholder="Tipo" required></input><br/>
        <legend class="indigo-text">Color:</legend>
        <input type="text" name="color" id="password" placeholder="Color" required></input><br/>
        <br>
        <button class="btn waves-effect waves-light red darken-4 right" type="submit" value="registrarmas">Registrar</button>
      </form>
      <a href="/" class="btn waves-effect waves-light" id="regresar">Regresar</a> 
      <br>
     

              	
        </section>

        



@stop
