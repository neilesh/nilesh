function changecity(objvalue)
{
var b = encodeURIComponent(objvalue);
$('#cityload').empty();
$("#cityload").removeAttr("class");
$('#cityload').load('inc/ajax/indiancity.php?state='+b+' select', function() 
{
$('#cityload').jqTransform({imgPath:'inc/jqtransformplugin/img/'});
$('#cityload div.jqTransformSelectWrapper').css("z-index","0");
}
);
}
function changedealer(objvalue,zid)
{
var b = encodeURIComponent(objvalue);
$('#dealerload').empty();
$("#dealerload").removeAttr("class");
$('#dealerload').load('inc/ajax/dealer.php?city='+b+' #target select', function() 
{
$('#dealerload').jqTransform({imgPath:'inc/jqtransformplugin/img/'});
$('#dealerload div.jqTransformSelectWrapper').css("z-index",zid);
}
);

}
function isNumberKey(evt) {
var charCode = (evt.which) ? evt.which : event.keyCode
if (charCode > 31 && (charCode < 48 || charCode > 57))
return false;

return true;
}

function showbglayer()
{
document.getElementById('darkBackgroundLayer').style.display = 'block';
var oriHeight=getPageHeight();
document.getElementById('darkBackgroundLayer').style.height = oriHeight+ 'px';
}
function getPageHeight()
{
if( document.body && ( document.body.scrollWidth || document.body.scrollHeight )) 
return document.body.scrollHeight;
else if( document.body.offsetHeight) 
return document.body.offsetHeight;
}
function getPageWidth()
{
if( document.body && ( document.body.scrollWidth || document.body.scrollHeight )) 
return document.body.scrollWidth;
else if( document.body.offsetWidth) 
return document.body.offsetWidth;
}
function hidebglayer()
{	
document.getElementById("SWFContainerDIV").innerHTML = "";	
document.getElementById('windowcontent').style.display = 'none';
document.getElementById('darkBackgroundLayer').style.display = 'none';
}  

function show_div(mywidth)
{
showbglayer();
var diff = 0;
diff = (getPageWidth() - mywidth) / 2;

document.getElementById('windowcontent').style.marginLeft = diff + 'px';  
document.getElementById('windowcontent').style.display = 'block';
}	
/************************-BOOK TEST DRIVE-**********************/
function validateForm_book()
{
var carmodel=document.getElementById('SELECTMODEL');
var dealercity=document.getElementById('DEALERCITY');
var preferreddealer=document.getElementById('PREFERREDDEALER');
var persontitle=document.getElementById('PERSONTITLE');
var firstname=document.getElementById('FIRSTNAME');
var lastname=document.getElementById('LASTNAME');
var emailid=document.getElementById('EMAILID');
var mobileno=document.getElementById('MOBILENO');
var addressline1=document.getElementById('ADDRESSLINE1');
var pincode=document.getElementById('PINCODE');
var stateofcust=document.getElementById('STATEOFCUST');
var cityofcust=document.getElementById('CITYOFCUST');
var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

if(carmodel.value=="0")
{
alert("Please select car model.");
return false;
}
else if(dealercity.value=="0")
{
alert("Please select dealer city.");
return false;
}
else if(preferreddealer.value=="0")
{
alert("Please select preferred dealer.");
return false;
}
else if(persontitle.value=="0")
{
alert("Please select your title.");
return false;
}
else if(firstname.value=="")
{
alert("Please enter your First name.");
firstname.value=="";
firstname.focus();
return false;
}
else if(lastname.value=="")
{
alert("Please enter your Last name.");
lastname.value=="";
lastname.focus();
return false;
}
else if(emailid.value=="")
{
alert("Please enter your email id.");
emailid.value=="";
emailid.focus();
return false;
}
else if (emailid.value!="" && !filter.test(emailid.value)) 
{
alert('Please provide a valid email id');
emailid.value=="";
emailid.focus();
}
else if(mobileno.value=="")
{
alert("Please enter your mobile no.");
mobileno.value=="";
mobileno.focus();
return false;
}
else if(mobileno.value!="" && mobileno.value.length<10)
{
alert("Please enter 10 digit mobile no.");
mobileno.value=="";
mobileno.focus();
return false;
}
else if(addressline1.value=="")
{
alert("Please enter your address.");
addressline1.value=="";
addressline1.focus();
return false;
}
else if(pincode.value=="")
{
alert("Please enter your pincode.");
pincode.value=="";
pincode.focus();
return false;
}
else if(pincode.value!="" && pincode.value.length<6)
{
alert("Please enter 6 digit pincode");
pincode.value=="";
pincode.focus();
return false;
}
else if(stateofcust.value=="0")
{
alert("Please select your state.");
return false;
}
else if(cityofcust.value=="0")
{
alert("Please select your ctiy.");
return false;
}
else
{
return true;
}

return false;
}



