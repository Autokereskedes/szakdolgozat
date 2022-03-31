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
        /*let haviSeged = Number(localStorage.getItem('ar'))/100;
        let haviS = Number(ertekek.szorzó)*Number(haviSeged);
        let haviTelj = Number(haviS)+Number(localStorage.getItem('ar'));
        let havi = Number(haviTelj)/Number(ertekek.futamidő);
        this.teljesfizetendo.html("Összesen: " + haviTelj + " Ft");
        this.futamido.html(ertekek.futamidő + " hónapos futamidővel: " + havi + " Ft / Hónap");
        let kezdoSeged = Number(haviSeged)*Number(ertekek.kezdőrészlet);
        this.kezoreszlet.html("Kezdő részlet: " + kezdoSeged + " Ft | " + ertekek.kezdőrészlet + "%");*/

        let ar1 = Number(localStorage.getItem('ar'))/100;
        let arszorzo = Number(ertekek.szorzó)*Number(ar1);
        let teljesAr = Number(arszorzo)+Number(localStorage.getItem('ar'));
        let teljesAr1 = Number(teljesAr)/100;
        this.teljesfizetendo.html("Összesen: " + teljesAr + " Ft");
        let kezdoReszSeged = Number(teljesAr1)*Number(ertekek.kezdőrészlet);
        this.kezoreszlet.html("Kezdő részlet: " + kezdoReszSeged + " Ft | " + ertekek.kezdőrészlet + "%");
        let haviSeged = Number(teljesAr)-Number(kezdoReszSeged);
        let havi = Number(haviSeged)/Number(ertekek.futamidő);
        this.futamido.html(ertekek.futamidő + " hónapos futamidővel: " + havi + " Ft / Hónap");
        
        this.modellinp.val(localStorage.getItem('modell'));
        this.felszerelesCsomaginp.val(localStorage.getItem('csomag'));
        this.fényIdinp.val(localStorage.getItem('szinId'));
        this.beltérIdinp.val(localStorage.getItem('belterId'));
        this.összárinp.val(teljesAr);
        this.hazoninp.val(ertekek.hazon);
        this.státuszinp.val("Kezdő: " + kezdoReszSeged + "Ft, Futam: "+ertekek.futamidő+"Hónap, Havi: "+havi+"Ft");
    }
}