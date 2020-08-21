@extends('layout')

@section('title',__('New School'))

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 col-sm-10 col-lg-6 mx-auto">
            <h1 class="display-4">@lang('New School')</h1>
            <hr>

            @include('partials.validation-errors')

            <form
                method="POST"
                action="{{route('schools.store')}}"
                class="bg-white shadow rounded py-3 px-4"
            >
                @include('schools._form', ['btnText' => __('Save')])

            </form>
        </div>
    </div>
</div>
@endsection
