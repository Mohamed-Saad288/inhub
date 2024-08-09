@php
    $currentUrl = url()->current();
    $encodedUrl = urlencode($currentUrl);
    $encodedTitle = urlencode($blog['title']);
@endphp

<div class="post-share">
    <h4 class="share-title">
        مشاركة المقال عبر وسائل التواصل الإجتماعي
    </h4>
    <div class="share-methods">
        <a href="https://api.whatsapp.com/send?text={{ $encodedTitle }}%20{{ $encodedUrl }}" target="_blank" class="share-method">
            <i class="lab la-whatsapp"></i>
        </a>
        <a href="https://www.linkedin.com/sharing/share-offsite/?url={{ $encodedUrl }}" target="_blank" class="share-method">
            <i class="lab la-linkedin"></i>
        </a>
        <a href="https://t.me/share/url?url={{ $encodedUrl }}&text={{ $encodedTitle }}" target="_blank" class="share-method">
            <i class="lab la-telegram"></i>
        </a>
        <a href="https://twitter.com/intent/tweet?url={{ $encodedUrl }}&text={{ $encodedTitle }}" target="_blank" class="share-method">
            <i class="fa-brands fa-twitter"></i>
        </a>
        <a href="https://www.facebook.com/sharer/sharer.php?u={{ $encodedUrl }}" target="_blank" class="share-method">
            <i class="lab la-facebook"></i>
        </a>
    </div>
</div>
