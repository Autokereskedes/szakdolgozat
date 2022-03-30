class Interior{
    constructor(elem, adat){
        this.elem = elem;

        this.interiorName = this.elem.children(".interiorName");
        this.kép = this.elem.children(".interiorPic");
        this.interiorType = this.elem.children(".interiorType");
        this.interiorPrice = this.elem.children(".interiorPrice");
        this.interiorValGomb = this.elem.children(".interiorSel");
        
        
        this.adat = adat;

        this.setAdat(this.adat);

        this.interiorValGomb.on("click", ()=>{
            this.interiorKattintTrigger();
        });
    }

    setAdat(ertekek){
        this.interiorName.html(ertekek.szin);
        this.interiorPrice.html(ertekek.ár+" Ft");
        this.interiorType.html(ertekek.anyag);
        $(".interiorNameH").html(localStorage.getItem('belter'));
        $(".interiorTypeH").html(localStorage.getItem('belterAnyag'));
        $(".interiorPriceH").html(localStorage.getItem('belterPrice')+ " Ft");
    }

    interiorKattintTrigger(){
        let esemeny = new CustomEvent("interiorKonfiguralas", {detail:this.adat});
        window.dispatchEvent(esemeny);
        var jelAr=Number(localStorage.getItem('ar'))+Number(this.adat.ár);
        $(".osszAr").html("Jelenlegi ár a válaszott Beltérrel: "+ jelAr + " Ft");
        localStorage.setItem('belter', this.adat.szin);
        localStorage.setItem('belterAnyag', this.adat.anyag);
        localStorage.setItem('belterPrice', this.adat.ár);
        localStorage.setItem('belterId', this.adat.beltérId);
        $(".interiorNameH").html(localStorage.getItem('belter'));
        $(".interiorTypeH").html(localStorage.getItem('belterAnyag'));
        $(".interiorPriceH").html(localStorage.getItem('belterPrice')+ " Ft");
    }
}