@extends('layout')

@section('title',__('Edit School'))

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 col-sm-10 col-lg-6 mx-auto">
            <h1 class="display-4">@lang('Edit School')</h1>
            <hr>
            @include('partials.validation-errors')

            <form
                method="POST"
                action="{{route('schools.update', $school)}}"
                class="bg-white shadow rounded py-3 px-4"
            >
                @method('PATCH')

                @include('schools._form', ['btnText' => __('Edit')])

            </form>

        </div>
    </div>
</div>


@endsection
