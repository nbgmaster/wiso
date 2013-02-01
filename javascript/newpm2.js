
function ajaxNewPM2()  { 


  var pmname  = document.getElementById('wrongDiv');


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

  var ajaxT  = document.getElementById('newpm');
  var pmname  = document.getElementById('wrongDiv');

//if (ajaxT.innerHTML != "")  {

  ajaxRequest.onreadystatechange = function()  {

      /* if readyState (Server response) is complete ( = 4 ) */

      if (ajaxRequest.readyState == 4)  {

	  var ergebnis2 = ajaxRequest.responseText;
	  var splitter2 = ergebnis2.split("%%");


          if (splitter2[0] == 'nameFalsch')  {

              pmname.innerHTML = '<b>Der Username existiert nicht!</b>';
              document.bbform.newpm_receiver.style.color = 'red';
              document.bbform.newpm_receiver.focus(); 
              pmname.style.display='block';
              return false; 

          }

          else if (splitter2[0] == "onlyCase")  { 

              document.getElementById('newpm_receiver').value = splitter2[1];
             // document.getElementById('newpm_receiver').focus(); 

          } else  { 

              document.bbform.newpm_receiver.style.color = '';
              pmname.innerHTML  = ''; 

              pmname.style.display='none';

          }

      }

  }

//}


  var name = document.getElementById('newpm_receiver').value;


  var queryString = "?name=" + name;

  ajaxRequest.open("GET", "./includes/newpm2.php" + queryString, true);
  ajaxRequest.send(null);


}
