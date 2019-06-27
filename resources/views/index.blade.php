@extends('layout')

@section('content')

    <div class="champion_info">
        <h3>New Champion Information</h3>
        <div id="key_champs_info_div">
            <div class="new_champion_div">
                <div id="text_wrapper">
                    <h1 class="new_champ_name">Yuumi</h1>
                    <h5 class="champion_type">Support</h5>
                    <h4 class="champion_slogan">the Magical Cat</h4>
                </div>
            </div>
            <div id="free_champs_div">
                <h3>Free To Play Champions</h3>
                <div id="free_champs_img">
                @foreach ($freeChampions as $champion)
                    <img src="/datadragon/9.13.1/img/champion/{{ $champion }}.png">
                @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="squares_wrapper">
        <ul>

            @foreach ($champions as $champion)
            <a href="/champion/{{ $champion->key }}">
                <li>
                    <img src="/datadragon/9.13.1/img/champion/{{ $champion->champId }}.png"/>
                    <p>{{ $champion->name }}</p>
                </li>
            </a>
            @endforeach
        </ul>
    </div>

@endsection