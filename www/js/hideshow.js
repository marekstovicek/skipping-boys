// JavaScript Document

function resetShow(Tab){

  var kolekce = Tab.rows;
  var radku = 0;
  
  radku = kolekce.length;
  
  for(var i = 4; i <= radku; i++){
    kolekce[i].className = "hide";
  }
}

  
  



function HideShowRows(Element)
{
     var kolekce = Element.rows;
     var radku = kolekce.length;
     
     for(var i = 4; i <= radku; i++){
     
      if(kolekce[i].className == "hide")
        kolekce[i].className = "calendar";
      else 
        kolekce[i].className = "hide";
      
      
     }
}
