
var ayN  = new Array();

alert_X = 0;

function checkN(totalN, selection)  { 

  getid = "course_" + totalN + "_" + selection;

  r = 0; alert(selection);

  if (selection == "ka")  { 

  a = 0; 

          for (i=0;i<ayN.length;i++) {

               if (ayN[i] != totalN) {

                   ayN[a] = ayN[i];

                   a++;

               }

          } 

          ayN.length = ayN.length-1;

  }

  else  { 

          for (i=0;i<ayN.length;i++) {

               if (ayN[i] == totalN) {

                   r = 1;

                   break;

               }

          }

          if (ayN.length < 10 && r == 0)  {

              if (ayN.length == 0 && alert_X == 0)  { 

                  alert("Denke daran, dass du nur Veranstaltungen bewertest,\n\n - die du im WS07/08 auch tats&auml;chlich besucht hast\n\n und/oder \n\n - an deren Klausur du teilgenommen hast.\n\n --> siehe linke Infoleiste!\n\n DANKE!!");

                  alert_X = 1;

             }

             ayN.push(totalN);

           //  if (ayN.length == 10) alert("Du hast alle 9 Stimmen verbraucht.");

             }

             else if (r == 0) {

                  alert("Du hast bereits deine maximale Stimmanzahl verbraucht.");

                  getid = "course_" + totalN + "_" + "ka";

                  document.getElementById(getid).checked = true;

             }

      }

  }
