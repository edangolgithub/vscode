function ball() {
    document.getElementById("football").innerHTML = "life";
}

//document.getElementById("football").innerHTML = "life";

function fruits(p1,p2){
    document.write( p1+p2);
}

function checkevenodd() {
    var num = document.getElementById("num").value;
    if (num % 2 == 0) {
        document.getElementById("ans").innerHTML = "even";
    }
    else {
        document.getElementById("ans").innerHTML = "odd";
    }
}
function calfac() {
    var num = document.getElementById("fac").value;
    var fac = 1;
    for (var i = 1; i <= num; i++) {
        fac = fac * i;
    }
    document.getElementById("ques").innerHTML = fac;
}
