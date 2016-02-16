<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sendinblue | page not found</title>
</head>
<body style="background-color:#efefef;">
    <style>
    	.wrap-404 {width:900px; margin:0px auto; text-align:center;}
			.wrap-404 .blue-404 {width:702px; margin:20px auto; height:331px; background:url(/public/images/404.png) no-repeat left top;}
			.wrap-404 .txt52px {font:normal 52px Arial; color:#555555; padding:50px 0px;}
                        p {font:normal 22px Arial; color:#555;}
                        p a {color:#0088CC; text-decoration:none; font-style: italic;}
    </style>
    <div class="wrap-404">
    	<?php if(!empty($this->userMsg)){ ?>
        <div class="txt52px"><?php echo $this->userMsg;?></div>
        <?php }else{ ?>
        <div class="blue-404"></div>
        <div class="txt52px">Sorry, something went bad.</div>
        <?php } ?>
        <?php if(isset($this->id)){
            echo '<p>Please contact <a href="mailto:support+'.$this->id.'@mailin.fr">support@mailin.fr</a>.</p>';
        }else{
            echo '<p>Please contact <a href="mailto:support@mailin.fr">support@mailin.fr</a>.</p>';
        }?>
    </div>
    <div style="display:none;"><?php echo $this->message; ?></div>
    <div style="display:none;"><?php echo $this->exception->getTraceAsString(); ?></div>
</body>
<!--<body style="background-color:#efefef;">
    <style>
    	.wrap-404 {width:900px; margin:0px auto; text-align:center;}
			/*.wrap-404 .blue-404 {width:702px; margin:20px auto; height:331px; background:url(images/404.png) no-repeat left top;}*/
			.wrap-404 .blue-404 {width:351px; margin:20px auto; height:166px; background:url(images/404-sml.png) no-repeat left top;}
			/*.wrap-404 .txt52px {font:normal 52px Arial; color:#555555; padding:50px 0px;}*/
			.wrap-404 .txt26px {font:normal 26px Arial; color:#555555; padding:50px 0px;}
			/*.wrap-404 .hr-line {background:url(images/bg-hr-line.png) repeat-x left top; width:100%; padding:10px 0px;}*/
			.wrap-404 .hr-line {background:url(images/bg-hr-line-sml.png) repeat-x left top; width:600px; padding:10px 0px; margin:0px auto;}
			/*.wrap-404 .logoMailin {background:url(images/logoMailin.png) no-repeat left 60px; width:397px; height:97px; padding:60px 0px; margin:0px auto;}*/
			.wrap-404 .logoMailin {background:url(images/logoMailin-sml.png) no-repeat left 60px; width:199px; height:49px; padding:50px 0px; margin:0px auto;}
			.wrap-404 .mailin-links {width:580px; margin:0px auto;}
				.wrap-404 .mailin-links a {color:#0789fb;}
					.wrap-404 .mailin-links a.fleft {float:left; text-align:left;}
					.wrap-404 .mailin-links a.fright {float:right; text-align:right;}
			.clear {clear:both;}
    </style>
    <div class="wrap-404">
    	<div class="blue-404"></div>
        <div class="txt26px">Sorry, something went bad.</div>
        
        <div class="hr-line"></div>
        <div class="logoMailin"></div>
        <div class="mailin-links">
        	<a class="fleft" href="http://www.mailinblue.com">www.mailinblue.com</a>
            <a class="fright" href="http://www.mailin.fr">www.mailin.fr</a>
        </div>
    </div>
</body>-->
</html>
<?php //die;?>