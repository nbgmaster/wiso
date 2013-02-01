function check_database() {


  if ( document.market_form.title.value == "" )  {
           alert( "Fehler: Titel fehlt!" );
           document.market_form.title.focus();
           return false;
      }

  var title_array = document.market_form.title.value.split(" "); 
  var neuer_title = title_array.join("");
  var titleLength = neuer_title.length;

  if (titleLength < 3)  {

           alert( "Fehler: Titel zu kurz!" );
           document.market_form.title.focus();
           return false;

  }


if( document.market_form.description.value == "" ){
alert( "Du hast keine Beschreibung angegeben!" );
document.market_form.description.focus();
return false;
}

if (document.market_form.description.value.indexOf('<',0)!=-1 || document.market_form.description.value.indexOf('>',0)!=-1) {
alert( "Bitte kein Html benutzen!" );
document.market_form.description.focus();
return false;
}


strnobr = document.market_form.description.value;

 Ergebnis = strnobr.search(/\n/);     
  while(Ergebnis != -1)               
   {
   strnobr = strnobr.replace(/\n/,""); 
   Ergebnis = strnobr.search(/\n/);       
   }


if (strnobr.length < 5)  {

           alert( "Fehler: Beschreibung muss mindestens 5 Zeichen lang sein!" );
           document.market_form.description.focus();
           return false;

}



}

function count()

  {

   var laenge=document.market_form.description.value.length;
 
   if (laenge > 200)

      {
       document.market_form.description.value=document.market_form.description.value.substring(0,200);
      }

  }