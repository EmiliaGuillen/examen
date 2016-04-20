@extends('templates.administrador')

@section('content')

              <section class="container"  >

              </section> 

              <section id="section2" class="container">
                  <div class="row">
                    <div class="col s12 l4">
                      <center>
                        <i class="fa fa-user fa-5x"></i>
                        <form action="/registromas" method="get" >
                          <button class="btn waves-effect waves-light red darken-4" type="submit" value="registrarmas">Registrar-Mascota</button>
                        </form>
                        </center>
                      </div>
                    <div class="col s12 l4">
                      <center>
                        <i class="fa fa-sign-in fa-5x"></i>
                        <a href="/" class="btn waves-effect waves-light" id="regresar">Regresar </a>
                      </center>
                    </div>
                  </div>
              </section>
@stop

