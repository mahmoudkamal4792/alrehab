<!DOCTYPE html>
<html lang="ar" dir="rtl">

    @include('layouts.partials.head')

    <body>
        @include('layouts.partials.header')
        
        
        @if (isset($is_home))
            @include('components.intro')
        @else
            @include('components.breadcrumb')
        @endif
        
        <main class="main-wrapper">
            @yield('PageContent')
        </main>
        
        
        @include('layouts.partials.footer')
    </body>

</html>