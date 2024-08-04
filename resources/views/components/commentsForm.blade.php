<form>
    <div class="form-gird">
        <div class="form-group required">
            <label class="form-label">الاسم بالكامل</label>
            <input type="text" class="form-control">
            {{-- <span class="form-error">الاسم بالكامل مطلوب</span> --}}
        </div>
        <div class="form-group required">
            <label class="form-label">رقم الجوال</label>
            <input type="tel" class="form-control">
        </div>
    </div>
    <div class="form-group required">
        <label class="form-label">نص التعليق</label>
        <textarea class="form-control"></textarea>
    </div>
    <button class="form-submit">
        إرسال
    </button>
</form>
