<?php
/**
 * Main controller to handle navigation requests.
 * @author: Peter Böthig<pboethig@gmail.com>
 *
 * @todo: setup autoloading with composer
 */
require_once ('src/Helper/View/Navigation.php');

/**
 * Get Naivigation object and render menue
 */
echo (new \Helper\View\Navigation())->renderMenu($_REQUEST);
