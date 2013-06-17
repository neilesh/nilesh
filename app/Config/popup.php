<div  id="wrapEdit1" style="display:none;margin:auto;width:32%;"  >
	 <div  id="wrapEdit"  >
	<div id="closeedit"><a href="javascript:closebox('wrapEdit1');"><img src="<?php echo IMAGE_DIR; ?>closeedit.png" width="20" height="20" border="0" /></a></div>
  <div id="editForm">
    	<h1>Edit My Details</h1>
        
        <form action="<?php echo ACTION_DIR;?>post_action.php" method="post" name="userprofile" onsubmit="return updateUserdata();">
        	<label class="label1">First Name</label>
            <input name="firstname_edit" id="firstname_edit" type="text" value="<?php echo $output_response['USER_FIRST_NAME']; ?>" class="textfield1" />
            
            <label class="label1">Last Name</label>
            <input name="lastname_edit" id="lastname_edit" type="text" value="<?php echo $output_response['USER_LAST_NAME']; ?>" class="textfield1" />
            
            <label class="label1">Email ID</label>
            <input name="email_edit" id="email_edit" type="text" value="<?php echo $output_response['EMAIL_ID']; ?>" class="textfield1" />
            
            <label class="label1">Phone No.</label>
            <input name="phone_edit" id="phone_edit" maxlength="10" type="text" value="<?php echo $output_response['MOBILE']; ?>" class="textfield1" />
            
            <label class="label2">Current Password</label>
            <input  name="currentpassword_edit" id="currentpassword_edit" type="password" value="" class="textfield1" />
            
            <label class="label1">New Password</label>
            <input  name="newpassword1_edit" id="newpassword1_edit" type="password" value="" class="textfield1" />
            
            <label class="label2">Retype Password</label>
            <input name="newpassword2_edit" id="newpassword2_edit" type="password" value="" class="textfield1" />
			
           <input name="gender_edit" type="hidden" value="<?php echo $output_response['GENDER']; ?>"  />
           <input name="userid_edit" type="hidden" value="<?php echo $output_response['USER_ID']; ?>"  />
           <input name="middlename_edit" type="hidden" value="<?php echo $output_response['USER_MIDDLE_NAME']; ?>"  />
		   <input type="hidden" value="update_user" name="form_type" id="form_type" />
            <label class="label1">&nbsp;</label><input type="submit" name="submit" id="submit" value="&nbsp;" />
			
        </form>
  </div>
</div>
</div>