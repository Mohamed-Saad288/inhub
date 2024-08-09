
@if($errors->any())
    <div class="alert alert-danger">
        <h3>Error Occurred</h3>
        <ul>
            @foreach($errors->all() as  $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="form-group">
    <x-form.label for="title" label="عنوان المدونة" />
    <x-form.input  name="title"  :value="$blog->title"   />
</div>
<div class="form-group">
    <x-form.label label="الوصف" />
    <x-form.textarea name="description"  :value="$blog->description" />
</div>
<div class="form-group" dir="rtl">
    <x-form.label label="اضف الى فئه" />
    <select name="category_id" class="form-control form-select" dir="rtl">
        <option value="">اختر الفئة</option>
        @foreach($categories as $category)
            <option value="{{ $category->id }}" @selected( old('category_id' , $blog->category_id) == $category->id) > {{ $category->name }}</option>
        @endforeach
    </select>
</div>
<div class="form-group">
    <div class="form-group">
        <x-form.label label="الصورة" />
        <input type="file" name="image[]" class="form-control" multiple>
        @if($blog->images)
            @foreach(explode(',', $blog->images) as $image)
                <img src="{{ asset('storage/' . $image) }}" alt="" height="60">
            @endforeach
        @endif
    </div>
</div>
<div class="form-group">
    <x-form.radio name="status" :checked="$blog->status" :options="['active' => 'نشط' , 'inactive' => 'غير نشط']" />
</div>

<div class="form-group">
    <button type="submit" class="btn btn-primary">{{ $button_label }}</button>
</div>
