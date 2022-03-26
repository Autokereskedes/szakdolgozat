class Color{
    constructor(elem, adat){
        this.elem = elem;

        this.színName = this.elem.children(".colorName");
        this.kép = this.elem.children(".colorPic");
        this.színPrice = this.elem.children(".colorPrice");
        this.colorValGomb = this.elem.children(".colorSel");

        this.adat = adat;

        this.setAdat(this.adat);

        this.colorValGomb.on("click", ()=>{
            this.colorKattintTrigger();
        });
    }

    setAdat(ertekek){
        this.színName.html(ertekek.szin);
        this.színPrice.html(ertekek.ár+" Ft");
        //this.kép.attr("src", "http://127.0.0.1:8000/images/"+ertekek.kép);
        
        $(".colorNameH").html(localStorage.getItem('szin'));
        $(".colorPriceH").html(localStorage.getItem('szinPrice')+ " Ft");
    }

    colorKattintTrigger(){
        let esemeny = new CustomEvent("colorKonfiguralas", {detail:this.adat});
        window.dispatchEvent(esemeny);
        var jelAr=Number(localStorage.getItem('ar'))+Number(this.adat.ár);
        $(".osszAr").html("Jelenlegi ár a válaszott Színnel: "+ jelAr + " Ft");
        localStorage.setItem('szin', this.adat.szin);
        localStorage.setItem('szinPrice', this.adat.ár);
        $(".colorNameH").html(localStorage.getItem('szin'));
        $(".colorPriceH").html(localStorage.getItem('szinPrice')+ " Ft");
    }
}