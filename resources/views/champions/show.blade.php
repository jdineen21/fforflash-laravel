@extends('layout')

@section('content')

    <div class="champion_wrapper">
        <div class="top_left">
            <img src="/datadragon/9.13.1/img/champion/{{ $indiv_champion->id }}.png">
            <h1>{{ $indiv_champion->name }}</h1>
            <h4>{{ $indiv_champion->title }}</h4>
            <h5>{{ $indiv_champion->tags[0] }}</h5>
            <div>Ranked Solo</div>
        </div>
        <div class="top_right">
            <div><img src=""></div>
            <div><img src=""></div>
            <div><img src=""></div>
            <div><img src=""></div>
            <div><img src=""></div>
        </div>
    </div>

@endsection