@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="section1-qr">
        <h2>Catálogo: {{ $user->name}}</h2>

        @include('custom.message')

        <p>Su publicidad aquí</p>

        <object data="{{ url('/') }}/{{$user->file}}" type="application/pdf"></object>
    </div>
</div>
@endsection