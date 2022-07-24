<header class="main-header">
    <div class="container">
        <div class="header-row">
            <a class="header-logo" href="/">
                <img src="images/logo.png" alt="Alrehab">
            </a>

            @include('layouts.partials.nav')

            <button class="nav-btn" id="nav-btn"><i data-feather="menu"></i></button>
            <button class="search-btn" id="search-modal-btn"><i data-feather="search"></i></button>
            <a href="/register" class="register-btn btn-primary">سجل الآن</a>
        </div>
    </div>
</header>

<div class="search-modal" id="search-modal">
    <form class="search-form">
        <div class="form-group">
            <input type="search" class="form-control" placeholder="إبحث هنا">
            <button type="button" class="search-close-btn" id="search-close-btn"><i data-feather="x"></i></button>
        </div>
    </form>
</div>