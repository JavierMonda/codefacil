@extends('layouts.app')
@section('title', $user->name)
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h2>Archivo: {{ $user->name}}</h2>
                </div>

                <div class="card-body text-center">

                    @include('custom.message')
					<iframe style="width:120px;height:240px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//rcm-eu.amazon-adsystem.com/e/cm?lt1=_blank&bc1=000000&IS2=1&bg1=FFFFFF&fc1=000000&lc1=0000FF&t=codefacil-21&o=30&p=8&l=as4&m=amazon&f=ifr&ref=as_ss_li_til&asins=B087STK1W7&linkId=13e4f56731373de063dc0d609997934b"></iframe>
					<iframe style="width:120px;height:240px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//rcm-eu.amazon-adsystem.com/e/cm?lt1=_blank&bc1=000000&IS2=1&bg1=FFFFFF&fc1=000000&lc1=0000FF&t=codefacil-21&o=30&p=8&l=as4&m=amazon&f=ifr&ref=as_ss_li_til&asins=B072LPTBBC&linkId=92f67dfe9f6df669031f8b4160a05ee3"></iframe>
                    <p>Su publicidad aquí (<a class="a-footer" href="https://javierjg.es/blog/contacto/" target="_blank">contacto</a>)</p>

                    <div class="doc-container">
                        <iframe src="https://drive.google.com/viewerng/viewer?url={{ url('/') }}/{{$user->file}}&embedded=true" frameborder="0" width="100%" height="100%"></iframe>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
