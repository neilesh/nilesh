<ul>
                	
                    <!--li><a href="index.html">Home</a></li-->
					<li><a href="book_test_drive.html">Book a Test Drive</a></li>
                    <li><a href="http://alpha.mapmyindia.com/tatappl/index.jsp?vtype=tmpc&product=Nano">Dealer Locator</a></li>
                    <li><a href="faqs.html">FAQs</a></li>
                    <li><a href="awards.html">Awards</a></li>
                    <li><a href="contact.html">Contact</a></li>
					<li>
					 <?php if($_SESSION['user']){ ?>
					<a href="<?php echo SITE_URL;?>my_account.php">
					My Account</a>
					 <?php
					 }
					 else{
					 ?>
					 
					<a href="<?php echo SITE_URL;?>login_signup.php" class="selected">
					Login</a>
					<?php }
					?>
					</li>
					<li>
					 <?php if($_SESSION['user'])
					 { 
					 ?>
					<a href="<?php echo SITE_URL;?>logout.php">
					Logout</a>
					 <?php
					 }
					 ?>
</ul>
