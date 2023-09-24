@props(['image', 'title', 'description'])

<div class="card card--feature">
    <div class="card-img">
        @if ($image)
            <img src="{{ $image }}" alt="{{ $title }} Here">
        @else
            <img src="{{ Vite::asset('resources/img/placeholder.png') }}" alt="{{ $title }}">
        @endif
    </div>
    <h4>{{ $title }}</h4>
    <p>{{ $description }}</p>
</div>
