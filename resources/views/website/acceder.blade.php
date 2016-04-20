@extends('templates.website')
@section('content')

  <body background="img/back3.jpg"></body>

      <section  id="cuerpo" >

              </section> 

        <section class="container">

              <div class="row">
              	<div class="col s12">
                  <div class="card ">
              		   <div class="card-panel form-acceso" id="cp">
                     @if(Session::has('error'))
                        <p class="error">Usuario no encontrado</p>
                     @endif
                    			<form class="col s12" action="/login" method="POST">
                          {{csrf_field()}}
                        			 <div class="row">
                        				 <div class="input-field col s12">
                        					 <input id="email" type="email" class="validate" name="email">
                    						   <label for="email">Email</label>	
                        				</div>
                        			</div>

                        			<div class="row">
                        				<div class="input-field col s12">
                                    <input id="password" type="password" class="validate" name="password">
                                    <label for="password">Password</label>
                        				</div>
                        			</div>
                        			<div class="row">
                        				<div class="col s12">
                        					<button type="submit" class="waves-effect waves-light btn right">Acceder</button>
                        				</div>
                        			</div>	
                              <div class="row">
                                <div class="col s12">
                                  <a href="/" class="btn waves-effect waves-light" id="regresar">Regresar</a>
                                </div>
                              </div>  
                    			</form>
              			</div>
              	</div>
              </div>
            </div>
              	
        </section>




@stop