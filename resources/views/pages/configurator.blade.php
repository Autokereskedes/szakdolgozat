@include('includes.head')
<script>
    localStorage.clear();
</script>
<article class="konfigurator_container">
    <div id="jarmu_konfigurator">
        <div id="jarmu_fejlec">
            <h1>Járműveink</h1>
            <form id="rendezes" style="margin-top:7px; text-align:center;">
                <label for="rendezes">Rendezés: </label>
                <select name="rendezes" id="rendezes">
                    <option value="A_osztaly">A osztály</option>
                    <option value="C_osztaly">C osztály</option>
                    <option value="G_osztaly">G osztály</option>
                    <option value="E_osztaly">E osztály</option>
                </select>
            </form>
        </div>
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