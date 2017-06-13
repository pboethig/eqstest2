<?php require("db/DatabaseConfig.php"); ?>

<!DOCTYPE html>
<!-- This site was created in Webflow. http://www.webflow.com-->
<!-- Last Published: Mon Jun 22 2015 16:23:04 GMT+0000 (UTC) -->
<html data-wf-site="55755314d88fbd15093359f5" data-wf-page="5577ec8bc638b8986faff49e">
<?php require_once('header.php') ?>
<body>
  <div class="w-section nav-section-content-page">
    <div class="top-position" id="start"data-ix="move-100-browser-width"></div>
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
		<h1>» What you do «</h1>
		<div class="w-clearfix  main-container">
			<div class="column-50 _25-left">
				<h2>HTML, CSS & JAVASCRIPT</h2>
				<ul>
					<li><p>Expand the "Contact us" site, we need three more offices:<br/>
					Zürich, Hamburg and Taipeh (for content take dummy-text)</p></li>
					<li><p>Increase the "h1" font-size by 2px for smaller devices (device-width smaller than 767px)</p></li>
					<li><p>The links in the footer are fluttering in the center, please change this in a way where the links are aligning to the left but the block of links is still aligned in the center of the footer columns.</p></li>
					<li><p>We need an image-slider on the site "Who we are".<br/>
					Implement a free JavaScript slider of your choice.</p></li>
					<li><p>Implement a jQuery click-function to show and hide the content (<span>...</span>) in ITEM 6</p></li>
					<li>
						<p><a href="#" id="show">ITEM 6 - click</a></p>
						<span id="showContent" style="display: none;">Congratulations 50% of your test is done, now you can start with the PHP/MYSQL part<br/>
						<a href="#" id="hide">close</a><br/><br/><br/><br/></span>						
					</li>
				</ul>
				<br/>
				<h2>PHP & MYSQL</h2>
				<ul>
					<li><p>Outsource the &lt;head&gt; area in the header.php and replace it in all sites<br/>
					(index.php, who-we-are.php, what-you-do.php, our-services-color.php, team.php. contact.php)</p></li>
					<li><p>Write a PHP function in the navigation.php which adds a CSS class "main-nav-button-active" to the active link, depending on the url parameter "menu"</p></li>
					<li><p>Add a contact form to the contact.php file from line 136.<br />
					The form should ask a visitor for its name, e-mail address and a contact message.</p></li>
					<li><p>contact.php - line 119.<br />
					Add the CREATE TABLE statement to make a database table, to collect the information entered in the contact form you implemented before.<br/>
					Run the table create script once, if table already exists skip, otherwise create the table.</p></li>
					<li><p>Create a PHP script that handles the form submit, validates the form entries and writes them to the database, or presents the form again if there were invalid entries.</p></li>
					<li><p>Lastly, create a PHP script that prints out a list of contact form entries ordered by entry date.</p></li>
				</ul>
			</div>
		</div>
	</div>
<!--########## CONTENT ##########-->
  
<!--########## FOOTER ##########-->  
	
	<?php require("footer.php"); ?>

<!--########## FOOTER ##########-->
</body>
</html>