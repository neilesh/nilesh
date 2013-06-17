 <?php
 include('../Config/config.php');

 ?>
 <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <title>TATA NANO :: Homepage</title>
        <?php 
        
        
        echo $this->element('Nano/common_header');
        ?>
    
    <?php 
    echo $this->Html->css('popup');
          echo $this->Html->css('main');
    ?>
    
    <?php echo $this->Html->script('validatePassword'); ?>
    <style>

span.question 
{
margin-left:-16px;
  cursor: pointer;
  display: inline-block;
  width: 16px;
  height: 16px;
  background-color: #89A4CC;
  line-height: 16px;
  color: White;
  font-size: 13px;
  border-radius: 8px;
  text-align: center;
  position: relative;
  margin-top: 7px; 
}
.qtwo{
  background:none!important; color:black!important;width:119px!important;
}
span.question:hover { background-color: #3D6199; }
div.tooltip 
{
  background-color: #3D6199;
  color: White;
  position: absolute;
  left: -250px;
  top: -25px;
  z-index: 1000000;
  width: 250px;
  border-radius: 5px;
}
div.tooltip:before {
  border-color: transparent #3D6199 transparent transparent;
  border-right: 6px solid #3D6199;
  border-style: solid;
  border-width: 6px 6px 6px 0px;
  display: block;
  height: 0;
  width: 0;
  line-height: 0;
  position: absolute;
  top: 40%;
  left: -6px;
}
div.tooltip p {
  margin: 10px;
  color: White;
}
    </style>
    <script type="text/javascript">
       $(document).ready(function () {
  $("span.question").hover(function () {
    $(this).append('<div class="tooltip"><p>Password should including atleast one alphabet,one digit ,without firstname & lastname and minimum length should be 6 character and maximum 16 character.</p></div>');
  }, function () {
    $("div.tooltip").remove();
  });
});
      </script>
  </head>
  <body>

  <div id="darkBackgroundLayer" 
style="position:absolute;height:100%;width:100%;top:0px;left:0px;background-color:#000;filter:alpha(opacity=60);-moz-opacity:.60;opacity:.60;z-index:900000;display:none"   >
</div>
<div id="windowcontent" style="z-index:999999;display:none;top:250px;left:00;position:absolute;"  >
  <center><div id="SWFContainerDIV" ></div></center>
</div>
    <div id="top">
      <div id="topNavigation">
            <ul class="dropdown">
                        <li><a href="#">My Nano My Way</a></li>
                        <li><a href="#">Nano Story</a></li>
                        <li><a href="#">Specifications</a>
                            <ul class="sub_menu">
                                <li><a href="#">Technical Specs</a></li>
                                <li><a href="#">Features</a></li>
                                <li><a href="#">View 360&ordm;</a></li>
                                 <li><a href="#">Compare</a></li>
                                 <li><a href="#">Variants</a></li>
                                 <li><a href="#">Trims</a></li>
                                 <li><a href="#">Accessories</a></li>
                            </ul>
                        </li>
                  <li><a href="#">Gallery</a></li>
                      <li><a href="#">Price List</a></li>
                      <li><a href="#">News &amp; Reviews</a></li>
                      <li><a href="#">For Owners</a></li>
                      <li><a href="#">Pit Stop</a></li>
            </ul>
          </div>
          <!-- topNavigation END -->      
        </div>
      <!-- top END -->
        <div class="clear"></div>
          
      <div id="header">
          <div id="quickMenu">
              <ul>
                  <li>
           <?php if(isset($_SESSION['user'])){ 
              echo $this->Html->link('My Account',array('action'=>'Nanos/my_account'));
            ?>
          
           <?php
           }               
           else{
            echo $this->Html->link('My Account',array('action'=>'my_account'));
           ?>
           
          <!-- <a href="<?php //echo SITE_URL;?>form_authenticate_user.php" class="selected">
          Login</a> -->


          <?php }
          ?>
          </li>
           <li><!-- <a href="index.php">HOME</a></li> --><?php echo $this->Html->link('HOME',array('action'=>'index'));?>
                    <li><a href="#">FAQs</a></li>
                    <li><a href="#">Awards</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
            
             <div id="logo"><h1><a href="<?php echo SITE_URL.'nanos/index';?>"><?php echo $this->Html->image('top-logo.gif');?></a></h1></div>
            
          
        </div>
      <!-- header END -->
        
        
        <div id="stage">
    
          <div><?php echo $this->Html->image('form-step3.gif');?></div>
          
            
             <div id="login">
              <h2>Already signed up?<div style="height:12px;"></div>
        <span>Login &amp; Checkout</span>
                </h2>
        <div id="loginFormWrap">
        <form name="auth_login_form" method="post" id="form" action="post_action" onsubmit="return validateLoginForm()">
        <label>Email</label>
        <input class="inputf" type="text" name="auth_emailid" id="auth_emailid"  value=""/>
        <label> Password</label>
        <input class="inputf" type="password" maxlength="16" name="auth_user_pwd" id="auth_user_pwd"  />
        <input type="submit" name="auth_login"  class="submit" value="">
        <div class="formlink"><a href="javascript:forgotpass('forgot');">Forgot Password?</a></div>
        <input type="hidden" value="authenticate_user" name="form_type" id="form_type" />
        <input type="hidden" value="<?php if(isset($_SERVER['HTTP_REFERER'])) { echo $_SERVER['HTTP_REFERER'];  } ?>" name="form_rdrt" id="form_rdrt" />
        </form>
        </div>
        </div> 
       
            <!-- login END -->
      
       <div id="newuser">
                  <h2>New user?<div style="height:12px;"></div>
          <span>Sign up &amp; continue to checkout</span></h2>
                    
                    <form name="registration" id="registration" method="post" action="post_action"  onsubmit="return validateSignupForm123();">
           <div id="form1" >
                                     
                          <label>First Name</label><input type="text" name="firstname" id="firstname" value="" class="inputf">
          
          <label>Last Name</label><input type="text" name="lastname" id="lastname" value="" class="inputf">
            
            <label>Gender</label>
                        <select name="gender" id="gender" class="select2  ">
                          <option value="0">SELECT</option>
                          <option value="M">Male</option>
                          <option value="F">Female</option>
                        </select>
                       
             <label>Contact No.</label><input type="text" onkeypress="return isNumberKey(event)" name="contactno" id="contactno" maxlength="10" value="" class="inputf">
            <label>Email ID</label><input type="text" name="emailid" id="emailid" value="" class="inputf"
            />        
                                
                        <label>Password</label><input type="password" name="password" id="password" maxlength="16" value="" class="inputf"><span class="question">?</span>
            <label>Confirm Password</label><input type="password" name="password2" maxlength="16" id="password2" value="" class="inputf">
            
            <div class="fix"></div>
                        <div style="float:left; height:20px;"><input name="agreement" class="checkbox1" type="checkbox" id="agree" style="margin-top:0\9 !important;margin-left:96px;"></div><div style="float:left; height:20px; padding-top:5px; font-family:Arial, Helvetica, sans-serif; font-size:11px;">I agree to the terms &amp; conditions</div>
                        <div class="fix"></div>
            
            <input type="submit" name="reg_user" value="" class="submit2">
                        <input type="hidden" value="register_user" name="form_type" id="form_type" />
                       
                    </form>
                    
                </div>
         
            
      </div>  </div>  
        <!-- stage END -->
        
  
      <div class="blackBorder"></div>
   
      <div class="clear"></div>
    
       <?php 
       include('Nano/comman_footer.ctp');
       ?>
    

  </body>
</html>
 