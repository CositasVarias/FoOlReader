<?php
// Arreglo de banners

$banners = array(
	"banner34.png",
	"banner35.png",
	"banner36.png",
	"banner37.png",
	"banner38.png",
	"banner39.png",
	"banner40.png",
	"banner42.png",
	"banner43.gif",
	"banner44.png",
	"banner45.png",
	"banner46.png",
	"banner48.png",
	"banner49.png",
	"banner50.png",
	"banner51.png",
	"banner52.png",
	"banner53.png",
	"banner54.png",
	"banner55.png",
	"banner56.png",
	"banner57.png",
	"banner58.png",
	"banner59.png",
	"banner60.png",
	"banner61.png",
	"banner62.png",
	"banner63.png"
);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">


<head>
	<title><?php echo fr_html_title(); ?> | <?php echo fr_selected_manga_title(); ?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="description" content="<?php echo fr_selected_manga_title(); echo fr_html_description(); ?>, Powered by FoOlReader." />
	<meta name="keywords" content="FoOlReader, <?php echo fr_selected_manga_title(); echo fr_html_keywords(); ?>" />
	<meta name="generator" content="FoOlReader 1.0" />
	<link rel="canonical" href="<?php global $fr_baseurl; echo $fr_baseurl;?>" />
	<link href="<?php echo fr_html_style(); ?>" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="js/jquery.js"></script>
	
<script type="text/javascript">
function toggleMenu(that)
{
	jQuery(".options").not(jQuery(that).find(".options")).hide();
	jQuery(".selector").add(".selector2").not(that).removeClass("selector-active");
	jQuery(".options").not(jQuery(that).find(".options")).removeClass("options-active");
	jQuery(that).find(".options").toggle();
	jQuery(that).toggleClass("selector-active");
	jQuery(that).find(".options").toggleClass("options-active");
}

jQuery(document).ready(function(){

	jQuery(".selector").add(".selector2").each(function(){
		if (jQuery.browser.msie) {
   			this.onselectstart = function () { return false; };
		} else
		{
    		this.onmousedown = function(e){e.preventDefault()}
    	}
	});
	
	jQuery('body').click(function() {
		jQuery(".options").hide();
		jQuery(".selector").add(".selector2").removeClass("selector-active");
		jQuery(".options").removeClass("options-active");
	});

 	jQuery('.selector').add(".selector2").click(function(event){
  	   event.stopPropagation();
 	});
});

</script>
</head>


<body>
<div id="topimage"> <img id="banner" src="themes/aracnido/images/top/<?php echo $banners[array_rand($banners)] ?>" border="0" /> </div> 
<div id="navig">
	<a href="<?php echo $fr_baseurl;?>"><h1 id="title"><?php //echo fr_html_title(); ?> Inicio </h1></a> 
		<?php global $fr_html_back; if($fr_html_back != "") echo'<div style="float:left; margin:2px 5px 0; padding-top:6px; font-size:11px;"><a href="'.$fr_html_back.'">Volver a la página &crarr;</a></div>'; ?>
	
			<?php fr_dropdown_comics(); ?>
			<?php fr_dropdown_chapters_2(); ?>			
	<div class="clearer"></div>	
</div>




<?php fr_show_ads(1); ?>




