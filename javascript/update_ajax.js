
function ajaxFunction()  {


  var ajaxDisplay  = document.getElementById('ajaxDiv');


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


          else  { 
 
              document.reg_form.r_nickname.style.color = '';
              ajaxDisplay.innerHTML  = ''; 

              ajaxDisplay.style.display='none';

          }

      }




  }


  var name = document.getElementById('r_nickname').value;


  var queryString = "?name=" + name;

  ajaxRequest.open("GET", "./includes/update_ajax.php" + queryString, true);
  ajaxRequest.send(null);


}
