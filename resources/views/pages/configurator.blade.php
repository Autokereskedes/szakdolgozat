@include('includes.head')
<section>
    ez itt a konfigurátor section
</section>
<article>
    <p>Autó kivitelek:</p>
    @foreach ($listItems as $listItem)
        <div class="flex" style="align-items: center;">
            <p>
                {{ $listItem->kivNev}}
                {{ $listItem->ajtóSzáma}}
                {{ $listItem->ülésSzáma}}
            </p>   
        </div>
    @endforeach
</article>
@include('includes.foot')