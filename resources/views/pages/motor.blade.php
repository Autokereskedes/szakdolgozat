@include('includes.head')
<article class="motor_konfigurator_container">
    <h1>Beltér testreszabása</h1>
    <h2 class="carName">Választott autó neve</h2>
    <img class="selectedKep" src="" alt="" width="25%">
    <p class="osszAr">Jelenlegi ár: 1000 Ft</p>
    <div class="motorContainer">
        <div class="motor">
            <h3 class="motorName">motor neve</h3>
            <img class="motorPic" src="{{url('images/sablon.jpg')}}" alt="" width="10%">
            <p class="motorPower">teljesítmény</p>
            <p class="motorFuelType">üzemanyag</p>
            <p class="motorGearType">váltó</p>
            <p class="motorGearNum">sebfok</p>
        </div>
    </div>
    <nav class="confNav">
    <ul>
        <li><a href="{{url('/colorConfig')}}">Fényezés</a></li><br>
        <li><a href="{{url('/')}}">Vissza</a></li>
    </ul>
    </nav>
</article>
@include('includes.foot')