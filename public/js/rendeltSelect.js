class Rendelt{
    constructor(elem, adat){
        this.elem = elem;

        this.modell = this.elem.children(".rmodell");
        this.ar = this.elem.children(".rar");
        this.statusz = this.elem.children(".rstatus");
        this.user = this.elem.children(".ruser"); 
        this.adat = adat;
        
        this.setAdat(this.adat);
    }

    setAdat(ertekek){
        this.modell.html(ertekek.modell);
        this.ar.html(ertekek.összár+" Ft");
        this.statusz.html(ertekek.státusz);
        this.user.html(ertekek.userId);
    }
}