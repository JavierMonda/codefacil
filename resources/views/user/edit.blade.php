@extends('layouts.app')
@section('title', 'Editar usuario')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h2>Editar Usuario</h2></div>

                <div class="card-body">

                    @include('custom.message')

                    <form enctype="multipart/form-data" action="{{ route('user.update', $user->id)}}" method="POST">
                       @csrf
                       @method('PUT')

                        <div class="container">
                            <h3>Datos requeridos</h3>

                            <div class="form-group">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Nombre" value="{{ old('name', $user->name)}}">
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control" id="email" name="email" placeholder="Email" value="{{ old('email', $user->email) }}">
                            </div>

                            <!--<div class="form-group">
                                <input type="password" class="form-control" id="password" name="password" placeholder="Password" value="{{ old('password', $user->password) }}">
                            </div>

                            <div class="form-group">
                                <select class="form-control" name="roles" id="roles">
                                    @foreach($roles as $role)
                                        <option value="{{ $role->id }}"
                                            @isset($user->roles[0]->name)
                                                @if($role->name == $user->roles[0]->name)
                                                    selected
                                                @endif
                                            @endisset
                                            >{{ $role->name }}</option>
                                    @endforeach 
                                </select>
                            </div>-->

                            <div class="form-group">
                                <object data="{{ url('/') }}/{{$user->file}}" type="application/pdf" width="300px" height="600px"></object>
                                <!--<embed src="{{ url('/') }}/{{$user->file}}" type="application/pdf" width="100%" height="100%">-->
                                <input type="text" class="form-control" id="file" name="file" value="{{ old('file', $user->file) }}" disabled>
                                <input type="file" name="file" id="file" class="form-control" placeholder="Subir archivos" value="{{ old('file', $user->file) }}">
                            </div>

                            <!--<button type="submit" class="btn btn-primary">Subir</button>-->

                            <hr>

                            <input type="submit" class="btn btn-primary" value="Guardar">

                        </div> 
                    </form>

                    

                </div>
            </div>
        </div>
    </div>
</div>
@endsection