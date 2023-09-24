@props(['slug' => '#', 'age' => '2-4'])
<a href="{{ $slug }}" class="card card--age">
    <div class="card-body">
        <div class="card-title bg-secondary">
            <h4>{{ $age }}</h4>
        </div>
        <p>Tahun</p>
    </div>
</a>
