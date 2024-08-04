<section class="filter-section">
    {{-- <form> --}}
    <div class="filter-form">
        <div class="input-content">
            <input type="search" placeholder="ادخل كلمة البحث" class="filter-input"
                value="{{ isset($value) ? $value : '' }}" />
            <button class="filter-btn">
                <i class="las la-search"></i>
            </button>
        </div>
        <div class="select-content">
            <span class="filter-label">
                الترتيب حسب
            </span>
            <div class="select-holder">
                <select class="filter-input filter-select">
                    <option value="1">من الأحدث إلى الأقدم</option>
                    <option value="2">من الأقدم إلى الأقدم</option>
                    <option value="3">الأكثر مشاهدة</option>
                </select>
            </div>
        </div>
    </div>
    {{-- </form> --}}
</section>
