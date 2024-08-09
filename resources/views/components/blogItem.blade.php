<div class="blog-item">
    <div class="blog-img">
        <a href="/post" class="img-holder loading-img lazy-img-parent">
            @php
                $images = explode(',', $blog['image']);
                $firstImage = $images[0] ?? '';
            @endphp
            @if($firstImage)
                <img data-src="{{ asset('storage/' . $firstImage) }}" alt="{{ $blog['title'] }}" class="img-fluid lazy-img" />
            @endif
        </a>
{{--        <div class="blog-tags">--}}
{{--            @foreach ($blog['tags'] as $tag)--}}
{{--                <a href="/search" class="blog-tag">--}}
{{--                    {{ $tag }}--}}
{{--                </a>--}}
{{--            @endforeach--}}
{{--        </div>--}}
    </div>
    <h3 class="blog-title">
        <a href="/post" title="{{ $blog['title'] }}">
            {{ $blog['title'] }}
        </a>
    </h3>
    <p class="blog-summary">
        {{ $blog['description'] }}
    </p>
    <a href="{{ route('post.show',$blog['slug']) }}" class="blog-link">
        عرض المزيد
    </a>
</div>
