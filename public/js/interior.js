$(function(){
    const interiorAjaxhivas = new MyAjax();
    const interiors = [];
    const szuloModell = $(".interiorContainer");
    const sablonModell = $(".interior");
    let apivegpont = "/api/";
    interiorAjaxhivas.getAdat(apivegpont+"interiors" , interiors , kiir);
    
    function kiir(){
        interiors.forEach(function(elem){
            let node = sablonModell.clone().appendTo(szuloModell);
            const obj = new Interior(node, elem);
        })
        sablonModell.remove();
    }

});