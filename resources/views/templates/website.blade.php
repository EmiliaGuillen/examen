<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>VeterinariaBlanca</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="/css/materialize.min.css"/> 
        <link rel="stylesheet" href="/css/app.css"/> 
    </head>
    <body  >
        <header>
        <?php $route=Route::current()->uri();?>
            <nav class="pink darken-3">
                <div class="nav-wrapper" >
                      <a href="#" class="brand-logo">Veterinaria Blanca<i class="fa fa-paw" ></i></a>
                      <a href="#" data-activates="mobile-demo" class="button-collapse">
                      
                      <i class="fa fa-bars fa-fw "></i>
                      </a>


                        <ul class="side-nav" id="mobile-demo">
                          <li><a href="/tienda">Tienda</a></li>
                          <li><a href="/carrito">Carrito
                              <i class="fa fa-shopping-cart"></i>
                          </a></li>
                          li><a href="/registro">Registrar</a></li>
                         <li><a href="/acceder">Acceder</a></li>
                          <li><a href="/acerca">Acerca</a></li>
                          <li><a href="/contacto">Contacto</a></li>
                      </ul>
                </div>
            </br>
 
        </header>

           @yield('content')




        
      


        <script src="/js/jquery.min.js"></script>
        <script src="/js/materialize.min.js"></script>
        <script src="/js/app.js"></script>
        
         <script >

 
        
    

    </body>
</html>