function getgender()
{
var persontitle=document.getElementById('PERSONTITLE');
if(persontitle.value=="Mr" )
document.getElementById('GENDER').value="Male";
else if(persontitle.value=="Mrs")
document.getElementById('GENDER').value="Female";
else 
document.getElementById('GENDER').value="";	

}




function showpop(a) {
a=a.split('@|@');
show_div(470);
var html = "";
if(a[0]=="td")
{
html += "<div id='popup'><div  id='close'><a href='#' onclick='window.location.href=\"my_account.php\"';><img src='inc/images/close.png' width='38' height='38' border='0' /></a></div><div style='height:70px;'></div><h1>Thank you for booking a test drive,<br />your booking number is<br /><strong>"+a[1]+"</strong></h1><h2>Please save this number for future reference.</h2><p>If you have any questions about your test drive,<br />you can call customer care toll free at 1-800-209-7979</p></div>";
}
else if(a[0]=="error")
{
html += "<div id='popup'><div  id='close'><a href='#' onclick='hidebglayer();'><img src='inc/images/close.png' width='38' height='38' border='0' /></a></div><div style='height:100px;'></div><h1>Unable to Book test drive.</h1><br /><br /><br /><p>If you have any questions about your test drive,<br />you can call customer care toll free at 1-800-209-7979</p></div>";
}


document.getElementById("SWFContainerDIV").innerHTML = "";
document.getElementById("SWFContainerDIV").innerHTML = html;
}

/************************-BOOK TEST DRIVE-**********************/
/************************-AUTHENTICATE USER-**********************/

function closebox()
{
document.getElementById('popup2').style.display='none';  
document.getElementById('fade').style.display='none';  

}
function call_fpass()
{

document.getElementById('popup2').style.display='block';  
document.getElementById('fade').style.display='block';  
}

