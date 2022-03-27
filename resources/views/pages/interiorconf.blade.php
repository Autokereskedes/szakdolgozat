@include('includes.head')
    <script src="{{ url('js/interiorSelect.js') }}"></script>
    <script src="{{ url('js/interior.js') }}"></script>
<script>
    var jelArSegedInt=Number(localStorage.getItem('ar'))+Number(localStorage.getItem('szinPrice'));
    localStorage.setItem('belter', 'Fekete');
    localStorage.setItem('belterAnyag', 'ARTICO műbőr / DINAMICA mikros');
    localStorage.setItem('belterPrice', '0');
    var jelArInt=Number(jelArSegedInt)-Number(localStorage.getItem('belterPrice'));
    localStorage.setItem('ar', jelArInt);
    $('.osszAr').html("Jelenlegi ár: "+localStorage.getItem('ar') + " Ft");
</script>
<article class="interior_konfigurator_container">
    <h1>Beltér testreszabása</h1>
    <h2 class="carName">Választott autó neve</h2>
    <h2 class="interiorNameH">Választott belső neve</h2><br>
    <h2 class="interiorTypeH">Választott belső anyaga</h2><br>
    <h2 class="interiorPriceH">Választott szín ára</h2><br>
    <p class="osszAr">Jelenlegi ár: 1000 Ft</p>
    <img class="selectedKep" src="" alt="" width="25%">
    <div class="interiorContainer">
        <div class="interior">
            <h3 class="interiorName">Beltér színe</h3>
            <img class="interiorPic" src="{{url('images/sablon.jpg')}}" alt="" width="10%">
            <p class="interiorType">Beltér anyaga</p>
            <p class="interiorPrice">Beltér ára</p>
            <button class="interiorSel">Választás</button>
        </div>
    </div>
    <nav class="confNav">
    <ul>
        <li><a href="{{url('/packageConfig')}}">Csomag választása</a></li><br>
        <li><a href="{{url('/colorConfig')}}">Vissza</a></li>
    </ul>
    </nav>
</article>
@include('includes.foot')