<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        {{-- <meta name="csrf-token" content="{{ csrf_token() }}"> --}}
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="sistema de almoxarifado para Av3" />
        <meta name="author" content="Valéria Campaner e Leon Paolo" />
        <title>Almoxarifado - Admin</title>        
             
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('whatsappButton/style.css') }}" rel="stylesheet">
        
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
       
    </head>
    <body class="sb-nav-fixed"  style="background-color: white; 
              background-image: linear-gradient(to right, white , #ccccff);">       
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
          <div class="container">  
            <a class="navbar-brand" href="#">Almoxarifado</a>  
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
            
                <div class="collapse navbar-collapse" id="navbarSupportedContent">                    
                    <ul class="navbar-nav mr-auto">
                        <li>
                           @auth
                                <a class="nav-link text-white" href="{{ route('home') }}">Início</a>
                           @endauth
                        </li>
                    </ul>
                   
                    <ul class="navbar-nav ml-auto">                   
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">Entrar</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">Cadastre-se</a>
                                </li>
                            @endif
                        @else                          
                            
                            <li class="nav-item">                    
                                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                        @csrf
                                        <button class="nav-link btn btn-default text-white" type="submit" class="">{{ __('Sair') }}</button>  
                                </form>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <div class="py-4">
            @yield('content')

        </div>
        </main>  
              
    </div>
</div>

</div>

<script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

<script src="{{asset('js/scripts.js')}}"></script>      
<script src="{{asset('whatsappButton/whatsapp.js')}}"></script>      
       

</body>
</html>
        
          
           
       
        
  

