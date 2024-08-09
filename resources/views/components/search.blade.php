<section class="filter-section">
     <form action="{{ URL::current() }}" method="get">
    <div class="filter-form">
        <div class="input-content">
            <input type="search" name="title" placeholder="ادخل كلمة البحث" class="filter-input"
                value="{{ request('title') }}" />
            <button class="filter-btn">
                <i class="las la-search"></i>
            </button>
        </div>
        <div class="select-content">
            <span class="filter-label">
                الترتيب حسب
            </span>
            <div class="select-holder">
                <select name="order_by" class="filter-input filter-select" onchange="this.form.submit()">
                    <option value="desc" {{ request('order_by') == 'desc' ? 'selected' : '' }}>من الأحدث إلى الأقدم</option>
                    <option value="asc" {{ request('order_by') == 'asc' ? 'selected' : '' }}>من الأقدم إلى الأحدث</option>
                </select>
            </div>
        </div>
    </div>
     </form>
</section>
