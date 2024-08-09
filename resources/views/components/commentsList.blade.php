<div class="comments-list">
    @foreach ($comments as $comment)
        @include('components.commentItem', ['comment' => $comment])
    @endforeach
</div>

