
function ajaxPWsend()  {

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

  var mail = document.getElementById('faq_mail').value; 

  // Create a function that will receive data sent from the server

  ajaxRequest.onreadystatechange = function()  { 

      /* if readyState (Server response) is complete ( = 4 ) */

      if (ajaxRequest.readyState == 4)  { 


          if (ajaxRequest.responseText == 'MailWrong')  { 

              alert("Die Emailadresse \n\n\'" + mail +  "\'\n\n ist nicht auf wiwistud.de registriert!");

          }


          else if (ajaxRequest.responseText == 'MailCorrect')  { 

              alert("Deine Logindaten wurden an \n\n\'" + mail + "\'\n\n versendet. &Uuml;berpr&uuml;fe dein Postfach!");

          }


          else if (ajaxRequest.responseText == 'Locked')  { 

              alert("Du hast erst vor kurzem Logindaten angefordert. &Uuml;berpr&uuml;fe dein Postfach!");

          }

          else  { 

              alert("Der Account mit der Email \n\n\'" + mail + "\'\n\n wurde noch nicht freigeschalten!");

          }		     


      }


  }

  var queryString = "?mail=" + mail;

  ajaxRequest.open("GET", "./includes/ajaxPWsend.php" + queryString, true);
  ajaxRequest.send(null);


}
