<form action="{{ route('comment') }}" method="post">
    @csrf
    <div class="form-gird">
        <div class="form-group required">
            <input type="hidden" name="blog_id" value="{{$blog['id']}}">
            <label class="form-label">الاسم بالكامل</label>
            <input type="text" name="name" class="form-control">
            {{-- <span class="form-error">الاسم بالكامل مطلوب</span> --}}
        </div>
        <div class="form-group required">
            <label class="form-label">رقم الجوال</label>
            <input type="tel" name="phone" class="form-control">
        </div>
    </div>
    <div class="form-group required">
        <label class="form-label">نص التعليق</label>
        <textarea name="comment" class="form-control"></textarea>
    </div>
    <button class="form-submit">
        إرسال
    </button>
</form>
