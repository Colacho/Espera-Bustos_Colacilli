@extends('frontend.layout.main')
@section('content')

<style>
  /* * {
    overflow-x: hidden;
  } */

  .containerss {
    display: flex;
    flex-direction: column;
    width: 100%;
    padding: 30px;
    margin: 0 auto;
    justify-content: center;
  }

  .titulo h1 {
    text-align: center;
    color: white;
  }

  .texto {
    display: flex;
    justify-content: center;
    margin-bottom: 20px;
  }

  .texto p {
    padding: 30px;
    width: 90%;
    text-align: justify;
    color: #ffffff;
  }

  .card {
    display: flex;
    margin: 40px 40px;
    text-align: center;
  }

  .card-img-top {
    height: 250px;
    object-fit: cover;
  }

  .fondoCards {
    background-color: #f8f9f9;
    padding-top: 40px;
  }

  .card-texto {
    text-align: justify;
    margin: 0 10px;
    display: inline-block;
  }

  .card-link1 {
    position: relative;
    bottom: 20px
  }

  button {
    position: relative;
    display: inline-block;
    cursor: pointer;
    outline: none;
    border: 0;
    vertical-align: middle;
    text-decoration: none;
    background: transparent;
    padding: 0;
    font-size: inherit;
    font-family: inherit;
  }

  button.learn-more {
    width: 12rem;
    height: auto;
  }

  button.learn-more .circle {
    transition: all 0.45s cubic-bezier(0.65, 0, 0.076, 1);
    position: relative;
    display: block;
    margin: 0;
    width: 3rem;
    height: 3rem;
    background: #282936;
    border-radius: 1.625rem;
  }

  button.learn-more .circle .icon {
    transition: all 0.45s cubic-bezier(0.65, 0, 0.076, 1);
    position: absolute;
    top: 0;
    bottom: 0;
    margin: auto;
    background: #fff;
  }

  button.learn-more .circle .icon.arrow {
    transition: all 0.45s cubic-bezier(0.65, 0, 0.076, 1);
    left: 0.625rem;
    width: 1.125rem;
    height: 0.125rem;
    background: none;
  }

  .row {
    display: flex;
    justify-content: center;
  }

  .row .row-hijos {
    padding: 0;
  }

  @media (max-width:768px) {
    .row .row-hijos {
      width: 350px;
    }

    .carousel-inner img {
      height: 50vh;

    }
  }

  button.learn-more .circle .icon.arrow::before {
    position: absolute;
    content: "";
    top: -0.29rem;
    right: 0.0625rem;
    width: 0.625rem;
    height: 0.625rem;
    border-top: 0.125rem solid #fff;
    border-right: 0.125rem solid #fff;
    transform: rotate(45deg);
  }

  button.learn-more .button-text {
    transition: all 0.45s cubic-bezier(0.65, 0, 0.076, 1);
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    padding: 0.75rem 0;
    margin: 0 0 0 1.85rem;
    color: #282936;
    font-weight: 700;
    line-height: 1.6;
    text-align: center;
    text-transform: uppercase;
  }

  button:hover .circle {
    width: 100%;
  }

  button:hover .circle .icon.arrow {
    background: #fff;
    transform: translate(1rem, 0);
  }

  button:hover .button-text {
    color: #fff;
  }

  /* From uiverse.io by @alexmaracinaru */
  .cta {
    border: none;
    background: none;
  }

  .cta span {
    padding-bottom: 7px;
    letter-spacing: 4px;
    font-size: 14px;
    padding-right: 15px;
    text-transform: uppercase;
  }

  .cta svg {
    transform: translateX(-8px);
    transition: all 0.3s ease;
  }

  .cta:hover svg {
    transform: translateX(0);
  }

  .cta:active svg {
    transform: scale(0.9);
  }

  .hover-underline-animation {
    position: relative;
    color: white;
    padding-bottom: 20px;
  }

  .hover-underline-animation:after {
    content: "";
    position: absolute;
    width: 100%;
    transform: scaleX(0);
    height: 2px;
    bottom: 0;
    left: 0;
    background-color: #000000;
    transform-origin: bottom right;
    transition: transform 0.25s ease-out;
  }

  .cta:hover .hover-underline-animation:after {
    transform: scaleX(1);
    transform-origin: bottom left;
  }

  #arrow-horizontal {
    fill: white;
  }

  .sesion {
    background-color: rgba(0, 0, 0, 0.3);
    display: flex;
    align-items: center;
    justify-content: center;
    pointer-events: none;
    opacity: 0;
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    height: 100vh;
    width: 100vw;
    transition: opacity 0.3s ease;
    overflow: auto;
    overflow: scroll;
    z-index: 2000;
  }

  .show {
    pointer-events: auto;
    opacity: 1;
  }

  .vent_sesion {
    margin: auto;
    position: relative;
    background-color: rgba(255, 255, 255);
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.9);
  }

  .container-historia {
    background-image: url(historia.jpg);
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    height: 200px;
    display: flex;
    justify-content: center;
    align-items: center;
    color: white;
  }

  .container-objetivo {
    background-image: url(objetivo.jpg);
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    height: 200px;
    display: flex;
    justify-content: center;
    align-items: center;
    color: white;
  }

  .container-son {
    word-wrap: break-word;
    width: 600px;
    height: 350px;
    padding: 20px;
    overflow: auto;
  }

  @media (max-width:768px) {
    .container-son {
      width: 320px;
    }
  }

  .btn_cerrar {
    position: absolute;
    top: -20px;
    right: -20px;
    z-index: 1;
    border: none;
    cursor: pointer;
  }

  .btn_cerrar svg {
    background: white;
    border-radius: 50px;
  }

  .box-body {
    display: flex;
    justify-content: center;
    margin: 0 auto;
    padding: 30px;
  }

  @media (max-width:400px) {
    .card-novedades {
      margin: 30px 0;
    }
  }

  .imagen-card {
    width: 100%;
    height: 300px;
    object-fit: cover;
  }

  #mi-carousel {
    width: 100vw;
    height: 90vh;
  }

  @media (max-width:768px) {
    .carousel-inner img {
      height: 20vh;
    }
  }

  .carousel-inner,
  .item-active,
  .item- {
    width: 100%;
    height: 100%;
  }

  .item-active,
  .item img {
    width: 100%;
    height: 100%;
  }

  .overlay {
    color: #fff;
    position: absolute;
    z-index: 12;
    top: 10%;
    left: 0;
    width: 100%;
    text-align: left;
  }

  #present,
  .title {
    text-shadow: 0 0 0.2em #87F, 0 0 0.2em #87F;
    font-size: 4vw;
    width: 40%;
    text-align: center;
    position: absolute;
    top: 40%;
    left: 30%;
    z-index: 1000;
    color: #fff;
  }

  .title {
    top: 25%;
    font-size: 3vw;
    text-align: center;
  }

  #present::after {
    content: "";
    border-left: 3px solid #fff;
    height: 100%;
    animation: write 2s infinite alternate steps(14);
  }

  .bottonAutoScroll {
    width: 30%;
    position: absolute;
    bottom: 5%;
    left: 40%;
    color: #fff;
  }

  .hero__scroll {
    position: absolute;
    text-align: center;
    bottom: 60px;
    width: 200px;
    margin: auto;
    display: block;
    cursor: pointer;
    padding-bottom: 40px;
    left: 0;
    right: 0;
    text-transform: uppercase;
  }

  .hero__scroll .chevron {
    margin-top: 20px;
    display: block;
    -webkit-animation: pulse 2s infinite;
    animation: pulse 2s infinite;
    color: #FF4081;
  }

  .chevron::before {
    border-style: solid;
    border-width: 0.25em 0.25em 0 0;
    content: '';
    display: inline-block;
    height: 20px;
    position: relative;
    -webkit-transform: rotate(-45deg);
    -ms-transform: rotate(-45deg);
    transform: rotate(-45deg);
    vertical-align: top;
    width: 20px;
  }

  .chevron.right:before {
    left: 0;
    -webkit-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    transform: rotate(45deg);
  }

  .chevron.bottom:before {
    top: 0;
    -webkit-transform: rotate(135deg);
    -ms-transform: rotate(135deg);
    transform: rotate(135deg);
  }

  .chevron.left:before {
    left: 0.25em;
    -webkit-transform: rotate(-135deg);
    -ms-transform: rotate(-135deg);
    transform: rotate(-135deg);
  }

  i {
    text-align: center;
  }

  #cuerpoCartel {
    margin-left: -100%;
    margin-top: -100%;
  }

  @-webkit-keyframes pulse {
    0% {
      -webkit-transform: translate(0, 0);
      transform: translate(0, 0);
    }

    50% {
      -webkit-transform: translate(0, 10px);
      transform: translate(0, 10px);
    }

    100% {
      -webkit-transform: translate(0, 0);
      transform: translate(0, 0);
    }
  }

  @keyframes pulse {
    0% {
      -webkit-transform: translate(0, 0);
      transform: translate(0, 0);
    }

    50% {
      -webkit-transform: translate(0, 10px);
      transform: translate(0, 10px);
    }

    100% {
      -webkit-transform: translate(0, 0);
      transform: translate(0, 0);
    }
  }

  @keyframes write {
    from {
      width: 100%;
    }

    to {
      width: 0;
    }
  }

  .news,
  .news:hover {
    text-decoration: none;
    color: white;
  }
