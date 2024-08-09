@extends('layouts.master', [
    'breadcrumbs' => [
        [
            'text' => 'الأسئلة الشائعة',
        ],
          'setting' => $setting,
       'categories' => $categories
    ],
])

@section('PageTitle', 'الأسئلة الشائعة')

@section('PageContent')
    <section class="inner-page faq-page">
        <div class="container">
            <div class="faq-content">
                <div class="faq-head">
                    <h2 class="faq-title">
                        لتقديم خدمة أفضل أجبنا على
                        أكثر الأسئلة شيوعًا، واذا لم تجد ردًا
                        على سؤالك فضلا التواصل معنا
                    </h2>
                    <a href="{{ route('contact.create') }}" class="faq-btn">
                        اتصل بنا
                    </a>
                </div>
{{--                <div class="faq-list" id="faq-list">--}}
{{--                    @foreach ($faqs as $faq)--}}
{{--                        <div class="faq-item">--}}
{{--                            <h5 class="faq-question">--}}
{{--                                <button class="question-button {{ !$loop->first ? 'collapsed' : '' }}"--}}
{{--                                    data-bs-toggle="collapse" data-bs-target="#faq-item{{ $loop->iteration }}"--}}
{{--                                    aria-controls="faq-item{{ $loop->iteration }}">--}}
{{--                                    <span class="faq-number">--}}

{{--                                        {{ $loop->iteration <= 9 ? '0' . $loop->iteration : $loop->iteration }}--}}
{{--                                    </span>--}}
{{--                                    <span class="text">--}}
{{--                                        {{ $faq['question'] }}--}}
{{--                                    </span>--}}
{{--                                </button>--}}
{{--                            </h5>--}}
{{--                            <div id="faq-item{{ $loop->iteration }}"--}}
{{--                                class="faq-collapse collapse {{ $loop->first ? 'show' : '' }}" data-bs-parent="#faq-list">--}}
{{--                                <div class="faq-answer">--}}
{{--                                    <p>--}}
{{--                                        {{ $faq['answer'] }}--}}
{{--                                    </p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    @endforeach--}}
{{--                </div>--}}
            </div>
        </div>
    </section>
@endsection
