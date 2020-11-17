<?php
    /**
     * Fil som innehåller funktioner för sidhuvudet.
     *
     * @package {{ template.name }}
     * @version {{ templateVersion }}
     */
    namespace ThorThunder\WordPressTheme\Module;

    use ErrorException;

    class Post_Author
    {
        public $name = null;
        public $url = null;

        public function __construct($name, $url)
        {
            $this->name = $name;
            $this->url = $url;
        }
    }

    class Posts
    {
        public static function render_post($postId)
        {
            if (is_null($postId)) {
                throw new ErrorException("Argument post is null.");
            }

            $post = get_post($postId);

            if (is_null($post)) {
                throw new ErrorException("Found no post with id $postId.");
            }

            $post_date = date('Y-m-d', strtotime($post->post_date));
            $post_permalink = get_permalink($post);

            $author = new Post_Author(get_the_author_meta('display_name', $post->post_author), get_the_author_meta('user_url', $post->post_author));
        ?>
<div class="post">
    <?php if (is_single()): ?>
    <h2>
        <?php echo $post->post_title ?>
    </h2>
    <?php else: ?>
    <a href="<?php echo $post_permalink ?>" class="h2 text-body no-decoration">
        <?php echo $post->post_title ?>
    </a>
    <?php endif;?>
    <div class="content">
        <?php echo $post->post_content ?>
    </div>

    <div class="footer">
        <div class="field">
            <i class="material-icons">person</i>
            <a href="<?php echo $author->url ?>"><?php echo $author->name ?></a>
        </div>

        <div class="field">
            <i class="material-icons">calendar_today</i>
            <span><?php echo $post_date ?></span>
        </div>
    </div>
</div>
<?php
    }
}