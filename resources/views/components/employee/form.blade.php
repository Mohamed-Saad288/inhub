@props(['roles','button'])
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
    <x-form.label for="name" label="اسم الموظف" />
    <x-form.input  name="name" type="text"    />
</div>
<div class="form-group">
    <x-form.label for="name" label="البريد الالكترونى" />
    <x-form.input  name="email" type="text"    />
</div><div class="form-group">
    <x-form.label for="name" label="رقم الهاتف " />
    <x-form.input  name="phone_number" type="text"    />
</div>
<div class="form-group" dir="rtl">
    <x-form.label label="اضف صلاحيه" />
    <select name="role_id" class="form-control form-select" dir="rtl">
        <option value="">اختر الفئة</option>
        @foreach($roles as $role)
            <option value="{{ $role->id }}" {{ old('role_id') }} > {{ $role->name }}</option>
        @endforeach
    </select>
</div>
<div class="form-group">
    <x-form.label for="name" label="كلمة المرور" />
    <x-form.input  name="password" type="text"    />
</div>


<div class="form-group">
    <button type="submit" class="btn btn-primary">{{ $button }}</button>
</div>
