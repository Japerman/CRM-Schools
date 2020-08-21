 @extends('layout')

 @section('title',__('Home'))

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 col-lg-6 mb-4">
            <img
                src="/img/school.svg"
                alt="@lang('Schools')"
                class="img-fluid "
            />
        </div>
        <div class="col-12 col-lg-6">
            <h1 class="display-4 text-primary">@lang('Schools')</h1>
            <p class="lead text-secondary">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam aliquet, dui in aliquet convallis, velit enim pharetra nibh, eu elementum diam ante non velit. Maecenas quis porta diam, nec porta risus. Suspendisse placerat, orci sollicitudin scelerisque pretium, magna magna maximus ex, vitae laoreet massa turpis at leo. Fusce eget finibus nunc.  </p>
            <p>
                <a
                    href="{{route('schools.index')}}"
                    class="btn btn-lg btn-block btn-primary"
                >@lang('Schools')</a>
            </p>
        </div>
    </div>
</div>


@endsection

