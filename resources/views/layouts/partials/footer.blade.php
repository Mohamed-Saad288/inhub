<footer>
    <div class="container">
        <div class="footer">
            <div class="row">
                <div class="col-lg-3 col-12">
                    <div class="footer-info">
                        <div class="footer-logo">
                            <img src="{{ asset('images/logo.png') }}" alt="Inhub">
                        </div>
                        <div class="socials">
                            <a href="{{ $setting->linkedin }}" target="_blank" class="social">
                                <i class="lab la-linkedin"></i>
                            </a>
                            <a href="{{ $setting->instagram }}" target="_blank" class="social">
                                <i class="lab la-instagram"></i>
                            </a>
                            <a href="{{ $setting->x }}" target="_blank" class="social">
                                {{-- <i class="fa-brands fa-x-twitter"></i> --}}
                                <i class="lab la-twitter"></i>
                            </a>
                            <a href="{{ $setting->facebook }}" target="_blank" class="social">
                                <i class="lab la-facebook"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-12">
                    <div class="footer-categories">
                        <h3 class="footer-title">
                            التصنيفات الرئيسية
                        </h3>
                        <ul class="footer-list">
                            @foreach ($categories as $category)
                                <li>
                                    <a href="{{ route('categories.show',$category->slug) }}">
                                        {{ $category->name }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-12">
                    <div class="footer-links">
                        <h3 class="footer-title">
                            روابط سريعة
                        </h3>
                        <ul class="footer-list">
                            <li>
                                <a href="{{ route('pages.about') }}">
                                    من نحن
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('pages.terms') }}">
                                    الشروط والأحكام
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('pages.faq') }}">
                                    الأسئلة الشائعة
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('pages.privacy') }}">
                                    سياسة الخصوصية
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('contact.create') }}">
                                    تواصل معنا
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-12">
                    <div class="footer-contacts">
                        <h3 class="footer-title">
                            معلومات التواصل
                        </h3>
                        <ul class="footer-list">
                            <li>
                                <a href="https://wa.me/+9665000000">
                                    <i class="lab la-whatsapp"></i>
                                    <span>
                                        {{ $setting->whatsapp }}
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="tel:+9665000000">
                                    <i class="las la-phone"></i>
                                    <span>
                                        {{ $setting->phone }}
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ $setting->email }}">
                                    <i class="las la-envelope"></i>
                                    <span>
                                        {{ $setting->email }}
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="last-footer">
            <p class="copyrights">
                © مركز السياحية 2023
            </p>
            <p class="copyrights">
                تصميم وتطوير
                <a href="#!" target="_blank">
                    <img src="{{ asset('images/saudiahost.png') }}" alt="saudiahost">
                </a>
            </p>
        </div>
    </div>
</footer>


<script src="{{ asset('js/app.js') }}?v={{ rand(0, 9999) }}"></script>
