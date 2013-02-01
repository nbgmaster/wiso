function check_usercp2() 

  {


  var pw_array = document.usercp_form.password.value.split(" "); 
  var neuer_pw = pw_array.join("");
  var pwLength = neuer_pw.length;

  var pw_array2 = document.usercp_form.password2.value.split(" "); 
  var neuer_pw2 = pw_array2.join("");
  var pwLength2 = neuer_pw2.length;

  var pw_array3 = document.usercp_form.password3.value.split(" "); 
  var neuer_pw3 = pw_array3.join("");
  var pwLength3 = neuer_pw3.length;


   if( document.usercp_form.password.value == "" )

      {
       alert( "Fehler: Passwort fehlt!" );
       document.usercp_form.password.focus();
       return false;
      }


   if( document.usercp_form.password2.value == "" )

      {
       alert( "Fehler: Passwort fehlt!" );
       document.usercp_form.password2.focus();
       return false;
      }


   if( document.usercp_form.password3.value == "" )

      {
       alert( "Fehler: Passwort fehlt!" );
       document.usercp_form.password3.focus();
       return false;
      }


   if( document.usercp_form.password2.value != document.usercp_form.password3.value )

      {
       alert( "Die Passwörter stimmen nicht überein!" );
       document.usercp_form.password2.focus();
       return false;
      }



   if (pwLength < 5)

      {
       alert ("Passwort muss mindestens 5 Zeichen lang sein!");
       document.usercp_form.password.focus();
       return false;
      }

   if (pwLength2 < 5)

      {
       alert ("Passwort muss mindestens 5 Zeichen lang sein!");
       document.usercp_form.password2.focus();
       return false;
      }

   if (pwLength3 < 5)

      {
       alert ("Passwort muss mindestens 5 Zeichen lang sein!");
       document.usercp_form.password3.focus();
       return false;
      }



  var ajaxDisplay  = document.getElementById('ajaxDiv');


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


          if (ajaxRequest.responseText == 'PWfalsch')  { 

              ajaxDisplay.innerHTML = '<b>Das Passwort ist falsch!</b>';
              document.usercp_form.password.style.color = 'red';
              document.usercp_form.password.focus();
              ajaxDisplay.style.display='block';
              return false;
          }


          else  { 
 

              document.usercp_form.password.style.color = '';
              ajaxDisplay.innerHTML  = ''; 


              ajaxDisplay.style.display='none';

 
              document.usercp_form.submit(); 
  
  
          }

      }


  }


  var pw = document.getElementById('password').value;
 
  var queryString = "?pw=" + pw;

  ajaxRequest.open("GET", "./includes/cp_edit_email.php" + queryString, true);
  ajaxRequest.send(null);





  }