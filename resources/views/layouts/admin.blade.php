@include('includes.head')
    <div class="d-flex position-relative" style="overflow-x: hidden;">
        @include('includes.auth.admin.aside')
        <div class="flex-fill content">
            @include('includes.auth.admin.header')

            <div style="margin-top: 62px;">
                @yield('content')
            </div>
        </div>
        @include('includes.auth.admin.footer')
    </div>
@include('includes.foot')



