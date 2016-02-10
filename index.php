<?php
	include("db_inc.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Client Mangement System</title>
<link rel="stylesheet" type="text/css" href="css/index_style.css"/>
<link rel="stylesheet" type="text/css" href="css/form_style.css"/>
<script language="JavaScript" src="js/gen_validatorv4.js"
    type="text/javascript" xml:space="preserve"></script>

</head>

<body>
   	 
    <div class="wrap">
        <div id="body">
            <?php
				if(isset($_GET['obj'])&&$_GET['obj']!=="")
					{
						include($_GET['obj'].".php");
					}
					else
					{
						include("viewclient.php");
					}
			?>
         </div>
    </div>
</body>
</html>