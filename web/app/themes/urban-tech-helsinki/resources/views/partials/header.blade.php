<div class="site-header">
  <a class="site-header__logo" href="{{ home_url('/') }}" rel="home" aria-label="{{ __('Go to frontpage', 'hds') }}">
    @if (mb_substr(get_locale(), 0, 2) === 'sv')
      @svg('images/logo/helsinki-sv.svg', '', ['width' => 67, 'height' => 31])
    @else
      @svg('images/logo/helsinki-fi.svg', '', ['width' => 67, 'height' => 31])
    @endif
  </a>

  <div class="site-header__name">
    <h5>{{ $site_name }}</h5>
  </div>

  @if ($search_enabled)
    <div class="site-header__search">
      @include('partials.search')
    </div>
  @endif

  <div class="site-header__hamburger-button">
    <button
      class="site-hamburger-button"
      aria-label="{{ __('Open navigation', 'hds') }}"
      aria-expanded="false"
      aria-controls="header"
    >
      <span aria-hidden="true"></span>
    </button>
  </div>
</div>

<nav class="site-navbar">
  @include('partials.navigation')
</nav>
