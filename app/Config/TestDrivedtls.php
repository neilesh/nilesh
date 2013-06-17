
<?php 
echo "<div class='widget2'>
              	<h4>My Test Drives</h4>";
				if($testDrive_output)
				{
	for($i=0;$i<sizeof($testDrive_output);$i++)
	{
	      $test_date=explode('T',$testDrive_output[$i]['LAST_UPDATED_DATE']);
               echo" <ul>
                	<li>
                    <span>Test Drive no.</span>
                    <strong>".$testDrive_output[$i]['TD_ID']."</strong>
                    </li>
                    
                 
                	
                    <li>
                    <span>Date</span>
                    <strong>".$test_date[0]."</strong>
                    </li>
                    
                    <li>
                    <a style='cursor:pointer;' onclick=\"ajaxdatacall('".$testDrive_output[$i]['TD_ID']."');\">Feedback</a> <strong><a href='".SITE_URL."build-buy.html'><img src='".IMAGE_DIR."buynow1.gif' width='90' height='20' border='0'></a></strong>
                    </li>    
                    
                </ul>            
               ";
		
		 

	}
	}
	else
	{
	echo "<ul><li><span>No record found.</span></li>";
	}
 echo "</div>";
?>
