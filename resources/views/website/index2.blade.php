@extends('templates.website')
@section('content')

              <section class="container"  >

              </section> 

              <section id="section2" class="container">
                  <div class="row">
                    <div class="col s12 l4">
                      <center>
                        <i class="fa fa-user fa-5x"></i>
                        <form action="/registro" method="get" >
                          <button class="btn waves-effect waves-light red darken-4" type="submit" value="registrar">Registrar Usuario</button>
                        </form>
                        </center>
                      </div>
                    <div class="col s12 l4">
                      <center>
                        <i class="fa fa-sign-in fa-5x"></i>
                        <form action="/acceder" method="get" >
                          <button class="btn waves-effect waves-light red darken-4" type="submit" value="registrar">Iniciar sesion</button>
                        </form>
                      </center>
                    </div>
                  </div>
              </section>
@stop