function validateLoginForm()
{
var emailid=document.getElementById('auth_emailid');
var password=document.getElementById('auth_user_pwd');
var email_filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
if(emailid.value=="" || emailid.value=="Email Id")
{
alert("Please enter your Email-Id.");
emailid.value=="";
emailid.focus();
return false;
}
else if (emailid.value!="" && !email_filter.test(emailid.value)) 
{
alert('Please provide a valid email id.');
emailid.value=="";
emailid.focus();
return false;
}
else if(password.value=="" || password.value=="User password")
{
alert("Please enter your Password.");
password.value=="";
password.focus();
return false;
}
else if((password.value!="" || password.value!="User password") && ( password.value.length<6 || password.value.length>16))
{
alert('Password should have minimum length 6 character and maximum 16 character.');
return false;
}
else{		  

/*var passed = validatePassword(password.value, {
length:   [6, 16],
lower:    1,
upper:    0,
numeric:  1,
special:  0,
badWords: ["abc", "123", "321"],
badSequenceLength:0
});

if(passed==true)
{
return true;
}
else{					 
alert('Password not verifing with criteria please check with question mark.'); 
return false;
}
return false;
*/
return true;
}


return false;
}
function validateSignupForm123()
{

var fname=document.getElementById('firstname');
var lname=document.getElementById('lastname');
var gender=document.getElementById('gender');			 
var phoneno=document.getElementById('contactno');		 
var emailid=document.getElementById('emailid');	
var newpass1=document.getElementById('password');	
var newpass2=document.getElementById('password2');	
var agree=document.getElementById('agree');				
var email_filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;


if(fname.value=="" )
{
alert("Please enter your name.");
fname.value="";
fname.focus();
return false;
}
else if(gender.value=="0")
{
alert("Please select your gender.");
return false;
}
else if(lname.value=="" )
{
alert("Please enter your last name.");
lname.value="";
lname.focus();
return false;
}
else if(phoneno.value=="" )
{
alert("Please enter your Moblie no.");
phoneno.value="";
phoneno.focus();
return false;
}
else if(phoneno.value!="" && phoneno.value.length<10)
{
alert("Please enter 10 digit mobile no.");
phoneno.value=="";
phoneno.focus();
return false;
}
else if(emailid.value=="" )
{
alert("Please enter Email-Id name.");
emailid.value="";
emailid.focus();
return false;
}
else if (emailid.value!="" && !email_filter.test(emailid.value)) 
{
alert('Please provide a valid email id.');
emailid.value=="";
emailid.focus();
return false;
}
else if(newpass1.value=="" )
{
alert("Please enter your new password.");
newpass1.value=="";
newpass1.focus();
return false;
}
else if(newpass2.value=="" )
{
alert("Please enter your new password.");
newpass2.value=="";
newpass2.focus();
return false;
}
else if(newpass1.value!="" && newpass2.value!="" && newpass1.value!=newpass2.value)
{
alert("Retype Password unmatch new password.");
newpass2.value=="";
newpass2.focus();
return false;
}
else if(!agree.checked)
{
alert("Tick to agree the terms & conditions");
return false;
}
else
{
var passed = validatePassword(newpass1.value, {
length:   [6, 16],
lower:    1,
upper:    0,
numeric:  1,
special:  0,
badWords: ["abc", "123", "321","password",fname.value,lname.value],
badSequenceLength:0
});

if(passed==true)
{
return true;
}
else{					 
alert('Password not verifing with criteria please check with question mark.'); 
return false;
}
return false;
}
return false;
}



function forgotpass(statusshow) {
var html = "";
if(statusshow=="forgot")
{
show_div(800);
html += "<div id='popup2' class='forgot-pass'  style='width: 400px;' > <div id='close'><a href='javascript:hidebglayer();'><img src='inc/images/close.png' width='38' height='38' border='0' /></a></div><div style='float: left;position: absolute;margin-top: 40px;margin-left: 40px;'><div style=''><h1 style='float: left; width: 314px;'> Forgot Password ?</h1><label style='float: left;margin-top: 16px;margin-right: 20px;'>Email Id</label><input style='float: left;margin-top: 13px;' type='text' name='fpass_emailid' id='fpass_emailid' placeholder='Email Id' value='Email Id' onfocus='javascript: if(this.value == \"Email Id\"){ this.value = \"\"; }' onblur='javascript: if(this.value==\"\"){this.value=\"Email Id\";}'/><div id='rsp_fpass_emailid' style='float: left; width: 314px;'></div></div><input type='button' name='forgot_pass' value='&nbsp;' class='submit4' style='float: left;margin-left: 87px;margin-top: 10px;' onclick='send_reset_link();'></div></div>";
}
else if(statusshow=="sentmail")
{
show_div(531);
html += "<div id='popup3'><div id='close3'><a href='javascript:hidebglayer();'><img src='inc/images/close.png' width='38' height='38' border='0' /></a></div><div style='height:60px;'></div><h1><img src='inc/images/error.gif' width='53' height='53' style='margin-bottom:-20px;' />Email Sent Sucessfully.</h1></div>";
}

document.getElementById("SWFContainerDIV").innerHTML = "";
document.getElementById("SWFContainerDIV").innerHTML = html;
}

