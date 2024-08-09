<div class="comment-item">
    <div class="comment-img">
        <img src="{{ asset('images/user/2.jpg') }}" alt="{{ $comment['name'] }}">
    </div>
    <div class="comment-text">
        <div class="comment-head">
            <h4 class="user-name">
                {{ $comment['name'] }}
            </h4>
            <h5 class="comment-time">
                <span>
            {{ \Carbon\Carbon::parse($comment['created_at'])->locale('ar')->translatedFormat('d F Y') }}
                </span>
                <span>
                    07:30
                </span>
            </h5>
        </div>
        <p class="comment-body">
            {{ $comment['comment'] }}
        </p>
    </div>
</div>
