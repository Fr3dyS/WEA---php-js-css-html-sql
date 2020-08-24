function MujKrasnyDiv(div) {
    this.div = div;
    this.sirka = 100;
    this.zvetsiDiv = function(a) {
        this.sirka += a;
        this.div.style.width = this.getSirka();
    };
    this.getSirka = function() {
        return this.sirka + "px";
    };

}