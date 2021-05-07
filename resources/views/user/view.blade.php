@extends('layouts.app')
@section('title', 'Usuario '.$user->name)
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h2>{{ $name}}</h2></div>

                <div class="card-body">

                    @include('custom.message')

                    <!--<form action="{{ route('user.update', $user->id)}}" method="POST">
                       @csrf
                       @method('PUT')-->

                        <div class="container">
                            <h3>Perfil {{ $name}}</h3>

                            <div class="form-group">
                                <object data="{{ url('/') }}/{{$user->file}}" type="application/pdf" width="300px" height="600px"></object>

                                <div class="title m-b-md">
                                  <!-- {!!QrCode::size(300)->generate($url) !!}-->
									<img src="data:image/png;base64, {!! base64_encode(QrCode::format('png')->size(300)->generate($url)) !!} ">
                                   <p>Su enlace: {{ $url }}</p>
                                </div>
                            </div>

                            <hr>

                            <a class="btn btn-success" href="{{route('user.edit',$user->id)}}">Editar</a>

                        </div>
                    <!--</form>-->

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
