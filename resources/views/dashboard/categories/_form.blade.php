
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
    <x-form.label for="name" label="اسم الفئه" />
    <x-form.input  name="name" type="text" :value="$category->name"   />
</div>
<div class="form-group">
    <x-form.label label="الوصف" />
    <x-form.textarea name="description"  :value="$category->description" />
</div>
<div class="form-group">
    <x-form.radio name="status" :checked="$category->status" :options="['active' => 'نشط' , 'inactive' => 'غير نشط']" />
</div>

<div class="form-group">
    <button type="submit" class="btn btn-primary">{{ $button_label }}</button>
</div>
