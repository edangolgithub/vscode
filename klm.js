num=[7,6,3,9,8,2,4];
sm=num[0];
lg=num[0];

for (i=0; i<num.length; i++)
{
   if(sm>num[i])
   {
       sm=num[i];
   }

   if(lg<num[i])
   {
       lg=num[i];
   }
}

document.write("small number is:"+sm);
document.write("<br/>");
document.write("larger number is:"+lg);

