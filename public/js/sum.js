$(function(){
    $(".sumMotorName").html(localStorage.getItem('motor'));
    $(".sumMotorType").html(localStorage.getItem('motorSpecs'));
    $(".sumColorName").html(localStorage.getItem('szin'));
    $(".sumColorPrice").html(localStorage.getItem('szinPrice')+" Ft");
    $(".sumInteriorName").html(localStorage.getItem('belter'));
    $(".sumInteriorPrice").html(localStorage.getItem('belterPrice')+" Ft");
    $(".sumPackageName").html(localStorage.getItem('csomag'));
    $(".sumPackagePrice").html(localStorage.getItem('csomagPrice')+" Ft");

    const hitelAjaxhivas = new MyAjax();
    const hitels = [];
    const szuloModell = $(".hitelList");
    const sablonModell = $(".hitel");
    let apivegpont = "http://127.0.0.1:8000/api/";
    hitelAjaxhivas.getAdat(apivegpont+"hitels" , hitels , kiir);
    
    function kiir(){
        hitels.forEach(function(elem){
            let node = sablonModell.clone().appendTo(szuloModell);
            const obj = new Hitel(node, elem);
        })
        sablonModell.remove();
    }
    
        $("#Bmodell").val(localStorage.getItem('modell'));
        $("#BfelszerelesCsomag").val(localStorage.getItem('csomag'));
        $("#BfényId").val(localStorage.getItem('szinId'));
        $("#BbeltérId").val(localStorage.getItem('belterId'));
        $("#Bösszár").val(localStorage.getItem('ar'));
});