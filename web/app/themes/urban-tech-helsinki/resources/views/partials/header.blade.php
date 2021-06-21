<div class="site-header">
  <a class="site-header__logo" href="{{ home_url('/') }}" rel="home" aria-label="{{ __('Go to frontpage', 'hds') }}">
    <img src="{{ \Roots\Asset('images/logo.png') }}" alt="{{ $site_name }}" />
  </a>

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
