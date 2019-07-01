@extends('layout')

@section('content')

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