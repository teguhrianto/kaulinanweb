@props(['slug' => '#', 'image', 'title', 'subtitle', 'cta'])

<a href="{{ $slug }}" class="card card--category">
    <img src="{{ Vite::asset($image) }}" alt="{{ $title }}" class="card-img">
    <div class="card-body">
        <h4>{{ $title }}</h4>
        <h5>{{ $subtitle }}</h5>
        <p class="text-secondary">{{ $cta }}</p>
    </div>
</a>
