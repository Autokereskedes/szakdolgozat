$(function(){
    const rendeltAjaxhivas = new MyAjax();
    const rendelesek = [];
    const szuloModell = $(".rendeltAutok");
    const sablonModell = $(".rendeltAuto");
    let apivegpont = "http://127.0.0.1:8000/api/";
    let userId = $("#user").val();
    rendeltAjaxhivas.getAdat(apivegpont+"rendelt"+"?q="+userId, rendelesek , kiir);
    
    function kiir(){
        rendelesek.forEach(function(elem){
            let node = sablonModell.clone().appendTo(szuloModell);
            const obj = new Rendelt(node, elem);
        })
        sablonModell.remove();
    }

});