class Hitel{
    constructor(elem, adat){
        this.elem = elem;

        this.kezoreszlet = this.elem.children(".hitelStarter");
        this.futamido = this.elem.children(".hitelTime");
        this.hitelValGomb = this.elem.children(".hitelSel");
        this.adat = adat;

        this.setAdat(this.adat);

        this.hitelValGomb.on("click", ()=>{
            this.hitelKattintTrigger();
        });
    }

    setAdat(ertekek){
        this.kezoreszlet.html(ertekek.kezdőrészlet);
        this.futamido.html(ertekek.futamidő);
        //this.kép.attr("src", "http://127.0.0.1:8000/images/"+ertekek.kép);
    }

    hitelKattintTrigger(){
        let esemeny = new CustomEvent("hitelKonfiguralas", {detail:this.adat});
        window.dispatchEvent(esemeny);
        console.log("asd");
    }
}