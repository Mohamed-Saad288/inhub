@extends('layouts.master', [
    'breadcrumbs' => [
        [
            'text' => 'اتصل بنا',
            'link' => '#',
        ],
          'setting' => $setting,
       'categories' => $categories
    ],
])

@section('PageTitle', 'اتصل بنا')

@section('PageContent')
    <section class="inner-page contact-page">
        <div class="container">
            <div class="contact-content">
                <div class="contact-text">
                    <h2 class="contact-title">
                        لا تتردد في الاتصال بنا للحصول على
                        مساعدة أو معلومات إضافية
                    </h2>
                    <div class="contact-methods">
                        <div class="contact-method">
                            <a href="https://wa.me/+9665000000">
                                <i class="lab la-whatsapp"></i>
                                <span>
                                    {{ $setting->whatsapp }}
                                </span>
                            </a>
                        </div>
                        <div class="contact-method">
                            <a href="tel:+9665000000">
                                <i class="las la-phone"></i>
                                <span>
                                    {{ $setting->phone }}
                                </span>
                            </a>
                        </div>
                        <div class="contact-method">
                            <a href="{{ $setting->email }}">
                                <i class="las la-envelope"></i>
                                <span>
                                    {{ $setting->email }}
                                </span>
                            </a>
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
                <div class="contact-form">
                    <form action="{{ route('contact.store') }}" method="post">
                        @csrf
                        <div class="form-group required">
                            <label class="form-label">الاسم بالكامل</label>
                            <input type="text" name="name" class="form-control">
                            {{-- <span class="form-error">الاسم بالكامل مطلوب</span> --}}
                        </div>
                        <div class="form-gird">
                            <div class="form-group required">
                                <label class="form-label">رقم الجوال</label>
                                <input type="tel" name="phone_number" class="form-control">
                            </div>
                            <div class="form-group required">
                                <label class="form-label">البريد الإلكتروني</label>
                                <input type="email" name="email" class="form-control">
                            </div>
                        </div>
                        <div class="form-group required">
                            <label class="form-label">نص التعليق</label>
                            <textarea class="form-control" name="message"></textarea>
                        </div>
                        <button class="form-submit">
                            إرسال
                        </button>
                    </form>

                </div>
            </div>
        </div>
    </section>
@endsection
