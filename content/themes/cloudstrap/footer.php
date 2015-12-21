<?php
/**
 * @package WordPress
 * @subpackage CloudStrap
 */
?>

    <div class="footer-widgets fx-fadeIn">
        <div class="container">
            <div class="row">
                <div class="widget col-sm-2 col-md-2">
                    <?php if ( ! dynamic_sidebar( 'footer_left' ) ) : ?>
							<br><br>
							<a href="https://www.linkedin.com/company/agildata" target="_blank" class="socialLink"><img src="<?php bloginfo('template_url'); ?>/images/icon-linkedin.png"></a>
							<a href="https://twitter.com/agildatainc" target="_blank" class="socialLink"><img src="<?php bloginfo('template_url'); ?>/images/icon-twitter.png"></a>
                      		<a href="https://www.facebook.com/agildatainc" target="_blank" class="socialLink"><img src="<?php bloginfo('template_url'); ?>/images/icon-facebook.png"></a>
					  		
					   <!--
					    <h3>Widget Ready</h3>  
                        <p>This left_column is widget ready! Add one in the admin panel.</p> 
                        <p><a role="button" href="#" class="btn btn-primary">Read more »</a></p>
						-->
                    <?php endif; ?>
                </div>
                <div class="widget col-sm-2 col-md-2">
                    <?php if ( ! dynamic_sidebar( 'footer_center_left' ) ) : ?>
                       
						
						<!--
						<h3>Widget Ready</h3> 
                        <p>This center_column is widget ready! Add one in the admin panel.</p>  
                        <p><a role="button" href="#" class="btn btn-primary">Read more »</a></p>
						-->
                    <?php endif; ?>
                </div>
                <div class="widget col-sm-2 col-md-2">
                    <?php if ( ! dynamic_sidebar( 'footer_center_right' ) ) : ?>
                       <!--
					    <h3>Widget Ready</h3> 
                        <p>This center_column is widget ready! Add one in the admin panel.</p>  
                        <p><a role="button" href="#" class="btn btn-primary">Read more »</a></p>
						-->
                    <?php endif; ?>
                </div>
                <div class="widget col-sm-2 col-md-2">
                    <?php if ( ! dynamic_sidebar( 'footer_right' ) ) : ?>
                       <!--
					    <h3>Widget Ready</h3>  
                        <p>This right_column is widget ready! Add one in the admin panel.</p>
                        <p><a role="button" href="#" class="btn btn-primary">Read more »</a></p>
						-->
                    <?php endif; ?>
                </div>
                <div class="col-sm-4 col-md-4">
				<div class="row">
                	<div class="col-sm-12 footer-credits text-right">
						<img alt="AgilData" title="AgilData" src="<?php echo get_template_directory_uri(); ?>/images/agildata-logo.svg" width="260" class="img-responsive img-right">
                    </div>
				</div>
				<div class="row">                
                    <div class="col-sm-12 footer-credits text-right">
                        &copy; Copyright <?php echo date('Y') . " " . esc_attr( get_bloginfo( 'name', 'display' ) ); ?>. All rights reserved.
                    </div>			
				</div>
				<div class="row">
                    <div class="col-sm-12 footer-credits text-right">
                        Design &amp; Development by <a href="http://www.cloudburstdesign.com" target="_blank" title="Design & Development - Cloudburst Design Studio">Cloudburst Design Studio</a>.<br><br>
                    </div>
				</div>
				</div>                
            </div>
        </div>
    </div>

<a href="#" class="cd-top">Top</a>
<?php wp_footer(); ?>



<?php 
//$current_user = wp_get_current_user();
//if($current_user->user_login) : ?>
	<script>
		function OBgetCookie(a){a+="=";for(var b=document.cookie.split(";"),c=0;c<b.length;c++){for(var d=b[c];" "==d.charAt(0);)d=d.substring(1);if(-1!=d.indexOf(a))return d.substring(a.length,d.length)}return""}function OBloadScript(a,b){var c=document.createElement("SCRIPT");c.src=a;c.onload=b;document.body.appendChild(c)}
function OBcookieObj(){var a={},b=OBgetCookie("obEmail");void 0!=b&&null!=b&&(a.obEmail=b,a.obOrg=OBgetCookie("obOrg"),a.obAccount=OBgetCookie("obAccount"),a.obTimestamp=OBgetCookie("obTimeStamp"),a.obFname=OBgetCookie("obFname"),a.obLname=OBgetCookie("obLname"),a.obTitle=OBgetCookie("obTitle"),a.obAuthCode=OBgetCookie("obAuthCode"));return a}function OBLaunch(){var a="undefined"!=typeof window.onboardify?window.onboardify:OBcookieObj();a.obEmail&&OBloadScript("https://webapp.onboardify.com/js/apploader.min.js",function(){OBvalidateLaunch(a)})}
document.addEventListener("readystatechange",function(){"complete"==document.readyState&&OBLaunch()},!1);
	</script>
<?php //endif; ?>

</body>
</html>