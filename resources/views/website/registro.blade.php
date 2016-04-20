@extends('templates.website')
@section('content')

  <body background="img/back3.jpg"></body>

      <section  id="cuerpo" >

              </section> 

        <section class="container">

        <form action="/form" method="post" >
        <h2 class="brand-logo"> <font color="white">Registrate</font></h2>
        
        <legend class="indigo-text">Nombre:</legend>
        <input type="text" name="nombre" id="nombre"placeholder="Nombre" required></input><br/>
        <legend class="indigo-text">Email:</legend>
        <input type="email" name="email" id="email" placeholder="Correo" required></input><br/>
        <legend class="indigo-text">Contraseña:</legend>
        <input type="password" name="password" id="password" placeholder="Contraseña" required></input><br/>
        <br>
        <button class="btn waves-effect waves-light red darken-4 right" type="submit" value="registrar">Registrar</button>
      </form>
      <a href="/" class="btn waves-effect waves-light" id="regresar">Regresar</a> 
      <br>
     

              	
        </section>

        



@stop