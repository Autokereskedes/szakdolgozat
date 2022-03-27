$(function(){
    const csomagAjaxhivas = new MyAjax();
    const csomags = [];
    const szuloModell = $(".csomagContainer");
    const sablonModell = $(".csomag");
    let apivegpont = "http://127.0.0.1:8000/api/";
    csomagAjaxhivas.getAdat(apivegpont+"felszereless" , csomags , kiir);
    
    function kiir(){
        csomags.forEach(function(elem){
            let node = sablonModell.clone().appendTo(szuloModell);
            const obj = new Csomag(node, elem);
        })
        sablonModell.remove();
    }

});