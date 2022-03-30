class Hitel{
    constructor(elem, adat){
        this.elem = elem;

        this.kezoreszlet = this.elem.children(".hitelStarter");
        this.futamido = this.elem.children(".hitelTime");
        this.hitelValGomb = this.elem.children(".hitelSel");
        this.teljesfizetendo = this.elem.children(".hitelPay");
        this.adat = adat;
        this.modellinp=this.elem.find("#modell");
        this.felszerelesCsomaginp=this.elem.find("#felszerelesCsomag");
        this.FIdinp=this.elem.find("#FId");
        this.fényIdinp=this.elem.find("#fényId");
        this.beltérIdinp=this.elem.find("#beltérId");
        this.összárinp=this.elem.find("#összár");
        this.hazoninp=this.elem.find("#hazon");
        this.státuszinp=this.elem.find("#státusz");

        this.setAdat(this.adat);
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
        
        this.modellinp.val(localStorage.getItem('modell'));
        this.felszerelesCsomaginp.val(localStorage.getItem('csomag'));
        this.fényIdinp.val(localStorage.getItem('szinId'));
        this.beltérIdinp.val(localStorage.getItem('belterId'));
        this.összárinp.val(haviTelj);
        this.hazoninp.val(ertekek.hazon);
        this.státuszinp.val("Kezdő: " + kezdoSeged + "Ft, Futam: "+ertekek.futamidő+"Hónap, Havi: "+havi+"Ft");
    }
}