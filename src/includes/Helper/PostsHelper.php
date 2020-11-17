<?php

namespace ThorThunder\WordPressTheme\Helper;

use ThorThunder\WordPressTheme\Module\Posts;

class PostsHelper
{
    public static function render_posts()
    {
        while (have_posts()) {
            the_post();
            $postId = get_the_ID();

            if ($postId != false) {
                Posts::render_post($postId);
            }
        }
    }
}