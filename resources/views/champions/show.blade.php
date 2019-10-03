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
                <h1>{{ $champion_stats->win_rate }}%</h1>
                <p>Win Rate</p>
            </div>
            <div class="champion_stats_data">
                <h1>{{ $champion_stats->pick_rate }}%</h1>
                <p>Pick Rate</p>
            </div>
            <div class="champion_stats_data">
                <h1>12.6%</h1>
                <p>Ban Rate</p>
            </div>
            <div class="champion_stats_data">
                <h1>{{ $champion_stats->matches }}</h1>
                <p>Matches</p>
            </div>
        </div>
        <div class="champion_skills">
            {{-- Needs work --}}
            <ul class="champion_spell_row">
                <li class="champion_spell_img">
                    <img src="/datadragon/9.13.1/img/passive/{{ $indiv_champion->passive->image->full }}">
                </li>
            </ul>
            @foreach ($indiv_champion->spells as $spell_key => $spell)
            <ul class="champion_spell_row">
                <li class="champion_spell_img">
                    <img src="/datadragon/9.13.1/img/spell/{{ $spell->image->full }}">
                </li>
                @foreach ($skill_pattern as $key => $x)
                    @if ($x == $spell_key)
                        <li class="champion_skill_data_active">
                            <p>
                                {{ $key+1 }}
                            </p>
                        </li>
                    @else
                        <li class="champion_skill_data"></li>
                    @endif
                @endforeach
            </ul>
            @endforeach
        </div>
    </div>

@endsection