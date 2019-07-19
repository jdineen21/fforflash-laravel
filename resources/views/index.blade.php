@extends('layout')

@section('content')

    <div class="welcome_cont">
        <div class="welcome_left">
            <h2>FForFlash Patch 9.13</h2>
            <div>
                <img src="/datadragon/img/perk-images/StatMods/StatModsAdaptiveForceIcon.png">
                <img src="/datadragon/img/perk-images/StatMods/StatModsArmorIcon.png">
                <img src="/datadragon/img/perk-images/StatMods/StatModsAttackSpeedIcon.png">
                <img src="/datadragon/img/perk-images/StatMods/StatModsCDRScalingIcon.png">
                <img src="/datadragon/img/perk-images/StatMods/StatModsHealthScalingIcon.png">
                <img src="/datadragon/img/perk-images/StatMods/StatModsMagicResIcon.png">
            </div>
            <p>Welcome to FForFlash. Here we analyse millions of games in order to provide up to date guides and statistics on the current League of Legends Meta!</p>
            <p>You can use the search bar to find statisically derived guides for individual champions or go to our tier list to see the best champions this patch.</p>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque a metus nulla. 
                Etiam est arcu, vulputate a pretium suscipit, dictum id dolor. Nulla facilisi. 
                Maecenas rutrum ligula a nunc gravida laoreet. In facilisis ante eget lorem 
                consectetur ultrices. Nullam fringilla leo quis dui interdum vestibulum. 
                Donec hendrerit, eros vitae elementum imperdiet, dui neque efficitur ex, ac mollis 
                justo est quis felis.
            </p>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque a metus nulla. 
                Etiam est arcu, vulputate a pretium suscipit, dictum id dolor. Nulla facilisi. 
                Maecenas rutrum ligula a nunc gravida laoreet. In facilisis ante eget lorem 
                consectetur ultrices. Nullam fringilla leo quis dui interdum vestibulum. 
                Donec hendrerit, eros vitae elementum imperdiet, dui neque efficitur ex, ac mollis 
                justo est quis felis.
            </p>
        </div>
        <img class="logo" src="css/images/logo.png">
    </div>
    <div class="champion_info">
        <h3>New Champion Information</h3>
        <div class="key_champs_info_div">
            <div class="new_champion_div">
                <div class="text_wrapper">
                    <h1 class="new_champ_name">Yuumi</h1>
                    <h5 class="champion_type">Support</h5>
                    <h4 class="champion_slogan">the Magical Cat</h4>
                </div>
            </div>
            <div class="free_champs_div">
                <h3>Free To Play Champions</h3>
                <div class="free_champs_img">
                @foreach ($freeChampions as $champion)
                    <a href="/champion/{{ $champion->key }}"><img src="/datadragon/9.13.1/img/champion/{{ $champion->champId }}.png"></a>
                @endforeach
                </div>
            </div>
            <div class="free_champs_div">
                <h3>Free To Play Champions for New Players Below level 10</h3>
                <div class="free_champs_img">
                @foreach ($freeChampionsForNewPlayers as $champion)
                    <a href="/champion/{{ $champion->key }}"><img src="/datadragon/9.13.1/img/champion/{{ $champion->champId }}.png"></a>
                @endforeach
                </div>
            </div>
        </div>
    </div>

@endsection