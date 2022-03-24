class Motor{
    constructor(elem, adat){
        this.elem = elem;

        this.motor = this.elem.children("#modell");
        this.uzemanyag = this.elem.children("#alapar");
        this.teljesitmeny = this.elem.children("#kep");
        this.konfGomb = this.elem.children("#konfiguralas");

        this.adat = adat;

        this.setAdat(this.adat);

        this.konfGomb.on("click", ()=>{
            this.konfKattintTrigger();
        });
    }

    setAdat(ertekek){
       /* this.modell.html(ertekek.modell);
        this.alapár.html(ertekek.alapár);     */
        //this.kép.attr("src",  ertekek.kép);
    }

    konfKattintTrigger(){
        /*let esemeny = new CustomEvent("autoKonfiguralas", {detail:this.adat});
        window.dispatchEvent(esemeny);
        localStorage.clear();
        localStorage.setItem('modell', this.adat.modell);
        localStorage.setItem('kivitel', this.adat.kivId);
        localStorage.setItem('ar', this.adat.alapár);
        localStorage.setItem('kep', this.adat.kép);*/
    }
}