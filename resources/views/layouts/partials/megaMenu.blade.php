<ul class="sub-list main-categories">
    @foreach ($categories as $category)

            <li class="sub-item">
                <a class="sub-link" href="{{ route('categories.show',$category['slug']) }}">
                    {{ $category['name'] }}
                </a>
            </li>
    @endforeach
</ul>
