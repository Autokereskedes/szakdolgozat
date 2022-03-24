$(function(){
    const motorAjaxhivas = new MyAjax();
    const motorok = [];
    const szuloModell = $(".motorContainer");
    const sablonModell = $(".motor");
    let apivegpont = "http://127.0.0.1:8000/api/";
    motorAjaxhivas.getAdat(apivegpont+"motors" + "?q=" + localStorage.getItem('motor') , motorok , kiir);
    
    function kiir(){
        motorok.forEach(function(elem){
            let node = sablonModell.clone().appendTo(szuloModell);
            const obj = new Motor(node, elem);
        })
        sablonModell.remove();
    }

});