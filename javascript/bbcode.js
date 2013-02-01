tag_prompt = "Gebe hier den externen Link zum Bild an:";
font_formatter_prompt = "Gebe einen Text ein - ";
link_text_prompt = "Gebe einen Linknamen ein (optional)";
name_text_prompt = "Von wem stammt das Zitat? (optional)";
link_url_prompt = "Gebe die volle Adresse des Links ein:";
quote_url_prompt = "Gebe das Zitat ein:";
link_email_prompt = "Gebe eine Email Adesse ein";
list_type_prompt = "was für eine Liste möchtest du? Gebe '1' ein für eine nummerierte Liste, 'a' für ein alphabetische, oder gar nichts für eine einfache Punktliste.";
list_item_prompt = "Gebe eine Listepunkt ein.\nGebe nichts ein oder drücke 'Cancel' um die Liste fertigzustellen.";

tags = new Array();

function getarraysize(thearray) {
 for (i = 0; i < thearray.length; i++) {
  if ((thearray[i] == "undefined") || (thearray[i] == "") || (thearray[i] == null)) return i;
 }
 return thearray.length;
}

function arraypush(thearray,value) {
 thearraysize = getarraysize(thearray);
 thearray[thearraysize] = value;
}

function arraypop(thearray) {
 thearraysize = getarraysize(thearray);
 retval = thearray[thearraysize - 1];
 delete thearray[thearraysize - 1];
 return retval;
}

// *******************************************************

modevalue = 1;

//function setmode(modevalue) {
function setmode(modevalue) {
 document.cookie = "bbcodemode="+modevalue+"; path=/; expires=Wed, 1 Jan 2020 00:00:00 GMT;";
}

function normalmode(theform) {
return true;

}

function stat(thevalue) {
 document.bbform.status.value = eval(thevalue+"_text");
}

function setfocus(theform) {
 theform.message.focus();
}

function closetag(theform) {
 if (!normalmode(theform)) {
  if (tags[0]) theform.message.value += "[/"+ arraypop(tags) +"]";
 }
 setfocus(theform);
}

function closeall(theform) {
 if (!normalmode(theform)) {
  if (tags[0]) {
   while (tags[0]) {
    theform.message.value += "[/"+ arraypop(tags) +"]";
   }
   theform.message.value += " ";
  }
 }
 setfocus(theform);
}

// *******************************************************
var selectedText = "";
AddTxt = "";

function getActiveText(msg) { 
 selectedText = (document.all) ? document.selection.createRange().text : document.getSelection();
 if (msg.createTextRange) msg.caretPos = document.selection.createRange().duplicate();
 return true;
}

function AddText(NewCode,theform) {

/* Change Position and mark hover text */

 if (theform.message.createTextRange && theform.message.caretPos) {


  var caretPos = theform.message.caretPos;
  caretPos.text = caretPos.text.charAt(caretPos.text.length - 1) == ' ' ? NewCode + ' ' : NewCode;
 } else theform.message.value+=NewCode

 AddTxt = "";

 setfocus(theform);
}






function bbcode(theform,bbcode,prompttext) {
 setfocus(theform);

  var input = document.forms['bbform'].elements['message'];

  /* IE browser */
  if(typeof document.selection != 'undefined') {

selectedText2 = (document.all) ? document.selection.createRange().text : document.getSelection();

}


  /* gecko browsers */
  else if(typeof input.selectionStart != 'undefined')
  {

  var start = input.selectionStart;
    var end = input.selectionEnd;
    var insText = input.value.substring(start, end);

selectedText2 = insText.length;

  }

  /* other browsers */
  else
  {
selectedText2 = '';
}


if (selectedText2 == "")  {


 if ((normalmode(theform)) || (bbcode=="IMG")) {
prompt_contents = "http://";
  if (!selectedText2) var dtext=selectedText2;
  else   var dtext=prompttext;
  inserttext = prompt(tag_prompt,prompt_contents); 
  if ((inserttext != null) && (inserttext != "")) { 
   AddTxt = "["+bbcode+"]"+inserttext+"[/"+bbcode+"]";
 
   aTag = "["+bbcode+"]"; eTag = "[/"+bbcode+"]";

   insert(aTag, eTag, '', '', inserttext);

  // AddText(AddTxt,theform);
  }
 }

 else {
  donotinsert = false;
  for (i = 0; i < tags.length; i++) {
   if (tags[i] == bbcode) donotinsert = true;
  }
  if (!donotinsert) {
   theform.message.value += "["+bbcode+"]";
   arraypush(tags,bbcode);
  }
 }

}


else  {

   aTag = "["+bbcode+"]"; eTag = "[/"+bbcode+"]";

   insert(aTag, eTag, '', '', '');


}

 setfocus(theform);
}






