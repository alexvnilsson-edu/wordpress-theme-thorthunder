<?php
    /**
     * Code the Change template for the header
     *
     * @package {{ template.name }}
     * @version {{ templateVersion }}
     */

    require_once THEME_PATH . "/includes/Module/Header.php";

    use ThorThunder\WordPressTheme\Module\Header;

    $excerpt = null;
    if (is_single()) {
        $excerpt = get_the_excerpt();
    }

?>

<!DOCTYPE html>
<html <?php language_attributes();?>>

<head>
    <?php if (is_single() || is_page() || is_home()): ?>
    <meta name="googlebot" content="index,noarchive,follow,noodp" />
    <meta name="robots" content="all,index,follow" />
    <meta name="msnbot" content="all,index,follow" />
    <?php else: ?>
    <meta name="googlebot" content="noindex,noarchive,follow,noodp" />
    <meta name="robots" content="noindex,follow" />
    <meta name="msnbot" content="noindex,follow" />
    <?php endif;?>

    <?php if ($excerpt): ?>
    <meta name="description" content="<?php echo $excerpt; ?>" />
    <?php else: ?>
    <meta name="description" content="<?php bloginfo('description')?>">
    <?php endif;?>

    <meta charset="<?php bloginfo('charset');?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('name');
           wp_title();?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php if (is_singular() && pings_open(get_queried_object())): ?>
    <link rel="pingback" href="<?php bloginfo('pingback_url');?>">
    <?php endif?>
    <?php wp_head()?>
</head>

<?php
    $logo = Header::get_custom_logo_url();
?>

<body <?php body_class()?>>
    <nav class="container navbar primary">
        <a class="brand" href="<?php echo get_home_url(); ?>">
            <?php if (has_custom_logo()): ?>
            <img src="<?php echo $logo[0] ?>" width="<?php echo $logo[1] ?>" height="<?php echo $logo[2] ?>"
                alt="Logotyp" />
            <?php else: ?>
            <span class="name"><?php bloginfo('name');?></span>

            <?php endif?>

        </a>

        <a href="#" class="menu-expander">
            <i class="icon material-icons">menu</i>
        </a>

        <?php Header::render_nav_menu('header');?>
    </nav>

    <div id="content">