function emailsend(statusshow) {
var html = "";
if(statusshow=="Mail send successfully")
{
show_div(531);
html += "<div id='popup3'><div id='close3'><a href='javascript:hidebglayer();'><img src='inc/images/close.png' width='38' height='38' border='0' /></a></div><div style='height:60px;'></div><h1><img src='inc/images/error.gif' width='53' height='53' style='margin-bottom:-20px;' />Email Sent Sucessfully.</h1></div>";
}
else
{
how_div(531);
html += "<div id='popup3'><div id='close3'><a href='javascript:hidebglayer();'><img src='inc/images/close.png' width='38' height='38' border='0' /></a></div><div style='height:60px;'></div><h1><img src='inc/images/error.gif' width='53' height='53' style='margin-bottom:-20px;' />Email not Sent Sucessfully.</h1></div>";
}

document.getElementById("SWFContainerDIV").innerHTML = "";
document.getElementById("SWFContainerDIV").innerHTML = html;
}
/************************-AUTHENTICATE USER-**********************/
/************************-VEHICLE REG.-**********************/
function isValidDate(date)
{

var matches = /^(\d{2})[-\/](\d{2})[-\/](\d{4})$/.exec(date);
if (matches == null) return false;
var d = matches[1];
var m = Math.floor(matches[2])-1;
var y = matches[3];
var composedDate = new Date(y, m, d);
return composedDate.getDate() == d &&
composedDate.getMonth() == m &&
composedDate.getFullYear() == y;
}

function validateForm_veh()
{
var dealercity=document.getElementById('DEALERCITY');
var preferreddealer=document.getElementById('PREFERREDDEALER');
var persontitle=document.getElementById('PERSONTITLE');
var firstname=document.getElementById('FIRSTNAME');
var lastname=document.getElementById('LASTNAME');
var emailid=document.getElementById('EMAILID');
var dob=document.getElementById('DOB');
var mobileno=document.getElementById('MOBILENO');
var addressline1=document.getElementById('ADDRESS');
var pincode=document.getElementById('CUSTZIPCODE');
var stateofcust=document.getElementById('CUSTSTATE');
var cityofcust=document.getElementById('CUSTCITY');
var agree2=document.getElementById('agree2');
var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;



if(dealercity.value=="0")
{
alert("Please select dealer city.");
return false;
}
else if(preferreddealer.value=="0")
{
alert("Please select preferred dealer.");
return false;
}
else if(persontitle.value=="0")
{
alert("Please select your title.");
return false;
}
else if(firstname.value=="")
{
alert("Please enter your First name.");
firstname.value=="";
firstname.focus();
return false;
}
else if(lastname.value=="")
{
alert("Please enter your Last name.");
lastname.value=="";
lastname.focus();
return false;
}
else if(emailid.value=="")
{
alert("Please enter your email id.");
emailid.value=="";
emailid.focus();
return false;
}
else if (emailid.value!="" && !filter.test(emailid.value)) 
{
alert('Please provide a valid email id');
emailid.value=="";
emailid.focus();
}
else if(dob.value=="" || dob.value=="DD/MM/YYYY")
{
alert("Please enter your Date of Birth.");
dob.value=="";
dob.focus();
return false;
}
else if(dob.value!="" && !isValidDate(dob.value))
{
alert("Please enter valid Date of Birth.");
dob.focus();
return false;
}
else if(mobileno.value=="")
{
alert("Please enter your mobile no.");
mobileno.value=="";
mobileno.focus();
return false;
}
else if(mobileno.value!="" && mobileno.value.length<10)
{
alert("Please enter 10 digit mobile no.");
mobileno.value=="";
mobileno.focus();
return false;
}
else if(addressline1.value=="")
{
alert("Please enter your address.");
addressline1.value=="";
addressline1.focus();
return false;
}
else if(pincode.value=="")
{
alert("Please enter your pincode.");
pincode.value=="";
pincode.focus();
return false;
}
else if(pincode.value!="" && pincode.value.length<6)
{
alert("Please enter 6 digit pincode");
pincode.value=="";
pincode.focus();
return false;
}
else if(stateofcust.value=="0")
{
alert("Please select your state.");
return false;
}
else if(cityofcust.value=="0")
{
alert("Please select your ctiy.");
return false;
}
else if(agree2.checked==false)
{
alert("Please tick to agree to the terms & conditions.");
return false;
}
else
{
return true;
}

return false;
}
/************************-VEHICLE REG.-**********************/
/************************-MY account-**********************/

