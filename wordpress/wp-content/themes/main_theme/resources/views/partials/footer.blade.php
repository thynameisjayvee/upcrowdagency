<div id="free-consultation">
  <h2>Get a <span>FREE</span> Consultation</h2>
  <p>Flare offers a free consultation and analysis of your current website, this helps us determine your <br>
    strengths and weaknesses, and what might be missing from your current strategy. You’ll be provided <br>
    with a list of actionable steps you can take that will set you apart from your competitors and help <br>
    you stand out from the crowd.</p>
  <div class="">
    <?php
     echo do_shortcode('[contact-form-7 id="247" title="consultation"]');
     ?>
  </div>
  <div id="social" class="w-100 row justify-content-center mx-0">
    <img src="@asset('images/icons/fb.png')" alt="">
    <img src="@asset('images/icons/twitter.png')" alt="">
    <img src="@asset('images/icons/linkedin.png')" alt="">
    <img src="@asset('images/icons/pinterest.png')" alt="">
  </div>
</div>
<footer class="custom-footer">
  <div class="container-fluid">
    @php dynamic_sidebar('sidebar-footer') @endphp
    <a href="#banner">
      <img src="@asset('images/icons/icons8-chevron-up-filled-48.png')" alt="" style="width:24px;">
    </a>
    <h2 class="mb-0">UPCROWDAGENCY</h2>
    <a href="#">
      <span class="l-txt-1">Like our site?</span>
      <span class="l-txt-2">Let us make yours</span>
    </a>
    <br><br>
    <a href="#">
      <span class="l-txt-2">Client Portal!</span>
    </a>
    <br><br>
    <span class="l-txt-2">
      New York
    </span>
    <div class="">
      <span class="l-txt-1">Phone Number: </span>
      <span class="l-txt-2">1 917.545.5297</span>
      <span>|</span>
      <span class="l-txt-1">Email: </span>
      <span class="l-txt-2">connect@flareagency.com</span>
    </div>
    <div class="l-txt-2">
      <span>&copy; 2018 Flare Agency All Rights Reserved | </span>
      <a href="#" class="l-txt-2">Privacy Policy</a>
      <span>|</span>
      <a href="#" class="l-txt-2">Contact</a>
    </div>
  </div>
</footer>

<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
<!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<script type="text/javascript">
  jQuery(function($){
    url = window.location.origin + '/'
    if (url === window.location.href) {
      $("a.pointer").each(function(){
        $("a[href*='" + location.href + "']").removeClass('active')
      });

    } else {
      $("a.pointer").each(function(){
        $("a[href*='" + location.href + "']").addClass('active')
      });
    }
    console.log(window.location.origin)
    console.log(window.location.href)

    var footerHeight = 0;
    var headerHeight = 0;
    footerHeight = $('footer').outerHeight();
    headerHeight = $('header').outerHeight();
    $('body').css('margin-bottom', footerHeight + 'px');
    $('#container').css('padding-top', headerHeight + 'px');

    //this is for scrollTop
    $("a").on('click', function(event) {
      // Make sure this.hash has a value before overriding default behavior
      if (this.hash !== "") {
        // Prevent default anchor click behavior
        event.preventDefault();

        // Store hash
        var hash = this.hash;

        // Using jQuery's animate() method to add smooth page scroll
        // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
        $('html, body').animate({
          scrollTop: $(hash).offset().top
        }, 0, function(){

          // Add hash (#) to URL when done scrolling (default click behavior)
          window.location.hash = hash;
        });
      } // End if
      //this is for scrollTop

    });

    $('.custom-slick').slick({
      infinite: true,
      speed: 700,
      cssEase: 'linear',
      prevArrow: $('.prev'),
      nextArrow: $('.next'),
      responsive: [
        {
          breakpoint: 420,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
      ]
    });

    //this is to set element to same height
    // var maxHeight = 0;
    //
    // $('.boxy').each(function(){
    //   if ($(this).outerHeight() > maxHeight) { maxHeight = $(this).outerHeight(); }
    // });
    //
    // $(".boxy").outerHeight(maxHeight);
    //this is to set element to same height

    // $('a.pointer').click(function(){
    //   $('a.pointer').removeClass("active");
    //   $(this).addClass("active");
    // });

    $('a.dropdown-toggle').hover(function(){
      $('.dropdown-menu').show();
    }, function(){
      $('.dropdown-menu').hide();
    })

    if ($(document).width() < 480) {
      $('#dropdownBtn').click(function(){
        $(this).toggleClass('active');
        if($(this).hasClass('active')) {
          $('#dropdownSp').css('display', 'block');
        } else {
          $('#dropdownSp').css('display', 'none');
        }
      })
      $('#navhover').removeClass('dropdown');
    } else {
      $('#navhover').addClass('dropdown');
      // $('#dropdownSp').removeClass('collapse');
    }


  })
</script>
