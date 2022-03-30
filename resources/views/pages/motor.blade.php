@include('includes.head')
<script src="{{ url('js/motorSelect.js') }}"></script>
<script src="{{ url('js/motor.js') }}"></script>
<article class="motor_konfigurator_container">
    <h1>Motor áttekintése</h1>
    <div class="motorContainer">
        <div>
            <h2 class="carName">Választott autó neve</h2>
            <img class="selectedKep" src="" alt="" width="100%">
        </div>
        <div class="motor">
            <h3 class="motorName">motor neve</h3>
            <p class="motorPower">teljesítmény</p>
            <p class="motorFuelType">üzemanyag</p>
            <p class="motorGearType">váltó</p>
            <p class="motorGearNum">sebfok</p>
            <p class="osszAr">Jelenlegi ár: 1000 Ft</p>
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