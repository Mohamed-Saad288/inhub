<div class="overlay"></div>
<nav class="header-nav">
    <div class="nav-head">
        <div class="nav-logo">
            <img src="images/logo.png" />
        </div>
        <a role="button" class="close-menu">
            <i class="las la-times"></i>
        </a>
    </div>
    <ul class="nav-list">
        <li class="nav-item">
            <a href="/" class="nav-link">
                الرئيسية
            </a>
        </li>
        <li class="nav-item">
            <a href="/about" class="nav-link">
                من نحن
            </a>
        </li>
        <li class="nav-item has-children has-lvl1">
            <a role="button" class="nav-link">
                التصنيفات
                <i class="las la-angle-down"></i>
            </a>
            @include('layouts.partials.megaMenu')
        </li>
        <li class="nav-item">
            <a href="/albums" class="nav-link">
                معرض الصور
            </a>
        </li>
        <li class="nav-item">
            <a href="/videos" class="nav-link">
                مكتبة الفيديو
            </a>
        </li>
        <li class="nav-item">
            <a href="/contact" class="nav-link">
                اتصل بنا
            </a>
        </li>
        <li class="nav-item">
            <a href="/" class="lang-link">
                English
            </a>
        </li>
    </ul>
</nav>
