@extends('layouts.app')

@section('content')
  <!-- @include('partials.page-header')

  @if (!have_posts())
    <div class="alert alert-warning">
      {{ __('Sorry, no results were found.', 'sage') }}
    </div>
    {!! get_search_form(false) !!}
  @endif

  @while (have_posts()) @php the_post() @endphp
    @include('partials.content-'.get_post_type())
  @endwhile

  {!! get_the_posts_navigation() !!} -->
  <section id="banner">
    <img class="banner-image" src="@asset('images/banner4.jpg')" alt="">
    <div class="row m-0">
      <div class="col-md-8">
        <h1>
          TURNING DIGITAL AMBITIONS<br>
          <span>INTO BUSINESS RESULTS</span>
        </h1>
        <p class="my-4">
          We combine our expertise and passion to help emerging brands navigate and adapt <br>
          to the ever-changing market dynamics by crafting a strategic approach to increase <br>
          discoverability and produce more meaningful leads.
        </p>
        <div class="my-5">
          <a href="#">Learn More</a>
        </div>
      </div>
    </div>
  </section>
  <div class="middle-text">
    We’re a full-service marketing agency <br>
    that provides <span>custom solutions</span> for your business
  </div>
  <hr>
  <section id="c-categories">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-4 my-3">
          <div class="boxy">
            <img src="@asset('images/icons/development.png')" alt="">
            <span class="l-txt-1">DESIGN & DEVELOPMENT</span>
            <p class="l-txt-2">Websites that are tailored and branded to your specific needs and will convert passive site traffic into paying customers.</p>
          </div>
        </div>
        <div class="col-md-4 my-3">
          <div class="boxy">
            <img src="@asset('images/icons/seo.png')" alt="">
            <span class="l-txt-1">SEARCH ENGINE OPTIMIZATION</span>
            <p class="l-txt-2">We study, research and implement SEO best practices among your competition to increase your visibility on Google.</p>
          </div>
        </div>
        <div class="col-md-4 my-3">
          <div class="boxy">
            <img src="@asset('images/icons/social.png')" alt="">
            <span class="l-txt-1">SOCIAL MEDIA MARKETING</span>
            <p class="l-txt-2">Drive traffic to your website by creating unique content for each platform and engaging with your target demographic.</p>
          </div>
        </div>
        <div class="col-md-4 my-3">
          <div class="boxy">
            <img src="@asset('images/icons/content.png')" alt="">
            <span class="l-txt-1">CONTENT MARKETING</span>
            <p class="l-txt-2">Our team will assist in developing compelling content that converts and helps to increase your search engine rankings.</p>
          </div>
        </div>
        <div class="col-md-4 my-3">
          <div class="boxy">
            <img src="@asset('images/icons/email.png')" alt="">
            <span class="l-txt-1">EMAIL MARKETING</span>
            <p class="l-txt-2">Increase your brand's awareness among potential and existing customers by generating sales with email campaigns that perform.</p>
          </div>
        </div>
        <div class="col-md-4 my-3">
          <div class="boxy">
            <img src="@asset('images/icons/ads.png')" alt="">
            <span class="l-txt-1">PAID ADVERTISING</span>
            <p class="l-txt-2">Reach the consumers in your target demographic at all points of the purchasing funnel and consideration cycles.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <form class="" action="index.html" method="post">
    <button id="testbtn" type="button" name="button">Test</button>
    <button id="testbtn2" type="button" name="button">Show</button>
  </form>
  <h1 class="insight">iN<span>SIGHTS</span></h1>
  <?php
  $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
  $args = array(
    'post_type' => array('post'),
    'order' => 'DESC',
    'paged' => $paged,
  );

  // WP_Query
  $eq_query = new WP_Query( $args );
  if ($eq_query->have_posts()) : // The Loop
  ?>
  <div id="article-holder" class="row m-0 custom-slick px-5" data-slick='{"slidesToShow" : 3, "slidesToScroll" : 3}'>
    <?php
    while ($eq_query->have_posts()): $eq_query->the_post();
    ?>
    <a href="<?php the_permalink(); ?>" class="border m-3">
      <div class="shadow">
      </div>
      <h3 class="hover-txt">Read Article</h3>
      {{the_post_thumbnail('thumbnail')}}
      <div class="post-title p-3">
        <?php
        $postcat = get_the_category( $eq_query->post->ID );
        ?>
        <span class="text-muted" style="float:right;">{{$postcat[0]->name}}</span>
        <br>
        <p class="m-0"><?php the_title(); ?></p>
      </div>
    </a>
    <?php endwhile; wp_reset_query(); ?>
  </div>
  <div class="slick-control">
    <a href="#" class="prev">
      <img src="@asset('images/icons/chevron-left.png')" alt="">
    </a>
    <a href="#" class="next">
      <img src="@asset('images/icons/chevron-right.png')" alt="">
    </a>
  </div>
  <?php endif; ?>
  <script type="text/javascript">
    jQuery('#testbtn2').click(function(){
      $('#testbtn').toggle('slow', 'linear')
    })
    jQuery('#testbtn').click(function (e) {
        e.preventDefault();

        var data = {
    			'action': 'filterposts',
    		};
        var $testbody = jQuery('#article-holder');
        jQuery.ajax({
          url : location.origin + '/wp-admin/admin-ajax.php',
    			data : data,
    			type : 'POST',
          beforeSend : function ( xhr ) {
    				$('#testbtn').html( 'Loading...' );
            $testbody.html('');

    			},
          success : function (data) {

            $('#testbtn').html( 'Test' );
            var $testbody = jQuery('#article-holder');
            // $testbody.html(data);
            console.log(data);
            jQuery.each(data, function (i){
              var link = data[i].guid
              var postId = data[i].ID
              var postTitle = data[i].post_title
              var thumbnail = data[i].thumbnail
              var category = data[i].category[0].cat_name
              console.log(link)
              console.log(postId)
              console.log(postTitle)
              console.log(thumbnail)
              $testbody.append(
                '<a href="'+link+'" class="border m-3">' +
                  '<div class="shadow">' +
                  '</div>' +
                  '<h3 class="hover-txt">Read Article</h3>' +
                  thumbnail +
                  '<div class="post-title p-3">' +
                    '<span class="text-muted" style="float:right;">'+category+'</span>' +
                    '<br>' +
                    '<p class="m-0">'+postTitle+'</p>' +
                  '</div>' +
                '</a>'
              )
            });
        }
      });
    })
  </script>
@endsection
