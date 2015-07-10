<?php
/**
 * @package WordPress
 * @subpackage HTML5-Reset-WordPress-Theme
 * @since HTML5 Reset 2.0
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head id="<?php echo of_get_option('meta_headid'); ?>" data-template-set="html5-reset-wordpress-theme">
		<meta charset="<?php bloginfo('charset'); ?>">
		<?php
			if (is_search())
				echo '<meta name="robots" content="noindex, nofollow" />';
		?>
		<title><?php wp_title( '|', true, 'right' ); ?></title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="title" content="<?php wp_title( '|', true, 'right' ); ?>">
		<meta name="description" content="<?php bloginfo('description'); ?>" />
		<meta name="Copyright" content="Copyright &copy; <?php bloginfo('name'); ?> <?php echo date('Y'); ?>. All Rights Reserved.">
		<?php wp_head(); ?>
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" />
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/responsive-calendar.css" />
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css" />
	    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
	    <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
	    <script src="<?php echo get_template_directory_uri(); ?>/js/responsive-calendar.js"></script>
		<script type="text/javascript">
			$(document).ready(function(){

				$(".responsive-calendar").responsiveCalendar({
		          	time: '2015-06',
		          	events: {
		            	"2015-06-27": {},
			            "2015-06-28": {}, 
			            "2015-06-29": {},
		            	"2015-06-30": {},
			            "2015-07-01": {}, 
			            "2015-07-02": {},
		            	"2015-07-03": {},
			            "2015-07-04": {}, 
			            "2015-07-05": {},
		            	"2015-07-06": {},
			            "2015-07-07": {}, 
			            "2015-07-08": {},
		            	"2015-07-09": {},
			            "2015-07-10": {}, 
			            "2015-07-11": {},
		            	"2015-07-12": {},
			            "2015-07-13": {}, 
			            "2015-07-14": {},
		            	"2015-07-15": {},
			            "2015-07-16": {}, 
			            "2015-07-17": {},
		            	"2015-07-18": {},
			            "2015-07-19": {}, 
			            "2015-07-20": {},
		            	"2015-07-21": {},
			            "2015-07-22": {}, 
			            "2015-07-23": {},
		            	"2015-07-24": {},
			            "2015-07-25": {}, 
			            "2015-07-26": {},
		            	"2015-07-27": {},
			            "2015-07-28": {}, 
			            "2015-07-29": {},
		            	"2015-07-30": {},
			            "2015-07-31": {}, 
			            "2015-08-01": {}, 
			            "2015-08-02": {},
		            	"2015-08-03": {},
			            "2015-08-04": {}, 
			            "2015-08-05": {},
		            	"2015-08-06": {},
			            "2015-08-07": {}, 
			            "2015-08-08": {},
		            	"2015-08-09": {},
			            "2015-08-10": {}, 
			            "2015-08-11": {},
		            	"2015-08-12": {},
			            "2015-08-13": {}, 
			            "2015-08-14": {},
		            	"2015-08-15": {},
			            "2015-08-16": {}, 
			            "2015-08-17": {},
		            	"2015-08-18": {},
			            "2015-08-19": {}, 
			            "2015-08-20": {},
		            	"2015-08-21": {},
			            "2015-08-22": {}, 
			            "2015-08-23": {},
		            	"2015-08-24": {},
			            "2015-08-25": {}, 
			            "2015-08-26": {},
		            	"2015-08-27": {},
			            "2015-08-28": {}, 
			            "2015-08-29": {},
		            	"2015-08-30": {},
			            "2015-08-31": {}, 
			            "2015-09-01": {}, 
			            "2015-09-02": {},
		            	"2015-09-03": {},
			            "2015-09-04": {}, 
			            "2015-09-05": {},
		            	"2015-09-06": {},
			            "2015-09-07": {}, 
			            "2015-09-08": {},
		            	"2015-09-09": {},
			            "2015-09-10": {}, 
			            "2015-09-11": {},
		            	"2015-09-12": {},
			            "2015-09-13": {}, 
			            "2015-09-14": {},
		            	"2015-09-15": {},
			            "2015-09-16": {}, 
			            "2015-09-17": {},
		            	"2015-09-18": {},
			            "2015-09-19": {}, 
			            "2015-09-20": {},
		            	"2015-09-21": {},
			            "2015-09-22": {}, 
			            "2015-09-23": {},
		            	"2015-09-24": {},
			            "2015-09-25": {}, 
			            "2015-09-26": {},
		            	"2015-09-27": {}
		        	}
		        });

				$( ".btn_ver_todo" ).click(function() {
				  	$( ".responsive-calendar" ).toggleClass( "calendarBoxIntExt", 1000, "easeOutSine" );
				  	$( ".btn_ver_todo" ).toggleClass( "btn_ver_todo_2", 1000, "easeOutSine" );
				});

			    $(".identifica").click(function(){
			        $("#btl-content-login").fadeToggle("slow");
			        $("#btl-content-registration").fadeOut("slow");
			    });

			    $(".registra").click(function(){
			        $("#btl-content-registration").fadeToggle("slow");
			        $("#btl-content-login").fadeOut("slow");
			    });
			});
		</script>
	</head>
	<body <?php body_class(); ?>>
		<div class="container">
      		<div class="row">
  				<div class="col-md-4 col-md-offset-8 imagen-login">
  					<div class="row">
  						<div id="btl-content-login" class=" btl-content-block" style="right: 126px; top: 84px;margin-top:30px;">
							<?php do_action( 'woocommerce_sidebar' ); ?>
						</div>
  					</div>
  				</div>
  			</div>
	      	<p class="lead"></p>
	    </div>
	  	<div class="row bg-blanco">
	  		<div class="col-xs-12 col-sm-12">
	  			<div class="row">
				    <div class="hidden-xs col-md-2"></div>
					<div class="col-xs-12 col-md-8">
