@include('includes.head')
<article class="interior_konfigurator_container">
    <h1>Beltér testreszabása</h1>
    <h2 class="carName">Választott autó neve</h2>
    <img id="kep" src="{{url('images/sablon.jpg')}}" alt="" width="25%">
    <p class="osszAr">Jelenlegi ár: 1000 Ft</p>
    <div class="interiorContainer">
        <div class="interior">
            <h3 class="interiorName">Beltér színe<h3>
            <img class="interiorPic" src="{{url('images/sablon.jpg')}}" alt="" width="10%">
            <p class="interiorType">Beltér anyaga</p>
            <p class="interiorPrice">Beltér ára</p>
        </div>
        <div class="interior">
            <h3 class="interiorName">Beltér színe<h3>
            <img class="interiorPic" src="{{url('images/sablon.jpg')}}" alt="" width="10%">
            <p class="interiorType">Beltér anyaga</p>
            <p class="interiorPrice">Beltér ára</p>
        </div>
        <div class="interior">
            <h3 class="interiorName">Beltér színe<h3>
            <img class="interiorPic" src="{{url('images/sablon.jpg')}}" alt="" width="10%">
            <p class="interiorType">Beltér anyaga</p>
            <p class="interiorPrice">Beltér ára</p>
        </div>
        <div class="interior">
            <h3 class="interiorName">Beltér színe<h3>
            <img class="interiorPic" src="{{url('images/sablon.jpg')}}" alt="" width="10%">
            <p class="interiorType">Beltér anyaga</p>
            <p class="interiorPrice">Beltér ára</p>
        </div>
        <div class="interior">
            <h3 class="interiorName">Beltér színe<h3>
            <img class="interiorPic" src="{{url('images/sablon.jpg')}}" alt="" width="10%">
            <p class="interiorType">Beltér anyaga</p>
            <p class="interiorPrice">Beltér ára</p>
        </div>
    </div>
    <nav class="confNav">
    <ul>
        <li><a href="{{url('/')}}">Összesítés</a></li><br>
        <li><a href="{{url('/colorConfig')}}">Vissza</a></li>
    </ul>
    </nav>
</article>
@include('includes.foot')