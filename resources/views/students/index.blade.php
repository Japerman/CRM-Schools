@extends('layout')

@section('title',__('Student'))

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 col-sm-10 col-lg-6 mx-auto">

            <div class="d-flex justify-content-between align-items-center mb-3">
                <h1 class="display-4 mb-0">@lang('Student')</h1>
                @auth
                <a
                    href="{{ route('students.create')}}"
                    class="btn btn-primary"
                    >@lang('Create')</a>
                @endauth
            </div>

            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis hendrerit erat auctor augue viverra, non tempor odio consequat. </p>
            <hr>


            <ul class="list-group">
                @forelse ($student as $studentItem)
                    <li class="list-group-item border-o mb-3 shadow-sm">
                        <a
                            href=" {{ route('students.show', $studentItem) }}"
                            class="text-secondary d-flex justify-content-between align-items-center"
                            >
                            <span class=" font-weight-bold">
                                {{ $studentItem->name }}
                            </span>
                            <span class="text-black-50">
                                {{ $studentItem->created_at->format('d/m/Y')}}
                            </span>
                        </a>
                    </li>
                @empty
                    <li class="list-group-item border-o mb-3 shadow-sm">
                        @lang('There are no Students')
                    </li>
                @endforelse
            </ul>
            {{ $student->links() }}
        </div>
    </div>
</div>


@endsection
