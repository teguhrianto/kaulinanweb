@props(['slug' => '#', 'image', 'name', 'subtitle' => 'Lihat Produk Terbaru', 'cta' => 'Beli Sekarang'])

<a href="category/{{ $slug }}" class="card card--category">
    @if ($image)
        <img src="{{ $image }}" alt="{{ $name }} Here" class="card-img">
    @else
        <img src="{{ Vite::asset('resources/img/placeholder.png') }}" alt="{{ $name }}" class="card-img">
    @endif
    <div class="card-body">
        <h4>{{ $name }}</h4>
        <h5>{{ $subtitle }}</h5>
        <p class="text-secondary">{{ $cta }}</p>
    </div>
</a>
