
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
    <x-form.label for="regularTitle" label="العنوان العادى" />
    <x-form.input  name="regularTitle"  :value="$banner->regularTitle"   />
</div>
<div class="form-group">
    <x-form.label for="boldTitle" label="العنوان الاصلى" />
    <x-form.input  name="boldTitle"  :value="$banner->boldTitle"   />
</div>

<div class="form-group">
    <x-form.label label="الصورة" />
    <input type="file" name="img" class="form-control">
    @if($banner->img)
        <img src="{{ asset('storage/' . $banner->img) }}" alt="" height="60">
    @endif
</div>

<div class="form-group">
    <button type="submit" class="btn btn-primary">{{ $button_label }}</button>
</div>
