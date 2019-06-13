<article id="content" @php post_class() @endphp>
  <div class="entry-content">
    <h2>{{ get_the_title() }}</h2>
    {{ the_content() }}
  </div>
  @php comments_template('/partials/comments.blade.php') @endphp
</article>
