@if (isset($isContainer) && $isContainer == true)
    <div class="container">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">

                        <h2 class="content-header-title float-left mb-0">{{ $title }}</h2>
                        <div class="breadcrumb-wrapper col-12">
                            @yield('breadcrumb')
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
                @yield('header')
            </div>
        </div>
    </div>
@else
    <div class="content-header row">
        <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
                <div class="col-12">

                    <h2 class="content-header-title float-left mb-0">{{ $title }}</h2>
                    <div class="breadcrumb-wrapper col-12">
                        @yield('breadcrumb')
                    </div>
                </div>
            </div>
        </div>
        <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
            @yield('header')
        </div>
    </div>
@endif
<div class="content-body">
    @yield('content')
</div>

<script>
    document.title = `{{ $title . ' - Teknik Informatika' }}`;

    if (!window.jQuery) {
        document.body.innerHTML = "";
        window.location.reload();
    }
</script>

@if (isset($mods))
    @if (is_array($mods))
        @foreach ($mods as $m)
            <script src="{{ asset('mods/backend/' . $m . '.js') }}"></script>
        @endforeach
    @else
        <script src="{{ asset('mods/backend/' . $mods . '.js') }}"></script>
    @endif
@endif

@yield('_js')
