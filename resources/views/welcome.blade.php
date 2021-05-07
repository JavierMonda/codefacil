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
				  <iframe id="banner-amazon1" src="https://rcm-eu.amazon-adsystem.com/e/cm?o=30&p=48&l=ur1&category=amazon_business&banner=0PNA7Q71GWJWTW3SXY02&f=ifr&linkID=13701f4182fa7bd26b8ebd0e1d8ba136&t=codefacil-21&tracking_id=codefacil-21" width="728" height="90" scrolling="no" border="0" marginwidth="0" style="border:none;" frameborder="0"></iframe>
				  <iframe id="banner-amazon2" src="https://rcm-eu.amazon-adsystem.com/e/cm?o=30&p=26&l=ur1&category=amazon_business&banner=1QG7NB5DMFTBS47DCV02&f=ifr&linkID=1f4f32cc14f57d8083fc0811b85c664c&t=codefacil-21&tracking_id=codefacil-21" width="468" height="60" scrolling="no" border="0" marginwidth="0" style="border:none;" frameborder="0"></iframe>
				  <iframe id="banner-amazon3" src="https://rcm-eu.amazon-adsystem.com/e/cm?o=30&p=12&l=ur1&category=amazon_business&banner=1VH6R8G5X5VYY4WF6GG2&f=ifr&linkID=19d7eea9adff8ce4ec3b4a25a7c673f0&t=codefacil-21&tracking_id=codefacil-21" width="300" height="250" scrolling="no" border="0" marginwidth="0" style="border:none;" frameborder="0"></iframe>
                <p class="p-section4">
                  Su Publicidad Aquí (<a class="a-contacto" href="https://javierjg.es/blog/contacto/" target="_blank">Contacto</a>)
                </p>
              </div>
            </div>
          </div>
        </div>
@endsection
