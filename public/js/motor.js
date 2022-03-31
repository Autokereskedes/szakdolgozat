$(function(){
    const motorAjaxhivas = new MyAjax();
    const motorok = [];
    const szuloModell = $(".motorContainer");
    const sablonModell = $(".motor");
    let apivegpont = "/api/";
    motorAjaxhivas.getAdat(apivegpont+"motors" + "?q=" + localStorage.getItem('motor') , motorok , kiir);
    
    function kiir(){
        motorok.forEach(function(elem){
            let node = sablonModell.clone().appendTo(szuloModell);
            const obj = new Motor(node, elem);
        })
        sablonModell.remove();
    }

});