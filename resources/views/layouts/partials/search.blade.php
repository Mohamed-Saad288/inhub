<div class="search-form">
    <form action="{{ URL::current() }}" method="get">
        <input type="search" name="title" placeholder="بحث" class="search-input" value="{{ request('title') }}" />
        <button class="search-btn">
            <i class="las la-search"></i>
        </button>
    </form>
</div>
