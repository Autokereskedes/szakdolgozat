$(function(){
    $('.carName').html(localStorage.getItem('modell'));
    const valasztottAutoKep="http://127.0.0.1:8000/images/"+localStorage.getItem('kep');
    console.log(valasztottAutoKep);
    $('.selectedKep').attr("src", valasztottAutoKep);
    $('.osszAr').html("Jelenlegi ár: "+localStorage.getItem('ar') + " Ft");
    //$('.kep').attr("src",  "http://127.0.0.1:8000/images/sablon.jpg");
})