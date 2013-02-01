function checkForm() {


      if ( document.bbform.newtitle.value == "" )  {
           alert( "Fehler: Titel fehlt!" );
           document.bbform.newtitle.focus();
           return false;
      }

  var title_array = document.bbform.newtitle.value.split(" "); 
  var neuer_title = title_array.join("");
  var titleLength = neuer_title.length;


  if (titleLength < 3)  {

           alert( "Fehler: Titel zu kurz!" );
           document.bbform.newtitle.focus();
           return false;

  }

  var msg_array = document.bbform.message.value.split(" "); 
  var neuer_msg = msg_array.join("");
  var msgLength = neuer_msg.length;


   if( document.bbform.message.value == "" )

      {
       alert( "Fehler: Sie müssen eine Nachricht eingeben!" );
       document.bbform.message.focus();
       return false;
      }

  if (msgLength < 2)  {

           alert( "Fehler: Nachricht muss mindestens 2 Zeichen lang sein!" );
           document.bbform.message.focus();
           return false;

  }


strnobr = document.bbform.message.value;

 Ergebnis = strnobr.search(/\n/);     
  while(Ergebnis != -1)               
   {
   strnobr = strnobr.replace(/\n/,"");   
   Ergebnis = strnobr.search(/\n/);      
   }


if (strnobr.length < 2)  {

           alert( "Fehler: Nachricht muss mindestens 2 Zeichen lang sein!" );
           document.bbform.message.focus();
           return false;

}


formErrors = false;



if (formErrors) {
alert(formErrors);
return false;
} else {

return true;
}
}

function emoticon(text) {
var txtarea = document.bbform.message;
text = ' ' + text + ' ';
if (txtarea.createTextRange && txtarea.caretPos) {
var caretPos = txtarea.caretPos;
caretPos.text = caretPos.text.charAt(caretPos.text.length - 1) == ' ' ? caretPos.text + text + ' ' : caretPos.text + text;
txtarea.focus();
} else {
txtarea.value  += text;
txtarea.focus();
}
}