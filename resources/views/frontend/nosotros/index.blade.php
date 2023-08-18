@extends('frontend.layout.main')
@section('content')
<style>
  .titulo {
    text-align: center;
    color: white;
    border-top: 10px solid white;
  }

  .carreras {
    display: flex;
    flex-wrap: wrap;
    margin: 20px;
  }

  .card-text {
    display: flex;
    flex-direction: column;
    text-overflow: ellipsis;
    flex: 1;
    margin: 10px;
    padding: 5px;
    text-align: center;
  }

  .card-text p {
    text-align: justify;
  }

  @media (min-width: 1000px) {
    .card-text {
      display: flex;
      flex-direction: column;
      text-overflow: ellipsis;
      flex: 1;
      margin: 10px;
      padding: 5px;
      text-align: center;
      height: 17rem;
    }
  }

  .btn-group {
    margin-top: 20px;
  }






  .botonMateria {
    padding: 17px 40px;
    border-radius: 7px;
    border-color: #B2B2B2;
    background-color: white;
    box-shadow: rgb(0 0 0 / 5%) 0 0 8px;
    letter-spacing: 1.5px;
    text-transform: uppercase;
    font-size: 15px;
    transition: all .5s ease;
  }


  .botonMateria:hover {
    letter-spacing: 3px;
    background-color: #FF4A4A;
    color: hsl(0, 0%, 100%);
    box-shadow: #D61C4E 0px 7px 29px 0px;
  }

  .botonMateria:active {
    letter-spacing: 3px;
    background-color: hsl(261deg 80% 48%);
    color: hsl(0, 0%, 100%);
    box-shadow: rgb(93 24 220) 0px 0px 0px 0px;
    transform: translateY(10px);
    transition: 100ms;
  }

  .imagenCarrera {
    width: 100%;
    height: 300px;
    object-fit: cover;
  }

  .modal-header {
    background: #262626;
    color: white;
  }

  .modal-footer {
    background: #262626;
  }
</style>
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">


<div class="titulo">
  <h1 data-aos="zoom-in-up" class="text-dark">Nosotros</h1>
</div>
<div class="container">

  <br>
  @foreach ($historias as $historia)
  {!!$historia->historia!!}
  @endforeach

  <br>
  @foreach ($objetivos as $objetivo)
  {!!$objetivo->objetivo!!}
  @endforeach

</div>



<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>


@endsection