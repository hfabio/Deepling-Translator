function translate() {
    var str = document.getElementById("original").value.toUpperCase();
    console.log(str)
    var ini = "<center><img src="+"img/jaul.gif"+"></center><br><hr> ";
    var fim ="<br><hr>"
    if (str) {
    var res = translateText(str);
    console.log(res);
    str = ini + "<mark>Original:</mark> " + str;
        document.getElementById("origin").innerHTML = str + fim;
        document.getElementById("translated").innerHTML = "<mark>Translation:</mark> "+res;
    }else{
        document.getElementById("origin").innerHTML = ini+"Please, insert any text :(";
    }
}

function translateText(txt){
    var local = txt
    local = local.replace(/T/g, "AA");
    local = local.replace(/°/g, "!");
    local = local.replace(/~/g, "S");
    local = local.replace(/-/g, "E");
    local = local.replace(/L/g, "T");
    local = local.replace(/[(]/g, "L");
    local = local.replace(/[)]/g, "D");
    local = local.replace(/|/g, "I");
    local = local.replace(/>/g, "V");
    local = local.replace(/C/g, "U");
    local = local.replace(/W/g, "M");


    return local;
}
