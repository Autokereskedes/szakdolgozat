@include('includes.head')
<script>
    var jelArSegedCol=Number(localStorage.getItem('ar'))-Number(localStorage.getItem('szinPrice'));
    localStorage.setItem('szin', 'Polár-fehér uni fényezés');
    localStorage.setItem('szinPrice', '0');
    var jelArCol=Number(jelArSegedCol)-Number(localStorage.getItem('interiorPrice'));
    localStorage.setItem('ar', jelArCol);
</script>
<article class="color_konfigurator_container">
    <h1>Autó fényezése</h1>
    <h2 class="carName">Választott autó neve</h2><br>
    <h2 class="colorNameH">Választott szín neve</h2><br>
    <h2 class="colorPriceH">Választott szín ára</h2><br>
    <p class="osszAr">Jelenlegi ár: 1000 Ft</p>
    <img class="selectedKep" src="" alt="" width="25%">
    <div class="colorContainer">
        <div class="color">
            <h3 class="colorName">Szín neve</h3>
            <img class="colorPic" src="{{url('images/sablon.jpg')}}" alt="" width="10%">
            <p class="colorPrice">Szín ára</p>
            <button class="colorSel">Választás</button>
        </div>
    </div>
    <nav class="confNav">
    <ul>
        <li><a href="{{url('/interiorConfig')}}">Beltér</a></li><br>
        <li><a href="{{url('/motor')}}">Vissza</a></li>
    </ul>
    </nav>
</article>
@include('includes.foot')