</style>

<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

<div id="demo" class="carousel slide" data-bs-ride="carousel">

  <!-- Indicators/dots -->
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
  </div>

  <!-- The slideshow/carousel -->
  <div class="carousel-inner">

    @foreach($cartelera as $cartel)
    <h1 class="title"> Bienvenidos </h2>
      <h2 id="present"></h2>
      <span id="cuerpoCartel">{{$cartel->titulo}}</span>
      @endforeach
      <div class="carousel-item active">
        <img src="sede.jpg" class="d-block w-100">
      </div>
      <div class="carousel-item">
        <img src="collage1.jpg" class="d-block w-100">
      </div>
      <div class="carousel-item">
        <img src="collage2.jpg" class="d-block w-100">
      </div>
  </div>
  <span class="hero__scroll aos-init aos-animate bottonAutoScroll" data-aos="fade-up" data-aos-easing="ease" data-aos-delay="800">
    {{--  {!!$cartel->cuerpo!!}  --}}
    <a class="news d-none d-md-block" href="#novedades">
      <i class="chevron bottom"></i></a>
  </span>
  <script>
    var h22 = document.getElementById('present');
    var cuerpoCartel = document.getElementById('cuerpoCartel');
    console.log("h22", h22);
    let write = (texto = '', etiqueta = '') => {
      let arrfromstr = texto.split('');
      let i = 0;
      let j = texto.length;
      etiqueta.innerHTML = '';
      let printstr = setInterval(function() {
        if (i === arrfromstr.length) {
          etiqueta.innerHTML = texto.substring(0, j);
          j--;
          if (j === 1) {
            etiqueta.innerHTML = '';
            i = 0;
            j = texto.length;
          }
        } else {
          etiqueta.innerHTML += arrfromstr[i];
          i++;
        }

      }, 200);
    };

    write(cuerpoCartel.innerHTML, h22);
  </script>
  <!-- Left and right controls/icons -->
  <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>

