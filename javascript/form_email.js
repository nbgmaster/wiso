function check_email() {
if( document.f_email.subject.value == "" ){
alert( "Du hast keinen Betreff angegeben!" );
document.f_email.subject.focus();
return false;
}
if( document.f_email.message.value == "" ){
alert( "Du hast keine Nachricht angegeben!" );
document.f_email.message.focus();
return false;
}
}