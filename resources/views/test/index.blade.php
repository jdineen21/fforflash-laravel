<link rel="stylesheet" href="{{ URL::asset('css/app.css') }}" type="text/css" />
<div class="navbar">
    <ul>
        <li>
            <a href="/" >Home</a>
        </li>
        <li>
            <a href="/tier" >Tier List</a>
        </li>
        <li>
            <a href="/champion-select" >Champ Select</a>
        </li>
        <li>
            <a href="/summoner-info" >Summoner Info</a>
        </li>
        <li>
            <a href="/contact" >Contact</a>
        </li>
        <li>
            <form action="http://www.fforflash.com/search" method="get">
                <input type="text" name="query" placeholder="Search This Site" class="textbox">
                <div class="submit_div">
                    <input type="submit">
                </div>
            </form>
        </li>
    </ul>
</div>