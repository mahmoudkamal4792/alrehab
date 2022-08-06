@if ($logged)
    <div class="dropdown">
        <button class="header-btn" data-bs-toggle="dropdown" data-bs-display="static"><i data-feather="user"></i></button>
        <ul class="dropdown-menu usernav-menu">
            <li><a href="#">حجوزاتي</a></li>
            <li><a href="#">تعديل بياناتي</a></li>
            <li><a href="#" class="logout-btn">تسجيل خروج</a></li>
        </ul>
    </div>
@endif