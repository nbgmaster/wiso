function checkForm() {


   if( document.bbform.message.value == "" )

      {
       alert( "Fehler: Du musst eine Nachricht eingeben!" );
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

/*
if (document.bbform.message.value.indexOf('<',0)!=-1 || document.bbform.message.value.indexOf('>',0)!=-1) {
alert( "Kein Html erlaubt!" );
document.bbform.message.focus();
return false;
}
*/


  var msg_array = document.bbform.message.value.split(" "); 
  var neuer_msg = msg_array.join("");
  var msgLength = neuer_msg.length;


  if (msgLength < 2)  {

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