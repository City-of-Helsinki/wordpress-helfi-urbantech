@php $level = $level ?? 1 @endphp
<li class="
  {{ $name }}__item
  {{ $item->classes ?? '' }}
  {{ ($item->active || $item->activeAncestor) ? 'is-active': '' }}
  {{ $item->children ? 'has-children' : '' }}
  {{ "is-level-$level" }}"
  aria-haspopup="true"
  aria-expanded="false"
  aria-label="{{ esc_attr($item->label) }}"
  role="none"
>
  <a
    href="{{ $item->url }}"
    target="{{ $item->target ?? '' }}"
    title="{{ $item->title ?? '' }}"
    class="{{ $name }}__link {{ ($item->active || $item->activeAncestor) ? 'is-active': '' }}"
    role="menuitem"
  >
    {!! esc_html($item->label) !!}
  </a>
</li>
