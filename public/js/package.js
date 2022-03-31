$(function(){
    const csomagAjaxhivas = new MyAjax();
    const csomags = [];
    const szuloModell = $(".csomagContainer");
    const sablonModell = $(".csomag");
    let apivegpont = "/api/";
    csomagAjaxhivas.getAdat(apivegpont+"felszereless" , csomags , kiir);
    
    function kiir(){
        csomags.forEach(function(elem){
            let node = sablonModell.clone().appendTo(szuloModell);
            const obj = new Csomag(node, elem);
        })
        sablonModell.remove();
    }

});