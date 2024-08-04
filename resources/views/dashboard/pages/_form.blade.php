
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
    <x-form.label for="name" label="اسم الصفحة" />
    <x-form.input  name="name" type="text" :value="$page->name"   />
</div>
<div class="form-group">
    <x-form.label for="title" label="العنوان" />
    <x-form.input  name="title" type="text" :value="$page->title"   />
</div>
<div class="form-group">
    <x-form.label label="الوصف" />
    <x-form.textarea name="description"  :value="$page->description" />
</div>

<div class="form-group">
    <button type="submit" class="btn btn-primary">{{ $button_label }}</button>
</div>
