class Hitel{
    constructor(elem, adat){
        this.elem = elem;

        this.kezoreszlet = this.elem.children(".hitelStarter");
        this.futamido = this.elem.children(".hitelTime");
        this.hitelValGomb = this.elem.children(".hitelSel");
        this.teljesfizetendo = this.elem.children(".hitelPay");
        this.adat = adat;

        this.setAdat(this.adat);

        this.hitelValGomb.on("click", ()=>{
            this.hitelKattintTrigger();
        });
    }

    setAdat(ertekek){
        let haviSeged = Number(localStorage.getItem('ar'))/100;
        let haviS = Number(ertekek.szorzó)*Number(haviSeged);
        let haviTelj = Number(haviS)+Number(localStorage.getItem('ar'));
        let havi = Number(haviTelj)/Number(ertekek.futamidő);
        this.teljesfizetendo.html("Összesen: " + haviTelj + " Ft");
        this.futamido.html(ertekek.futamidő + " hónapos futamidővel: " + havi + " Ft / Hónap");
        let kezdoSeged = Number(haviSeged)*Number(ertekek.kezdőrészlet);
        this.kezoreszlet.html("Kezdő részlet: " + kezdoSeged + " Ft | " + ertekek.kezdőrészlet + "%");
        //this.kép.attr("src", "http://127.0.0.1:8000/images/"+ertekek.kép);
    }

    hitelKattintTrigger(){
        let esemeny = new CustomEvent("hitelKonfiguralas", {detail:this.adat});
        window.dispatchEvent(esemeny);
        console.log(this.adat.futamidő);
        console.log(this.adat.kezdőrészlet);
    }
}