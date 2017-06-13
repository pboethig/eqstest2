<?php require("db/DatabaseConfig.php"); ?>

<!DOCTYPE html>
<!-- This site was created in Webflow. http://www.webflow.com-->
<!-- Last Published: Mon Jun 22 2015 16:23:04 GMT+0000 (UTC) -->
<html data-wf-site="55755314d88fbd15093359f5" data-wf-page="5577ecabe6dba7ea7cbfea0c">
<?php require_once("header.php");?>
<body>
  <div class="w-section nav-section-content-page">
    <div class="top-position" id="start" data-ix="move-100-browser-width"></div>
    <div class="logo-home"><img src="images/logo-dark.svg" width="240">
    </div>
    <div class="nav-thumbnail" data-ix="thumb-open-close-main-nav">
      <div>m</div>
    </div>
    <div class="w-clearfix nav-main-container">
      <div class="nav-main-bar">

<!--########## NAVIGATION ##########-->
          <?php require("navigation.php"); ?>
<!--########## NAVIGATION ##########-->		 

      </div>
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
    <div class="h1">
      <h1>» Our London team «</h1>
    </div>
    <div class="w-clearfix main-container">
      <div class="column-50 _25-left">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat. Aenean faucibus nibh et justo cursus id rutrum lorem imperdiet. Nunc ut sem vitae risus tristique posuere.</p>
      </div>
    </div>
	
	<div class="main-container">
      <div class="w-tabs" data-duration-in="300" data-duration-out="100">
        <div class="w-tab-menu main-container teaser-container">
          <a class="w-tab-link w--current w-inline-block team-tab team-tab-active" data-w-tab="Tab 1" data-ix="appear-on-load-from-left">
            <div class="w-clearfix"><img class="contact-image-container center tab-image" src="images/michaelz_800x800.jpg">
              <div class="team-text-div">
                <p class="text-team-tabs">Michael Zinkl
                  <br>Senior Account Manager</p>
              </div>
            </div>
          </a>
          <a class="w-tab-link w-inline-block team-tab team-tab-active" data-w-tab="Tab 2" data-ix="appear-on-load">
            <div class="w-clearfix"><img class="contact-image-container center tab-image" src="images/jermainej_800x800.jpg">
              <div class="team-text-div">
                <p class="text-team-tabs">Jermaine Jackson
                  <br>Senior Account Manager</p>
              </div>
            </div>
          </a>
          <a class="w-tab-link w-inline-block team-tab team-tab-active" data-w-tab="Tab 3" data-ix="appear-on-load-from-right">
            <div class="w-clearfix"><img class="contact-image-container center tab-image" src="images/svend_800x800.jpg">
              <div class="team-text-div">
                <p class="text-team-tabs">Sven Damm
                  <br>Technical Manager</p>
              </div>
            </div>
          </a>
        </div>
        <div class="w-tab-content tabs-content column-50 _25-left" id="team-tabs-content">
          <div class="w-tab-pane w--tab-active" data-w-tab="Tab 1">
            <h3>Michael Zinkl</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat. Aenean faucibus nibh et justo cursus id rutrum lorem imperdiet. Nunc ut sem vitae risus tristique posuere.</p>
          </div>
          <div class="w-tab-pane" data-w-tab="Tab 2">
            <h3>Jermaine Jackson</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat. Aenean faucibus nibh et justo cursus id rutrum lorem imperdiet. Nunc ut sem vitae risus tristique posuere.</p>
          </div>
          <div class="w-tab-pane" data-w-tab="Tab 3">
            <h3>Sven Damm</h3>
            <p>Aenean faucibus nibh et justo cursus id rutrum lorem imperdiet. Nunc ut sem vitae risus tristique posuere.&nbsp;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
<!--########## CONTENT ##########-->

<!--########## FOOTER ##########-->  
	
	<?php require("footer.php"); ?>

<!--########## FOOTER ##########-->
</body>
</html>