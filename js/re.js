var fruits=["banana","mango","orange","apple"];
document.getElementById("demo").innerHTML=fruits;

function abc()
{
    fruits.unshift("lemon");
    document.getElementById("demo").innerHTML=fruits;
}

function mno()
{
    document.getElementById("abcd").innerHTML= new Date();
}

document.getElementById("ul").innerHTML=fruits.join(" or ");

function qrs()
{
    fruits.push("grape");
    document.getElementById("kl").innerHTML=fruits;
}