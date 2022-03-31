@include('includes.head')
<script>
    localStorage.clear();
</script>
<article class="konfigurator_container">
    <div id="jarmu_konfigurator">
        <div id="jarmu_fejlec">
            <h1>Járműveink</h1>
            <form style="margin-top:7px; text-align:center;">
                <label for="rendezes">Rendezés: </label>
                <select name="rendezes" id="rendezes">
                    <option value="none">Válasszon</option>
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
                <img id="kep" src="{{url('images/sablon.jpg')}}" alt=""><br>
                <p id="eleresiStatus" style="color:green; margin:0; position:relative;">Elérhető<img id="" src="{{url('images/avaliable.jpg')}}" alt="" width="10%"></p>
                <button id="konfiguralas">Konfigurálás</button>
            </div>
        </div>
    </div>
</article>
@include('includes.foot')