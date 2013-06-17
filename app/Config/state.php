<?php
include("config.php");
$result_city=mysql_query("select distinct(state) from tbl_state order by state asc")or die (mysql_error());
if(mysql_num_rows($result_city) > 0)
	{
		$finalResult="";
	 	while($rows = mysql_fetch_array($result_city))
		{
			if($finalResult=="")
				$finalResult="<option value='".$rows['state']."'>".$rows['state']."</option>";
			else
				$finalResult.="<option value='".$rows['state']."'>".$rows['state']."</option>";
		}
		echo $finalResult;
	}

?>
