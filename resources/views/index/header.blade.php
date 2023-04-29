<header class="bg-gco-dark" id="Inicio" styles="z-index:99;">
    <nav class="navbar py-2 navbar-expand-lg navcolor navbar-dark" id="mainNav">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-sm-12">
                    <a href="/" class="navbar-brand"><img src="{{ url('staticimg/Logo-s-a.png') }}" id="imglogo" class="p-2 w-60" alt="" srcset=""></a>
                </div>
            <button class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#Cmenu"
            aria-controls="Cmenu"
            aria-expanded="false"
            aria-label="Mostrar/Ocultar Navegación"
            >
            <span class="navbar-toggler-icon"></span>
            </button>
        <div class="col-8 d-flex">
        <div class="collapse navbar-collapse" id="Cmenu">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item"><a href="/#Inicio" class="nav-link rounded-1 text-white">Inicio</a></li>
                <li class="nav-item"><a href="/#Nosotros" class="nav-link rounded-1 text-white">Nosotros</a></li>
                <li class="nav-item"><a href="/#Servicios" class="nav-link rounded-1 text-white">Servicios</a></li>
                <li class="nav-item dropdown">
                    <div class="btn-group">
                        <a href="/#Cirugias" class="nav-link text-white">Cirugias</a>
                        <a href="#" class="nav-link dropdown-toggle dropdown-toggle-split text-white"
                        id="viajes" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false"><span class="visually-hidden" >Toggle Dropdown</span></a>
                        <ul class="dropdown-menu dropdown-menu-dark dropdown-menu-end">
                            <li><p class="dropdown-item disabled">Conoce nuestras cirugías</p></li>
                            <li><hr class="dropdown-divider"></li>
                            @foreach ($cirugiasquery as $i)
                            <li><a class="dropdown-item" href="cirugias/{{$i->url}}">- {!!$i->titulo!!}</a></li>
                          @endforeach
                        </ul>
                      </div>
                </li>
                <li class="nav-item dropdown">
                    <div class="btn-group">
                        <a href="/#Padecimientos" class="nav-link text-white">Padecimientos</a>
                        <a href="#" class="nav-link dropdown-toggle dropdown-toggle-split text-white"
                        id="viajes" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false"><span class="visually-hidden" >Toggle Dropdown</span></a>
                        <ul class="dropdown-menu dropdown-menu-dark dropdown-menu-start">
                            <li><p class="dropdown-item disabled">Conoce los padecimientos:</p></li>
                            <li><hr class="dropdown-divider"></li>
                          @foreach ($padquery as $i)
                            <li><a class="dropdown-item" href="padecimientos/{{$i->url}}">- {!!$i->titulo!!}</a></li>
                          @endforeach
                        </ul>
                      </div>
                </li>
                <li class="nav-item"><a href="/#Equipo" class="nav-link rounded-1 text-white">Equipo</a></li>
                <!--li class="nav-item"><a href="#Cirugias" class="nav-link rounded-1 text-white">Cirugias</a></li-->
                <li class="nav-item me-5"><a href="/#contacto" class="nav-link rounded-1 text-white">Contacto</a></li>
            </ul>
        </div>
        </div>
        </div>
        </div>
    </nav>
</header>