class Teszt{
    constructor(elem, adat){
        this.elem=elem;
        this.adat=adat;
        this.kerdes=this.elem.children(".kerdes");
        this.v1=this.elem.children(".v1");
        this.v2=this.elem.children(".v2");
        this.v3=this.elem.children(".v3");
        this.v4=this.elem.children(".v4");

      
        this.setAdat(this.adat);
    }

    setAdat(adat){
        this.adat=adat;
        this.kerdes.text(adat.kerdes);
        this.v1.text(adat.v1);
        this.v2.text(adat.v2);
        this.v3.text(adat.v3);
    }

    kattintasTrigger(gomb) {
        let esemeny = new CustomEvent(gomb, {
            detail: this.adat
        });
        window.dispatchEvent(esemeny);
    }
}