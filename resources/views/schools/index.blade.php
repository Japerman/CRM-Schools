@extends('layout')

@section('title',__('Schools'))

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 col-sm-10 col-lg-6 mx-auto">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h1 class="display-4 mb-0">@lang('Schools')</h1>
                @auth
                <a
                    href="{{ route('schools.create')}}"
                    class="btn btn-primary"
                    >@lang('Create')</a>
                @endauth
            </div>

            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis hendrerit erat auctor augue viverra, non tempor odio consequat. </p>
            <hr>


            <ul class="list-group">
                @forelse ($school as $schoolItem)
                    <li class="list-group-item border-o mb-3 shadow-sm">
                        <a
                            href=" {{ route('schools.show', $schoolItem) }}"
                            class="text-secondary d-flex justify-content-between align-items-center"
                        >
                        <span class=" font-weight-bold">
                            {{ $schoolItem->title }}
                        </span>
                        <span class="text-black-50">
                            {{ $schoolItem->created_at->format('d/m/Y')}}
                        </span>
                    </a>
                    </li>
                @empty
                    <li class="list-group-item border-o mb-3 shadow-sm">
                        @lang('There are no schools')
                    </li>
                @endforelse
            </ul>
            {{ $school->links() }}
        </div>
    </div>
</div>

@endsection
