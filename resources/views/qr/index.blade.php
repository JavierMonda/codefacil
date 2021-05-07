@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="section1-qr">
        <h2>Catálogo: {{ $user->name}}</h2>

        @include('custom.message')

        <p>Su publicidad aquí</p>

        <object data="{{ url('/') }}/{{$user->file}}" type="application/pdf"></object>
        <div class="doc-container">
            <iframe src="https://drive.google.com/viewerng/viewer?url={{ url('/') }}/{{$user->file}}&embedded=true" frameborder="0" width="100%" height="100%"></iframe>
        </div>
    </div>
</div>
@endsection
