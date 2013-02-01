
function ajaxFunction()  {


  var ajaxDisplay  = document.getElementById('ajaxDiv');

  var ajaxDisplay2 = document.getElementById('ajaxDiv2');


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


          if (ajaxRequest.responseText == 'nameVergeben')  { 

              ajaxDisplay.innerHTML = '<b>Der Username ist bereits vergeben!</b>';
              document.reg_form.r_nickname.style.color = 'red';
              document.reg_form.r_nickname.focus(); 
              ajaxDisplay.style.display='block';
              return false; 

          }


          else if (ajaxRequest.responseText == 'nameSonder')  { 

              ajaxDisplay.innerHTML = '<b>Der Username darf keine Sonderzeichen enthalten!</b>';
              document.reg_form.r_nickname.style.color = 'red';
              document.reg_form.r_nickname.focus();
              ajaxDisplay.style.display='block';
              return false;
          }


          else if (ajaxRequest.responseText == 'mailVergeben')  { 

              ajaxDisplay2.innerHTML = '<b>Die Emailadresse  ist bereits vergeben!</b>';
              document.reg_form.email.style.color = 'red';
              document.reg_form.email.focus();
              ajaxDisplay2.style.display='block';
              return false;
          }

          else  { 
 
              document.reg_form.r_nickname.style.color = '';
              ajaxDisplay.innerHTML  = ''; 

              document.reg_form.email.style.color = '';
              ajaxDisplay2.innerHTML  = ''; 

              ajaxDisplay.style.display='none';
              ajaxDisplay2.style.display='none';

          }

      }




  }


  var name = document.getElementById('r_nickname').value;

  if (ExMail)  {

  var mail = document.getElementById('email').value;

  }

  var queryString = "?name=" + name + "&mail=" + mail;

  ajaxRequest.open("GET", "./includes/ajax.php" + queryString, true);
  ajaxRequest.send(null);


}
