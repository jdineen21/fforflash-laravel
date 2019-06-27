@extends('layout')

@section('content')

    <div class="champion_info">
        <h3>Key Champion Information</h3>
        <div id="key_champs_info_div">
            <div class="new_champion_div">
                <div id="text_wrapper">
                    <h1 class="new_champ_name">Yuumi</h1>
                    <h5 class="champion_type">Tank, Support</h5>
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
            {{-- Needs css sorting located in _navbar under form atm --}}
            {{-- <form id="form" style="width:680px;">
                <div class="form_div">
                    <input type="text" placeholder="Search Champions" class="textbox">
                    <div class="submit_div">
                        <input type="submit">
                    </div>
                </div>
            </form> --}}
        </div>
    </div>
    <div class="stan_cont_wrapper">
        <div class="stan_cont_wrapper">
            <p style="display:inline;">By <a href="../profile.php?username=TurdtheFloat"><span style="color:rgb(75, 177, 255);">Joe Dineen</span></a></p>
            <p style="float:right;">2/03/2017</p>
        </div>
        <h3 class="thread_title" >Website Update</h3>
        <div class="thread_cont_wrapper">
            <img src="css/images/FFFLogo.jpg"/>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque a metus nulla. 
                Etiam est arcu, vulputate a pretium suscipit, dictum id dolor. Nulla facilisi. 
                Maecenas rutrum ligula a nunc gravida laoreet. In facilisis ante eget lorem 
                consectetur ultrices. Nullam fringilla leo quis dui interdum vestibulum. 
                Donec hendrerit, eros vitae elementum imperdiet, dui neque efficitur ex, ac mollis 
                justo est quis felis.
            </p>
            <br>
            <p>
                In molestie mattis tellus ut porta. Aenean consequat justo sed odio consequat aliquam. 
                Maecenas imperdiet, justo a dignissim aliquam, mi neque suscipit arcu, quis condimentum 
                magna ex ac nunc. Nulla et luctus justo, eget porta neque. Vivamus iaculis, sapien vitae 
                tempus commodo, lacus dolor volutpat ex, id condimentum tellus nisl quis lacus. Nunc viverra 
                consequat eros, eget consequat eros ornare eget. Suspendisse aliquet vestibulum arcu. 
                Donec enim leo, volutpat quis elementum ac, finibus non lacus. Maecenas et augue non velit 
                dictum vestibulum non sit amet mi. Nulla id mauris elementum, commodo urna et, ullamcorper 
                felis. Sed condimentum dictum erat in aliquet. Donec justo est, posuere non ipsum quis, 
                laoreet ultrices diam.
            </p>
        </div>
    </div>
    <div class="stan_cont_wrapper">
        <div class="stan_cont_wrapper">
            <p style="display:inline;">By <a href="../profile.php?username=TurdtheFloat"><span style="color:rgb(75, 177, 255);">Joe Dineen</span></a></p>
            <p style="float:right;">25/02/2017</p>
        </div>
        <h3 class="thread_title" >Official Website Launch</h3>
        <div class="thread_cont_wrapper">
            <img src="css/images/FFFLogo.jpg"/>
            <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque a metus nulla. 
                    Etiam est arcu, vulputate a pretium suscipit, dictum id dolor. Nulla facilisi. 
                    Maecenas rutrum ligula a nunc gravida laoreet. In facilisis ante eget lorem 
                    consectetur ultrices. Nullam fringilla leo quis dui interdum vestibulum. 
                    Donec hendrerit, eros vitae elementum imperdiet, dui neque efficitur ex, ac mollis 
                    justo est quis felis.
            </p>
            <br>
            <p>
                In molestie mattis tellus ut porta. Aenean consequat justo sed odio consequat aliquam. 
                Maecenas imperdiet, justo a dignissim aliquam, mi neque suscipit arcu, quis condimentum 
                magna ex ac nunc. Nulla et luctus justo, eget porta neque. Vivamus iaculis, sapien vitae 
                tempus commodo, lacus dolor volutpat ex, id condimentum tellus nisl quis lacus. Nunc viverra 
                consequat eros, eget consequat eros ornare eget. Suspendisse aliquet vestibulum arcu. 
                Donec enim leo, volutpat quis elementum ac, finibus non lacus. Maecenas et augue non velit 
                dictum vestibulum non sit amet mi. Nulla id mauris elementum, commodo urna et, ullamcorper 
                felis. Sed condimentum dictum erat in aliquet. Donec justo est, posuere non ipsum quis, 
                laoreet ultrices diam.
            </p>
        </div>
    </div>
    
@endsection