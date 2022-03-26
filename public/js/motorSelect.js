class Motor{
    constructor(elem, adat){
        this.elem = elem;

        this.motor = this.elem.children(".motorName");
        this.kép = this.elem.children(".motorPic");
        this.teljesítmény = this.elem.children(".motorPower");
        this.üzemanyag = this.elem.children(".motorFuelType");
        this.váltó = this.elem.children(".motorGearType");
        this.sebességfokozat = this.elem.children(".motorGearNum");

        this.adat = adat;

        this.setAdat(this.adat);
    }

    setAdat(ertekek){
        this.motor.html(ertekek.motor);
        this.kép.attr("src",  "http://127.0.0.1:8000/images/sablon.jpg");
        //this.kép.attr("src",  "http://127.0.0.1:8000/images/"+ertekek.kép);
        this.teljesítmény.html(ertekek.teljesítmény);
        this.üzemanyag.html(ertekek.üzemanyag);
        this.váltó.html(ertekek.váltó);
        this.sebességfokozat.html(ertekek.sebességfokozat);
    }
}