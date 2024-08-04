<ul class="sub-list main-categories">
{{--    @foreach ($categories as $category)--}}
{{--        @if (isset($category['children']))--}}
{{--            <li class="sub-item has-children has-lvl2">--}}
{{--                <a class="sub-link" href="/category">--}}
{{--                    {{ $category['title'] }}--}}
{{--                    <i class="las la-angle-left"></i>--}}
{{--                </a>--}}
{{--                <ul class="sub-list sub-categories lvl2-categories">--}}
{{--                    @foreach ($category['children'] as $lvl2)--}}
{{--                        @if (isset($lvl2['children']))--}}
{{--                            <li class="sub-item has-children has-lvl3">--}}
{{--                                <a class="sub-link" href="/subCategory">--}}
{{--                                    {{ $lvl2['title'] }}--}}
{{--                                    <i class="las la-angle-left"></i>--}}
{{--                                </a>--}}
{{--                                <ul class="sub-list sub-categories lvl3-categories">--}}
{{--                                    @foreach ($lvl2['children'] as $lvl3)--}}
{{--                                        <li class="sub-item">--}}
{{--                                            <a class="sub-link" href="/post">--}}
{{--                                                {{ $lvl3['title'] }}--}}
{{--                                            </a>--}}
{{--                                        </li>--}}
{{--                                    @endforeach--}}
{{--                                </ul>--}}
{{--                            </li>--}}
{{--                        @else--}}
{{--                            <li class="sub-item">--}}
{{--                                <a class="sub-link" href="/subCategory">--}}
{{--                                    {{ $lvl2['title'] }}--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                        @endif--}}
{{--                    @endforeach--}}
                </ul>
            </li>
{{--        @else--}}
{{--            <li class="sub-item">--}}
{{--                <a class="sub-link" href="/category">--}}
{{--                    {{ $category['title'] }}--}}
{{--                </a>--}}
{{--            </li>--}}
{{--        @endif--}}
{{--    @endforeach--}}
</ul>
