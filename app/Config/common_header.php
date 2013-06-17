		<link rel="stylesheet" href="<?php echo CSS_DIR;?>main.css" type="text/css" media="all">
		<noscript>
			<link rel="stylesheet" href="<?php echo SITE_URL;?>static/css/noscript.css" type="text/css" media="screen">
		</noscript>
		<!--[if IE 7]>
			<link rel="stylesheet" href="/static/css/ie7.css" type="text/css" media="screen">
		<![endif]-->
		<!--[if lt IE 9]>
			<script src="/static/js/html5.js"></script>
		<![endif]-->
        <script type="text/javascript" src="<?php echo SITE_URL;?>static/jquery.js"></script>
        <link rel="stylesheet" href="<?php echo CSS_DIR;?>uniform.css" type="text/css" media="all">
        <script type="text/javascript" src="<?php echo SITE_URL;?>static/jquery.uniform.js"></script>
        <script type="text/javascript" charset="utf-8">
		  $(function(){
			$("select").uniform();
		  });
		</script>
        
        <script type="text/javascript" src="<?php echo SITE_URL;?>static/dropdown.js"></script>
		<script type="text/javascript" src="<?php echo SITE_URL;?>inc/js/ajaxrequest.js"></script>
		<link href="<?php echo CSS_DIR;?>thickbox.css" rel="stylesheet" type="text/css">
		<script type="text/javascript" src="<?php echo SITE_URL;?>static/thickbox-compressed.js"></script>
			<?php include('inc/js/main.php'); ?>
         <script language="javascript">
			
			function send_reset_link()
				{
				   var str=trim(document.getElementById('fpass_emailid').value);
				    
					 if(str=="" || str=="Enter your Email here")
					 {
						alert("Please enter Email id.");
						document.getElementById('fpass_emailid').value="";
						document.getElementById('fpass_emailid').focus();
					}
					else if (!emailreg.test(str)) 
					{
					alert('Please provide a valid email address');
					document.getElementById('fpass_emailid').focus();
					}
					else
					{
					$.ajax({
					type: "GET",
					url: "send_reset_link.html",
					data: {q:str},
					success: function(response)
					{
					if($.trim(response)=="Mail send successfully")
					{
					hidebglayer();
					emailsend('Mail send successfully');
					}
					else
					{
						hidebglayer();
						emailsend('Mail not send successfully');
					}
					}
					});
					}
				}
			
	     </script>
         
        <script type="text/javascript">
			$(document).ready(function() {
			 $(':input[title]').each(function() {
			 var $this = $(this);
			 if($this.val() === '') {
			 $this.val($this.attr('title'));
			 }
			 $this.focus(function() {
			 if($this.val() === $this.attr('title')) {
			 $this.val('');
			 }
			 });
			 $this.blur(function() {
			 if($this.val() === '') {
			 $this.val($this.attr('title'));
			 }
			 });
			 });
			});
		</script>