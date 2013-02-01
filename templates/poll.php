<script language="JavaScript" type="text/javascript" src="./javascript/form_poll.js"></script>

<form method="post" action="index.php?do=post" name="form_poll" onsubmit="return checkForm(this)">

<table width="<?php  echo"$width"; ?>" cellpadding="3" cellspacing="1" class="tableinborder">
               
  <tr>

     <td class="catbg" align="left">

     &nbsp;<b>Du kannst nun deine Umfrage zu dem Thema "<?php  echo"$title"; ?>" hinzufügen</b>

     </td></tr>

     <tr><td class="tablea">

     <table cellspacing="1" cellpadding="4" class="tableinborder" width="100%">

       <tr>

         <td class="tablea" width="20%" align="left"><b>Frage:</b></td>

         <td class="tableb" width="80%" align="left" onmouseover="this.className='mouseover';" onmouseout="this.className='mouseout';"> <input type="text" name="poll_question" size="80"> </td>

         </tr><tr>

         <td class="tablea" align="left"><b>Antwort 1:</b></td>

         <td class="tableb" align="left" onmouseover="this.className='mouseover';" onmouseout="this.className='mouseout';"> <input type="text" name="poll_data1" size="40"> </td>

         </tr><tr>

         <td class="tablea" align="left"><b>Antwort 2:</b></td>

         <td class="tableb" align="left" onmouseover="this.className='mouseover';" onmouseout="this.className='mouseout';"> <input type="text" name="poll_data2" size="40"> </td>

         </tr><tr>

         <td class="tablea" align="left"><b>Antwort 3:</b></td>

         <td class="tableb" align="left" onmouseover="this.className='mouseover';" onmouseout="this.className='mouseout';"> <input type="text" name="poll_data3" size="40"> </td>

         </tr><tr>

         <td class="tablea" align="left"><b>Antwort 4:</b></td>

         <td class="tableb" align="left" onmouseover="this.className='mouseover';" onmouseout="this.className='mouseout';"> <input type="text" name="poll_data4" size="40"> </td>

         </tr><tr>

         <td class="tablea" align="left"><b>Antwort 5:</b></td>

         <td class="tableb" align="left" onmouseover="this.className='mouseover';" onmouseout="this.className='mouseout';"> <input type="text" name="poll_data5" size="40"> </td>

         </tr><tr>

         <td class="tablea" align="left"><b>Antwort 6:</b></td>

         <td class="tableb" align="left" onmouseover="this.className='mouseover';" onmouseout="this.className='mouseout';"> <input type="text" name="poll_data6" size="40"> </td>

       </tr>

     </table>

     <br><center>

     <input type="hidden" name="title" value="<?php  echo"$title"; ?>">
     <input type="hidden" name="message" value="<?php  echo"$message"; ?>">
     <input type="hidden" name="f" value="<?php  echo"$f"; ?>">
     <input type="hidden" name="attachment" value="<?php  echo"$attachment"; ?>">

     <input type="submit" value="Umfrage starten" class="buttons" onmouseover="this.className='mouseoverInput';" onmouseout="this.className='mouseoutInput';"> 

     <br><br></center>

     </td>

   </tr>

</form>

</table>
