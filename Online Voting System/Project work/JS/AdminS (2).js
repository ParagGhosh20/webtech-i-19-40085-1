let contant=document.getElementById('contant');

function input(x)
{
    if(x.length==0)
    {
        contant.innerHTML="";
    }
    else
    {
        var xml=new XMLHttpRequest();
        xml.onreadystatechange=function(){

            if(xml.readyState==4 && xml.status==200)
            {
                contant.innerHTML=xml.responseText;
            }
        };

        
        xml.open('GET','searchResult.php?q='+x,true);
        xml.send();
    }
}