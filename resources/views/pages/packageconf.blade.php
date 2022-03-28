@include('includes.head')
<<<<<<< Updated upstream
    <script src="{{ url('js/packageSelect.js') }}"></script>
    <script src="{{ url('js/package.js') }}"></script>
<script>
    var jelArSegedPck=Number(localStorage.getItem('ar'))+Number(localStorage.getItem('belterPrice'));
    localStorage.setItem('csomag', '1 Economy');
    localStorage.setItem('csomagType', 'Parkoló csomag, Tükör csomag, Konnektivitás csomag - Navigáció, 10,25"-os Média kijelző');
    localStorage.setItem('csomagPrice', '0');
    var jelArPck=Number(jelArSegedPck)-Number(localStorage.getItem('csomagPrice'));
    localStorage.setItem('ar', jelArPck);
    $('.osszAr').html("Jelenlegi ár: "+localStorage.getItem('ar') + " Ft");
    
</script>
<article class="package_konfigurator_container">
    <h1>Csomag választása</h1>
    <h2 class="carName">Választott autó neve</h2>
    <h2 class="csomagNameH">Választott csomag neve</h2><br>
    <h2 class="csomagTypeH">Választott csomag leírása</h2><br>
    <h2 class="csomagPriceH">Választott csomag ára</h2><br>
    <p class="osszAr">Jelenlegi ár: 1000 Ft</p>
    <img class="selectedKep" src="" alt="" width="25%">
    <div class="csomagContainer">
        <div class="csomag">
            <h3 class="csomagName">csomag neve</h3>
            <img class="csomagPic" src="{{url('images/sablon.jpg')}}" alt="" width="10%">
            <p class="csomagType">csomag leirasa</p>
            <p class="csomagPrice">csomag ára</p>
            <button class="csomagSel">Választás</button>
        </div>
    </div>
    <nav class="confNav">
    <ul>
        <li><a href="{{url('/')}}">Összesítés</a></li><br>
        <li><a href="{{url('/interiorConfig')}}">Vissza</a></li>
    </ul>
    </nav>
=======
<article>
    
>>>>>>> Stashed changes
</article>
@include('includes.foot')