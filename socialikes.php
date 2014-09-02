<!-- Author @Ashwin K Shenoy
     This can be integrated with normal websites and on magento framework,
     (by changing or giving path by php in lurl section for magento)
     FB Profile: www.fb.com/ashwin.k.shenoy
     
     Instructions:
     Add the following code before "</body>" tag.
     Copy only the "like" div and place it before "</body>" in your website
-->

<html>
<head>
<style type="text/css">
.like
{
	border: solid 1px rgb(201, 201, 201);
	padding: 12px;
	width: 60px;
	position: fixed;
	margin-top: 125px;
	border-radius: 15px;
}
</style>
</head>
<body>

<!--copy from here -->

<div class="like" style="border-radius: 15px;border: solid 1px rgb(201, 201, 201);padding: 12px;width: 60px;position: fixed;margin-top: 125px;">

<!-- Edit Below -->
<?php
//General
$lurl     =  "http://www.example.com";                    //  Your Website URL
//For Pinterest
$pinimage =  "http://www.example.com/smainlogo2.png";    //  Your Company Logo Path
$pindesc  =  "You Rock!!";                               //  Description will Appear in Pinterested Share tab
//for twitter
$hashtag  =  "abc rocks";				 //leave this blank if You don't want Hashtag ex: #example
$via      =  "ashwin";                                   //leave this blank if You don't want Via ex: @example
?>
<!--Author @Ashwin K Shenoy-->
<!-- 
####################################
########################################################################
############################################################################################################
-->
<!-- DO NOT EDIT BELOW THIS -->
<!-- 
####################################
########################################################################
############################################################################################################
-->
<!--Author @Ashwin K Shenoy-->

	<div style="margin-left:4px;">
	<!-- fb like button -->

		<div id="fb-root"></div>
		<script>(function(d, s, id) {
	 	 var js, fjs = d.getElementsByTagName(s)[0];
	 	 if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>
	
		<div class="fb-like" data-href="<?php echo $lurl; ?>" data-layout="box_count" data-action="like" data-show-faces="false" data-share="false" style="margin-bottom: 10px;"></div>

	
	<!-- /fb like button -->


<!--Author @Ashwin K Shenoy-->

	<!-- +1 button -->
	
		<!-- Place this tag in your head or just before your close body tag. -->
		<script src="https://apis.google.com/js/platform.js" async defer></script>
	
		<!-- Place this tag where you want the +1 button to render. -->
		<div style="padding:10px !important;" class="g-plusone" data-size="tall" data-href="<?php echo $lurl; ?>"></div>
	
	<!-- /+1 button -->

	</div>


<br>

<!--Author @Ashwin K Shenoy-->

	<!-- Pin button http%3A%2F%2Fwww.shenoychanakya.site90.com-->
	<div style="margin-top:30px;">
		<a href="//www.pinterest.com/pin/create/button/?url=<?php echo $lurl; ?>&media=<?php echo $pinimage;?>&description=<?php echo $pindesc;?>" data-pin-do="buttonPin" data-pin-config="above" data-pin-height="28"><img src="//assets.pinterest.com/images/pidgets/pinit_fg_en_rect_gray_28.png" /></a>
		<!-- Please call pinit.js only once per page -->
		<script type="text/javascript" async src="//assets.pinterest.com/js/pinit.js"></script>
	</div>
	<!-- /Pin button -->


<!--Author @Ashwin K Shenoy-->

	<!-- twitter button -->
	<div style="margin-top:10px;">
		<a data-via="<?php echo $via; ?>" data-hashtags="<?php echo $hashtag; ?>" href="https://twitter.com/share" class="twitter-share-button" data-url="<?php echo $lurl; ?>" data-counturl="<?php echo $lurl; ?>" data-lang="en" data-count="vertical">Tweet</a>
		<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
	</div>
	<!-- /twitter button -->


</div>

<!-- Copy till here -->


<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

</body>
</html>
