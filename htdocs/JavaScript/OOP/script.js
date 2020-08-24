    class Objekt {

        constructor(pocets, vecs, kolikatyDiv) {
            this.pocet = pocets;
            this.vec = vecs;
            this.blok = document.getElementById("vypis");
            this.kolikatyDiv = kolikatyDiv;
        }

        vypis(i) {
            this.blok.innerHTML += this.getPolozka(i);
            console.log(this.i);
        }


        odeber(i) {
            this.pocet -= 1;
            if (this.pocet <= 0) {
                document.getElementById('polozka' + i + '').remove();
            } else {
                document.getElementById('polozka' + i + '').style.backgroundColor = "red";
                document.getElementById('polozka' + i + '').innerHTML = this.vec + '  ---->  ' + this.pocet + '';
                console.log(i);
            }
            console.log("");

        }

        getPolozka(i) {
            this.polozka = '<div id="polozka' + i + '"  class="polozka" onclick="odeber(' + this.kolikatyDiv + ')">' + this.vec + ' ---> ' + this.pocet + '' + '<div> <br>';
            return this.polozka;
        }

        getPocet() {
            return this.pocet;
        }

        setPocet(poceet) {
            this.pocet += poceet;
        }
    }