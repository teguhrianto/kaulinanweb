@props(['slug' => '#', 'image', 'author', 'commentCount', 'title'])

<a href="{{ $slug }}" class="card card--article">
    <div class="card-img">
        <img src="{{ Vite::asset($image) }}" alt="Product">
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