function ajaxdatacall(a)
{
var html = "";
show_div(32);
html = "<image src='inc/images/loader.gif' style='padding-top:400px;'/>";
document.getElementById("SWFContainerDIV").innerHTML = "";
document.getElementById("SWFContainerDIV").innerHTML = html;

$.ajax({
type: "GET",
url: "inc/ajax/getFeedback_data.php",
data: {TDID:a},
success: function(response)
{
hidebglayer();
show_div(500);
html = "";
html += response;
document.getElementById("SWFContainerDIV").innerHTML = "";
document.getElementById("SWFContainerDIV").innerHTML = html;
}
});
}

function updateUserdata()
{
var fname=document.getElementById('firstname_edit');
var lname=document.getElementById('lastname_edit');
var emailid=document.getElementById('email_edit');
var phoneno=document.getElementById('phone_edit');
var newpass1=document.getElementById('newpassword1_edit');
var newpass2=document.getElementById('newpassword2_edit');
var email_filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
if(fname.value=="" )
{
alert("Please enter your name.");
fname.value="";
fname.focus();
return false;
}
else if(lname.value=="" )
{
alert("Please enter your last name.");
lname.value="";
lname.focus();
return false;
}
else if(emailid.value=="" )
{
alert("Please enter Email-Id name.");
emailid.value="";
emailid.focus();
return false;
}
else if (emailid.value!="" && !email_filter.test(emailid.value)) 
{
alert('Please provide a valid email id.');
emailid.value=="";
emailid.focus();
return false;
}
else if(phoneno.value=="" )
{
alert("Please enter your Moblie no.");
phoneno.value="";
phoneno.focus();
return false;
}
else if(phoneno.value!="" && phoneno.value.length<10)
{
alert("Please enter 10 digit mobile no.");
phoneno.value=="";
phoneno.focus();
return false;
}
else if(newpass1.value=="" && newpass2.value!="")
{
alert("Please enter your new password.");
newpass1.value=="";
newpass1.focus();
return false;
}
else if(newpass2.value=="" && newpass1.value!="" )
{
alert("Please enter your Retype password.");
newpass2.value=="";
newpass2.focus();
return false;
}
else if(newpass1.value!="" && newpass2.value!="" && newpass1.value!=newpass2.value)
{
alert("Retype Password unmatch new password.");
newpass2.value=="";
newpass2.focus();
return false;
}
else if(newpass1.value!="" && newpass2.value!="")
{
var passed = validatePassword(newpass1.value, {
length:   [6, 16],
lower:    1,
upper:    0,
numeric:  1,
special:  0,
badWords: ["abc", "123", "321","password",fname.value,lname.value],
badSequenceLength:0
});
if(passed==true)
{
return true;
}
else{					 
alert('Password should including atleast one alphabet,one digit ,without firstname & lastname and minimum length should be 6 character & maximum 16 character.'); 
return false;
}
return false;
}
else
{
return true;
}
return false;
}
function checkfeedback(status)
{
var feedback=document.getElementById('feedback');
if(feedback.value=="")
{
alert("Please enter your feedback.");
feedback.value="";
feedback.focus();
return false;
}
else if(status=="old")
{
var feedback_old=document.getElementById('feedback_old');
if(feedback.value==feedback_old.value)
{
alert("Please update your feedback.");
feedback.focus();
return false;
}
else
{
return true;
}
return false;
}
else
{
return true;
}
return false;
}

/************************-MY account-**********************/
