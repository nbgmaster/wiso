function window_position(w,h,url,n)
{ 
	 l      = (screen.availWidth/2)-(w/2);
	 t	= (screen.availHeight/2)-(h/2);

         win	= window.open(url,n,"scrollbars=yes,statusbar.visible=true,width="+w+",height="+h+",left="+l+",top="+t+"");

	win.focus();

}