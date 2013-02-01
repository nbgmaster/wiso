function check_usercp() 

  {



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
  
          }

      }


  }


  var pw = document.getElementById('password').value;
 
  var queryString = "?pw=" + pw;

  ajaxRequest.open("GET", "./includes/cp_edit_email.php" + queryString, true);
  ajaxRequest.send(null);



  }