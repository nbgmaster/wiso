
function ajaxCODEsend()  {

  var ajaxRequest;  // The variable that makes Ajax possible!

  /* Create new Object : ajax */

  //Browser Support Code

  try  {

     // Opera 8.0+, Firefox, Safari

     ajaxRequest = new XMLHttpRequest();
 
  } 

  catch (e)  {

     // Internet Explorer Browsers

     try  {

	ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");

     } 

     catch (e)  {

	try  {

	   ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");

	} 

        catch (e)  {

	   // Something went wrong

	}
		
     }

  }

  var mail = document.getElementById('act_mail').value; 

  // Create a function that will receive data sent from the server

  ajaxRequest.onreadystatechange = function()  { 

      /* if readyState (Server response) is complete ( = 4 ) */

      if (ajaxRequest.readyState == 4)  { 


          if (ajaxRequest.responseText == 'MailWrong')  { 

              alert("Die Emailadresse \n\n\'" + mail +  "\'\n\n ist nicht auf wiwistud.de registriert!");

          }


          else if (ajaxRequest.responseText == 'MailCorrect')  { 

              alert("Der Aktivierungslink wurde an \n\n\'" + mail + "\'\n\n versendet. &Uuml;berpr&uuml;fe dein Postfach!");

          }


          else if (ajaxRequest.responseText == 'Locked')  { 

              alert("Du hast erst vor kurzem einen Aktivierungslink angefordert. &Uuml;berpr&uuml;fe dein Postfach!");

          }


          else if (ajaxRequest.responseText == 'AlreadyOpen')  { 

              alert("Der Account mit der Email \n\n\'" + mail + "\'\n\n ist bereits freigeschalten!");

          }

      }


  }

  var queryString = "?mail=" + mail;

  ajaxRequest.open("GET", "./includes/ajaxCODEsend.php" + queryString, true);
  ajaxRequest.send(null);


}