// *******************************************************

function fontformat(theform,thevalue,thetype) {
 setfocus(theform);
 if (normalmode(theform)) {
  if (thevalue != 0) {
   if (selectedText) var dtext=selectedText;
   else var dtext="";
   inserttext = prompt(font_formatter_prompt+" "+thetype,dtext);
   if ((inserttext != null) && (inserttext != "")) {
    AddTxt = "["+thetype+"="+thevalue+"]"+inserttext+"[/"+thetype+"] ";
    insert(AddTxt,theform);
   }
  }
 }
 else {
  theform.message.value += "["+thetype+"="+thevalue+"]";
  arraypush(tags,thetype);
 }

 setfocus(theform);
}

// *******************************************************

function namedlink(theform,thetype) {
	if (selectedText) { var dtext=selectedText; } else { var dtext=""; }


  var input = document.forms['bbform'].elements['message'];

  /* IE browser */
  if(typeof document.selection != 'undefined') {

selectedText2 = (document.all) ? document.selection.createRange().text : document.getSelection();

}


  /* gecko browsers */
  else if(typeof input.selectionStart != 'undefined')
  {

  var start = input.selectionStart;
    var end = input.selectionEnd;
    var insText = input.value.substring(start, end);

selectedText2 = insText.length;

}

  /* other browsers */
  else
  {
selectedText2 = '';
}

        if (selectedText2 == "")  {

	linktext = prompt(link_text_prompt,dtext);

        }

        else  { linktext = ''; }

		var prompttext;
		if (thetype == "URL") {
			prompt_text = link_url_prompt;
			prompt_contents = "http://";
			}
		else {
			prompt_text = link_email_prompt;
			prompt_contents = "";
			}
	linkurl = prompt(prompt_text,prompt_contents);
	if ((linkurl != null) && (linkurl != "")) {
		if ((linktext != null) && (linktext != "")) {

                        aTag = "["+thetype+"="+linkurl+"]"; eTag = "[/"+thetype+"]";
			AddTxt = "["+thetype+"="+linkurl+"]"+linktext+"[/"+thetype+"]";
			insert(aTag,eTag,'', linkurl, linktext);
			// AddText(AddTxt,theform);
			
			}
		 else {
        
                      aTag = "["+thetype+"="+linkurl+"]"; eTag = "[/"+thetype+"]";

			AddTxt = "["+thetype+"]"+linkurl+"[/"+thetype+"]";

                        if (selectedText2 == "")  {

			insert(aTag,eTag,'', linkurl, '');

                        }  else  {

			insert(aTag,eTag,'', '', '');

                        }
			
		}
	}
}



