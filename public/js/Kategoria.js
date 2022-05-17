class Kategoria{
    
        constructor(elem, adat) {
            this.adat = adat;
            this.elem = elem;
            this.elem.id = this.adat.id;
            this.elem.kategorianev = this.adat.kategorianev;
        }
    }
