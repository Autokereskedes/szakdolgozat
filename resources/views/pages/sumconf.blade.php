@include('includes.head')
    <script src="{{ url('js/sumSelect.js') }}"></script>
    <script src="{{ url('js/sum.js') }}"></script>
    <script>
        var jelArSum=Number(localStorage.getItem('ar'))+Number(localStorage.getItem('csomagPrice'));
        localStorage.setItem('ar', jelArSum);
        $('.osszAr').html("Az általad konfigurált autó ára: "+localStorage.getItem('ar') + " Ft");
        
    </script>
<article class="sum_konfigurator_container">
@if (Route::has('login'))
                    @auth
                    <h2 class="carName">Választott autó neve</h2>
    <img class="selectedKep" src="" alt="" width="25%">
    <p class="osszAr">Jelenlegi ár: 1000 Ft</p>
    <div class="sum">
        <Table class="sumTable">
            <h1>Összegzés</h1>
            <th>Motor</th><th>Fényezés</th><th>Beltér</th><th>Csomag</th><tr>
            <td class="sumMotorName">td</td> <td class="sumColorName">td</td> <td class="sumInteriorName">td</td> <td class="sumPackageName">td</td> <tr>
            <td class="sumMotorType">td</td> <td class="sumColorPrice">td</td> <td class="sumInteriorPrice">td</td> <td class="sumPackagePrice">td</td>
        </Table>
        <form method="POST" action='{{route("rendelesLeadasaName")}}' >
                    <input type="hidden" id="Bmodell" name="modell">
                    <input type="hidden" id="BfelszerelesCsomag" name="felszerelesCsomag">
                    <input type="hidden" id="BFId" name="FId" value="{{ Auth::user()->id }}">
                    <input type="hidden" id="BfényId" name="fényId">
                    <input type="hidden" id="BbeltérId" name="beltérId">
                    <input type="hidden" id="Bösszár" name="összár">
                    <input type="hidden" id="BBhazon" name="hazon" value="13">
                    <input type="hidden" id="Bstátusz" name="státusz" value="Egy összegben tervezi kifizetni.">
                    <input type="submit" class="BbuySel" value="Egy összegben fizetek">
                    </form>
        <h1 class="hitelText">Hitel vállalás</h1>
        <div class="hitelList">
                <div class="hitel">
                    <p class="hitelStarter"></p>
                    <p class="hitelTime"></p>
                    <p class="hitelPay"></p>
                    <form method="POST" action='{{route("rendelesLeadasaName")}}' >
                    <input type="hidden" id="modell" name="modell">
                    <input type="hidden" id="felszerelesCsomag" name="felszerelesCsomag">
                    <input type="hidden" id="FId" name="FId" value="{{ Auth::user()->id }}">
                    <input type="hidden" id="fényId" name="fényId">
                    <input type="hidden" id="beltérId" name="beltérId">
                    <input type="hidden" id="összár" name="összár">
                    <input type="hidden" id="hazon" name="hazon">
                    <input type="hidden" id="státusz" name="státusz">
                    <input type="submit" class="hitelSel" value="Ezt választom">
                    </form>
                </div>
                </div>
    </div>
                    @else
                        <h1>Jelentkezz be a folytatáshoz</h1>  
                    @endauth
                    @endif
</article>
@include('includes.foot')