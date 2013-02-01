function popthis(id,w,h,url,n)
{

getid = "select_" + id; 

points = document.getElementById(getid).value;

url = url + "&points=" + points;

	l	= (screen.availWidth/2)-(w/2);
	t	= (screen.availHeight/2)-(h/2);
        win	= window.open(url,n,"scrollbars=yes,width="+w+",height="+h+",left="+l+",top="+t+"");
	win.focus();
}

function popthis2(w,h,url,n)
{

	l	= (screen.availWidth/2)-(w/2);
	t	= (screen.availHeight/2)-(h/2);
        win	= window.open(url,n,"scrollbars=yes,width="+w+",height="+h+",left="+l+",top="+t+"");
	win.focus();
}