@extends('layout')

@section('content')

    <div class="stan_cont_wrapper">
        <img src="/datadragon/9.13.1/img/champion/{{ $indiv_champion->id }}.png">
        <h1>{{ $indiv_champion->name }}</h1>
    </div>

@endsection