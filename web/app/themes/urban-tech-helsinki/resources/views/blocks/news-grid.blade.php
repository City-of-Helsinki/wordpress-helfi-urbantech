@if (sizeof($query->posts) > 0)
  <div class="{{ esc_attr($block->classes) }}">
    <div class="grid">
      <div class="cell small:12 medium:4 large:3">
        <div class="aspect-ratio-container">
          <a href="/articles">
            <h1>{{__('News', 'hds')}}</h1>
            <div class="read-more-link">{{__('All articles>', 'hds')}}</div>
          </a>
        </div>
      </div>
      @foreach ($query->posts as $post)
        @php
          $categories = get_the_category($post);
          $category = null;
          if (isset($categories) && sizeof($categories) >= 1) {
              $category = $categories[0]->slug;
          }
        @endphp
        <div class="cell small:12 medium:4 large:3 has-category-{{$category}}-background-color">
          <div class="aspect-ratio-container">
            <a href="{{get_permalink($post)}}">
              <h3>
                {{$post->post_title}}
              </h3>
              <div class="date-and-category">
                {{date('j.n.Y', strtotime($post->post_date))}}
                –
                News
              </div>
              <div class="read-more-link">{{__('Read more>', 'hds')}}</div>
            </a>
          </div>
        </div>
      @endforeach
    </div>
  </div>
@endif
