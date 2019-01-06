function bike() {
    var cars = new Array("ram", "hari", "shyam");
    document.getElementById("demo").innerHTML = cars[2];
 

}
function fan() {
    var computer = new Array("sita", "gita", "rita");
    document.getElementById("demo").innerHTML = computer[1];
}
function gang() {
    var speaker = [1, 2, 4, 5];
    speaker[1] = 3;
    document.getElementById("demo").innerHTML = speaker[1];
}

var person = { firstname: "linus", lastname: "basyf;lak", age: 12 };
document.write(person["lastname"]);
document.write(person.firstname);
