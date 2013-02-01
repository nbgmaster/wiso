<script type="text/javascript" src="javascript/ajaxPWsend.js"></script>
<script type="text/javascript" src="javascript/ajaxCODEsend.js"></script>

<table cellpadding="4" cellspacing="1" border="0" width="100%" class="tableinborder">



  <tr>

    

        <td class="cellbg" align="left">



        <span class="big">

        <b>FAQ - Frequently Asked Questions</b>

        </span>



        </td>



  </tr>



</table>



<br>



<a name="1"></a>
<table cellpadding="5" cellspacing="1" width="<?php echo"$width"; ?>" class="tableinborder">

  

  <tr>



   <td class="catbg" align="left">



   #1 Ich kann mich nicht einloggen, was soll ich tun?



   </td>



   </tr>



   <tr>



    <td class="tableb" align="left">


        <span class="big" style="line-height:28px">

  <ul type="square">

   <!--li> Wenn du dich erfolgreich registriert hast bekommst du kurz darauf eine Email mit einem Freischaltungslink.

    <br>

    Versichere dich, dass du diesen Link ausgef&uuml;hrt hast!
    <br>
    Solltest du diese Email nicht erhalten haben, dann schreib einfach eine Mail an <b>EINEN</b> der Administratoren.


</li--> <li>
    <b>Versichere dich, dass dein Browser Cookies unterst&uuml;tzt und diese Funktion nicht deaktiviert ist! <br>Ohne Cookieunterst&uuml;tzung
    deines Browsers funktioniert der Login nicht!</b>

</li><li>

    Falls du den Internet Explorer verwendest, &auml;ndere folgende Browsereinstellung:

    <br>

    Extras --> Internetoptionen --> Datenschutz --> Regler nach unten setzen 

</li><li>

    Sollte der Login immer noch nicht funktionieren, dann melde dich per Mail an <b>EINEN</b> der Administratoren.

  </ul>  </span>

    </td>



   </tr>



</table>



<br>

<?php if ($userdata_id == "") { ?>

<!--a name="2"></a>
<table cellpadding="5" cellspacing="1" width="<?php echo"$width"; ?>" class="tableinborder">



  <tr>



   <td class="catbg" align="left">



   #2 Ich habe keinen Aktivierungslink nach meiner Registrierung erhalten



   </td>



   </tr>



   <tr>



    <td class="tableb" style="line-height:20px;" align="left">

      <span class="big" style="line-height:28px">

      <ul type="square">

      <li>Warte bitte nach der Registrierung <b>die ersten 24 Stunden</b> ab. Solltest du dann noch immer keinen Aktivierungslink erhalten haben, kannst du
      hier einen neuen anfordern.</li>
  <li>

    <input type="text" size="50" id="act_mail" style="font-size:14px" value="Gebe hier deine registrierte Emailadresse ein">
    <input class="buttons" type="button" onclick="ajaxCODEsend()" value="Aktivierungslink zuschicken" onmouseover="this.className='mouseoverInput';" onmouseout="this.className='mouseoutInput';">

    </li>

<li>Du hast keinen Aktivierungslink erhalten? Kontaktiere einen Admin.
</ul>

    </span>

    </td>



   </tr>



</table>



<br-->


<a name="3new"></a>
<table cellpadding="5" cellspacing="1" width="<?php echo"$width"; ?>" class="tableinborder">



  <tr>



   <td class="catbg" align="left">



   #2 Ich habe mein Passwort / Nickname vergessen



   </td>



   </tr>



   <tr>



    <td class="tableb" style="line-height:20px;" align="left">

    <span class="big" style="line-height:28px">

      <ul type="square">

  <li>

    <input type="text" size="50" id="faq_mail" style="font-size:14px" value="Gebe hier deine registrierte Emailadresse ein">
    <input class="buttons" type="button" onclick="ajaxPWsend()" value="Nickname und neues Passwort zuschicken" onmouseover="this.className='mouseoverInput';" onmouseout="this.className='mouseoutInput';">
    <br>

    </li>
    <li>Falls du nicht mehr wei&szlig;t, mit welcher Emailadresse du dich angemeldet hast, dann schreibe einfach eine kurze Mail mit <b>Angabe deines Nicknames</b> an <b>EINEN</b> der Administratoren und du wirst sobald wie m&ouml;glich

    neue Logindaten erhalten.
</li>
<li>Du hast keine Logindaten erhalten? Kontaktiere einen Admin.
</ul>

    </span>

    </td>



   </tr>



</table>

<br>


<a name="4"></a>
<table cellpadding="5" cellspacing="1" width="<?php echo"$width"; ?>" class="tableinborder">

  

  <tr>



   <td class="catbg" align="left">



   #3 Wie kann ich Kontakt mit den Administratoren aufnehmen?



   </td>



   </tr>



   <tr>



    <td class="tableb" align="center" valign="top">

<table width="730"><tr><td valign="top">


    <?php



    include("./team.php");



    ?>


    </td><td width="5%"></td> <td width="50%" valign="top">

    <span class="big" style="line-height:28px">
     Schreib uns einfach eine Email oder - vorausgesetzt du hast dich bereits registriert und bist eingeloggt - eine Private Nachricht.

    </span> </td>



   </tr>



</table>


  
    </td>



   </tr>



</table>

    </td>



   </tr>



</table>




<br>


<?php } ?>

<a name="5new"></a>
<table cellpadding="5" cellspacing="1" width="<?php echo"$width"; ?>" class="tableinborder">



  <tr>



   <td class="catbg" align="left">

   <?php if ($userdata_id == "") $rautex = 4; else $rautex = 2; ?>

   #<?php echo"$rautex";?> Ich m&ouml;chte meinen Nickname oder meine Emailadresse &auml;ndern oder meinen Account l&ouml;schen



   </td>



   </tr>



   <tr>



    <td class="tableb" style="line-height:20px;" align="left">

                  <span style="font-size:12px">
      <ul type="square">

  <li>Kontaktiere einen Admin.</li>
  </ul>
                                               </span>
    </td>



   </tr>



</table>



<br>


<a name="4"></a>
<table cellpadding="5" cellspacing="1" width="<?php echo"$width"; ?>" class="tableinborder">



  <tr>



   <td class="catbg" align="left">

   <?php if ($userdata_id == "") $rautex = 5; else $rautex = 3; ?>

   #<?php echo"$rautex";?> Welche Regeln gelten auf wiwistud.de?



   </td>



   </tr>



   <tr>



    <td class="tableb" style="line-height:20px;" align="left">

<iframe src="disclaimer.php?do=impressum" style="border:0px #FFFFFF none;" name="disclaimer" scrolling="auto" frameborder="0" align=aus marginheight="0px" marginwidth="0px" height="290" width="100%">
</iframe>


    </td>



   </tr>



</table>

<br>
