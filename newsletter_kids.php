<?php /*
	Template Name: Kids HTML Email 
*/ ?>
<?php
//ini_set('display_errors',1); 
 //error_reporting(E_ALL);
?>

<?php
function uvasom_excluded_categories()
{
$uvasom_news_main_categories = array(genesis_get_option('topfeature','UVASOMNEWSEMAIL_SETTINGS_FIELD'), genesis_get_option('lowerleft','UVASOMNEWSEMAIL_SETTINGS_FIELD'), genesis_get_option('lowerright','UVASOMNEWSEMAIL_SETTINGS_FIELD'));
$uvasomnews_other_categories = (wp_list_categories('orderby=name&title_li=&style=none&hide_empty=1&exclude='.implode(",", $uvasom_news_main_categories)));
}
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
    	<td align="left" height="79" valign="middle" style="padding-left:20px;"><a href="<?php echo get_bloginfo('url');?>"><img src="<?php echo genesis_get_option('emailheader','UVASOMNEWSEMAIL_SETTINGS_FIELD')?>" padding="0" margin="0"border="0" /></a></td>
    </tr>
<!-- end of masthead. Begin feature displays -->    
<?php
//if there is a sidefeature, display as follows -->
if ((genesis_get_option('sidebox','UVASOMNEWSEMAIL_SETTINGS_FIELD') !='') && (genesis_get_option('sidebox','UVASOMNEWSEMAIL_SETTINGS_FIELD') !='none'))
	{ ?>
<tr>
      <td width="10" style="padding-top: 5px; padding-left: 20px; padding-right: 20px;"><table width="640" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="450" valign="top" style="border:1px solid #ccc;"><table style="width:450;margin-left:auto;margin-right:auto;margin-bottom:15px;" cellspacing="5" cellpadding="0" border="0">
            <tr>
            <?php if (have_posts()) :
   while (have_posts()) :?>
      
              <td colspan="2"><h3 style="font-family:Georgia, 'Times New Roman', Times, serif;font-weight:normal;font-size:20px;margin-left:7px;margin-top:5px;margin-bottom:8px;padding-bottom:0px;"><?php echo the_title();?></h3></td>
            <tr>
              
              <td colspan="2" style="vertical-align:top;padding:0 6px 15px 6px;width:500px;margin-top:4px;font-family:Arial;font-size:12px;" valign="top">
                  <?php the_post();
      the_content();
   endwhile;
endif; ?>
                </td>
            </tr>
          </table></td>
          <td width="20" valign="top"><img src="<?php echo get_bloginfo('stylesheet_directory');?>/images/trans.gif" width="20" height="10" alt="spacer"></td>
<?php 
//if there is an "Also in this Issue" selected, display as follows
if ((genesis_get_option('sidebox','UVASOMNEWSEMAIL_SETTINGS_FIELD') !='') && (genesis_get_option('sidebox','UVASOMNEWSEMAIL_SETTINGS_FIELD') =='also'))
	{ ?>

<td width="170" valign="top" style="background-color:#e7e7e7;"><table border="0" cellpadding="0" cellspacing="8" style="width:150px;margin:0px;">
  <tr>
    <td colspan="2"><h3 style="font-family:Georgia, 'Times New Roman', Times, serif;font-weight:normal;font-size:18px;margin-left:7px;margin-top:0px;margin-bottom:0px;padding-bottom:8px;"><?php echo get_the_category_by_id(esc_attr( genesis_get_option('lowerleft','UVASOMNEWSEMAIL_SETTINGS_FIELD') ));?>&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo get_category_link(esc_attr( genesis_get_option('lowerleft','UVASOMNEWSEMAIL_SETTINGS_FIELD') ))?>" rel="bookmark" style="font-size:12px;font-family:Arial, Helvetica, sans-serif;">More
      <?php  get_the_category_by_id(esc_attr( genesis_get_option('uvasomnewslowerleft','UVASOMNEWSEMAIL_SETTINGS_FIELD') ));?>
    </a></h3></td>
  <tr style="border-bottom:1px dotted #666;">
    <?php $recent = new WP_Query("cat=".esc_attr( genesis_get_option('lowerleft','UVASOMNEWSEMAIL_SETTINGS_FIELD') )."&showposts=". genesis_get_option('lowerleftnumber','UVASOMNEWSEMAIL_SETTINGS_FIELD') ); while($recent->have_posts()) : $recent->the_post();
				
//if there is a thumbnail, render it with 2 columns

                  if ( has_post_thumbnail() ) {
				  ?>
    <td style="vertical-align:top;padding:3px;margin-top:4px;margin-bottom:4px;width:70px;" valign="top"><span style="padding-left:10px;">
      <?php the_post_thumbnail( 'Mini Square' ); ?>
    </span></td>
    <td style="width:245px;vertical-align:top;padding:0 12px 12px 12px;margin-top:4px;margin-bottom:4px;" valign="top"><h2 style="font-family:Georgia, 'Times New Roman', Times, serif;font-weight:normal;font-size:15px;margin:0px;padding:0px;"><a style="color:#333333;text-decoration:none;" href="<?php the_permalink() ?>" rel="bookmark">
      <?php the_title(); ?>
    </a></h2>
      <div style="font-family:Arial, Helvetica, sans-serif;font-size:12px;margin:0px;padding:0px;margin-right:15px;color:#333333;">
        <?php the_content_limit(75, __("[More]")); ?>
      </div></td>
    <?php }
			  else 
			  {
				?>
    <td colspan="2" style="width:330px;vertical-align:top;padding:0 12px 12px 12px;margin-top:4px;margin-bottom:4px;" valign="top"><h2 style="font-family:Georgia, 'Times New Roman', Times, serif;font-weight:normal;font-size:15px;margin:0px;padding:0px;"><a style="color:#333333;text-decoration:none;" href="<?php the_permalink() ?>" rel="bookmark">
      <?php the_title(); ?>
    </a></h2>
      <div style="font-family:Arial, Helvetica, sans-serif;font-size:12px;margin:0px;padding:0px;margin-right:15px;color:#333333;">
        <?php the_content_limit(75, __("[More]")); ?>
      </div></td>
    <?php } ?>
  </tr>
  <?php endwhile; ?>
  <tr>
    <td style="padding-bottom:15px;" colspan="2"><a href="<?php echo get_category_link(esc_attr( genesis_get_option('lowerleft','UVASOMNEWSEMAIL_SETTINGS_FIELD') ))?>" rel="bookmark" style="font-size:12px;font-family:Arial, Helvetica, sans-serif;">Read More
      <?php  get_the_category_by_id(esc_attr( genesis_get_option('lowerleft') ));?>
    </a></td>
  </tr>
</table>
  <table border="0" cellpadding="0" cellspacing="8" style="width:150px;margin:0px;">
    <tr>
      <td colspan="2"><h3 style="font-family:Georgia, 'Times New Roman', Times, serif;font-weight:normal;font-size:18px;margin-left:7px;margin-top:0px;margin-bottom:0px;padding-bottom:8px;"><?php echo get_the_category_by_id(esc_attr( genesis_get_option('lowerright','UVASOMNEWSEMAIL_SETTINGS_FIELD') ));?>&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo get_category_link(esc_attr( genesis_get_option('lowerright','UVASOMNEWSEMAIL_SETTINGS_FIELD') ))?>" rel="bookmark" style="font-size:12px;font-family:Arial, Helvetica, sans-serif;">More <?php echo get_the_category_by_id(esc_attr( genesis_get_option('lowerright','UVASOMNEWSEMAIL_SETTINGS_FIELD') ));?></a></h3></td>
    <tr style="border-bottom:1px dotted #666;">
      <?php $recent = new WP_Query("cat=".esc_attr( genesis_get_option('lowerright','UVASOMNEWSEMAIL_SETTINGS_FIELD') )."&showposts=". genesis_get_option('lowerrightnumber','UVASOMNEWSEMAIL_SETTINGS_FIELD') ); while($recent->have_posts()) : $recent->the_post();
				
//if there is a thumbnail, render it with 2 columns

                  if ( has_post_thumbnail() ) {
				  ?>
      <td style="vertical-align:top;padding:3px;margin-top:4px;margin-bottom:4px;width:70px;" valign="top"><span style="padding-left:10px;">
        <?php the_post_thumbnail( 'Mini Square' ); ?>
      </span></td>
      <td style="width:245px;vertical-align:top;padding:0 12px 12px 12px;margin-top:4px;margin-bottom:4px;" valign="top"><h2 style="font-family:Georgia, 'Times New Roman', Times, serif;font-weight:normal;font-size:15px;margin:0px;padding:0px;"><a style="color:#333333;text-decoration:none;" href="<?php the_permalink() ?>" rel="bookmark">
        <?php the_title(); ?>
      </a></h2>
        <div style="font-family:Arial, Helvetica, sans-serif;font-size:12px;margin:0px;padding:0px;margin-right:15px;color:#333333;">
          <?php the_content_limit(75, __("[More]")); ?>
        </div></td>
      <?php }
			  else 
			  {
				?>
      <td colspan="2" style="width:330px;vertical-align:top;padding:0 12px 12px 12px;margin-top:4px;margin-bottom:4px;" valign="top"><h2 style="font-family:Georgia, 'Times New Roman', Times, serif;font-weight:normal;font-size:15px;margin:0px;padding:0px;"><a style="color:#333333;text-decoration:none;" href="<?php the_permalink() ?>" rel="bookmark">
        <?php the_title(); ?>
      </a></h2>
        <div style="font-family:Arial, Helvetica, sans-serif;font-size:12px;margin:0px;padding:0px;margin-right:15px;color:#333333;">
          <?php the_content_limit(75, __("[More]")); ?>
        </div></td>
      <?php } ?>
    </tr>
    <?php endwhile; ?>
    <tr>
      <td style="padding-bottom:15px;" colspan="2"><a href="<?php echo get_category_link(esc_attr( genesis_get_option('lowerright','UVASOMNEWSEMAIL_SETTINGS_FIELD') ))?>" rel="bookmark" style="font-size:12px;font-family:Arial, Helvetica, sans-serif;">Read More <?php echo get_the_category_by_id(esc_attr( genesis_get_option('lowerright','UVASOMNEWSEMAIL_SETTINGS_FIELD') ));?></a></td>
    </tr>
  </table>
  <p>&nbsp;</p></td>
<?php } ?>
<?php 
//if a photo feature is selected for the right, display as follows //

if ((genesis_get_option('sidebox','UVASOMNEWSEMAIL_SETTINGS_FIELD') !='') && (genesis_get_option('sidebox','UVASOMNEWSEMAIL_SETTINGS_FIELD') =='feature'))
	{ ?>

<?php } ?>
<!--end side feature-->
        </tr>
      </table>
      
    <?php } ?><tr>
<!--end all top features-->
<!--if lower columns are selected, display as follows -->
      	<td style="height:15px;width:690px"><img src="<?php echo get_bloginfo('stylesheet_directory');?>/images/trans.gif" width="10" height="15" alt="spacer"></td>
      </tr>
    </table>
</table>
            </td></tr></table>
<script type="text/javascript">
$('span.subtitle').before('<br />');
$('span.subtitle').css('font-size', '90%');
$('small.subtitle').before('<br />');
$('small.subtitle').css('font-size', '95%');
$('ul.gce-list').css({
    "list-style-type": "none",
    "padding-left": "0",
  });
$('div.gce-list-title').css({
    "font-family":"Georgia",
    "font-weight": "normal",
	"font-size": "18px",
	"margin-left":"0"
  });
$('div.gce-list-event').css({
    "font-weight": "bold",
	"padding":"5px 0 5px 0",
    "margin-left":"-40px"
})
$('ul.gce-list li').css({
    "padding-bottom":"15px",
	"padding-left":"0",
	"margin-left":"0px",
	"list-style-type":"none"
  });
$('ul.gce-list div span').css({
	"margin-left":"-40px"
  });
$('ul.gce-list div a').css({
	"margin-left":"-40px"
  });

</script>

           </body>
</html>
