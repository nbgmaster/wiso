
function thanks(pid)  { 

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

          alert ("Du hast dich bedankt!");

          getid = "thanks_" + pid;

          getdiv = "thanks_users_" + pid;

          getnum = "thanks_numbers_" + pid;

          divexist = document.getElementById(getdiv);

          //divnum = document.getElementById(getnum);

          //num = divnum.innerHTML;   

          //num = parseInt(num);

          //num = num + 1;

          if (divexist)  { 

                content01 = "<b>Folgende User fanden diesen Beitrag hilfreich:</b>&nbsp;";
                content01 += ajaxRequest.responseText;

                document.getElementById(getdiv).style.padding = "7px";

                document.getElementById(getdiv).innerHTML = content01;

               // document.getElementById(getnum).innerHTML = num;

          }

          document.getElementById(getid).style.display='none';

      }

  }

  var queryString = "?pid=" + pid + '&time=' + new Date().getTime(); 

  ajaxRequest.open("GET", "./includes/thanks.php" + queryString, true); 
  ajaxRequest.send(null); 

}
