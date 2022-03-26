$(function(){
    const interiorAjaxhivas = new MyAjax();
    const interiors = [];
    const szuloModell = $(".interiorContainer");
    const sablonModell = $(".interior");
    let apivegpont = "http://127.0.0.1:8000/api/";
    interiorAjaxhivas.getAdat(apivegpont+"interiors" , interiors , kiir);
    
    function kiir(){
        interiors.forEach(function(elem){
            let node = sablonModell.clone().appendTo(szuloModell);
            const obj = new Interior(node, elem);
        })
        sablonModell.remove();
    }

});