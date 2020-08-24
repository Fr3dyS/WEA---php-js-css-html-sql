var limit = 3;

var rand = Math.floor(Math.random() * 7) + 5;

var int2 = setInterval(odectiCislo, 1000);

var odectiCislo = odectiCislo;

var aa = 1

var cislo2 = 0;

//    var h3 = document.getElementById('text' + aa +'');
console.log('text' + aa + '');

function cici() {
    cislo2 = Math.floor(Math.random() * 7) + 5;

}

function startGame(a) {
    int2 = setInterval(odectiCislo, 1000);

    function odectiCislo() {
        if (cislo2 <= limit) {
            stop();
        }

        document.getElementById('text' + a + '').innerHTML = --cislo2;
        console.log(document.getElementById('text' + a + '').innerHTML);
        console.log(cislo2);
        // console.log("Dělej");
    }

    function stop() {
        window.alert("Your mom is 10x faster than you.");
        clearInterval(int2);
        document.getElementById('text' + a + '').innerHTML = 0;
        document.getElementById('text' + a + '').style.color = "white";
        zastavTimer();
    }
    spustTimer();
}


function stopGame() {
    if (cislo2 == limit) {
        window.alert("Cool");
        clearInterval(int2);
        document.getElementById('text' + aa + '').style.color = "yellowgreen";
        ++aa;
        cici();
        startGame(aa);

    }
    if (cislo2 > limit) {
        window.alert("We aren't racing, are we?");
        clearInterval(int2);
        document.getElementById('text' + aa + '').innerHTML = 0;
        document.getElementById('text' + aa + '').style.color = "white";
    }
    zastavTimer();
}