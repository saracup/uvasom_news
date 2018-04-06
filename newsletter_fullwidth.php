<?php /*
	Template Name: Full Width Widgetized HTML Email 
*/ ?>
<?php
/*ini_set('display_errors',1); 
 error_reporting(E_ALL);*/
?>

<?php
?>
<html>
<script src="https://code.jquery.com/jquery-latest.js"></script>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

</head>

<body>
<table width="100%" cellpadding="0" cellspacing="0" bgcolor="#fff" border="0" >
    <tr>
        <td valign="top" align="center" style="text-align:center;">
            <table width="690" cellpadding="0" cellspacing="0" bgcolor="ffffff" style="border:1px solid #cccccc;padding:10px 0 10px 0;background-color:#ffffff; background:#ffffff;margin-right:auto;margin-left:auto;margin-top:15px;">
            	<tr>
                    <td style="background-color:#ffffff;text-align:center;padding-bottom:8px;" align="center"><span style="font-size:10px;color:#000000;line-height:200%;font-family:verdana;text-decoration:none;"><a href="<?php echo get_bloginfo('url');?>">Email not displaying correctly? View the complete edition  online</a></span>                    </td>
           	  </tr>
                <tr>
            		<td>
  
    <table cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" border="0" style="margin-left:auto;margin-right:auto;">
    <tr>
    	<td align="left" height="79" valign="middle" style="padding-left:20px;"><a href="<?php echo get_bloginfo('url');?>"><?php echo the_post_thumbnail();?></a></td>
    </tr>
<!-- end of masthead. Begin feature displays -->    
<tr>
      <td width="10" style="padding-top: 15px; padding-left: 20px; padding-right: 20px;">
      	<table width="650" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td width="650" valign="top">
              	<table style="width:650;margin-left:auto;margin-right:auto;margin-bottom:15px;" cellspacing="0" cellpadding="0" border="0">
                <tr>
            	<td valign="top">
                <?php 	if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar( 'Email Feature Full Width' ) ) ?>

                </td>
                </tr>
                
                
              </table>
         </td>
         


<!--end side feature-->
        </tr>
      </table>
      
  <tr>
<!--end all top features-->
      </tr>
    </table>
</table>
            </td></tr></table>
<script type="text/javascript">

$('h2').css({
	"padding-bottom":"0",
	"margin-bottom":"2px",
	"padding-top":"5px",
  });
$('h2 a').css({
	"font-family":"Georgia,Times,serif",
	"font-variant":"small-caps",
	"font-size":"24px",
	"font-weight":"normal",
	"color":"#333333",
	"text-decoration":"none",
	"padding-bottom":"0",
 	"clear":"both"
 });
$('h3').css({
	"font-size":"18px",
	"font-weight":"normal",
	"color":"#333333",
	"text-decoration":"none",
	"padding-bottom":"0",
 });

$('td.pcs-content-widget h2').css({
	"font-family":"Georgia,Times,serif",
	"font-size":"16px",
	"font-weight":"normal",
	"color":"#333333"
  });

$('ul').css({
    "list-style-type": "none",
    "list-style": "none",
    "padding-left": "0",
	"margin-left":"0",
	"font-family":"Helvetica,Arial,sans-serif",
	"font-size":"12px"
  });
$('li').css({
    "list-style-type": "none",
    "list-style": "none",
    "padding-left": "0",
	"font-family":"Helvetica,Arial,sans-serif",
	"font-size":"12px",
	"padding-bottom":"5px",
	"margin-bottom":"0"
  });
$('td').css({
	"font-family":"Helvetica,Arial,sans-serif",
	"font-size":"12px"
  });
$('table#wp-calendar td').css({
	"width":"15%",
  });
$('table#wp-calendar td#today').css({
	"font-weight":"bold",
	"background-color":"#d7d7d7"
  });

$('p').css({
	"font-family":"Helvetica,Arial,sans-serif",
	"font-size":"12px",
	"padding":"0"
  });

$('div.gce-list-title').css({
	"font-family":"Georgia, Times,serif",
	"font-size":"16px",
  });
$('div.gce-tooltip-event').css({
	"font-weight":"bold",
	"font-size":"14px",
	"margin":"8px 0 2px 0"
  });
$('div.wpv-pagination').css({
	"visibility":"visible"
  });
$('table.email').css({
	"padding":"7px",
	"border":"1px solid #d7d7d7",
	"margin-bottom":"10px"
  });
$('table.email.middle').css({
	"border":"none",
	"margin-bottom":"5px"
  });
$('table.email.bottom').css({
	"margin-top":"10px"
  });
$('table.emailside').css({
	"padding":"7px",
	"border":"1px solid #d7d7d7",
	"background":"#e7e7e7",
	"margin-bottom":"15px"
  });
$('div.post').wrap('<table width="100%" border="0" cellspacing="0" cellpadding="0" style="border:none;border-top:1px solid #ccc;text-align:left;margin:20px 0 0 0;padding:0;"><tr><td></td></tr></table>');
$('div.post').css({'margin-top':'0','padding-top':'0'});
$('div.post img').wrap('<table width="2%" border="0" cellspacing="0" cellpadding="0" align="right" style="border:1px dotted #ccc;text-align:left;margin:5px;padding:2px;"><tr><td></td></tr></table>');
$('span.subtitle').before('<br />');
$('span.subtitle').css('font-size', '80%');
$('small.subtitle').before('<br />');
$('small.subtitle').css('font-size', '75%');
$('span.widgettitle-right').css('display', 'none');
$('div.date').wrap('<table width="2%" border="0" cellspacing="0" cellpadding="0" align="left" style="border:1px dotted #ccc;text-align:left;margin-right:5px;padding:2px;background-color:#<?php echo get_background_color(); ?>;color:#fff;"><tr><td></td></tr></table>');
$('span.subtitle').before('<br />');
$('div.description h1 a').css({
	"font-family":"Georgia, Times, serif",
	"font-size":"15px",
	"font-weight":"normal"
  });
$('p.wp-caption-text').attr("style", "font-size:11px;text-align:left;padding:8px;");
$('div.wp-caption').wrap('<table width="2%" border="0" cellspacing="0" cellpadding="0" align="left" style="border:1px dotted #ccc;text-align:center;margin:8px;"><tr><td style="padding:8px;"></td></tr></table>');
$('ul.gce-list li').css('margin-left',"0");
$('ul.gce-list br').remove();
$('div.gce-details').contents().unwrap().wrap('<li/>');
$('img.attachment-Email.Sidebox').css({
	"padding":"-5px",
	"margin":"-5px",
	"border":"none",
	"width":"185px",
	"height":"126px"
});
</script>

           </body>
</html>
