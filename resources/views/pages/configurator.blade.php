@include('includes.head')
<article class="konfigurator_container">
    <h1 id="jarmu">Járműveink</h1>
    <div id="jarmu_konfigurator">
        <div id="jarmu_osztalyok">
            @foreach ($listItems as $listItem)
                <button>{{ $listItem->kivNev }}</button>
            @endforeach
        </div>
        <div>
            <!--<div id="sablon_auto">
                <h2 id="nev">példa</h2>
                <span id="alapar">100000</span>
                <img src="{{url('images/sablon.jpg')}}" alt="" width="10%">
                <button>Konfigurálás</button>
            </div>-->
            <!--
            @foreach ($listItems as $listItem)
                <p>
                    {{ $listItem->kivNev}}
                    {{ $listItem->ajtóSzáma}}
                    {{ $listItem->ülésSzáma}}
                </p>   
            @endforeach
            -->
        </div>
    </div>
</article>
@include('includes.foot')