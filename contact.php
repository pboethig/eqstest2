<?php require_once("db/DatabaseConfig.php"); ?>
<?php require_once("src/Helper/Models/ContactForm.php"); ?>
<?php require_once("src/Models/Contact.php"); ?>
<!DOCTYPE html>
<!-- This site was created in Webflow. http://www.webflow.com-->
<!-- Last Published: Mon Jun 22 2015 16:23:04 GMT+0000 (UTC) -->
<html data-wf-site="55755314d88fbd15093359f5" data-wf-page="5577e939e6dba7ea7cbfe986">
<?php require_once("header.php");?>
<body>
  <div class="w-section nav-section-content-page" id="start">
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
    <div class="h1">
      <h1>» Contact us in London, Hongkong, Munich, Moscow or... «</h1>
    </div>
    <div class="w-clearfix main-container">
	  <div class="column-25">
        <h3 class="orange">Our office in London</h3>
        <p>EQS&nbsp;Group AG
          <br>2nd Floor
          <br>Berkeley Square House
          <br>Berkeley Square
          <br>Mayfair
          <br>London W1J 6BD
          <br>United Kingdom
          <br><a href="tel: + 44 (0) 795 0693 119">T.: + 44 (0) 795 0693 119</a>
          <br><a href="mailto:london@eqs.com?subject=Contact%20from%20website">london@eqs.com</a>
        </p>
      </div>
      <div class="column-25">
        <h3>Our office in Munich</h3>
        <p>EQS Group AG
          <br>Karlstr. 47
          <br>D-80333 München
          <br>
          <br>T. +49 (0) 89 210 298 0
          <br>info@eqs.com
          <br><a target="_blank" href="http://www.eqs.com">www.eqs.com</a>
        </p>
      </div>
      <div class="column-25 column-break">
        <h3>Our office in Hong Kong</h3>
        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
      </div>
      <div class="column-25">
        <h3>Our office in Moscow</h3>
        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
      </div>
	<!-- CONTACT FORM -->
	<?php

      $contacts = new \Models\Contact($_POST);

      if(!empty($_POST))
      {
         $contacts->save();
      }
    ?>
      <!--########## CONTENT ##########-->
      <!--########## ContactForm ##########-->
      <?php require_once __DIR__ . '/src/resources/view/contactform.php'?>

      <!--########## MessageList ##########-->
      <?php require_once __DIR__ . '/src/resources/view/contactmessagelist.php'?>

    <div class="map-container">
      <div class="scroll-down-map">
        <a class="w-inline-block" href="#map"><img src="images/button-scroll-down-down.svg">
        </a>
      </div>
      <div class="w-widget w-widget-map map" id="map" data-widget-latlng="51.509706,-0.144894" data-widget-style="roadmap" data-widget-zoom="12" data-disable-scroll="1" data-widget-tooltip="EQS Group" data-ix="show-move-in-on-load"></div>
    </div>

  </div>
  </div>
  <!--########## FOOTER ##########-->

  <?php require("footer.php"); ?>
  <!--########## FOOTER ##########-->

</body>
</html>