function quotethis(theform,thetype) {

	if (selectedText) { var dtext=selectedText; } else { var dtext=""; }


  var input = document.forms['bbform'].elements['message'];

  /* IE browser */
  if(typeof document.selection != 'undefined') {

selectedText2 = (document.all) ? document.selection.createRange().text : document.getSelection();

}


  /* gecko browsers */
  else if(typeof input.selectionStart != 'undefined')
  {

  var start = input.selectionStart;
    var end = input.selectionEnd;
    var insText = input.value.substring(start, end);

selectedText2 = insText.length;

}

  /* other browsers */
  else
  {
selectedText2 = '';
}


        if (selectedText2 == "")  {

	linktext = prompt(name_text_prompt,dtext);

        }

        else  { linktext = prompt(name_text_prompt,dtext);; }

		var prompttext;
		if (thetype == "QUOTE") {
			prompt_text = quote_url_prompt;
			prompt_contents = "";
			}
		else {
			prompt_text = link_email_prompt;
			prompt_contents = "";
			}

        if (selectedText2 == "")  {
	linkurl = prompt(prompt_text,prompt_contents);
}
else { 
	linkurl = '';
}
	//if ((linkurl != null) && (linkurl != "")) {
		if ((linktext != null) && (linktext != "")) {

                        aTag = "["+thetype+"="+linktext+"]"; eTag = "[/"+thetype+"]";


                        if (selectedText2 == "")  {

			insert(aTag,eTag,'', linktext, linkurl);

}

else  {

			insert(aTag,eTag,'', '', linkurl);

}
			// AddText(AddTxt,theform);
			
			}
		 else { 
        
                      aTag = "["+thetype+"]"; eTag = "[/"+thetype+"]";

			// AddTxt = "["+thetype+"]"+linkurl+"[/"+thetype+"]";

                        if (selectedText2 == "")  {

			insert(aTag,eTag,'', linkurl, '');

                        }  else  { 

                        if (linkurl != "")  {  aTag = "["+thetype+"="+linkurl+"]"; } else  { aTag = "["+thetype+"]"; }


			insert(aTag,eTag,'', '', '');

                        }
			
		}
	//}
}



function insert(aTag, eTag, CoSi, linkurl, linktext) {

CoSiNoNull = 1;


  if (CoSi != "")  {

      aTag = aTag + "=" + CoSi + "]";

      CoSiNoNull = CoSi;

  }

if (CoSiNoNull != "0")  {


  var input = document.forms['bbform'].elements['message'];
  input.focus();




  /* IE browser */
  if(typeof document.selection != 'undefined') {
    /* insert code */                                                                                                                                                                                                                                                                                                       
/* new 21.8. */
                                                
    var range = document.selection.createRange();
    var insText = range.text;

var insText2 = '';

if (linktext != "")  { 
insText2 = linktext;
}
else if (linkurl != "")  {
insText2 = linkurl;
}



    range.text = aTag + insText + insText2 + eTag;
    /* move cursor into the right position */
    range = document.selection.createRange();
    if (insText.length == 0) { 
      range.move('character', -eTag.length);
    } else {
      range.moveStart('character', aTag.length + insText.length + eTag.length);      
    }
    range.select();
  }



  /* gecko browsers */
  else if(typeof input.selectionStart != 'undefined')
  {
    /* insert code section */
    var start = input.selectionStart;
    var end = input.selectionEnd;
    var insText = input.value.substring(start, end);

/* new 21.8. */

if (linktext != "")  {
insText = linktext  + insText;
}
else if (linkurl != "")  {
insText = linkurl + insText;
}


    input.value = input.value.substr(0, start) + aTag + insText + eTag + input.value.substr(end);
    /* move cursor into the right position */
    var pos;
    if (insText.length == 0) {
      pos = start + aTag.length;
    } else {
      pos = start + aTag.length + insText.length + eTag.length;
pos = start + aTag.length;
    }
    input.selectionStart = pos;
    input.selectionEnd = pos;
  }
  /* other browsers */
  else
  {
    /* insert position */
    var pos;
    var re = new RegExp('^[0-9]{0,3}$');
    while(!re.test(pos)) {
      pos = prompt("insert at position (0.." + input.value.length + "):", "0");
    }
    if(pos > input.value.length) {
      pos = input.value.length;
    }
    /*insert code */
    var insText = prompt("particular text, which should be formatted:");

/* new 21.8. */

if (linktext != "")  {
insText = linktext + " " + insText;
}
else if (linkurl != "")  {
insText = linkurl + " " + insText;
}


    input.value = input.value.substr(0, pos) + aTag + insText + eTag + input.value.substr(pos);
  }

  input.focus();

}


}

