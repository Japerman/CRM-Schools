@extends('layout')

@section('title',__('Students').' | '.$student->title)


@section('content')
<div class="container">
    <div class="bg-white p-5 shadow rounded">
        <h1>{{ $student->name }} {{ $student->surname }}</h1>
        <hr>

        <p
            class="text-secondary"
        >{{ $student->city }}</p>
        <p
            class="text-black-50"
        >{{ $student->created_at->diffForHumans() }}</>

        <div class="d-flex justify-content-between align-items-center">
            <a href="{{ route('students.index')}}">@lang('Back')</a>
            @auth
                <div class="btn-group btn-group-sm">
                    <a
                        href="{{ route('students.edit', $student) }}"
                        class="btn btn-primary"
                        >@lang('Edit')</a>
                    <a
                        href="#"
                        onclick="document.getElementById('delete-student').submit()"
                        class="btn btn-danger"
                        >@lang('Delete')</a>
                </div>
                <form
                    id="delete-student"
                    method="POST"
                    action="{{ route('students.destroy', $student) }}"
                    class="d-none"
                >
                    @csrf @method('DELETE')
                </form>
            @endauth
        </div>
    </div>
</div>
@endsection
