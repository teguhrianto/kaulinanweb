@props(['title', 'slug' => '#', 'image', 'author', 'commentCount' => 0])

<a href="/blog/{{ $slug }}" class="card card--article">
    <div class="card-img">
        @if ($image)
            <img src="{{ $image }}" alt="{{ $title }} Here">
        @else
            <img src="{{ Vite::asset('resources/img/placeholder.png') }}" alt="{{ $title }}">
        @endif
    </div>
    <div class="card-body">
        <ul class="card-meta">
            <li>
                <i class="fa-solid fa-user"></i> by {{ $author }}
            </li>
            <li>
                <i class="fa-solid fa-comment-dots"></i> {{ $commentCount }} Komentar
            </li>
        </ul>
        <h4 class="card-title">{{ $title }}</h4>
    </div>
</a>
