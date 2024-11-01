<?php
/*
Plugin Name: Simple Slideshow Builder
Plugin URI: http://
Description: A simple slideshow that uses a short code to easily place onto your website! 
Version: 2.5
Author: Logan Wheeler
Author URI: http://profiles.wordpress.org/loganw
License: :)
*/


register_activation_hook();
register_deactivation_hook();
register_uninstall_hook();
add_action('admin_menu', 'add_new_pages');

add_option('color', '');
add_option('slide_delay', '');
add_option('upload_image', '');
add_option('upload_image2', '');
add_option('upload_image3', '');
add_option('upload_image4', '');
add_option('upload_image5', '');
add_option('upload_image6', '');
add_option('upload_image7', '');
add_option('upload_image8', '');
add_option('upload_image9', '');
add_option('upload_image10', '');
add_option('upload_image_content', '');
add_option('upload_image_content2', '');
add_option('upload_image_content3', '');
add_option('upload_image_content4', '');
add_option('upload_image_content5', '');
add_option('upload_image_content6', '');
add_option('upload_image_content7', '');
add_option('upload_image_content8', '');
add_option('upload_image_content9', '');
add_option('upload_image_content10', '');
add_option('HEROES_width', '');
add_option('PETER_COLOR', '');
add_option('SYLAR', '');
add_option('HEROES_BORDER', '');
add_option('HEROES_Resize', '');

add_action('admin_enqueue_scripts', 'my_admin_scripts');
 
function my_admin_scripts() {
    if (isset($_GET['page']) && $_GET['page'] == 'SimpleSlideshowBuilder') {
        wp_enqueue_media();
        wp_register_script('my-admin-js', WP_PLUGIN_URL.'/simple-slideshow-builder/my-admin.js', array('jquery'));
        wp_enqueue_script('my-admin-js');
    }
}


function add_new_pages() {
    // Add the top-level admin menu
    $page_title = 'Simple Slideshow Options';
    $menu_title = 'Simple Slideshow';
    $capability = 5;
    $menu_slug = 'SimpleSlideshowBuilder';
    $function = 'simple_slideshow_builder';
    add_menu_page($page_title, $menu_title, $capability, $menu_slug, $function);
}


function simple_slideshow_builder() { ?>


<form method="post" action="options.php">
<?php wp_nonce_field('update-options'); ?>

<?php
$plugins_url = plugins_url();
?>
<?php
echo "<script src='" . plugins_url( 'my-admin.js' , __FILE__ ) . "'></script>";
?>
<style>

#footer-left {
display:none;
}

#footer-upgrade {
display:none;
}

body
{

<?php
echo "background-image:url('" . plugins_url( 'images/background.jpg' , __FILE__ ) . " ') ; ";
?>
background-size:100% 100%;
}

.HIRO
{
opacity:1;
margin:50px;
cursor:pointer;
height:100px;
width:100px;
background-position:center center;
/* Firefox */
-moz-transition: all 0.3s ease;
/* WebKit */
-webkit-transition: all 0.3s ease;
/* Opera */
-o-transition: all 0.3s ease;
/* Standard */
transition: all 0.3s ease;
background-repeat:no-repeat;
background-size:100%;
text-align:middle;
}


.NAKAMURA
{
opacity:1;
padding-top:15px;
margin-left:100px;

width:150px;
/* Firefox */
-moz-transition: all 0.3s ease;
/* WebKit */
-webkit-transition: all 0.3s ease;
/* Opera */
-o-transition: all 0.3s ease;
/* Standard */
transition: all 0.3s ease;
}

.lilimage
{
margin:3px;
float:left;
height:20px;
width:20px;
/* Firefox */
-moz-transition: all 0.3s ease;
/* WebKit */
-webkit-transition: all 0.3s ease;
/* Opera */
-o-transition: all 0.3s ease;
/* Standard */
transition: all 0.3s ease;
opacity:1;
}

.top_block1
{
padding-left:100px;
padding-right:100px;
width:300px;
height:600px;
float:left;
height:100%;
background-color:rgba(255,255,255,0.9);
overflow:auto;
}

