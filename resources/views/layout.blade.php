<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        @yield('titulo')
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <link rel="stylesheet" type="text/css" href={{asset('/css/bootstrap.min.css')}}>
        @yield('css_styles')
    </head>

    </head>
    <body>
      <main role="main" class="container">
        
           <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
            
                <a class="navbar-brand" href={{route('home-page')}}>Laravel Piloto</a>
                    
           </nav>

        <div class="starter-template" style="margin-top: 55px">
            
            @yield('content')
            
        </div>
        
        <a class="button" href={{url()->previous()}}>
                <i class="fas fa-chevron-left"></i>
                <strong>Regresar</strong>
        </a>
        
      </main>

      
      <script src="https://kit.fontawesome.com/d19c2d179b.js" crossorigin="anonymous"></script>
      
      <style>
       #footer{
           width: 100%;
           bottom: 0;
       }
       body,html{
         height: 100%;
         display:flex;
         flex-direction: column;
       }
       main{
         height: 100%;
         margin-bottom:5em;
       }
      </style>
       <footer id="footer" class="py-2 bg-dark text-white-50">
            <div class="container text-center">
              <small>xDDDDDDDDD</small>
            </div>
       </footer>
    </body>

     
</html>
