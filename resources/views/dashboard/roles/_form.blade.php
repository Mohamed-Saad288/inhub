<div class="form-group" dir="rtl">
    <x-form.label for="name" label="اسم الصلاحية" />
    <x-form.input name="name" type="text" :value="$role->name" />
</div>

<fieldset dir="rtl">
    <legend>
        {{ __('الصلاحيات') }}
    </legend>
    @foreach(config('abilities') as $ability_code => $ability_name)
        <div class="row mb-2">
            <div class="col-md-6">
                {{ __($ability_name) }}
            </div>
            <div class="col-md-2">
                <input type="radio" name="abilities[{{ $ability_code }}]" @checked(($role_abilities[$ability_code] ?? "") == 'allow') value="allow">
                مسموح
            </div>
            <div class="col-md-2">
                <input type="radio" name="abilities[{{ $ability_code }}]" @checked(($role_abilities[$ability_code] ?? "") == 'deny') value="deny">
                غير مسموح
            </div>
        </div>
    @endforeach
</fieldset>

<div class="form-group" dir="rtl">
    <button type="submit" class="btn btn-primary">{{ $button_label }}</button>
</div>
