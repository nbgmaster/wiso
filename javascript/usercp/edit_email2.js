function check_usercp2() 

  {

  var pw_array = document.usercp_form.password.value.split(" "); 
  var neuer_pw = pw_array.join("");
  var pwLength = neuer_pw.length;


   if( document.usercp_form.password.value == "" )

      {
       alert( "Fehler: Passwort fehlt!" );
       document.usercp_form.password.focus();
       return false;
      }

   if (pwLength < 5)

      {
       alert ("Passwort ung&uuml;ltig!");
       document.usercp_form.password.focus();
       return false;
      }


   if( document.usercp_form.email.value == "" )

      {
       alert( "Fehler: Emailadresse fehlt!" );
       document.usercp_form.email.focus();
       return false;
      }


   if( document.usercp_form.email2.value == "" )

      {
       alert( "Fehler: Emailadresse zweimal eingeben!" );
       document.usercp_form.email2.focus();
       return false;
      }


   if( document.usercp_form.email.value != document.usercp_form.email2.value )

      {
       alert( "Die Emailadressen stimmen nicht &uuml;berein!" );
       document.usercp_form.email.focus();
       return false;
      }


   var mail   = document.usercp_form.email.value;

   var mailOK = true;

   if (!mail)
   mailOK = false;

   if (mail.indexOf ("@") == -1)
   mailOK = false;

   if (mail.indexOf ("@") == 0 || 
   mail.lastIndexOf ("@") == mail.length - 1)
   mailOK = false;

   if (mail.indexOf ("@") != mail.lastIndexOf ("@"))
   mailOK = false;

   if (!mailOK) 

      {
       alert ("Die E-Mail-Adresse ist ung&uuml;ltig!");
       document.usercp_form.email.focus();
       return false;
      }




  var ajaxDisplay  = document.getElementById('ajaxDiv');
  var ajaxDisplay2  = document.getElementById('ajaxDiv2');


  ExMail = document.getElementById('email');

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


  // Create a function that will receive data sent from the server

  ajaxRequest.onreadystatechange = function()  { 

      /* if readyState (Server response) is complete ( = 4 ) */

      if (ajaxRequest.readyState == 4)  {

          if (ajaxRequest.responseText == 'mailVergeben')  { 

              ajaxDisplay.innerHTML = '<b>Die Emailadresse  ist bereits vergeben!</b>';
              document.usercp_form.email.style.color = 'red';
              document.usercp_form.email.focus();
              ajaxDisplay.style.display='block';
              return false;
          }

          else if (ajaxRequest.responseText == 'PWfalsch')  { 

              ajaxDisplay2.innerHTML = '<b>Das Passwort ist falsch!</b>';
              document.usercp_form.password.style.color = 'red';
              document.usercp_form.password.focus();
              ajaxDisplay2.style.display='block';
              return false;
          }


          else  { 
 
              document.usercp_form.email.style.color = '';
              ajaxDisplay.innerHTML  = ''; 

              document.usercp_form.password.style.color = '';
              ajaxDisplay2.innerHTML  = ''; 

              ajaxDisplay.style.display='none';
              ajaxDisplay2.style.display='none';

 
              document.usercp_form.submit(); 
  
  
          }

      }


  }


  var mail = document.getElementById('email').value;

  var pw = document.getElementById('password').value;
 
  var queryString = "?mail=" + mail + "&pw=" + pw;

  ajaxRequest.open("GET", "./includes/cp_edit_email.php" + queryString, true);
  ajaxRequest.send(null);





  }