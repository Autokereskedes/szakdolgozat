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
        this.alapár.html(ertekek.alapár+" Ft");
        this.kép.attr("src", "http://127.0.0.1:8000/images/"+ertekek.kép);
    }

    konfKattintTrigger(){
        let esemeny = new CustomEvent("autoKonfiguralas", {detail:this.adat});
        window.dispatchEvent(esemeny);
        localStorage.clear();
        localStorage.setItem('modell', this.adat.modell);
        localStorage.setItem('kivitel', this.adat.kivId);
        localStorage.setItem('ar', this.adat.alapár);
        localStorage.setItem('kep', this.adat.kép);
        localStorage.setItem('motor', this.adat.motor);
        location.replace("/motor");
    }
    rendezesValaszt(){
        let esemeny = new CustomEvent("autoRendezes", {detail:this.adat});
        window.dispatchEvent(esemeny);
    }
}