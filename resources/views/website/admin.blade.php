@extends('templates.website')
@section('content')

  <body background="img/back3.jpg"></body>

      <section  id="cuerpo" >

       <section class="container">

              <div class="row">
                <div class="col s6">
                  <div class="card ">
                     <div class="card-panel " id="acp">
                          <form class="col s6" action="/login" method="POST">
                          {{csrf_field()}}
                            <div class="card-image">
                              <img src="img/1.jpg">
                                <span class="card-title ">Card Title</span>
                           </div>
                              <div class="row">
                                <div class="col s6">
                                  <button id="tb" type="submit" class="waves-effect waves-light btn right">Acceder</button>
                                </div>
                              </div>  
                          </form>
                    </div>
                </div>
              </div>
              <div class="col s6">
                  <div class="card ">
                     <div class="card-panel " id="acp">
                          <form class="col s6" action="/login" method="POST">
                          {{csrf_field()}}
                              <div class="card-image">
                              <img id="i2" src="img/2.jpg">
                                <span class="card-title ">Card Title</span>
                           </div>
                              <div class="row">
                                <div class="col s6">
                                  <button id="tb2" type="submit" class="waves-effect waves-light btn right">Acceder</button>
                                </div>
                              </div> 
                               
                          </form>
                    </div>
                </div>
              </div>
            </div>

                          <div class="row">
                <div class="col s6">
                  <div class="card ">
                     <div class="card-panel " id="acp">
                          <form class="col s6" action="/login" method="POST">
                          {{csrf_field()}}
                            <div class="card-image">
                              <img src="img/3.jpg">
                                <span class="card-title ">Card Title</span>
                           </div>
                              <div class="row">
                                <div class="col s6">
                                  <button id="tb3" type="submit" class="waves-effect waves-light btn right">Acceder</button>
                                </div>
                              </div>  
                          </form>
                    </div>
                </div>
              </div>
              <div class="col s6">
                  <div class="card ">
                     <div class="card-panel" id="acp">
                          <form class="col s6" action="/login" method="POST">
                          {{csrf_field()}} 
                              <div class="card-image">
                              <img src="img/4.jpg" width="100" height="170" id="i3">
                                <span class="card-title ">Card Title</span>
                           </div>
                              <div class="row">
                                <div class="col s6">
                                  <button id="tb4" type="submit" class="waves-effect waves-light btn right">Acceder</button>
                                </div>
                              </div>  
                          </form>
                    </div>
                </div>
              </div>
            </div>
                
        </section>




@stop