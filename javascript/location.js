
function change_description(whichLoc)  {


  var ajaxDisplay  = document.getElementById('description');

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


// ajaxRequest.overrideMimeType(’text/xml; charset=ISO-8859-1’);

  ajaxRequest.onreadystatechange = function()  {


      /* if readyState (Server response) is complete ( = 4 ) */

      if (ajaxRequest.readyState == 4)  {


              ajaxDisplay.innerHTML = ajaxRequest.responseText;
              return false;


      }


  }


  var queryString = "?pid=" + whichLoc;

  ajaxRequest.open("GET", "./includes/location.php" + queryString, true);
 
  ajaxRequest.send(null);


}
