<?php
    /**
     * The main template file
     *
     * @package {{ template.name }}
     * @version {{ templateVersion }}
     */

    use ThorThunder\WordPressTheme\Helper\PostsHelper;

?>

<?php get_header();?>

<?php
if (have_posts()): ?>
<div class="blog-container">
    <div class="container">
        <div class="blog">
            <?php PostsHelper::render_posts();?>
        </div>
    </div>
</div>
<?php endif?>

<div class="container">

</div>

<?php get_footer();?>