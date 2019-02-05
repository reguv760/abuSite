<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<META NAME="Keywords" CONTENT="Abraham L. Lim, Immigration Lawyer, Attorney Abraham L Lim, Lawyer, Montebello, Hacienda Heights, Rowland Heights, Azusa, Covina, West Covina, US Immigration, Los Angeles, Orange County, Brea, Family Lawyer, Criminal Defense, California Franchise Law">
<META NAME="Description" CONTENT="Atty. Abraham L. Lim specializes in US Immigration Law as well as cases in criminal defense, personal injury, family law and California franchise law. ">
<META NAME="Author" CONTENT="admin@tessellationdesign.com">
<link rel="Shortcut icon" href="http://www.abrahamlimlaw.com/abuColumn.ico">
<link rel="icon" type="image/ico" href="http://www.abrahamlimlaw.com/abuColumn.ico">
<title>Law Offices of Abraham L. Lim</title>

<link rel="stylesheet" type="text/css" href="css/style.css">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,400italic' rel='stylesheet' type='text/css'>

<script src="js/verifyEmail.js"></script>

<? include
	'tracker.php';
?>

</head>

<body>
<div id="container">
	<div class="ilw">
        <div class="panel">
        ILW Immigration Daily Updates<br/>
        <iframe src="http://www.ilw.com/parse.asp" height="95" width="900" scrolling="yes" frameborder="0" marginheight="0" marginwidth="0" allowtransparency="false"></iframe>
        </div>
    </div>

    <div id="content" style="background-image:none;">

    	<div id="leftBar">
       		<div id="menu">
            	<ul>
                	<li><a href="index.php">About Us</a></li>
                    <li><a href="services.php">Services</a></li>
                    <li><a href="articles.php">Articles Written</a></li>
                    <li><a href="gallery.php">Gallery</a></li>
                    <li>Contact Us</li>
                </ul>
            </div>

      		<div id="whiteBox">
            	<span class="bold">ABRAHAM L. LIM, ESQ.</span><br/>
                <span class="italic">Law Offices of Abraham L. Lim<br/>
                A Professional Corporation<br/>
                <!-- 1800 W. Beverly Blvd. Suite 205<br/>
                Montebello CA 90640<br/></span> -->
                E-MAIL: <a href="mailto:ALim@abrahamlimlaw.com">ALim@abrahamlimlaw.com</a><br/>
                <!-- P: 323 888 9788 F: 323 888 0503 -->
            </div>

    	</div>

        <div id="contentHolder" style="width:650px;">
        	<span class="pageHeader">Contact Us</span><br/>
            <br/>
        	<p></p>

            <div id="formHolder">
            	<? include
					'verifyForm.php';
				?>
            	<form method="POST" enctype="multipart/form-data" name="messageForm" id="messageForm">
                     Name:<span class="red_txt">*</span><br>
                     <input class="textBox" type="text" name="name" value="" onFocus="if(this.value==this.defaultValue)this.value='';" onBlur="if(this.value=='')this.value=this.defaultValue;" onClick="if (this.value == '') this.style.color = '#000';" onKeyDown="if (this.value == '') { this.value = ''; }">
                     <br/>
                     Email:<span class="red_txt">*</span><br>
                     <input class="textBox" type="text" name="email" value="" onFocus="if(this.value==this.defaultValue)this.value='';" onBlur="if(this.value=='')this.value=this.defaultValue;" onClick="if (this.value == '') this.style.color = '#000';" onKeyDown="if (this.value == '') { this.value = ''; }">
                     <br/>
                     Phone:<span class="red_txt">*</span><br>
                    <input class="textBox" type="text" name="phone" value="" onFocus="if(this.value==this.defaultValue)this.value='';" onBlur="if(this.value=='')this.value=this.defaultValue;" onClick="if (this.value == '') this.style.color = '#000';" onKeyDown="if (this.value == '') { this.value = ''; }">
                    <br/>
                   Message:<span class="red_txt">*</span><br/>
                        <textarea name="message" maxlength="1000" onFocus="if(this.value==this.defaultValue)this.value='';" onBlur="if(this.value=='')this.value=this.defaultValue;"  onclick="if (this.value == '') this.style.color = '#000';" onKeyDown="if (this.value == '') { this.value = ''; }"></textarea> <br />
                    <div id="submitArea">

						<div id="submitButton" onClick="submitOnClick(document.getElementById('messageForm'))">Submit</div>
                        <div id="success">Sending Form...</div>
                    </div>

              	</form>
            </div>

            <div id="contactText">
            	Feel free to contact us through this form for any questions.</div>

        </div>
    </div>
    <div id="footer">
    	<span class="style1">2017&copy; All Rights Reserved.<br/>
     Designed by:</span><a href="http://www.tessellationdesign.com" class="style1">&nbsp;<img src="tdg_logo.png" alt="" width="22" height="22" border="0" align="absmiddle">&nbsp;TDG</a>
    </div>
</div>
</body>
