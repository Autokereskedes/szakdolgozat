$(function(){
    console.log(localStorage.getItem('modell'));
    $('.carName').html(localStorage.getItem('modell'));
    $('.osszAr').html("Jelenlegi ár: "+localStorage.getItem('ar') + " Ft");
    //$('.kep').attr("src",  localStorage.getItem('kep'));
    $('.kep').attr("src",  "http://127.0.0.1:8000/images/sablon.jpg");
})