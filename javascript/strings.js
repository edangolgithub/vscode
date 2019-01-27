a="sarmila basnet";
sumvowel=0;
for(i=0;i<a.length;i++)
{
// if(a[i]=='a')
// {
//     sumvowel++;
// }
// else if(a[i]=='e')
// {
//     sumvowel++;
// }

 switch(a[i])
 {
     case 'a':
     case 'e':
     case 'i':
     case 'o':
     case 'u':     
     break;
     default:
     //sumvowel++;
    // alert(a[i]);
     break;
 }
}
//alert(sumvowel);
// 2 -5 0
x=50;
if(x%2==0)
{
   // alert("ev");
}
else{
   // alert("odd");
}

z=17;
if(z>=18)
{
   // alert("can vote");

}


else{
   // alert("cannot vote");
}


p=2000;
r=13;
t=4;
i=(p*t*r)/3;
alert("interest of principle "+ p+ "at the rate of "+r +" percent in "+t+" years is "+i);
