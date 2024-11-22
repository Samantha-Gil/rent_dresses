<div class="col-md-4">
    <div class="card">
        <img src="{{ ($image) }}" class="card-img-top" alt="{{ $title }}">
        <div class="card-body">
            <h5 class="card-title">{{ $title }}</h5>
            <p class="card-text">{{ $description }}</p>
            {{ $slot }}
        </div>
    </div>
</div>
