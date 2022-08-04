// JavaScript Document

// Validation
function emptyvalidation(entered, alertbox)
{
with (entered)
{
if (value==null || value=="")
{if (alertbox!="") {alert(alertbox);} return false;}
else {return true;}
}
} 

function emailvalidation(entered, alertbox)
{
with (entered)
{
apos=value.indexOf("@"); 
dotpos=value.lastIndexOf(".");
lastpos=value.length-1;
if (apos<1 || dotpos-apos<2 || lastpos-dotpos>3 || lastpos-dotpos<2) 
{if (alertbox) {alert(alertbox);} return false;}
else {return true;}
}
} 

function formvalidation(thisform)
{
with (thisform)
{
if (emptyvalidation(firstname,"Error! Please type in your First Name!")==false) {firstname.focus(); return false;}
if (emptyvalidation(lastname,"Error! Please type in your Last Name!")==false) {lastname.focus(); return false;}
if (emptyvalidation(email,"Error! Please type in your Email Address!")==false) {email.focus(); return false;}
if (emailvalidation(email,"Error! Please provide with your valid Email Address!")==false) {email.focus(); return false;}
if (emptyvalidation(comments,"Error! Please type in your comments!")==false) {comments.focus(); return false;}
if (emptyvalidation(code_check,"Error! Please Enter the Code!")==false) {code_check.focus(); return false;}
else
{
	document.contact.submit();
}
}
}

