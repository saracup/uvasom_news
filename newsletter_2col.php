<?php /*
	Template Name: 2-column HTML Email 
*/ ?>
<?php
//ini_set('display_errors',1); 
 //error_reporting(E_ALL);
?>
<?php
?>
<html>
<script src="http://code.jquery.com/jquery-latest.js"></script>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

</head>

<body>
<table width="100%" cellpadding="10" cellspacing="0" bgcolor="<?php echo get_background_color(); ?>" border="0" >
    <tr>
        <td valign="top" align="center" style="text-align:center;">

            <table width="690" cellpadding="0" cellspacing="0" bgcolor="ffffff"style="border:1px solid #cccccc;padding:10px 0 10px 0;background-color:#ffffff; margin-right:auto;margin-left:auto;margin-top:15px;">
            	<tr>
                    <td style="background-color:#ffffff;text-align:center;padding-bottom:8px;" align="center"><span style="font-size:10px;color:#000000;line-height:200%;font-family:verdana;text-decoration:none;"><a href="<?php echo get_bloginfo('url');?>">Email not displaying correctly? View the complete edition  online</a></span>                    </td>
           	  </tr>
                <tr>
            		<td>
  
    <table cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" border="0" style="margin-left:auto;margin-right:auto;">
    <tr>
    	<td width="10" height="79" align="left" valign="middle" style="padding-left:20px;"><a href="<?php echo get_bloginfo('url');?>"><img src="<?php echo genesis_get_option('uvasomnews_emailheader')?>" padding="0" margin="0"border="0" /></a></td>
    </tr>
<!-- end of masthead. Begin feature displays --><!--if there is no side feature, display full width feature-->
	<tr>
<!--end all top features-->
<!--if lower columns are selected, display as follows -->
      	<td style="height:15px;width:690px"><img src="<?php echo get_bloginfo('stylesheet_directory');?>/images/trans.gif" width="10" height="15" alt="spacer"></td>
      </tr>
      <tr>
        <td style="padding-top: 5px; padding-left: 20px; padding-right: 20px;"><table width="690" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td valign="top" style="border:1px solid #ccc;"><table width="450" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="450" valign="top" style="border:1px solid #ccc;"><table style="width:450;margin-left:auto;margin-right:auto;margin-bottom:15px;" cellspacing="5" cellpadding="0" border="0">
                  <tr>
                    <td><h3 style="font-family:Georgia, 'Times New Roman', Times, serif;font-weight:normal;font-size:18px;margin-left:7px;margin-top:0px;margin-bottom:8px;padding-bottom:0px;"> <?php echo get_the_category_by_id(esc_attr( genesis_get_option('uvasomnewstopfeature') ));?>&nbsp;&nbsp;&nbsp;&nbsp;</h3></td>
                  <tr>
                    <?php $recent = new WP_Query("cat=".esc_attr( genesis_get_option('uvasomnewstopfeature') )."&showposts=". genesis_get_option('uvasomnewstopfeaturenumber') ); while($recent->have_posts()) : $recent->the_post();?>
                    <?php if ( has_post_thumbnail() ) {
				  ?>
                    
                    <td colspan="2" style="vertical-align:top;padding:0 6px 0 6px;width:515px;margin-top:4px;font-family:Arial;font-size:12px;" valign="top"><h2 style="font-family:Georgia, 'Times New Roman', Times, serif;font-weight:normal;font-size:16px;margin:0px;padding:0px;"><a style="color:#333333;text-decoration:none;" href="<?php the_permalink() ?>" rel="bookmark">
                    
                      <?php the_title(); ?>
                    </a></h2>
                      <?php the_content(); ?></td>
                    <?php } ?>
                  </tr>
                  <?php endwhile; ?>
                </table></td>
              </tr>
            </table></td>
            <td width="20" valign="top"><img src="<?php echo get_bloginfo('stylesheet_directory');?>/images/trans.gif" width="20" height="10" alt="spacer"></td>
            <td valign="top" style="border:1px solid #ccc;width:220px;background-color:#e7e7e7;"><table width="220" cellpadding="0" cellspacing="0" border="0"><tr>
            <td style="vertical-align:top;padding:0 6px 0 6px;width:220px;margin-top:4px;font-family:Georgia;font-size:14px;padding:5px;text-transform:uppercase;text-align:center;" valign="top">Also in this Issue</td></tr>
            <tr><td style="vertical-align:top;padding:0 6px 0 6px;width:220px;margin-top:4px;font-family:Arial;font-size:12px;padding:8px;" valign="top">
           <?php $recent = new WP_Query("cat=-".esc_attr( genesis_get_option('uvasomnewstopfeature') )."&showposts=". genesis_get_option('uvasomtwocolnumber') ); while($recent->have_posts()) : $recent->the_post();?>
            <p style="font-family:Georgia, 'Times New Roman', Times, serif;font-weight:normal;font-size:13px;margin:0px;padding:5px 0 0;"><a style="color:#333333;text-decoration:none;" href="<?php the_permalink() ?>" rel="bookmark">
                      <?php the_title(); ?>
                    </a></p>
                  <?php endwhile; //end wp_query ?>
                 </td>
            </tr></table></td>
          </tr>
        </table>      
        </table>
</table>
            </td></tr></table>
<script type="text/javascript">
$('p.wp-caption-text').attr("style", "font-size:11px;text-align:left;padding:8px;");
$('div.wp-caption').wrap('<table width="2%" border="0" cellspacing="0" cellpadding="0" align="left" style="border:1px dotted #ccc;text-align:center;margin:8px;"><tr><td style="padding:8px;"></td></tr></table>');
$('span.subtitle').before('<br />');
$('span.subtitle').css('font-size', '90%');
$('small.subtitle').before('<br />');
$('small.subtitle').css('font-size', '95%');
</script>

           </body>
</html>
