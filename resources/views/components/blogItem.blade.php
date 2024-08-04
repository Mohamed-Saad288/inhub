<div class="blog-item">
    <div class="blog-img">
        <a href="/post" class="img-holder loading-img lazy-img-parent">
            <img data-src="{{ asset('storage/'.$blog['image']) }}" alt="{{ $blog['title'] }}" class="img-fluid lazy-img" />
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
    <a href="{{ route('blog.show',$blog['slug']) }}" class="blog-link">
        عرض المزيد
    </a>
</div>
