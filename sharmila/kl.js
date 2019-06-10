var num=[5,7,3,9,1,6,2]
document.getElementById("ul").innerHTML=num;

function vbn()
{
    num.sort(function(a,b){return(a-b)});
    document.getElementById("ul").innerHTML=num;
}