ul.tabs
{
width:100%;
padding: 7px 0;
font-size: 0;
list-style-type: none;
text-align: left; /*set to left, center, or right to align the tabs as desired*/
}
        
ul.tabs li
{
display: inline-block;
margin-top:px; /*distance between tabs*/
}
        
ul.tabs li a
{
font: normal 20px Verdana;
text-decoration: none;
position: relative;
z-index: 1;
margin: 1px;
padding: 7px 7px;
color: #000;
background-color:#ff006c;
background-color:#<?php echo get_option('color'); ?>;
outline:none;
cursor:pointer;
}

ul.tabs li a input
{
font: normal 12px Verdana;
background-color:#ff006c;
background-color:#<?php echo get_option('color'); ?>;
border:solid 2px #ff006c;
border:solid 2px #<?php echo get_option('color'); ?>;
cursor:pointer;
}
        
ul.tabs li a:visited
{
color: #000;
}
        
ul.tabs li a:hover
{
}
        
ul.tabs li.selected a
{
/*selected tab style */
position: relative;
top: 0px;
font-weight:bold;
background: white;
}
        
        
ul.tabs li.selected a:hover
{
/*selected tab style */
text-decoration: none;
background-color:white;
}
        
div.tabcontent
{

}

.ECLIPSE
{
display:block;
font-family: 'Alice', serif;
border-bottom:solid 1px grey;
}

.HEROES
{
height:100px;
width:100px;
border:solid 2px #<?php echo get_option('color'); ?>;
<?php
echo "background-image:url('" . plugins_url( 'images/blank.jpg' , __FILE__ ) . " ') ; ";
?>
background-size:100% 100%;
}

.HEROES img
{
height:100px;
width:100px;
}

.NOAH
{
background-color:rgba(255,255,255,0.7);
float:left;
width:300px;
height:500px;
}

#top_block1, #top_block2, #top_block3
{
height:500px;
width:300px;
}

</style>













<div class="NOAH"><div class="HIRO" onClick="close_pop2();close_pop3();pop();loaderhaha();" style="<?php
echo "background-image:url('" . plugins_url( 'images/pictures.png' , __FILE__ ) . " ') ; ";
?>"><center><div class="NAKAMURA" onClick="pop();loaderhaha();"><img class="lilimage" src="<?php echo get_option('upload_image'); ?>"><img class="lilimage" src="<?php echo get_option('upload_image2'); ?>"><img class="lilimage" src="<?php echo get_option('upload_image3'); ?>"><img class="lilimage" src="<?php echo get_option('upload_image4'); ?>"><img class="lilimage" src="<?php echo get_option('upload_image5'); ?>"><img class="lilimage" src="<?php echo get_option('upload_image6'); ?>"><img class="lilimage" src="<?php echo get_option('upload_image7'); ?>"><img class="lilimage" src="<?php echo get_option('upload_image8'); ?>"><img class="lilimage" src="<?php echo get_option('upload_image9'); ?>"><img class="lilimage" src="<?php echo get_option('upload_image10'); ?>"></div></center></div><div class="HIRO" onclick="close_pop();close_pop3();pop2()" style="<?php
echo "background-image:url('" . plugins_url( 'images/preview.png' , __FILE__ ) . " ') ; ";
?>"></div><div class="HIRO" onclick="close_pop();close_pop2();pop3()" style="<?php
echo "background-image:url('" . plugins_url( 'images/settings.png' , __FILE__ ) . " ') ; ";
?>"><div class="NAKAMURA" onClick="pop3();loaderhaha();"><the style="color:#2777df;">Width: <the id="checkwidth"></the></the><?php echo get_option('HEROES_width'); ?><the style="color:#2777df;">px</the><BR><the style="color:#2777df;">Background Color:</the><the style="color:#<?php echo get_option('color'); ?>;"><?php echo get_option('color'); ?></the><BR><the style="color:#2777df;">Text Color:</the><the style="color:#<?php echo get_option('PETER_color'); ?>;"><?php echo get_option('PETER_color'); ?></the></div></div><center><the style="color:white;">Simple</the></center></div>












