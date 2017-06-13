<?php require("db/DatabaseConfig.php"); ?>

<!DOCTYPE html>
<!-- This site was created in Webflow. http://www.webflow.com-->
<!-- Last Published: Mon Jun 22 2015 16:23:04 GMT+0000 (UTC) -->
<html data-wf-site="55755314d88fbd15093359f5" data-wf-page="55798b797e423c5429203d71">
<?php require_once("header.php");?>
<body>
  <div class="w-section nav-section-content-page">
    <div class="top-position" id="start" data-ix="move-100-browser-width"></div>
    <div class="logo-home"><img src="images/logo-dark.svg" width="240">
      <div class="w-clearfix nav-main-container">
        <div class="nav-main-bar">
          <div class="logo-mobile-nav"><img src="images/logo-white.svg" width="200">
          </div>

<!--########## NAVIGATION ##########-->
          <?php require("navigation.php"); ?>
<!--########## NAVIGATION ##########-->		 

        </div>
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
    <div class="w-clearfix main-container">

	<div class="column-50 _25-left">
        <h1>» News «</h1>
			
		
    </div>

      <div class="column-50 _25-left">
        <h1>» Our services «</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat. Aenean faucibus nibh et justo cursus id rutrum lorem imperdiet. Nunc ut sem vitae risus tristique posuere.</p>
      </div>
    </div>
    <div class="main-container teaser-container">
      <div class="w-tabs services-tabs" data-duration-in="300" data-duration-out="100">
        <div class="w-tab-menu w-clearfix service-tabs-menu">
          <a class="w-tab-link w--current w-inline-block column-25 services-menu-tab" data-w-tab="Tab 1"><img class="teaser-image" src="images/icon-color-corpwebsite.png" width="140">
            <h3 class="text-center">Corporate Websites</h3>
          </a>
          <a class="w-tab-link w-inline-block column-25 services-menu-tab" data-w-tab="Tab 2"><img class="teaser-image" src="images/icon-color-charts.png" width="140">
            <h3 class="text-center">IR Websites and Tools</h3>
          </a>
          <a class="w-tab-link w-inline-block column-25 services-menu-tab" data-w-tab="Tab 3"><img class="teaser-image" src="images/icon-color-reports.png" width="140">
            <h3 class="text-center">Reports and Webcasts</h3>
          </a>
          <a class="w-tab-link w-inline-block _25 column-25 services-menu-tab" data-w-tab="Tab 4"><img class="teaser-image" src="images/icon-color-news.png" width="140">
            <h3 class="text-center">News Distribution</h3>
          </a>
        </div>
        <div class="w-tab-content">
          <div class="w-tab-pane w--tab-active w-clearfix services-tab" id="services" data-w-tab="Tab 1">
            <h2>Corporate Websites</h2>
            <div class="w-clearfix column-25 reference-25"><img class="reference" src="images/reference-fairpoint.png">
              <div class="image-subline">Website of Fairtpoint</div>
            </div>
            <div class="column-50">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat. Aenean faucibus nibh et justo cursus id rutrum lorem imperdiet. Nunc ut sem vitae risus tristique posuere.
                <br>
                <br>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat. Aenean faucibus nibh et justo cursus id rutrum lorem imperdiet. Nunc ut sem vitae risus tristique posuere.</p>
            </div>
            <div class="w-clearfix column-25 reference-25"><img class="reference" src="images/81600250.png">
              <div class="image-subline">Nice website of 4 imprint</div>
            </div>
          </div>
          <div class="w-tab-pane w-clearfix services-tab" data-w-tab="Tab 2">
            <h2>IR&nbsp;Websites and Tools</h2>
            <div class="w-clearfix column-25 reference-25"><img class="reference" src="images/81600250.png">
            </div>
            <div class="column-50">
              <p>Eros dolor interdum nulla, ut commodo diam libero vitae erat. Aenean faucibus nibh et justo cursus id rutrum lorem imperdiet. Nunc ut sem vitae risus tristique posuere.
                <br>
                <br>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat. Aenean faucibus nibh et justo cursus id rutrum lorem imperdiet. Nunc ut sem vitae risus tristique posuere.</p>
            </div>
            <div class="w-clearfix column-25 reference-25"><img class="reference" src="images/reference-fairpoint.png">
            </div>
          </div>
          <div class="w-tab-pane w-clearfix services-tab" data-w-tab="Tab 3">
            <h2>Reports and Webcasts</h2>
            <div class="column-33">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat. Aenean faucibus nibh et justo cursus id rutrum lorem imperdiet. Nunc ut sem vitae risus tristique posuere.</p>
            </div>
            <div class="column-33">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat. Aenean faucibus nibh et justo cursus id rutrum lorem imperdiet. Nunc ut sem vitae risus tristique posuere.</p>
            </div>
            <div class="column-33">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat. Aenean faucibus nibh et justo cursus id rutrum lorem imperdiet. Nunc ut sem vitae risus tristique posuere.</p>
            </div>
          </div>
          <div class="w-tab-pane w-clearfix services-tab" data-w-tab="Tab 4">
            <h2>News Distribution Distribution</h2>
            <div class="column-50">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat. Aenean faucibus nibh et justo cursus id rutrum lorem imperdiet. Nunc ut sem vitae risus tristique posuere.
                <br>
                <br>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat. Aenean faucibus nibh et justo cursus id rutrum lorem imperdiet. Nunc ut sem vitae risus tristique posuere.</p>
            </div>
            <div class="column-50">
              <div class="w-embed w-video" style="padding-top: 56.20608899297424%;">
                <iframe class="embedly-embed" src="https://cdn.embedly.com/widgets/media.html?src=https%3A%2F%2Fwww.youtube.com%2Fembed%2FgCMQU6UnWpA%3Ffeature%3Doembed&amp;url=https%3A%2F%2Fwww.youtube.com%2Fwatch%3Fv%3DgCMQU6UnWpA&amp;image=https%3A%2F%2Fi.ytimg.com%2Fvi%2FgCMQU6UnWpA%2Fhqdefault.jpg&amp;key=c4e54deccf4d4ec997a64902e9a30300&amp;type=text%2Fhtml&amp;schema=youtube" scrolling="no" frameborder="0" allowfullscreen=""></iframe>
              </div>
            </div>
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