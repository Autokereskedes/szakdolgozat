$(function(){
    const ajaxhivas = new MyAjax();
    const modellek = [];
    const szuloModell = $("#jarmu_lista");
    const sablonModell = $("#sablon_auto");
    let apivegpont = "http://127.0.0.1:8000/api/";
    //let apivegpont = "http://127.0.0.1:8000/api/BMW";

    ajaxhivas.getAdat(apivegpont+"modells", modellek, kiir);
    
    function kiir(){
        console.log(modellek);
        modellek.forEach(function(elem){
            let node = sablonModell.clone().appendTo(szuloModell);
            const obj = new Auto(node, elem);
        })
        sablonModell.remove();
    }

});