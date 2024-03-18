@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Editeaza inregistrare</h1>
@stop

@section('content')
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <div class="col-6">
        @include('partials.admin.errors')
        <form action="{{ route('countries.update', ['country'=>$country->id]) }}" method="post">
            @method("PUT")
            @csrf
            <!--
            <div class="mb-3">
                <label for="name" class="form-label"></label>
                <input type="text" id="name" name="name" class="form-control @error('name', 'country') is-invalid @enderror"
                    placeholder="Nume" value="{{$country->name}}">
            </div>
            -->
            <button type="submit" class="btn btn-dark">Edit</button>
        </form>
    </div>
@stop

@section('css')

@stop

@section('js')

@stop