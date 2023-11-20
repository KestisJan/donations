@props(['post'])
<div class="container mx-auto p-4">
    <h2>Title: {{ $post->title}}</h2>
    <h2>#Hastags: {{ $post->tags}}</h2>
    <h2>Current: {{ $post->donation_start}}$</h2>
    <h2>Goal: {{ $post->donation_goal}}$</h2>
    <h2>Likes: {{ $post->post_like}}</h2>
    <h2>Story: {{ $post->stories}}$</h2>
</div>