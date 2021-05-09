@extends('layouts.app')
@section('title', $user->name)
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h2>{{ $user->name}}</h2>
                </div>

                <div class="card-body text-center">

                    @include('custom.message')
					<a href="https://ordenatech.es" target="_blank"><img class="img-publicity" src="images/publicity/banner_Ordenatech.jpg" alt="Ordenatech" /></a>
                    <p>Su publicidad aquí (<a class="a-contacto" href="https://javierjg.es/blog/contacto/" target="_blank">contacto</a>)</p>

                    <div class="doc-container">
                        <iframe src="https://drive.google.com/viewerng/viewer?url={{ url('/') }}/{{$user->file}}&embedded=true" frameborder="0" width="100%" height="100%"></iframe>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
