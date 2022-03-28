$(function(){
    const ajaxhivas = new MyAjax();
    const modellek = [];
    const szuloModell = $("#jarmu_lista");
    const sablonModell = $("#sablon_auto");
    let apivegpont = "http://127.0.0.1:8000/api/";
    //let apivegpont = "http://127.0.0.1:8000/api/BMW";

    //ajaxhivas.getAdat(apivegpont+"modells", modellek, kiir);
    //ajaxhivas.getAdat(apivegpont+"modells" + "?q=", modellek , kiir);
    //console.log($('#rendezes').val());
    rendezes();

    function kiir(){
        modellek.forEach(function(elem){
            let node = sablonModell.clone().appendTo(szuloModell);
            const obj = new Auto(node, elem);
        })
        sablonModell.remove();
    }

    function rendezes(){
        let valasztottOsztaly = $('#rendezes').val();
        if (valasztottOsztaly == 'none') {
            ajaxhivas.getAdat(apivegpont+"modells", modellek, kiir);
        }else if (valasztottOsztaly == 'A_osztaly') {
            ajaxhivas.getAdat(apivegpont+"modell" + "?q=A", modellek , kiir);
        }
    }
});