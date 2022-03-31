$(function(){
    const colorAjaxhivas = new MyAjax();
    const colors = [];
    const szuloModell = $(".colorContainer");
    const sablonModell = $(".color");
    let apivegpont = "/api/";
    colorAjaxhivas.getAdat(apivegpont+"colors" , colors , kiir);
    
    function kiir(){
        colors.forEach(function(elem){
            let node = sablonModell.clone().appendTo(szuloModell);
            const obj = new Color(node, elem);
        })
        sablonModell.remove();
    }

});