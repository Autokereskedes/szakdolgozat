@include('includes.head')
    <script src="{{ url('js/sumSelect.js') }}"></script>
    <script src="{{ url('js/sum.js') }}"></script>
    <script>
        var jelArSum=Number(localStorage.getItem('ar'))+Number(localStorage.getItem('csomagPrice'));
        localStorage.setItem('ar', jelArSum);
        $('.osszAr').html("Az általad konfigurált autó ára: "+localStorage.getItem('ar') + " Ft");
    </script>
<article class="sum_konfigurator_container">
    <h2 class="carName">Választott autó neve</h2>
    <img class="selectedKep" src="" alt="" width="25%">
    <p class="osszAr">Jelenlegi ár: 1000 Ft</p>
    <div class="sum">
        <Table>
            <h1>Összegzés</h1>
            <th>Motor</th><th>Fényezés</th><th>Beltér</th><th>Csomag</th><tr>
            <td class="sumMotorName">td</td> <td class="sumColorName">td</td> <td class="sumInteriorName">td</td> <td class="sumPackageName">td</td> <tr>
            <td class="sumMotorType">td</td> <td class="sumColorPrice">td</td> <td class="sumInteriorPrice">td</td> <td class="sumPackagePrice">td</td>
        </Table>
        <button>Ajánlat elfogadása teljes összeg kifizetésével</button>
        
        <h1>Hitel vállalás</h1>
        
        <table class="hitelList">
                <th>Kezdőrészlet</th><th>Futamidő</th>
                <tr class="hitel">
                    <td class="hitelStarter"></td>
                    <td class="hitelTime"></td>
                    <td><button class="hitelSel">Ezt az opciót választom</button></td>
                </tr>
        </table>
    </div>
</article>
@include('includes.foot')