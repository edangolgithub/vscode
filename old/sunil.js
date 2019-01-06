

var car =
{
    type: "Fiat",
    model: "500",
    color: "white",
    func: function () {
        return this.model + " " + this.color;
    },
    func1: function () {
        return 10.5;
    },
    sdfmkls: function () {

        document.write("hello");
    },
    myfunction: function(){
        document.write('HELLO friends');
    }

};



//car.sdfmkls();


//document.write(car.func1());

function hello() {
    document.getElementById("p1").innerHTML = "hello how are you";
    //alert("html loaded successfully");
}

function callme() {
    alert("you called me");



}

function over() {

    document.getElementById("hh").innerHTML="mouse is over the button";
}
function out() {

    document.getElementById("hh").innerHTML = "mouse is out of the button";
}
function list() {
    document.getElementById("linus").innerHTML = "live life";

}
function myfunction()
{
    document.getElementById("hh").innerHTML = "this my function";
}

hello();