<div id="novedades" class="fondoCards">
  <!--Inicio Novedades -->
  <div class="box-novedades">
    @php($twice = 0 )
    @foreach($novedades as $novedad)
    @php($twice = $twice + 1 )
    @if($twice == 1)
    <div class="row">
      <!-- box-body"> -->
      @endif
      <div class="card col-lg-4 col-md-10 sm-12 row-hijos">
        <div class="caja-imagen-novedades">
          <img src="{{ asset('./storage/'. $novedad->imagen) }}" class="card-img-top" alt="...">
        </div>
        <div class="card-body">
          <h4 class="card-title"><b>{{$novedad->titulo}}</b></h4>
          <p class="card-text">{!!$novedad->cuerpo!!}</p>
          <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
          @if($novedad->archivo1)
          <a href="{{ asset('./storage/'.$novedad->archivo1) }}" target="_blank">{{ basename($novedad->archivo1) }}</a>
          @endif
          @if($novedad->archivo2)
          <a href="{{ asset('./storage/'. $novedad->archivo2) }}" target="_blank">{{ basename($novedad->archivo2) }}</a>
          @endif
          @if($novedad->archivo3)
          <a href="{{ asset('./storage/'. $novedad->archivo3) }}" target="_blank">{{ basename($novedad->archivo3) }}</a>
          @endif
        </div>
      </div>
      @if($twice == 2)
    </div>
    @php($twice = 0 )
    @endif
    @endforeach
  </div>

  <!--Fin Novedades -->



  <!-- CARD 1
  <div class="row">

    <div class="card col-lg-4 col-md-10 sm-12 row-hijos">
      <img class="card-img-top imagen-card" src="https://i0.wp.com/cms.babbel.news/wp-content/uploads/2022/02/Most_Beautiful_Libraries-1.png?resize=640%2C360" alt="Card image cap">
      <div class="card-body">
        <button class="learn-more">
          <span class=" circle" aria-hidden="true">
            <span class="icon arrow"></span>
          </span>
          <span class="button-text" id="btn_sesion">Historia</span>
        </button>
      </div>
    </div> -->

  <!--CARD 2

    <div class="card col-lg-4 col-md-10 sm-12 row-hijos">
      <img class="card-img-top imagen-card" src="https://us.123rf.com/450wm/andreypopov/andreypopov1701/andreypopov170100862/69612698-vista-de-%C3%A1ngulo-alto-de-una-persona-que-escribe-nota-en-diario-en-blanco-en-el-escritorio-de-madera.jpg?ver=6" alt="Card image cap">
      <div class="card-body">

        <button class="learn-more">
          <span class=" circle" aria-hidden="true">
            <span class="icon arrow"></span>
          </span>
          <span class="button-text" id="btn_sesion2">Objetivos</span>
        </button>
      </div>
    </div>

  </div>
