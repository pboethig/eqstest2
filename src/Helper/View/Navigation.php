<?php
/**
 * Created by PhpStorm.
 * User: pboethig
 * Date: 12.06.17
 * Time: 20:48
 */

namespace Helper\View;

/**
 * Class Navigation
 * @package Models
 *
 * @author: Peter Böthig<pboethig@gmail.com>
 */
class Navigation
{
    /**
     * Contains NavigationItems
     *
     * @var array
     */
    private $items = [];

    /**
     * Navigation constructor.
     */
    public function __construct()
    {
        $this->setItems();
    }

    /**
     * Renders main navigation.
     *
     * @param array $request
     * @return string
     */
    function renderMenu(array $request) : string
    {
        $slug = $this->getSlug($request);

        return '<div class="w-clearfix  main-nav-button-container">'. $this->renderItems($slug) . '</div>';
    }

    /**
     * Renders Items
     *
     * @param string $slug
     * @return string
     */
    private function renderItems(string $slug) : string
    {
        $markup = '';

        foreach ($this->items as $url => $linkText)
        {
            $linkCss = "button main-nav-button";

            if(strpos($url, $slug)>-1)
            {
                $linkCss .=' main-nav-button-active';
            }

            $markup .= '<a class="' . $linkCss . '" href="' . $url . '">' . $linkText . '</a>';
        }

        return $markup;
    }

    /**
     * Builds the menu slug. Sets default to home, if missing.
     *
     * @param array $request
     * @return string
     */
    private function getSlug(array $request) : string
    {
        if(!isset($request['menu'])) return 'home';

        return $request['menu'];
    }

    /**
     * Set main navigation items from config/navigation
     */
    private function setItems()
    {
        $this->items = include_once(__DIR__ . '/../../../config/navigation.php');
    }
}