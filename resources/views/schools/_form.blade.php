@csrf

<div class="form-group">
    <label for="title">@lang('Name')</label>
    <input
        type="text"
        name="title"
        value="{{ old('title', $school->title) }}"
        class="form-control bg-light shadow-sm @error('title') is-invalid @else border-o @enderror"
    >
</div>


<div class="form-group">
    <label>@lang('Slug')</label>
    <input
        type="text"
        name="slug"
        value="{{ old('slug', $school->slug) }}"
        class="form-control bg-light shadow-sm @error('slug') is-invalid @else border-o @enderror"
    >
</div>

<div class="form-group">
    <label>@lang('Description')</label>
    <textarea
        name="description"
        class="form-control bg-light shadow-sm @error('description') is-invalid @else border-o @enderror"
    >{{ old('description', $school->description) }}
    </textarea>
</div>

<div class="form-group">
    <label>@lang('Logo')</label>
    <input
        type="file"
        name="logo"
        value="{{ old('logo', $school->logo) }}"
        class="form-control bg-light shadow-sm @error('logo') is-invalid @else border-o @enderror"
    >
</div>


<div class="form-group">
    <label>@lang('Email')</label>
    <input
        type="mail"
        name="email"
        value="{{ old('email', $school->email) }}"
        class="form-control bg-light shadow-sm @error('email') is-invalid @else border-o @enderror"
    >
</div>


<div class="form-group">
    <label>@lang('Phone')</label>
    <input
        type="text"
        name="phone"
        value="{{ old('phone', $school->phone) }}"
        class="form-control bg-light shadow-sm @error('phone') is-invalid @else border-o @enderror"
    >
</div>


<div class="form-group">
    <label>@lang('Website')</label>
    <input
        type="url"
        name="website"
        value="{{ old('website', $school->website) }}"
        class="form-control bg-light shadow-sm @error('website') is-invalid @else border-o @enderror"
    >
</div>


<button class="btn btn-primary btn-block btn-lg">{{ $btnText }}</button>
