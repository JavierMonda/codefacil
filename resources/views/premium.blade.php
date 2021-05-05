@extends('layouts.app')
@section('title', 'Premium')
@section('content')
        <div class="container-fluid">
          <div class="section1">
              <div class="row align-items-center">
                <div class="col-12 text-center">
                  <h1>Comparte archivos de forma sencilla <br>a través de codigos QR</h1>
                  <img width="80%" src="{{ asset('images/img-home.png') }}" />
                </div>
              </div>
            </div>
            <div class="section2">
              <div class="row align-items-center">
                <div class="col-12 text-center">
                  <img class="btn-subir" src="{{ asset('images/boton-subir.jpg') }}" />
                  <h3>SUBE TU ARCHIVO EN PDF</h3>
                </div>
              </div>
            </div>
            <div class="section3">
              <div class="row align-items-center">
                <div class="col-12 text-center">
                  <a href="{{ url('/premium') }}">
                    <h3 class="h3-section3">PÁSATE A PREMIUM</h3>
                  </a>
                  <p>Sin Publicidad | Control de Visitas<br>Encuesta de satisfacción</p>
                </div>
              </div>
            </div>
            <div class="section4"><h1>Tu Publicidad aquí</h1></div>
          </div>
        </div>
    </div>
@endsection