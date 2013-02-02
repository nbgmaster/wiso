
function emotion(smilie) {


  var input = opener.document.forms['bbform'].message;
input.focus();

aTag = smilie; eTag = '';

  /* f&uuml;r Internet Explorer */
  if(typeof opener.document.selection != 'undefined') {

    /* Einf&uuml;gen des Formatierungscodes */
    var range = opener.document.selection.createRange();
    var insText = range.text;
    range.text = aTag + insText + eTag;
    /* Anpassen der Cursorposition */
    range = opener.document.selection.createRange();
    if (insText.length == 0) {
      range.move('character', -eTag.length);
    } else {
      range.moveStart('character', aTag.length + insText.length + eTag.length);      
    }
    range.select();
  }
  /* f&uuml;r neuere auf Gecko basierende Browser */
  else if(typeof input.selectionStart != 'undefined')
  {


    var start = input.selectionStart;
    var end = input.selectionEnd;
    var insText = input.value.substring(start, end);
    input.value = input.value.substr(0, start) + smilie + input.value.substr(end);
    /* Anpassen der Cursorposition */
    var pos;
    if (insText.length == 0) {
      pos = start;
    } else {
      pos = start + smilie.length;
    }
    input.selectionStart = pos;
    input.selectionEnd = pos;

}

 /* f&uuml;r die &uuml;brigen Browser */
  else
  {
    /* Abfrage der Einf&uuml;geposition */
    var pos;
    var re = new RegExp('^[0-9]{0,3}$');
    while(!re.test(pos)) {
      pos = prompt("Einf&uuml;gen an Position (0.." + input.value.length + "):", "0");
    }
    if(pos > input.value.length) {
      pos = input.value.length;
    }
    /* Einf&uuml;gen des Formatierungscodes */
    var insText = prompt("Bitte geben Sie den zu formatierenden Text ein:");
    input.value = input.value.substr(0, pos) + aTag + insText + eTag + input.value.substr(pos);
  }

opener.document.forms['bbform'].message.focus();

}
