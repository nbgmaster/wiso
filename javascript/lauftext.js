
function lauftext(msg)
  {
  document.getElementById("ban").innerHTML = txt;
  //self.defaultStatus = txt;
  // Lauftext um ein Zeichen nach links schieben
  txt = txt.substring(1, txt.length) + txt.substring(0, 1);
  // Timeout fuer naechste Ausgabe setzen
  Text=window.setTimeout("lauftext()", 80);
  }

