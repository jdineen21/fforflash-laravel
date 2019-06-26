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
            <form id="form" style="width:680px;">
                <div class="form_div">
                    <input type="text" placeholder="Search Champions" class="textbox">
                    <div class="submit_div">
                        <input type="submit">
                    </div>
                </div>
            </form>
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
            <p>Currently finishing up the foundations of the code for the create your own guide function on the website.</p>
            <br>
            <p>You can see an exemplar Zed guide by clicking <a href="../guides/zed-guide/">here</a></p>
            <p>Also you can see an exemplar Corki guide by clicking <a href="../guides/corki-guide/">here</a></p>
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
            <p>The website is currently up and running but is still under development.</p>
            <br>
            <p>The pages "Guides", "Champ Select" and "Contact". The functionality to login and register are my top priority then I will spend time working on the ability to create guides within the website.</p>
        </div>
    </div>
    
@endsection