@if ($_GET['s'] || $_GET['post_type'])
<section class="mobile-search">
  <div class="container">
    <form class="search -is-active" action="{{ get_home_url() }}" method="GET" data-search-form>
      <input class="search__input" type="text" name="s" placeholder="">
      <input type="hidden" name="post_type" value="product">
      <button class="search__button">
        {{ __('SEARCH', 'MiloCasa') }}
      </button>
    </form>
  </div>
</section>
@endif
