@extends('layout')

@section('content')

    <div class="champion_wrapper">
        <div class="top_left">
            <img src="/datadragon/img/champion/tiles/{{ $indiv_champion->id }}_0.jpg">
            <div>
                <h1>{{ $indiv_champion->name }}</h1>
                <h4>{{ $indiv_champion->title }}</h4>
                @foreach ($indiv_champion->tags as $tag)
                <h5>{{ $tag }}</h5>
                @endforeach
            </div>
        </div>
        <div class="champion_stats">
            <div class="champion_stats_data">
                <h1>51.84%</h1>
                <p>Win Rate</p>
            </div>
            <div class="champion_stats_data">
                <h1>7.0%</h1>
                <p>Pick Rate</p>
            </div>
            <div class="champion_stats_data">
                <h1>12.6%</h1>
                <p>Ban Rate</p>
            </div>
            <div class="champion_stats_data">
                <h1>61,875</h1>
                <p>Matches</p>
            </div>
        </div>
        <div class="champion_skills">
            {{-- Needs work --}}
            <div class="champion_passive_row">
                <img src="/datadragon/9.13.1/img/passive/{{ $indiv_champion->passive->image->full }}">
            </div>
            @foreach ($indiv_champion->spells as $spell_key => $spell)
            <div class="champion_skill_row">
                <img src="/datadragon/9.13.1/img/spell/{{ $spell->image->full }}">
                @foreach ($skill_pattern as $key => $x)
                    @if ($x == $spell_key)
                        <div class="champion_skill_data_active">{{ $key+1 }}</div>
                    @else
                        <div class="champion_skill_data"></div>
                    @endif
                @endforeach
            </div>
            @endforeach
        </div>
    </div>

@endsection