<?php 

if ($do != "guidelines")  {

         if ($principlesL == "update")  {

             $Lnext = "";

         }

         else {

             $Lnext = "?do=register&step=1";

         }

         ?>

        <script>
        var time = new Date;

        var time = time.getTime();
        var to = "document.forms['name'].elements['name']";
        var bis = time+12;
        var text = "Ich stimme den Nutzungsbedingungen zu";


        function activate()
        {
        noch = bis-time-1;
        eval(to+".disabled = true");
        if(time < bis)
        {
        eval(to+'.value = "(" + noch + ") ' + text + '"');
        time = time+1;
        window.setTimeout("activate()", 1000);
        }
        else
        {
        eval(to+".disabled = false");
        eval(to+".value = \"" + text+ "\"");
        }
        }
        </script>
        <body onload="activate()">

<?php  } ?>

<table cellpadding="4" cellspacing="1" border="0" width="100%" class="tableinborder">

  <tr>

        <td class="catbg" align="left">

        <span class="big">
        <b>Disclaimer :: Haftung und Nutzungsbedingungen auf www.wiwistud.de</b>
        </span>

        </td>

  </tr>

</table>

<br>

<table cellpadding="4" cellspacing="1" border="0" class="tableinborder" width="100%">

  <tr>

  <td class="tableb" align="center" height="290">

<iframe src="disclaimer.php?do=<?php echo"$do";?>" style="border:0px #FFFFFF none;" name="disclaimer" scrolling="auto" frameborder="0" align=aus marginheight="0px" marginwidth="0px" height="290" width="100%">
</iframe>

  </td></tr></table>

  <?php  if ($do != "guidelines")  { ?>

  <br>

  <table width="<?php  echo"$width"; ?>" cellpadding="6" cellspacing="1" class="tableinborder">

  <form id="name" name="name" method="post" action="<?php  echo"$Lnext"; ?>">

  <tr>

    <td class="tablea" align="center">

    <input type="hidden" name="Aprinciples" value="accept">
    <input class="buttons" name="name" type="submit" id="name" value="Ich stimme den Nutzungsbedingungen zu" onclick="location.href='?do=register&step=1'" onmouseover="this.className='mouseoverInput';" onmouseout="this.className='mouseoutInput';">

    </td>

  </tr>

    </form>

</table>

</body>

<?php  } ?>

