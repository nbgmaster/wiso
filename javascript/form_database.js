function check_database() {
if( document.database_form.description.value == "" ){
alert( "Du hast keine Beschreibung angegeben!" );
document.database_form.description.focus();
return false;
}

if (document.database_form.description.value.indexOf('<',0)!=-1 || document.database_form.description.value.indexOf('>',0)!=-1) {
alert( "Bitte kein Html benutzen!" );
document.database_form.description.focus();
return false;
}


strnobr = document.database_form.description.value;

 Ergebnis = strnobr.search(/\n/);     
  while(Ergebnis != -1)               
   {
   strnobr = strnobr.replace(/\n/,""); 
   Ergebnis = strnobr.search(/\n/);       
   }


if (strnobr.length < 5)  {

           alert( "Fehler: Beschreibung muss mindestens 5 Zeichen lang sein!" );
           document.database_form.description.focus();
           return false;

}

if( document.database_form.file.value == "" ){
alert( "Du musst eine Datei hochladen!" );
document.database_form.file.focus();
return false;
}



}

function count()

  {

   var laenge=document.database_form.description.value.length;
 
   if (laenge > 200)

      {
       document.database_form.description.value=document.database_form.description.value.substring(0,200);
      }

  }