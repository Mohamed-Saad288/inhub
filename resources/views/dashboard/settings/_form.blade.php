
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
    <x-form.label for="whatsapp" label="وتساب" />
    <x-form.input  name="whatsapp" type="text" :value="$setting->whatsapp"   />
</div>
<div class="form-group">
    <x-form.label for="phone" label="رقم الهاتف" />
    <x-form.input  name="phone" type="text" :value="$setting->phone"   />
</div>
<div class="form-group">
    <x-form.label for="email" label="البريد الالكتروني" />
    <x-form.input  name="email" type="text" :value="$setting->email"   />
</div>
<div class="form-group">
    <x-form.label for="facebook" label="لينك الفيسبوك" />
    <x-form.input  name="facebook" type="text" :value="$setting->facebook"   />
</div>
<div class="form-group">
    <x-form.label for="x" label="لينك اكس" />
    <x-form.input  name="x" type="text" :value="$setting->x"   />
</div>
<div class="form-group">
    <x-form.label for="instagram" label="لينك انستجرام" />
    <x-form.input  name="instagram" type="text" :value="$setting->instagram"   />
</div>
<div class="form-group">
    <x-form.label for="linkedin" label="لينك لينكدان" />
    <x-form.input  name="linkedin" type="text" :value="$setting->linkedin"   />
</div>
<div class="form-group">
    <button type="submit" class="btn btn-primary">{{ $button_label }}</button>
</div>
