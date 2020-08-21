@csrf

<div class="form-group">
    <label for="name">@lang('Name')</label>
    <input
        type="text"
        name="name"
        value="{{ old('name', $student->name) }}"
        class="form-control bg-light shadow-sm @error('name') is-invalid @else border-o @enderror"
    >
</div>

<div class="form-group">
    <label for="slug">@lang('Slug')</label>
    <input
        type="text"
        name="slug"
        value="{{ old('slug', $student->slug) }}"
        class="form-control bg-light shadow-sm @error('slug') is-invalid @else border-o @enderror"
    >
</div>

<div class="form-group">
    <label for="surname">@lang('Surname')</label>
    <input
        type="text"
        name="surname"
        value="{{ old('surname', $student->surname) }}"
        class="form-control bg-light shadow-sm @error('surname') is-invalid @else border-o @enderror"
    >
</div>


<div class="form-group">
    <label for="school_id">@lang('School')</label>
   {{--  <input
        type="text"
        name="school_id"
        value="{{ old('school_id', $student->school_id) }}"
        class="form-control bg-light shadow-sm @error('school_id') is-invalid @else border-o @enderror"
    >
 --}}
    <select class="form-control bg-light shadow-sm" name="school_id">
        <option>@lang('Select one option')</option>
        @foreach ($schools as $key => $value)
        <option value="{{ $key }}" >
            {{ $value }}
        </option>
        @endforeach
    </select>
</div>

<div class="form-group">
    <label for="date">@lang('date')</label>
    <input
        type="date"
        name="date"
        value="{{ old('date', $student->date) }}"
        class="form-control bg-light shadow-sm @error('date') is-invalid @else border-o @enderror"
    >
</div>

<div class="form-group">
    <label for="city">@lang('city')</label>
    <input
        type="text"
        name="city"
        value="{{ old('city', $student->city) }}"
        class="form-control bg-light shadow-sm @error('city') is-invalid @else border-o @enderror"
    >
</div>


<button class="btn btn-primary btn-block btn-lg">{{ $btnText }}</button>
