class Csomag{
    constructor(elem, adat){
        this.elem = elem;

        this.csomagName = this.elem.children(".csomagName");
        this.csomagType = this.elem.children(".csomagType");
        this.csomagPrice = this.elem.children(".csomagPrice");
        this.csomagValGomb = this.elem.children(".csomagSel");        
        this.adat = adat;
        
        this.setAdat(this.adat);

        this.csomagValGomb.on("click", ()=>{
            this.csomagKattintTrigger();
        });
    }

    setAdat(ertekek){
        this.csomagName.html(ertekek.felszerelesCsomag);
        this.csomagPrice.html(ertekek.ár+" Ft");
        this.csomagType.html(ertekek.leírás);
        $(".csomagNameH").html(localStorage.getItem('csomag'));
        $(".csomagTypeH").html(localStorage.getItem('csomagType'));
        $(".csomagPriceH").html(localStorage.getItem('csomagPrice')+ " Ft");
    }

    csomagKattintTrigger(){
        let esemeny = new CustomEvent("csomagKonfiguralas", {detail:this.adat});
        window.dispatchEvent(esemeny);
        var jelAr=Number(localStorage.getItem('ar'))+Number(this.adat.ár);
        $(".osszAr").html("Jelenlegi ár a válaszott Csomaggal: "+ jelAr + " Ft");
        localStorage.setItem('csomag', this.adat.felszerelesCsomag);
        localStorage.setItem('csomagType', this.adat.leírás);
        localStorage.setItem('csomagPrice', this.adat.ár);
        $(".csomagNameH").html(localStorage.getItem('csomag'));
        $(".csomagTypeH").html(localStorage.getItem('csomagType'));
        $(".csomagPriceH").html(localStorage.getItem('csomagPrice')+ " Ft");
    }
}