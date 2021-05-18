@extends('layouts.appwelcome')
@section('title', 'Visualiza tus archivos a través de Código QR')
@section('content')
        <div class="container-fluid">
          <div class="section1">
              <div class="row align-items-center">
                <div class="col-12 text-center">
                  <h1>Comparte archivos de forma sencilla <br>a través de Códigos QR</h1>
                  <img class="img-home" src="{{ asset('images/img-home.png') }}" />
                </div>
              </div>
            </div>
            <div class="section2">
              <div class="row align-items-center">
                <div class="col-12 text-center">
                  <a href="{{ route('login') }}"><img class="btn-subir" src="{{ asset('images/boton-subir.jpg') }}" /></a>
                  <h3>SUBE TU ARCHIVO EN PDF</h3>
                </div>
              </div>
            </div>
            <div class="section3">
              <div class="row align-items-center">
                <div class="col-12 text-center">
                  <a class="btn btn-info" href="{{ url('/tutorial') }}" target="_parent">
					  <b>Ver Tutorial</b>
                  </a>
                </div>
              </div>
            </div>
            <div class="section4">
            <div class="row align-items-center">
              <div class="col-12 text-center">
				  <iframe id="banner-amazon1" src="images/publicity/728x90.gif" width="728" height="90" scrolling="no" border="0" marginwidth="0" style="border:none;" frameborder="0"></iframe>
				  <iframe id="banner-amazon2" src="images/publicity/468x60.gif" width="468" height="60" scrolling="no" border="0" marginwidth="0" style="border:none;" frameborder="0"></iframe>
				  <iframe id="banner-amazon3" src="images/publicity/300x250.gif" width="300" height="250" scrolling="no" border="0" marginwidth="0" style="border:none;" frameborder="0"></iframe>
                <p class="p-section4">
                  Su Publicidad Aquí (<a class="a-contacto" href="#" target="_blank">Contacto</a>)
                </p>
              </div>
            </div>
          </div>
        </div>
@endsection
