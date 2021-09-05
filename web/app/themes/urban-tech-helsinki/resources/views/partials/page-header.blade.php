<header class="entry-header">
  <x-group align="full" background="silver">
    @if (function_exists('yoast_breadcrumb'))
      {{ yoast_breadcrumb( '<p id="breadcrumbs" class="alignwide">','</p>' ) }}
    @endif
    <h1 class="entry-title">{!! $title !!}</h1>
  </x-group>
</header>
