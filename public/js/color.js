$(function(){
    const colorAjaxhivas = new MyAjax();
    const colors = [];
    const szuloModell = $(".colorContainer");
    const sablonModell = $(".color");
    let apivegpont = "http://127.0.0.1:8000/api/";
    colorAjaxhivas.getAdat(apivegpont+"colors" , colors , kiir);
    
    function kiir(){
        colors.forEach(function(elem){
            let node = sablonModell.clone().appendTo(szuloModell);
            const obj = new Color(node, elem);
        })
        sablonModell.remove();
    }

});