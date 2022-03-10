class Auto{
    constructor(elem, adat){
        this.elem = elem;

        this.modell = this.elem.children("#modell");
        this.alapar = this.elem.children("#alapar");
        this.kep = this.elem.children("#kep");
        this.konfGomb = this.elem.children("#konfiguralas");

        this.adat = adat;

        this.setAdat(this.adat);

        this.konfGomb.on("click", ()=>{
            this.konfKattintTrigger();
        });
    }

    setAdat(ertekek){
        this.modell.html(ertekek.modell);
        this.alapar.html(ertekek.alapar);
        this.kep.attr("src", ertekek.kep);
    }

    konfKattintTrigger(){
        let esemeny = new CustomEvent("autoKonfiguralas", {detail:this.adat});
        window.dispatchEvent(esemeny);
    }
}