<link href='http://fonts.googleapis.com/css?family=Alice' rel='stylesheet' type='text/css'><input type="hidden" name="action" value="update" /><input type="hidden" name="page_options" value="upload_image,upload_image2,upload_image3,upload_image4,upload_image5,upload_image6,upload_image7,upload_image8,upload_image9,upload_image10,upload_image_content,upload_image_content2,upload_image_content3,upload_image_content4,upload_image_content5,upload_image_content6,upload_image_content7,upload_image_content8,upload_image_content9,upload_image_content10,color,HEROES_width,PETER_COLOR,SYLAR,HEROES_BORDER,HEROES_Resize" onsubmit="return false;"/>






<script>

function replaceIt()
{
var str=document.getElementById("upload_image_content").innerHTML; 
var str2=document.getElementById("upload_image_content2").innerHTML; 
var str3=document.getElementById("upload_image_content3").innerHTML; 
var str4=document.getElementById("upload_image_content4").innerHTML; 
var str5=document.getElementById("upload_image_content5").innerHTML; 
var str6=document.getElementById("upload_image_content6").innerHTML; 
var str7=document.getElementById("upload_image_content7").innerHTML; 
var str8=document.getElementById("upload_image_content8").innerHTML; 
var str9=document.getElementById("upload_image_content9").innerHTML; 
var str10=document.getElementById("upload_image_content10").innerHTML; 
var n=str.replace(/\"/gi,"\'");
var n2=str2.replace(/\"/gi,"\'");
var n3=str3.replace(/\"/gi,"\'");
var n4=str4.replace(/\"/gi,"\'");
var n5=str5.replace(/\"/gi,"\'");
var n6=str6.replace(/\"/gi,"\'");
var n7=str7.replace(/\"/gi,"\'");
var n8=str8.replace(/\"/gi,"\'");
var n9=str9.replace(/\"/gi,"\'");
var n10=str10.replace(/\"/gi,"\'");
document.getElementById("upload_image_content").innerHTML=n;
document.getElementById("upload_image_content2").innerHTML=n2;
document.getElementById("upload_image_content3").innerHTML=n3;
document.getElementById("upload_image_content4").innerHTML=n4;
document.getElementById("upload_image_content5").innerHTML=n5;
document.getElementById("upload_image_content6").innerHTML=n6;
document.getElementById("upload_image_content7").innerHTML=n7;
document.getElementById("upload_image_content8").innerHTML=n8;
document.getElementById("upload_image_content9").innerHTML=n9;
document.getElementById("upload_image_content10").innerHTML=n10;
}





</script>


<!--Pictures Div-->
<div class="top_block1" id="top_block1" style="display:none;"><div class="tabcontentss" ><ul class="tabs" > <li><a href="#" rel="image1"><img style="height:25px;width:25px;" src="<?php echo get_option('upload_image'); ?>">1</a></li><li><a href="#" rel="image2"><img style="height:25px;width:25px;" src="<?php echo get_option('upload_image2'); ?>">2</a></li><li><a href="#" rel="image3"><img style="height:25px;width:25px;" src="<?php echo get_option('upload_image3'); ?>">3</a></li><li><a href="#" rel="image4"><img style="height:25px;width:25px;" src="<?php echo get_option('upload_image4'); ?>">4</a></li><li><a href="#" rel="image5"><img style="height:25px;width:25px;" src="<?php echo get_option('upload_image5'); ?>">5</a></li><li><a href="#" rel="image6"><img style="height:25px;width:25px;" src="<?php echo get_option('upload_image6'); ?>">6</a></li><li><a href="#" rel="image7"><img style="height:25px;width:25px;" src="<?php echo get_option('upload_image7'); ?>">7</a></li><li><a href="#" rel="image8"><img style="height:25px;width:25px;" src="<?php echo get_option('upload_image8'); ?>">8</a></li><li><a href="#" rel="image9"><img style="height:25px;width:25px;" src="<?php echo get_option('upload_image9'); ?>">9</a></li><li><a href="#" rel="image10"><img style="height:25px;width:25px;" src="<?php echo get_option('upload_image10'); ?>">10</a></li></ul><div id="image1" class="tabcontent" > <div class="HEROES"><img src="<?php echo get_option('upload_image'); ?>"></div><br><input id="upload_image_button" type="button" value="Upload" /><input id="upload_image" type="text" name="upload_image" value="<?php echo get_option('upload_image'); ?>" /><h3>Content</h3><textarea style="width:100%;" name="upload_image_content" id="upload_image_content"  /><?php echo get_option('upload_image_content'); ?></textarea></div><div id="image2" class="tabcontent" ><div class="HEROES"><img src="<?php echo get_option('upload_image2'); ?>"></div><br><input id="upload_image_button2" type="button" value="Upload" /><input id="upload_image2" type="text" name="upload_image2" value="<?php echo get_option('upload_image2'); ?>" /><h3> Content </h3><textarea style="width:100%;" name="upload_image_content2" id="upload_image_content2"  /><?php echo get_option('upload_image_content2'); ?></textarea></div><div id="image3" class="tabcontent" ><div class="HEROES"><img src="<?php echo get_option('upload_image3'); ?>"></div><br><input id="upload_image_button3" type="button" value="Upload" /><input id="upload_image3" type="text" name="upload_image3" value="<?php echo get_option('upload_image3'); ?>" /><h3> Content </h3><textarea style="width:100%;" name="upload_image_content3" id="upload_image_content3"  /><?php echo get_option('upload_image_content3'); ?></textarea></div><div id="image4" class="tabcontent" > <div class="HEROES"><img src="<?php echo get_option('upload_image4'); ?>"></div><br><input id="upload_image_button4" type="button" value="Upload" /><input id="upload_image4" type="text" name="upload_image4" value="<?php echo get_option('upload_image4'); ?>" /><h3> Content </h3><textarea style="width:100%;" name="upload_image_content4" id="upload_image_content4"  /><?php echo get_option('upload_image_content4'); ?></textarea></div><div id="image5" class="tabcontent" > <div class="HEROES"><img src="<?php echo get_option('upload_image5'); ?>"></div><br><input id="upload_image_button5" type="button" value="Upload" /><input id="upload_image5" type="text" name="upload_image5" value="<?php echo get_option('upload_image5'); ?>" /><h3>Content </h3><textarea style="width:100%;" name="upload_image_content5" id="upload_image_content5"  /><?php echo get_option('upload_image_content5'); ?></textarea></div><div id="image6" class="tabcontent" ><div class="HEROES"><img src="<?php echo get_option('upload_image6'); ?>"></div><br><input id="upload_image_button6" type="button" value="Upload" /><input id="upload_image6" type="text" name="upload_image6" value="<?php echo get_option('upload_image6'); ?>" /><h3>Content </h3><textarea style="width:100%;" name="upload_image_content6" id="upload_image_content6"  /><?php echo get_option('upload_image_content6'); ?></textarea></div><div id="image7" class="tabcontent" ><div class="HEROES"><img src="<?php echo get_option('upload_image7'); ?>"></div><br><input id="upload_image_button7" type="button" value="Upload" /><input id="upload_image7" type="text" name="upload_image7" value="<?php echo get_option('upload_image7'); ?>" /><h3>Content </h3><textarea style="width:100%;" name="upload_image_content7" id="upload_image_content7"  /><?php echo get_option('upload_image_content7'); ?></textarea></div><div id="image8" class="tabcontent" ><div class="HEROES"><img src="<?php echo get_option('upload_image8'); ?>"></div><br><input id="upload_image_button8" type="button" value="Upload" /><input id="upload_image8" type="text" name="upload_image8" value="<?php echo get_option('upload_image8'); ?>" /><h3>Content </h3><textarea style="width:100%;" name="upload_image_content8" id="upload_image_content8"  /><?php echo get_option('upload_image_content8'); ?></textarea></div><div id="image9" class="tabcontent" > <div class="HEROES"><img src="<?php echo get_option('upload_image9'); ?>"></div><br><input id="upload_image_button9" type="button" value="Upload" /><input id="upload_image9" type="text" name="upload_image9" value="<?php echo get_option('upload_image9'); ?>" /><h3>Content </h3><textarea style="width:100%;" name="upload_image_content9" id="upload_image_content9"  /><?php echo get_option('upload_image_content9'); ?></textarea></div><div id="image10" class="tabcontent" > <div class="HEROES"><img src="<?php echo get_option('upload_image10'); ?>"></div><br><input id="upload_image_button10" type="button" value="Upload" /><input id="upload_image10" type="text" name="upload_image10" value="<?php echo get_option('upload_image10'); ?>" /><h3>Content </h3><textarea style="width:100%;" name="upload_image_content10" id="upload_image_content10"  /><?php echo get_option('upload_image_content10'); ?></textarea></div></div><h3 class="woot" onClick="document.getElementById('CLAIRE').click();" style="cursor:pointer;color:#ff006c;font-size:30px;" title="Save Changes">Save</h3><input style="display:none;" id="CLAIRE" type="submit" name="Submit" value="<?php _e('Save') ?>" onclick="replaceIt();" /></div>
<!--End Pictures Div-->




<style>
#banner-fade,
#banner-slide{

<?php if (get_option('HEROES_BORDER')=="enable"){ ?>
border:solid 5px #<?php echo get_option('color'); ?>;
<?php } else{  } ?>

}


ol.bjqs-markers li.active-marker,
ol.bjqs-markers li:hover
{
background: #<?php echo get_option('color'); ?>;
}

p.bjqs-caption
{
background-color:#<?php echo get_option('color'); ?>;
font-size:<?php echo get_option('font-size'); ?>px;
color:#<?php echo get_option('PETER_COLOR'); ?>;
}


p.bjqs-caption a
{
text-decoration:none;
font-weight:500;
color:white;
}

#banner-fade ul li img {

<?php if (get_option('HEROES_Resize')=="Scale"){ ?>
height:100%;
width:100%;
<?php } else{  } ?>
max-height: 100%;
max-wide: 100%;

}
</style>

<!--Preview Div-->
<div class="top_block1" id="top_block2" style="display:none;"><script src="http://code.jquery.com/jquery-1.7.1.min.js"></script><?php echo "<script src='" . plugins_url( 'js/bjqs-1.3.js' , __FILE__ ) . "'></script> "; ?><h1>Miniature Example</h1>



<link rel="stylesheet" href="<?php echo "" . plugins_url( 'css' , __FILE__ ) . ""; ?>/<?php echo get_option('SYLAR'); ?>.css" type="text/css" />
<center>
<div id="banner-fade" onmouseover="FLY();" onmouseout="FLY_OUT();" style="height:300px;width:300px;"><ul class="bjqs"><?php if (get_option('upload_image') != '') { ?><li><img src="<?php echo get_option('upload_image'); ?>" title="<?php echo get_option('upload_image_content'); ?>"></li><? } else { }?><?php if (get_option('upload_image2') != '') { ?><li><img src="<?php echo get_option('upload_image2'); ?>" title="<?php echo get_option('upload_image_content2'); ?>"></li><? } else { }?><?php if (get_option('upload_image3') != '') { ?><li><img src="<?php echo get_option('upload_image3'); ?>" title="<?php echo get_option('upload_image_content3'); ?>"></li><? } else { }?><?php if (get_option('upload_image4') != '') { ?><li><img src="<?php echo get_option('upload_image4'); ?>" title="<?php echo get_option('upload_image_content4'); ?>"></li><? } else { }?><?php if (get_option('upload_image5') != '') { ?><li><img src="<?php echo get_option('upload_image5'); ?>" title="<?php echo get_option('upload_image_content5'); ?>"></li><? } else { }?><?php if (get_option('upload_image6') != '') { ?><li><img src="<?php echo get_option('upload_image6'); ?>" title="<?php echo get_option('upload_image_content6'); ?>"></li><? } else { }?><?php if (get_option('upload_image7') != '') { ?><li><img src="<?php echo get_option('upload_image7'); ?>" title="<?php echo get_option('upload_image_content7'); ?>"></li><? } else { }?><?php if (get_option('upload_image8') != '') { ?><li><img src="<?php echo get_option('upload_image8'); ?>" title="<?php echo get_option('upload_image_content8'); ?>"></li><? } else { }?><?php if (get_option('upload_image9') != '') { ?><li><img src="<?php echo get_option('upload_image9'); ?>" title="<?php echo get_option('upload_image_content9'); ?>"></li><? } else { }?><?php if (get_option('upload_image10') != '') { ?><li><img src="<?php echo get_option('upload_image10'); ?>" title="<?php echo get_option('upload_image_content10'); ?>"></li><? } else { }?></ul> </div></center>

<script class="secret-source">
        jQuery(document).ready(function($) {
          $('#banner-fade').bjqs({
            height      : 320,
            width       : 620,
            responsive  : true
          });
        });
      </script>
</div>
<!--End Preview Div-->


<!--Settings Div-->
<div class="top_block1" id="top_block3" style="display:none;"><div class="tabcontents"><ul class="tabs"><li><a href="#" rel="view2">Options</a></li><li><a href="#" rel="view3">How To:</a></li></ul><div id="view2" class="tabcontent"><link href='http://fonts.googleapis.com/css?family=Julius+Sans+One' rel='stylesheet' type='text/css'><h3>Slideshow Width</h3>(Leave blank to auto size)<br><input class="" type="text" id="HEROES_width" name="HEROES_width" value="<?php echo get_option('HEROES_width'); ?>"/>px

<h3>Border</h3>
        <select name="HEROES_BORDER" id="HEROES_BORDER" onChange="document.getElementById('CLAIRE').click();">
        <option name="enable" value="enable"<?php if(get_option('HEROES_BORDER') == "enable") { echo ' selected'; } ?>>Enable</option>
        <option name="disable" value="disable"<?php if(get_option('HEROES_BORDER') == "disable") { echo ' selected'; } ?>>Disable</option>
        </select>

<h3>Automatically Resize Pictures</h3>

        <select name="HEROES_Resize" id="HEROES_Resize" onChange="document.getElementById('CLAIRE').click();">
        <option name="Scale" value="Scale"<?php if(get_option('HEROES_Resize') == "Scale") { echo ' selected'; } ?>>On</option>
        <option name="Default" value="Default"<?php if(get_option('HEROES_Resize') == "Default") { echo ' selected'; } ?>>Off</option>
        </select>

<script>
var width = document.getElementById('HEROES_width').value;
var outputwidth = document.getElementById('checkwidth');
if ( width.length == 0 ) {
outputwidth.innerHTML="(Auto)"
}else{}</script><h3>Background Color</h3><?php
echo "<script src='" . plugins_url( 'js/jscolor.js' , __FILE__ ) . "'></script> ";
?><input class="color {onImmediateChange:'updateInfo(this);}" type="text" id="color" name="color" value="<?php echo get_option('color'); ?>"/><br><h3>Description Text Color</h3><input class="color {onImmediateChange:'updateInfo(this);}" type="text" id="PETER_COLOR" name="PETER_COLOR" value="<?php echo get_option('PETER_COLOR'); ?>"/>
<h3>Layout</h3>
<style>
.ANDO_LEFT{ background-image:url('http://cdn4.iconfinder.com/data/icons/brightmix/128/monotone_arrow_left_small.png');background-position:center center;background-size:20px 20px;background-repeat:no-repeat;height:50px;width:20px;position:absolute;top:0px;left:0px;}
.ANDO_LEFT:hover{background-color:rgba(255,255,255,0.7);}
.ANDO_RIGHT{background-image:url('http://iconizer.net/files/Brightmix/orig/monotone_arrow_right.png');background-position:center center;background-size:20px 20px;background-repeat:no-repeat;height:50px;width:20px;position:absolute;top:0px;right:0px;}
.ANDO_RIGHT:hover{background-color:rgba(255,255,255,0.7);}
#FLYER2 {
height:15px;width:100px;margin-top:35px;background-color:white;transition:all 0.3s;;
}
.ANDO_LEFT2{ background-image:url('http://cdn4.iconfinder.com/data/icons/brightmix/128/monotone_arrow_left_small.png');background-position:center center;background-size:20px 20px;background-repeat:no-repeat;height:50px;width:20px;position:absolute;top:0px;left:0px;}

.ANDO_RIGHT2{background-image:url('http://iconizer.net/files/Brightmix/orig/monotone_arrow_right.png');background-position:center center;background-size:20px 20px;background-repeat:no-repeat;height:50px;width:20px;position:absolute;top:0px;right:0px;}
</style>
<div class="color_radio" style="border:solid 0px white;float:left;"><input onClick="document.getElementById('CLAIRE').click();"  type="radio" name="SYLAR" id="SYLAR" value="default" <?php if(get_option('SYLAR') == "default") { echo ' checked'; } ?>/> <div style="height:80px;width:100px;position:relative;">

<div style="height:50px;width:100px; border: solid 3px #ff006c;position:relative;background-color:yellow;
background-size:100% 100%;"><div class="ANDO_LEFT"></div><div class="ANDO_RIGHT"></div><div id="FLYER2">Description</div></div>


<div style="height:15px;width:100%;position:absolute;bottom:0px;">

<center>
<div style="background-color:grey;float:left;height:15px;width:15px;margin-top:-10px;margin-left:5px;">1</div>

<div style="background-color:purple;float:left;height:15px;width:15px;margin-top:-10px;margin-left:5px;">2</div>

<div style="background-color:grey;float:left;height:15px;width:15px;margin-top:-10px;margin-left:5px;">3</div>

<div style="background-color:grey;float:left;height:15px;width:15px;margin-top:-10px;margin-left:5px;">4</div>

<div style="background-color:grey;float:left;height:15px;width:15px;margin-top:-10px;margin-left:5px;">5</div>
</center>
</div>
</div> </div>


            <div class="color_radio" style="border:solid 0px white;float:right;"><input type="radio" onClick="document.getElementById('CLAIRE').click();"  name="SYLAR" id="SYLAR" value="second" <?php if(get_option('SYLAR') == "second") { echo ' checked'; } ?>/> <div id="BENDER" style="height:50px;width:100px; border: solid 3px #ff006c;position:relative;background-color:black;        <?php
echo "background-image:url('" . plugins_url( 'images/default-background.png' , __FILE__ ) . " ') ; ";
?>
background-size:100% 100%;">

<style>
#FLYER {
height:25px;width:100px;margin-top:75px;background-color:white;transition:all 0.3s;;
}

#BENDER:hover #FLYER{
margin-top:35px;
}

</style>


<div id="BEND" style="height:50px;width:100px;overflow:hidden;background-color:yellow;" >
<div id="FLYER">Description</div>
</div>



<div style="height:15px;width:100%;position:absolute;bottom:0px;">
<div class="ANDO_LEFT2" style="margin-left:-20px;"></div>
<center>
<div style="background-color:grey;float:left;margin-top:19px;margin-right:2px;height:15px;width:15px;"></div>

<div style="background-color:purple;float:left;margin-top:19px;height:15px;width:15px;margin-right:2px;"></div>

<div style="background-color:grey;float:left;height:15px;width:15px;margin-top:19px;margin-right:2px;"></div>

<div style="background-color:grey;float:left;height:15px;width:15px;margin-top:19px;margin-right:2px;"></div>

<div style="background-color:grey;float:left;height:15px;width:15px;margin-top:19px;margin-right:2px;"></div>


<div class="ANDO_RIGHT2" style="margin-right:-20px;"></div>

</center>
</div>

</div>
</div>


</div><div id="view3" class="tabcontent"><h3>Place in posts and/or pages :)</h3><textarea>[simplepic]</textarea><h3>Place in your template files</h3><textarea>&lt;?php echo do_shortcode('[simplepic]'); ?&gt; </textarea></div><div class="clear"></div><h3 class="woot" onClick="document.getElementById('CLAIRE').click();" style="cursor:pointer;color:#ff006c;font-size:30px;float:right;" title="Save Changes">Save</h3><input style="display:none;" id="CLAIRE" type="submit" name="Submit" value="<?php _e('Save') ?>" /></div>

<!--End Settings Div-->





</form>
 
<?php } 



add_shortcode('simplepic', 'MP_dynmap_shortcode');
function MP_dynmap_shortcode() {
               ?>

<style>




#banner-fade,
#banner-slide{
<?php if (get_option('HEROES_BORDER')=="enable"){ ?>
border:solid 5px #<?php echo get_option('color'); ?>;
<?php } else{  } ?>

width: <?php echo get_option('HEROES_width'); ?>px;

}


ol.bjqs-markers li.active-marker,
ol.bjqs-markers li:hover
{
background: #<?php echo get_option('color'); ?>;
}

p.bjqs-caption
{
background-color:#<?php echo get_option('color'); ?>;
font-size:<?php echo get_option('font-size'); ?>px;
color:#<?php echo get_option('PETER_COLOR'); ?>;
}



#banner-fade ul li img {

<?php if (get_option('HEROES_Resize')=="Scale"){ ?>
height:100%;
width:100%;
<?php } else{  } ?>
max-height: 100%;
max-wide: 100%;

}

</style>





<link rel="stylesheet" href="<?php echo "" . plugins_url( 'css' , __FILE__ ) . ""; ?>/<?php echo get_option('SYLAR'); ?>.css" type="text/css" />


<!--Simple Slideshow Builder-->
    <script src="http://code.jquery.com/jquery-1.7.1.min.js"></script><?php
echo "<script src='" . plugins_url( 'js/bjqs-1.3.js' , __FILE__ ) . "'></script> ";
?><div id="banner-fade"><ul class="bjqs"><?php if (get_option('upload_image') != '') { ?>


<li><img src="<?php echo get_option('upload_image'); ?>" title="<?php echo get_option('upload_image_content'); ?>"></li><? } else { }?><?php if (get_option('upload_image2') != '') { ?>

<li><img src="<?php echo get_option('upload_image2'); ?>" title="<?php echo get_option('upload_image_content2'); ?>"></li><? } else { }?><?php if (get_option('upload_image3') != '') { ?>

<li><img src="<?php echo get_option('upload_image3'); ?>" title="<?php echo get_option('upload_image_content3'); ?>"></li><? } else { }?><?php if (get_option('upload_image4') != '') { ?>

<li><img src="<?php echo get_option('upload_image4'); ?>" title="<?php echo get_option('upload_image_content4'); ?>"></li></li><? } else { }?><?php if (get_option('upload_image5') != '') { ?>

<li><img src="<?php echo get_option('upload_image5'); ?>" title="<?php echo get_option('upload_image_content5'); ?>"></li></li><? } else { }?><?php if (get_option('upload_image6') != '') { ?>

<li><img src="<?php echo get_option('upload_image6'); ?>" title="<?php echo get_option('upload_image_content6'); ?>"></li></li><? } else { }?><?php if (get_option('upload_image7') != '') { ?>

<li><img src="<?php echo get_option('upload_image7'); ?>" title="<?php echo get_option('upload_image_content7'); ?>"></li></li><? } else { }?><?php if (get_option('upload_image8') != '') { ?>

<li><img src="<?php echo get_option('upload_image8'); ?>" title="<?php echo get_option('upload_image_content8'); ?>"></li></li><? } else { }?><?php if (get_option('upload_image9') != '') { ?> <li><img src="<?php echo get_option('upload_image9'); ?>" title="<?php echo get_option('upload_image_content9'); ?>"></li></li><? } else { }?><?php if (get_option('upload_image10') != '') { ?> <li><img src="<?php echo get_option('upload_image10'); ?>" title="<?php echo get_option('upload_image_content10'); ?>"></li></li><? } else { }?></ul></div>
      <script class="secret-source">
        jQuery(document).ready(function($) {
          $('#banner-fade').bjqs({
            height      : 320,
            width       : 620,
            responsive  : true
          });
        });
      </script>

<div class="clear"></div>
<?php

}


?>