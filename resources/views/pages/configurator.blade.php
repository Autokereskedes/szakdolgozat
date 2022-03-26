@include('includes.head')
<script>
    localStorage.clear();
</script>
<article class="konfigurator_container">
    <h1 id="jarmu">Járműveink</h1>
    <div id="jarmu_konfigurator">
        <div id="jarmu_lista">
            <div id="sablon_auto">
                <h2 id="modell">példa</h2>
                <span id="alapar">100000</span><br>
                <img id="kep" src="{{url('images/sablon.jpg')}}" alt="" width="100px"><br>
                <button id="konfiguralas">Konfigurálás</button>
            </div>
        </div>
    </div>
</article>
@include('includes.foot')