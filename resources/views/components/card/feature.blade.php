@props(['image', 'title', 'description'])

<div class="card card--feature">
    <div class="card-img">
        <img src="{{ Vite::asset($image) }}" alt="{{ $title }}">
    </div>
    <h4>{{ $title }}</h4>
    <p>{{ $description }}</p>
</div>
