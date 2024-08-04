
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
    <x-form.label for="name" label="الاسم" />
    <x-form.input  name="name"  :value="$advertisement->name"   />
</div>
<div class="form-group">
    <x-form.label for="link" label="اللينك" />
    <x-form.input  name="link"  :value="$advertisement->link"   />
</div>

<div class="form-group">
    <x-form.label label="الصورة" />
    <input type="file" name="image" class="form-control">
    @if($advertisement->image)
        <img src="{{ asset('storage/' . $advertisement->image) }}" alt="" height="60">
    @endif
</div>

<div class="form-group">
    <button type="submit" class="btn btn-primary">{{ $button_label }}</button>
</div>
