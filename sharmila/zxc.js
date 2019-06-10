var fruits=["mango","banana","orange","apple"]
document.getElementById("demo").innerHTML=fruits;

function abc()
{
    fruits.sort();
    document.getElementById("demo").innerHTML=fruits;
}

function def()
{
    fruits.reverse();
    document.getElementById("mno").innerHTML=fruits;
}