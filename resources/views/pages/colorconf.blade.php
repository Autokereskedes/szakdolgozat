@include('includes.head')
<article class="color_konfigurator_container">
    <h1>Autó fényezése</h1>
    <h2 className="carName">Választott autó neve</h2>
    <img id="kep" src="{{url('images/sablon.jpg')}}" alt="" width="25%">
    <p class="osszAr">Jelenlegi ár: 1000 Ft</p>
    <div class="colorContainer">
        <div class="color">
            <h3 class="colorName">Szín neve<h3>
            <img class="colorPic" src="{{url('images/sablon.jpg')}}" alt="" width="10%">
            <p class="colorPrice">Szín ára</p>
        </div>
        <div class="color">
            <h3 class="colorName">Szín neve<h3>
            <img class="colorPic" src="{{url('images/sablon.jpg')}}" alt="" width="10%">
            <p class="colorPrice">Szín ára</p>
        </div>
        <div class="color">
            <h3 class="colorName">Szín neve<h3>
            <img class="colorPic" src="{{url('images/sablon.jpg')}}" alt="" width="10%">
            <p class="colorPrice">Szín ára</p>
        </div>
        <div class="color">
            <h3 class="colorName">Szín neve<h3>
            <img class="colorPic" src="{{url('images/sablon.jpg')}}" alt="" width="10%">
            <p class="colorPrice">Szín ára</p>
        </div>
        <div class="color">
            <h3 class="colorName">Szín neve<h3>
            <img class="colorPic" src="{{url('images/sablon.jpg')}}" alt="" width="10%">
            <p class="colorPrice">Szín ára</p>
        </div>
    </div>
    <nav class="confNav">
    <ul>
        <li><a href="{{url('/interiorConfig')}}">Beltér</a></li><br>
        <li><a href="{{url('/')}}">Vissza</a></li>
    </ul>
    </nav>
</article>
@include('includes.foot')