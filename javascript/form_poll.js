function checkForm() {

  var frage_array = document.form_poll.poll_question.value.split(" "); 
  var neuer_frage = frage_array.join("");
  var FrageLength = neuer_frage.length;


      if ( document.form_poll.poll_question.value == "" )  {

           alert( "Fehler: Keine Fragestellung vorhanden!" );
           document.form_poll.poll_question.focus();
           return false;
      }

      if( FrageLength < 3 )  {

           alert( "Fehler: Frage zu kurz!" );
           document.form_poll.poll_question.focus();
           return false;

      }




  var p1_array = document.form_poll.poll_data1.value.split(" "); 
  var neuer_p1 = p1_array.join("");
  var p1Length = neuer_p1.length;


  if (p1Length < 2)  {

           alert( "Fehler: Antwortmöglichkeit muss mindestens 2 Zeichen lang sein!" );
           document.form_poll.poll_data1.focus();
           return false;

  }

  var p2_array = document.form_poll.poll_data2.value.split(" "); 
  var neuer_p2 = p2_array.join("");
  var p2Length = neuer_p2.length;


  if (p2Length < 2)  {

           alert( "Fehler: Antwortmöglichkeit muss mindestens 2 Zeichen lang sein!" );
           document.form_poll.poll_data2.focus();
           return false;

  }

      if ( document.form_poll.poll_data1.value == "" )  {

           alert( "Fehler: Es müssen mindestens 2 Anwortmöglichkeiten angegeben werden!" );
           document.form_poll.poll_data1.focus();
           return false;
      }

      if ( document.form_poll.poll_data2.value == "" )  {

           alert( "Fehler: Es müssen mindestens 2 Anwortmöglichkeiten angegeben werden!" );
           document.form_poll.poll_data2.focus();
           return false;
      }

}