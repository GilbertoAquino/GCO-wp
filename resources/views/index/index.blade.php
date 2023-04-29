<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gabinete de Córnea y Oftalmología</title>
    <!--link rel="stylesheet" href="{% static 'css/bootstrap.css'%}"-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/GCO-bs.css')}}">
    <link rel="stylesheet" href="{{ asset('css/lightslider.css')}}">
    <link rel="stylesheet" href="{{ asset ('css/acerca-de.css') }}">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400&display=swap" rel="stylesheet">
    <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
    <style>
        ul{
			list-style: none outside none;
		    padding-left: 0;
            margin: 0;
		}
        a{
            text-decoration: none;
        }
        .container-fluid-1{
            padding-left: 0rem;
            padding-right: 0rem;
            overflow: hidden;
          }
    </style>
</head>
<body>
    @include('index/header')
    <main>
        <div class="container-fluid-1 mb-5">
            <div class="row">
                <div class="col-12">
                    <div id="carouselExampleSlidesOnly" class="carousel slide carousel-fade" data-bs-ride="carousel">
                        <div class="carousel-inner">
                        @foreach ($cars as $i)
                          <div class="carousel-item @if ($loop->first) active @endif" data-bs-interval="{{$i->intervalo}}">
                                <img src="{{url(''.$i->imagen)}}" class="d-block w-100"  alt="carrusel">
                                <div class="carousel-caption">
                                    <div>
                                        <img src="{{ url('staticimg/Logo-s-a.png')}}" class="w-75" alt="">
                                    </div>
                                    <a href="https://www.doctoralia.com.mx/carlos-enrique-de-la-torre-gonzalez/oftalmologo/miguel-hidalgo?utm_source=widget-doctor-124156&utm_medium=certificate&utm_campaign=&utm_content=#highlight-calendar"><button class="btn btn-pgco hid">¡Agenda tu cita!</button></a>
                                    <div class="mt-5">
                                    </div>
                                </div>
                          </div>
                        @endforeach
                      </div>
                </div>
            </div>
        </div>
        <br id="acerca-de">
        <div class="container my-5" id="acerca-de">
            <div class="row">
                <div class="col-12">
                    <div class="card mb-3 gco-pad text-white shadow-lg rounded">
                        <div class="row g-0">
                          <div class="col-md-4 d-flex align-items-center border-end">
                            <img class="w-100 p-2 rounded-circle" src="{{ url('staticimg/Doctor.jpeg') }}" alt="Doctor">
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                              <h1 class="card-title text-center border-bottom mt-1 mb-4">Perfil Médico</h1>
                              <p class="card-text"><p>Estancia, Wills Eye Hospital Philadelphia, 2007</p>
                              <p>C&oacute;rnea y cirug&iacute;a refractiva, UNAM/ Asociaci&oacute;n para evitar la Ceguera en M&eacute;xico, 2008</p>
                              <p>Metodolog&iacute;a de la investigaci&oacute;n en Oftalmolog&iacute;a, UNAM/ Asociaci&oacute;n para evitar la Ceguera en M&eacute;xico, 2009</p>
                              <p>Oftalmologia, UNAM/Hospital Ju&aacute;rez de M&eacute;xico, 2007</p>
                              <p>Maestr&iacute;a en ciencias de la salud, IPN, 2011</p>
                              <p>Entrenamiento en trasplantes lamelares, Devers Eye Institute Portland, 2010</p>
                              <p>Fundador y Profesor titular del curso de alta especialidad en c&oacute;rnea y cirug&iacute;a refractiva, UNAM/Hospital Juarez de M&eacute;xico, 2017</p>
                              <p>Mesa directiva, Centro Mexicano de C&oacute;rnea y Cirug&iacute;a refractiva, 2019</p>
                              <p>Entrenamiento en reconstrucci&oacute;n de superficie ocular en quemaduras, LV Prasad Eye institute Hyderabad (India), 2017</p>
                              <p>M&eacute;dico Adjunto servicio de c&oacute;rnea, Asociaci&oacute;n para evitar la ceguera en M&eacute;xico, 2019</p></p>
                            </div>
                          </div>
                        </div>
                      </div>
                </div>
            </div>
        </div>

        <br id="Nosotros" class="">
        <div class="container ">
            <div class="text-center">
                <h2 class="">Nosotros</h2>
                <h3 class="text-muted">Conoce acerca de nosotros:</h3>
            </div>
            <ul class="timeline">
                <li>
                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="{% static 'img/1.png'%}" alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>Misión</h4>
                        </div>
                        <div class="timeline-body"><p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p></div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="{% static 'img/2.png'%}" alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>Visión</h4>
                        </div>
                        <div class="timeline-body"><p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p></div>
                    </div>
                </li>
            </ul>
        </div>
        <br id="Servicios" class="">
        <section class="gco-ser">
            <div class="container py-5">
                <div class="row justify-content-center">
                    <div class="col-sm-12 col-lg-11">
                        <div class="text-center mb-5">
                            <h1 class="text-white">Servicios</h1>
                        </div>
                        <div class="card shadow-lg border border-dark">
                        <div class="d-flex align-items-start">
                            <div class="nav flex-column nav-pl" id="v-pills-tab" style="background-color: #02839A;" role="tablist" aria-orientation="vertical">
                              @foreach ($serviciosquery as $i)
                              <button class="nav-chill fonts py-5 @if ($loop->first)active @endif"  id="v-pills-{{$loop->index}}-tab" data-bs-toggle="pill" data-bs-target="#v-pills-{{$loop->index}}" type="button" role="tab" aria-controls="v-pills-{{$loop->index}}" aria-selected="@if ($loop->first) true @else false @endif ">{{$i->boton}}</button>
                              @endforeach
                            </div>
                            <div class="tab-content m-2" id="v-pills-tabContent">
                                @foreach ($serviciosquery as $i)
                                <div class="tab-pane fade show @if ($loop->first) active @endif" id="v-pills-{{$loop->index}}" role="tabpanel" aria-labelledby="v-pills-{{$loop->index}}">
                                    <div class="text-center me-3">
                                        <p class="display-5">{{$i->titulo}}</p>
                                        <img class="my-1 img-tab-w" style="border-color: black; border-style: solid;" src="{{url(''.$i->imagen)}}" alt="">
                                        <p class="texto m-4" style="text-align: justify;">{{$i->descripcion}}</p>
                                        <a href="https://www.doctoralia.com.mx/carlos-enrique-de-la-torre-gonzalez/oftalmologo/miguel-hidalgo?utm_source=widget-doctor-124156&utm_medium=certificate&utm_campaign=&utm_content=#highlight-calendar"><button class="btn btn-pgco hid">¡Agenda tu cita!</button></a>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
         <br id="Cirugias" class="">
        <div class="container">
            <div class="row text-center">
                <h2 class="my-5">Cirugias</h2>
                <div class="item">
                    <ul id="content-slider" class="content-slider">
                        @foreach ($cirugiasquery as $i)
                        <li>
                            <div class="card card-h text-center shadow" id="{{$i->url}}1">
                                <div class="card-img-top">
                                    <img class="w-100" src="{{url(''.$i->imagen)}}" alt="">
                                </div>
                                <div class="card-body text-start">
                                    <h5 class="card-title">{{$i->titulo}}</h5>
                                    <p class="card-text">{!!$i->descripcion!!}</p>
                                    <a href="cirugias/{{$i->url}}"><button type="button" class="btn btn-pgco">{{$i->boton}}</button></a>
                                </div>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <br class="" id="Padecimientos">
        <section class="gco-pad py-5">
            <div class="container">
                <div class="row">
                    <div class="text-center text-white col-12 col-lg-4">
                        <h4>Padecimientos</h4>
                        <hr class="text-white">
                        <div class="eyes">
                            <div class="eye">
                                <div class="ball">

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-8 text-center">
                        <div class="accordion" id="accordionExample">
                            @foreach ($padquery as $i)
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#{{$i->url}}" aria-expanded="true" aria-controls="{{$i->url}}">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                          <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                                          <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                                        </svg><strong class="ms-2">{{$i->titulo}}</strong>
                                  </button>
                                </h2>
                                <div id="{{$i->url}}" class="accordion-collapse collapse" aria-labelledby="{{$i->url}}1" data-bs-parent="#accordionExample">
                                  <div class="accordion-body">
                                    <div class="card">
                                      <div class="card-img-top">
                                          <img src="{{url(''.$i->imagen)}}" class="w-60" alt="">
                                      </div>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text">
                                            {!!$i->descripcion!!}
                                        </p>
                                        <a href="padecimientos/{{$i->url}}"><button class="btn btn-pgco hid">¡Lee todo el artículo!</button></a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <br class="mb-5" id="Equipo">
        <div class="container" id="portfolio">
            <div class="text-center mb-4">
                <h2 class=" ">Equipo</h2>
                <h3 class="text-muted">¡Cónoce los equipos que manejamos!</h3>
            </div>
            <div class="row">
            @foreach ($equipoquery as $i)
                <div class="col-lg-3 col-sm-6">
                    <div class="portfolio-item" id="{{$i->url}}1">
                        <a class="portfolio-link" href="{{$i->url}}">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i>Ver más</div>
                            </div>
                            <img class="img-fluid" src="{{url(''.$i->imagen)}}" alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class=""><h4>{{$i->titulo}}</h4></div>
                            <div class="text-muted">{{$i->descripcion}}</div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="{{$i->url}}" tabindex="-1" aria-labelledby="{{$i->titulo}}" aria-hidden="true">
                    <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="{{$i->titulo}}">{{$i->titulo}}</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="mx-2">
                                {!!$i->articulo!!}
                            </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                          <button type="button" class="btn btn-primary">Contactanos</button>
                        </div>
                      </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <br class="" id="contacto">
    </main>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h4 class="mt-4"><i class="fas fa-headset"></i>&nbspLlámanos a cualquiera de los siguientes teléfonos para agendar tu cita:</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-12 d-flex justify-content-around">
                <a href="tel:5556043976"><button class="btn btn-pgco hid"><i class="fas fa-phone-volume"></i>&nbsp555 604 3976</button></a>
                <a href="tel:5552542417"><button class="btn btn-pgco hid"><i class="fas fa-phone-volume"></i>&nbsp555 254 2417</button></a>
                <a href="tel:5555868878"><button class="btn btn-pgco hid"><i class="fas fa-phone-volume"></i>&nbsp555 586 8878</button></a>
            </div>
        </div>
    </div>
    <section class="ser-2-izq py-3">
        <div class="container my-3">
            <div class="row">
                <div class="col-lg-6 col-12">
                    <div class="card shadow-ga-lg mb-1 bg-gco-dark text-white">
                        <div class="card-header text-center">
                            <h3>Contacto</h3>
                        </div>
                        <div class="card-body">
                            <form method="post" name="contact_form" >
                                
                            @if ($alert === TRUE)
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                                ¡Gracias por contactarnos! En la brevedad nos comunicaremos contigo.
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @elseif ($alert === FALSE)
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                ¡Algo salio mal! Intenta otra vez mas tarde.
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @else
                        
                        @endif
                        @csrf
                        <input type="hidden" name="csrfmiddlewaretoken" value="vjkIuMYdABaXz6jDyrBSQV9C7F9e1mY5PVdrHu65OKR5DDYvDTb6JCKFAyiXPozi">
                            <div class="user-box d-flex mb-1">
                                <input type="text" name="Nombre" placeholder="Nombre" class="me-1" maxlength="50" required id="id_Nombre">
                                
                                <input type="text" name="Apellidos" placeholder="Apellido" maxlength="50" required id="id_Apellidos">
                            </div>
                            <div class="user-box my-1">
                                <input type="text" name="Email" placeholder="Correo electrónico" required id="id_Email">
                                
                            </div>
                            <div class="user-box my-1">
                                <input type="text" name="Telefono" placeholder="Teléfono" required id="id_Telefono">
                                
                            </div>
                            <div class="user-box my-1">
                                <textarea name="Mensaje" cols="40" rows="5" placeholder="Escribe tu mensaje..." required id="id_Mensaje">
