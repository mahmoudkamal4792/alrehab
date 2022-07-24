<!DOCTYPE html>
<html lang="ar" dir="rtl">

@include('layouts.partials.head')

<body>


    <main class="sign-wrapper" style="background-image: url('images/Sign.jpg')">
        <section class="form-content">
            <a class="sign-logo">
                <img src="images/logo.png" alt="Alrehab">
            </a>
            <div class="sign-head">
                <h1 class="sign-title">@yield('PageTitle')</h1>
                <h6 class="sign-subtitle">@yield('PageSubtitle')</h6>
            </div>
            @yield('PageContent')
        </section>
    </main>
    <script src="js/app.js?v={{ rand(0,9999) }}"></script>
</body>

</html>