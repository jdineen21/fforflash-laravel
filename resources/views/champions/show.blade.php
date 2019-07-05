@extends('layout')

@section('content')

    <div class="champion_wrapper">
        <div class="top_left">
            <img src="/datadragon/9.13.1/img/champion/{{ $indiv_champion->id }}.png">
            <div>
                <h1>{{ $indiv_champion->name }}</h1>
                <h4>{{ $indiv_champion->title }}</h4>
                <h5>{{ $indiv_champion->tags[0] }}</h5>
            </div>
        </div>
        <div class="champion_skills">
            {{-- Needs work --}}
            <div class="champion_skill_row">
                <img src="/datadragon/9.13.1/img/passive/{{ $indiv_champion->passive->image->full }}">
            </div>
            @foreach ($indiv_champion->spells as $spell_key => $spell)
            <div class="champion_skill_row">
                <img src="/datadragon/9.13.1/img/spell/{{ $spell->image->full }}">
                @foreach ($skill_pattern as $key => $x)
                    @if ($x == $spell_key)
                        <div class="champion_skill_data_active"><div>{{ $key+1 }}</div></div>
                    @else
                        <div class="champion_skill_data"></div>
                    @endif
                @endforeach
            </div>
            @endforeach
        </div>
    </div>

@endsection