@extends('layouts.app')
@section('content')
  this is testing categories
  <?php

  $args = array(
    'cat' => get_query_var('cat'),
    'orderby' => 'title',
    'order' => 'ASC'
  );

  // WP_Query
  $eq_query = new WP_Query( $args );
  if ($eq_query->have_posts()) : // The Loop
  ?>
  <div class="wp-easy-query">
    <div class="wp-easy-query-posts">
    <ul class="">
    <?php
    while ($eq_query->have_posts()): $eq_query->the_post();
    ?>
    <li <?php if (!has_post_thumbnail()) { ?> class="no-img"<?php } ?>>
       <?php if ( has_post_thumbnail() ) {
          the_post_thumbnail('eq-thumbnail');
       }?>
       <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
       <?php
       $postcat = get_the_category( $eq_query->post->ID );
       ?>
       {{$postcat[0]->name}}
       <p class="entry-meta"><?php the_time("F d, Y"); ?></p>
       <?php the_excerpt(); ?>
    </li>
    <?php endwhile; wp_reset_query(); ?>
    </ul>
    </div>
  </div>
  <?php endif; ?>
@endsection
