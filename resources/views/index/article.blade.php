<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{!!$cirugia->titulo!!}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/GCO-bs.css')}}">
    <link rel="stylesheet" href="{{ asset('css/lightslider.css')}}">
    <link rel="stylesheet" href="{{ asset ('css/acerca-de.css') }}">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400&display=swap" rel="stylesheet">
    <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-224476363-1">
    </script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-224476363-1');
    </script>
    <style>
        /*ul{
			list-style: none outside none;
		    padding-left: 0;
            margin: 0;
		}*/
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
                          <div class="carousel-item active">
                                <img src="{{ url('staticimg/blogcirugias.png')}}" class="d-block wid"  alt="...">
                                <div class="carousel-caption mt-5">
                                    <div class="">
                                        <img src="{{ url('staticimg/Logo-s-a-noname.png')}}" class="cwid" alt="">
                                    </div>
                                    <h1 class="titlebg">{!!$cirugia->titulo!!}</h1>
                                    <a href="#contacto"><button class="btn btn-pgco hid">¡Agenda tu cita!</button></a>
                                </div>
                          </div>
                      </div>
                </div>
            </div>
        </div>
        <article class="">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7 mt-5">
                        <div class="article-link">
                            {!!$cirugia->articulo!!}
                        </div>
                    </div>
                    <div class="col-lg-4 col-12 mt-5" >
                        <div>
                            <a id="zl-url" class="zl-url" href="https://www.doctoralia.com.mx/carlos-enrique-de-la-torre-gonzalez/oftalmologo/miguel-hidalgo" rel="nofollow" data-zlw-doctor="carlos-enrique-de-la-torre-gonzalez" data-zlw-type="big_with_calendar" data-zlw-opinion="true" data-zlw-hide-branding="true">Carlos Enrique De La Torre Gonzalez - Doctoralia.com.mx</a><script>!function($_x,_s,id){var js,fjs=$_x.getElementsByTagName(_s)[0];if(!$_x.getElementById(id)){js = $_x.createElement(_s);js.id = id;js.src = "//platform.docplanner.com/js/widget.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","zl-widget-s");</script>
                        </div>
                    </div>
                </div>
            </div>
        </article>
        <div class="container" style="">
            <div class="row text-center">
                <h2 class="my-5">{{$tc}}</h2>
                <div class="item">
                    <ul id="content-slider" class="content-slider">
                        @if ($dinamicurl == "cirugias")
                        @foreach($cirugiasquery as $i)
                        <li>
                            <div class="card card-h text-center shadow" id="{{$i->url}}1">
                                <div class="card-img-top">
                                    <img class="w-100" src="{{url(''.$i->imagen)}}" alt="">
                                </div>
                                <div class="card-body text-start">
                                    <h5 class="card-title">{!!$i->titulo!!}</h5>
                                    <p class="card-text" style="font-size: 16px;">{!!$i->descripcion!!}</p>
                                    <a href="{{$dinamicurl}}/{{$i->url}}"><button type="button" class="btn btn-pgco">Ir al artículo</button></a>
                                </div>
                            </div>
                        </li>
                        @endforeach
                        @else
                        @foreach($padquery as $i)
                        <li>
                            <div class="card card-h text-center shadow" id="{{$i->url}}1">
                                <div class="card-img-top">
                                    <img class="w-100" src="{{url(''.$i->imagen)}}" alt="">
                                </div>
                                <div class="card-body text-start">
                                    <h5 class="card-title">{!!$i->titulo!!}</h5>
                                    <p class="card-text" style="font-size: 16px;">{!!$i->descripcion!!}</p>
                                    <a href="{{$dinamicurl}}/{{$i->url}}"><button type="button" class="btn btn-pgco">Ir al artículo</button></a>
                                </div>
                            </div>
                        </li>
                        @endforeach
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </main>
    @include('index/footer')
    <div class="float2" style="bottom:50vh">
        <a href="https://www.facebook.com/GCorneaYOftalmologia"  ><div class=" bg-facebook w-100"><i class="fab fa-facebook my-float2"></i></div></a>
        <a href="https://www.doctoralia.com.mx/carlos-enrique-de-la-torre-gonzalez/oftalmologo/miguel-hidalgo" class="" ><img class="w-100" src="{{url('staticimg/doctoralia-icon.jpg')}}"></a>
        <a href="https://wa.me/525539992039"><div class="bg-whats w-100"><i class="fab fa-whatsapp my-float2"></i></div></a>
    </div>
@include('index/floatbutton')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
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
</body>
</html>