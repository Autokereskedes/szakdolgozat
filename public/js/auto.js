class Auto{
    constructor(elem, adat){
        this.elem = elem;

        this.modell = this.elem.children("#modell");
        this.alapár = this.elem.children("#alapar");
        this.kép = this.elem.children("#kep");
        this.konfGomb = this.elem.children("#konfiguralas");

        this.adat = adat;

        this.setAdat(this.adat);

        this.konfGomb.on("click", ()=>{
            this.konfKattintTrigger();
        });
    }

    setAdat(ertekek){
        this.modell.html(ertekek.modell);
        this.alapár.html(ertekek.alapár);
        //this.kép.attr("src",  ertekek.kép);
    }

    konfKattintTrigger(){
        let esemeny = new CustomEvent("autoKonfiguralas", {detail:this.adat});
        window.dispatchEvent(esemeny);
        console.log("kattintottam");
    }
}