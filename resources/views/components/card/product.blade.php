@props(['slug' => '#', 'badge', 'image', 'name', 'discountedPrice', 'originalPrice'])

@php
    $badgeClass = '';

    switch ($badge) {
        case 'Hot':
            $badgeClass = 'badge badge-danger';
            break;
        case 'New':
            $badgeClass = 'badge badge-secondary';
            break;
        case 'Sold Out':
            $badgeClass = 'badge badge-grey';
            break;
        case 'Sale':
            $badgeClass = 'badge badge-primary';
            break;
        default:
            $badgeClass = 'badge badge-secondary';
            break;
    }
@endphp

<a href="/product/{{ $slug }}" class="card card--product">
    @if ($badge)
        <span class="{{ $badgeClass }}">{{ $badge }}</span>
    @endif
    <div class="card-img">
        @if ($image)
            <img src="{{ $image }}" alt="{{ $name }} Here">
        @else
            <img src="{{ Vite::asset('resources/img/placeholder.png') }}" alt="{{ $name }}">
        @endif
    </div>
    <div class="card-body">
        <h4 class="card-title">{{ $name }}</h4>
        <img src="{{ Vite::asset('resources/img/products/rating.png') }}" alt="5 Rating" class="card-rating">
        @if ($discountedPrice)
            <h5 class="card-price">
                <strong class="font-semibold price-number" data-price="{{ $discountedPrice }}"></strong>
                @if ($originalPrice)
                    <span class="price-number" data-price="{{ $originalPrice }}"></span>
                @endif
            </h5>
        @else
            <h5 class="card-price">
                <strong class="font-semibold price-number" data-price="{{ $originalPrice }}"></strong>
            </h5>
        @endif
    </div>
</a>

@push('scripts')


@endpush
