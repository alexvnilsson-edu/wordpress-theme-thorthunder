<?php
    /**
     * Fil som innehåller funktioner för sidhuvudet.
     *
     * @package {{ template.name }}
     * @version {{ templateVersion }}
     */
    namespace ThorThunder\WordPressTheme\Module;

    use ThorThunder\WordPressTheme\Core\Menu;

    class Footer
    {
        public static function render_nav_menu($menu_location_name = null)
        {
            $locations = get_nav_menu_locations();
            if (!array_key_exists($menu_location_name, $locations)) {
                return false;
            }
            $menu_items = Menu::get_nav_menu_items($locations[$menu_location_name]);

            if ($menu_items && !empty($menu_items)):
        ?>
<ul class="nav">
    <?php foreach ($menu_items as $item): ?>
    <li class="<?php echo implode(' ', array('item')) ?>">
        <a href="<?php echo $item->url; ?>" class="link">
            <?php echo $item->title; ?>
        </a>
    </li>
    <?php endforeach?>
</ul>
<?php endif;
        }
    }