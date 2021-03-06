$(function(){
    const ajaxhivas = new MyAjax();
    const modellek = [];
    const szuloModell = $("#jarmu_lista");
    const sablonModell = $("#sablon_auto");
    let apivegpont = "/api/";
    //let apiRendez = 'http://127.0.0.1:8000/api/modells/'+osztaly;

    ajaxhivas.getAdat(apivegpont+"modells", modellek, kiir);

    $('#rendezes').change(function(){
        let valasztottOsztaly = $('#rendezes').val();
        if (valasztottOsztaly == 'none') {
            ajaxhivas.getAdat(apivegpont+"modells", modellek, kiir);
        }else if (valasztottOsztaly == 'A_osztaly') {
            $("#jarmu_lista").empty();
            ajaxhivas.getAdat(apivegpont+"modell" + "?q=A", modellek , kiir);
        }
        else if (valasztottOsztaly == 'C_osztaly') {
            $("#jarmu_lista").empty();
            ajaxhivas.getAdat(apivegpont+"modell" + "?q=C", modellek , kiir);
        }
        else if (valasztottOsztaly == 'G_osztaly') {
            $("#jarmu_lista").empty();
            ajaxhivas.getAdat(apivegpont+"modell" + "?q=G", modellek , kiir);
        }
        else if (valasztottOsztaly == 'E_osztaly') {
            $("#jarmu_lista").empty();
            ajaxhivas.getAdat(apivegpont+"modell" + "?q=E", modellek , kiir);
        }
    })
    //ajaxhivas.getAdat(apiRendez, modellek, kiir);
    //ajaxhivas.getAdat(apivegpont+"modell" + "?q=A", modellek , kiir);
    //console.log($('#rendezes').val());
    //rendezes();

    function kiir(){
        modellek.forEach(function(elem){
            let node = sablonModell.clone().appendTo(szuloModell);
            const obj = new Auto(node, elem);
        })
        sablonModell.remove();
    }
});