</div>-->

  <!-- MODALS -->

  <div id="sesion" class="sesion">
    <div class="vent_sesion">

      <div class="container-historia">
        <h1>Historia</h1>
      </div>

      <div class="container-son">
        <div>
          @foreach($historias as $historia)
          <p>{!!$historia->historia!!}</p>
          @endforeach
        </div>
      </div>

      <div class="btn_cerrar" id="btn_cerrar">
        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="black" class="bi bi-x-circle" viewBox="0 0 16 16">
          <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
          <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
        </svg>
      </div>

    </div>
  </div>



  <div id="sesion2" class="sesion">
    <div class="vent_sesion">
      <div class="container-objetivo">
        <h1>Objetivos</h1>
      </div>

      <div class="container-son">
        <div>
          @foreach($objetivos as $objetivo)
          <p>{!! $objetivo->objetivo !!}</p>
          @endforeach
        </div>
      </div>

      <div class="btn_cerrar" id="btn_cerrar2">
        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="black" class="bi bi-x-circle" viewBox="0 0 16 16">
          <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
          <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
        </svg>
      </div>

    </div>
  </div>

  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>

  <script type="text/javascript">
    const btn_sesion = document.getElementById('btn_sesion');
    const btn_sesion2 = document.getElementById('btn_sesion2');
    const sesion = document.getElementById('sesion');
    const sesion2 = document.getElementById('sesion2');
    const btn_cerrar = document.getElementById('btn_cerrar');
    const btn_cerrar2 = document.getElementById('btn_cerrar2');
    const texto_objetivo = document.getElementById('texto-card-objetivo');

    btn_sesion.addEventListener('click', () => {
      sesion.classList.add('show');
    });

    btn_cerrar.addEventListener('click', () => {
      sesion.classList.remove('show');
    });

    btn_sesion2.addEventListener('click', () => {
      sesion2.classList.add('show');
    });

    btn_cerrar2.addEventListener('click', () => {
      sesion2.classList.remove('show');
    });


    window.document.onload()
    texto_objetivo.trimStart();
  </script>

  @endsection