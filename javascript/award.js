
var ayN  = new Array();

alert_X = 0;


function checkN(totalN)  { 

  getid = "course_" + totalN; 

  if (document.getElementById(getid).checked == false)  {

      ayN.pop();
                
  }

  if (document.getElementById(getid).checked == true)  {

      if (ayN.length <= 11)  { ayN.push(totalN); }


      else {

           alert("Du hast bereits deine maximale Stimmanzahl verbraucht.");
           document.getElementById(getid).checked = false; 
      
      }

      if (ayN.length == 1)  {


                  alert("Denke daran, dass du nur Veranstaltungen ausw&auml;hlst,\n\n - die du im WS 08/09 auch tats&auml;chlich besucht hast\n\n und/oder \n\n - an deren Klausur du teilgenommen hast.\n\n DANKE!!");

      }


  }


}


function checkN2(totalN)  { 

  getid = "course_" + totalN; 
  CB2 = document.getElementById(getid);

  if (document.getElementById(getid).checked == true)  {

      ayN.pop();

      CB2.checked = false;

  }

  else  {

     if (ayN.length <= 11)  { ayN.push(totalN);CB2.checked = true;  }


      else {

         alert("Du hast bereits deine maximale Stimmanzahl verbraucht.");
      
      }

      if (ayN.length == 1)  {


                  alert("Denke daran, dass du nur Veranstaltungen ausw&auml;hlst,\n\n - die du im WS 08/09 auch tats&auml;chlich besucht hast\n\n und/oder \n\n - an deren Klausur du teilgenommen hast.\n\n DANKE!!");

      }


  }


}

