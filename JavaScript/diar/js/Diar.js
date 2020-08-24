class Diar {

    constructor(jazyk = "cs-CZ") {
        this.zaznamy = [];
        this.jazyk = jazyk;

        this.pocetInput = document.getElementById("pocet");
        this.nazevInput = document.getElementById("nazev");
        this.potvrditButton = document.getElementById("potvrdit");
        this.vypisElement = document.getElementById("seznam-ukolu");

        this.nastavUdalosti();
    }

    nastavUdalosti() {
        this.potvrditButton.onclick = () => {
            const zaznam = new Zaznam(this.pocetInput.value, this.nazevInput.value);
            this.zaznamy.push(zaznam);
            this.vypisZaznamy();
        };
    }
    border() {
        document.getElementById("seznam-ukolu").style.borderColor = "red";
    }
    vypisZaznamy() {
        this.vypisElement.innerHTML = "";
        for (let i = 0; i < this.zaznamy.length; i++) {
            const zaznam = this.zaznamy[i];
            // this.vypisElement.innerHTML += `<div id="seznam-ukolu" onclick="border()"> počet jídla: ${zaznam.pocet}jídlo: ${zaznam.nazev}</div>`;
        }
    }

}