</textarea>
                                
                            </div>
                        <div class="form-group text-center my-1">
                            <button type='submit' class='btn btn-ga-secondary w-75 m-1'><i class="fas fa-envelope"></i> Enviar mensaje por correo</button>
                        </div>
                        <div class="text-center">
                            <button type='button' class='btn bg-whats w-75 m-1 text-white' onclick="ContactoviaWhats()"><i class="fab fa-whatsapp"></i> Enviar mensaje por WhatsApp</button>
                        </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="card shadow-lg mt-1">
                        <iframe src="https://maps.google.com/maps?q=hospital%20espa%C3%B1ol&t=&z=15&ie=UTF8&iwloc=&output=embed" width="100%" height="600px" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>
        </section>
        <script>
            function ContactoviaWhats(){
                var Nombre = document.contact_form.Nombre.value;
                var Apellidos = document.contact_form.Apellidos.value;
                var Mensaje = document.contact_form.Mensaje.value;
                var url = "https://wa.me/525539992039?text="
                window.open(url + "Hola, Mi nombre es "+Nombre+" "+Apellidos+" "+Mensaje)
            }
        </script>
    <footer class="bg-gco-dark text-white container-fluid footer-bg footes-font">
        <div class="row pt-5">
            <div class="col-12 col-lg-3">
                <div class="text-center">
                    <h4 class="mt-4"><i class="fas fa-map-signs me-1"></i>Nos encontramos en:</h4>
                    <hr class="">
                <p class=""> Hospital Expañol </p>
                <p class=""> Ejercito Nacional # 613, Granada, C.P. 11520 Ciudad de México. Tel. 5255 9600 </p>
                </div>
                <div class="text-center">
                    <h4 class="mt-4"><i class="fas fa-clock me-1"></i>Horario</h4>
                    <hr>
                    <p>Lunes a Jueves de 16:00 a 19:40</p>
                    <p>Sábados de 11:00 a 15:00</p>
                </div>
            </div>
            <div class="col-lg-1"></div>
            <div class="col-12 col-lg-3">
                <div class="m-0 my-lg-2 footer-logo text-center">
                     <img class="w-100" src="{{ url('staticimg/Logo-s.png')}}">
                </div>
                <div class="text-center my-4">
                    Correo electrónico:
                    <p>dr.cirujano.oftalmologo@gmail.com</p>
                </div>
                <div class="text-center my-2">
                    <p>Teléfonos:</p>
                    <p>555 604 3976 / 555 254 2417</p>
                    <p>555 586 8878</p>
                </div>
            </div>
            <div class="col-lg-1"></div>
            <div class="col-12 col-lg-3">
                <div class="text-center text-lg-start">
                    <h4 class="mt-4 text-center">Siguenos en:</h4>
                </div>
                <hr class="">
                <ul class="d-flex justify-content-center">
                    <li class="mb-1 ms-4"><a href="https://www.facebook.com/GCorneaYOftalmologia" class="p-1"><i class="RS fa-2x fab fa-facebook"></i></a></li>
                </ul>
                <div class="text-center mt-4">
                    <a target="_blank" href="https://wa.me/525539992039">
                        <button type="button" class="btn bg-whats text-white my-2"><i class="fab fa-whatsapp fs-5"></i>&nbspEnviar mensaje</button>
                    </a>
                    <br>
                    <a href="https://www.doctoralia.com.mx/carlos-enrique-de-la-torre-gonzalez/oftalmologo/miguel-hidalgo?utm_source=widget-doctor-124156&utm_medium=certificate&utm_campaign=&utm_content=#highlight-calendar"><button class="btn btn-pgco hid">Agendar cita</button></a>
                </div>
            </div>
        </div>
        <div class="container-fluid mt-5">
            <div class="row">
                <hr class="text-white">
                <div class="col-12 text-center mb-2 text-white" style="font-size: 10px;">
                Todos los derechos reservados  | Desarrollada por NotHere Studios
                </div>
            </div>
        </div>
