@props(['slug' => '#','badge', 'image', 'title', 'price', 'originalPrice'])

@php
    $badgeClass = '';

    switch ($badge) {
        case 'Hot':
            $badgeClass = 'badge badge-danger';
            break;
        case 'New':
            $badgeClass = 'badge badge-secondary';
            break;
        case 'Sold':
            $badgeClass = 'badge badge-grey';
            break;
        case 'Sale':
            $badgeClass = 'badge badge-primary';
            break;
    }
@endphp

<a href="{{ $slug }}" class="card card--product">
    @if ($badge)
        <span class="{{ $badgeClass }}">{{ $badge }}</span>
    @endif
    <div class="card-img">
        <img src="{{ Vite::asset($image) }}" alt="{{ $title }}">
    </div>
    <div class="card-body">
        <h4 class="card-title">{{ $title }}</h4>
        <img src="{{ Vite::asset('resources/img/products/rating.png') }}" alt="5 Rating" class="card-rating">
        <h5 class="card-price">
            IDR {{ $price }}
            @if ($originalPrice)
                <span>IDR {{ $originalPrice }}</span>
            @endif
        </h5>
    </div>
</a>
