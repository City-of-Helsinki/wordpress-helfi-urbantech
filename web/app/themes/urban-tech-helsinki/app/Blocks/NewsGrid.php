<?php

namespace App\Blocks;

use WP_Query;
use Log1x\AcfComposer\Block;

class NewsGrid extends Block
{
  public $name = 'NewsGrid';
  public $mode = 'auto';

  public function with()
  {
    return [
      'query' => $this->query(),
    ];
  }

  public function query(): WP_Query
  {
    $opts = [
      'posts_per_page' => 15,
      'orderby' => ['date'],
      'order' => 'DESC',
      'post_type' => 'Post',
      'use_pagination' => false,
      'ignore_sticky_posts' => false,
      'post_status' => 'publish',
    ];

    return new WP_Query($opts);
  }
}