</footer>
    <div class="float2" style="bottom:50vh">
        <a href="https://www.facebook.com/GCorneaYOftalmologia"  ><div class=" bg-facebook w-100"><i class="fab fa-facebook my-float2"></i></div></a>
        <a href="https://www.doctoralia.com.mx/carlos-enrique-de-la-torre-gonzalez/oftalmologo/miguel-hidalgo" class="" ><img class="w-100" src="{{url('staticimg/doctoralia-icon.jpg')}}"></a>
        <a href="https://wa.me/525539992039"><div class="bg-whats w-100"><i class="fab fa-whatsapp my-float2"></i></div></a>
    </div>
    @include('index/floatbutton')
    <script src="{{ asset ('js/jquery-3.6.0.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script>
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
      return new bootstrap.Tooltip(tooltipTriggerEl)
    })
    var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
    var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
      return new bootstrap.Popover(popoverTriggerEl)
    })
    </script>
    <script src="{{ asset ('js/lightslider.js') }}"></script>
    <script src="{{ asset ('js/scripts.js') }}"></script>
    <script src="{{ asset ('js/efectos.js') }}"></script>
    <script src="{{ asset ('js/parallax.js') }}"></script>
    <script>
        $(document).ready(function() {
           $("#content-slider").lightSlider({
               item:4,
               loop:true,
               keyPress:true,
               responsive: [
               {
                   breakpoint: 1000,
                   settings: {
                       item: 3,
                       slideMove: 1,
                       slideMargin: 6,
                   }
               },
               {
                   breakpoint: 768,
                   settings: {
                       item: 1,
                       slideMove: 1
                   }
               }
           ]
           });
       });
   </script>
   <script>
    $(document).ready(function() {
      $("#{{$url}}").modal("show");
      $('html, body').animate({
      scrollTop: $("#Equipo").offset().top
      }, 1);
    });
  </script>
   <script>
       var balls = document.getElementsByClassName("ball");
       document.onmousemove = function(){
           var x_int = event.clientX * 120 / window.innerWidth;
           var x = event.clientX * 120 / window.innerWidth + "%";
           var y = event.clientY * 100 / window.innerHeight + "%";
           for(var i=0;i<1;i++){
            if (x_int > 100){
                x = "100%"
            }
                balls[i].style.left = x;
                balls[i].style.top = y;
                balls[i].style.transform = "translate(-"+x+",-"+y+")";
       }
       }

   </script>
</body>
</html>