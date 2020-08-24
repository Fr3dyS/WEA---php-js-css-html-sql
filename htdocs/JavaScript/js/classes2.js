class MujKrasnyDiv {

    cunstructor(div) {
        this.sirka = 100;
        this.div = div;
    }

    zvetsiDiv(a) {
        this.sirka += a;
        this.div.style.width = this.getSirka();
    }

    getSirka() {
        return this.sirka + "px";
    }

}