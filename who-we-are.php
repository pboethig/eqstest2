<?php require("db/DatabaseConfig.php"); ?>

<!DOCTYPE html>
<!-- This site was created in Webflow. http://www.webflow.com-->
<!-- Last Published: Mon Jun 22 2015 16:23:04 GMT+0000 (UTC) -->
<html data-wf-site="55755314d88fbd15093359f5" data-wf-page="5577ec70e6dba7ea7cbfea03">
<?php require_once("header.php");?>
<body data-ix="set-to-default">
  <div class="w-section nav-section-content-page">
    <div class="top-position" id="start" data-ix="move-100-browser-width"></div>
    <div class="logo-home"><img src="images/logo-dark.svg" width="240">
    </div>
    <div class="w-clearfix nav-main-container">
      <div class="nav-main-bar">
        <div class="logo-mobile-nav"><img src="images/logo-white.svg" width="200">
        </div>

<!--########## NAVIGATION ##########-->
          <?php require("navigation.php"); ?>
<!--########## NAVIGATION ##########-->		       
	  
	  </div>
    </div>
    <div class="nav-thumbnail" data-ix="thumb-open-close-main-nav">
      <div>m</div>
    </div>
    <div class="nav-thumb-mobile" data-ix="open-mobile-nav">
      <div class="menue-icon">m</div>
      <div class="menu-icon-close">x</div>
    </div>
    <div class="w-clearfix search-button">
      <div class="icon-search" data-ix="open-search">
        <div>s</div>
      </div>
      <div class="icon-search-close" data-ix="close-search">
        <div>x</div>
      </div>
    </div>
  </div>
  
  
  <!--########## CONTENT ##########-->
	<div class="w-section section-content">
		
	</div>
<!--########## CONTENT ##########-->
  
  
 <!--########## FOOTER ##########-->  
	
	<?php require("footer.php"); ?>

<!--########## FOOTER ##########-->
</body>
</html>