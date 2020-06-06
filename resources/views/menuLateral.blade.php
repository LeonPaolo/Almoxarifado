<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                   
                    <a class="nav-link text-white" href="">
                        <div class="sb-nav-link-icon text-white"><i class="fas fa-tachometer-alt text-primary"></i></div>
                        Dashboard
                    </a>
                    <div class="sb-sidenav-menu-heading text-white">Menu principal</div>

                    <a class="nav-link collapsed text-white" href="{{ route('Almoxarifado.create') }}" aria-expanded="false" aria-controls="collapseLayouts">
                        <div class="sb-nav-link-icon text-white"><i class="fas fa-plus text-primary"></i></div>
                        Emprestar                        
                    </a>                  

                    <a class="nav-link collapsed text-white" href="{{ route('Almoxarifado.Devolvidos') }}" aria-expanded="false" aria-controls="collapsePages">
                        <div class="sb-nav-link-icon text-white"><i class="fas fa-check text-primary "></i></div>
                        Listar devolvidos                     
                    </a>  
                </div>
            </div>
            <div class="sb-sidenav-footer text-white font-weight-normal ">
                <div class="small text-primary ">Usuário:</div>
                 @php
                    $nome =  Auth::user()->name;
                    $partes = explode(" ", $nome);  
                    echo $partes[0]. ' '. end($partes);
                @endphp
            </div>
        </nav>
    </div>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid">                               
                <!-- aqui vem o conteúdo -->
                
            
      <script type="text/javascript" wb-number="5596981198777" wb-message="WhatsAppWeb" src="https://lucianobragaweb.github.io/whatsapp-button/whatsapp.js"></script>
        

