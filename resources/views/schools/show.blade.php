@extends('layout')

@section('title',__('School').' | '.$school->title)


@section('content')
<div class="container">
    <div class="bg-white p-5 shadow rounded">
        <h1>{{ $school->title }}</h1>
        <hr>

        <p
            class="text-secondary"
        >{{ $school->description }}</p>


        <p
            class="text-secondary"
        ><img class="img-fluid mb-4" src="<?=asset("storage/$school->logo")?>" alt="{{ $school->logo }}" ></p>


        <p
            class="text-secondary"
        ><a href="mailto:{{ $school->email }}">{{ $school->email }}</a></p>


        <p
            class="text-secondary"
        ><a href="tel:{{ $school->phone }}">{{ $school->phone }}</a></p>

        <p
            class="text-secondary"
        ><a href="{{ $school->website }}" target="_blank">{{ $school->website }}</a></p>

        <p
            class="text-black-50"
        >{{ $school->created_at->diffForHumans() }}</p>

        <div class="d-flex justify-content-between align-items-center">
            <a href="{{ route('schools.index')}}">@lang('Back')</a>
            @auth
                <div class="btn-group btn-group-sm">
                    <a
                        href="{{ route('schools.edit', $school) }}"
                        class="btn btn-primary"
                        >@lang('Edit')</a>
                    <a
                        href="#"
                        onclick="document.getElementById('delete-school').submit()"
                        class="btn btn-danger"
                        >@lang('Delete')</a>
                </div>
                <form
                    id="delete-school'"
                    method="POST"
                    action="{{ route('schools.destroy', $school) }}"
                    class="d-none"
                >
                    @csrf @method('DELETE')
                </form>
            @endauth
        </div>

    </div>
</div>
@endsection
