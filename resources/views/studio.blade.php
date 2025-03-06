@section('title', 'List Studio')

<div class="container mt-15">
    <div class="col-lg-9 col-xl-8 col-xxl-7 mx-auto">
        <h2 class="fs-15 text-uppercase text-primary text-center">List Studio</h2>
        <h3 class="display-4 mb-6 text-center">Description</h3>
    </div>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4">
        @if ($studios->isEmpty())
            <div class="col-12 text-center">
                <p class="text-muted">Tidak ada studio tersedia saat ini.</p>
            </div>
        @else
            @foreach ($studios as $studio)
                <div class="col">
                    <div class="card h-100 shadow-lg border border-dark-subtle">
                        <figure class="card-img-top overlay overlay-1 hover-scale">
                            <a href="#" class="position-relative d-block">
                                <div class="card-img-top img-fluid  bg-overlay-600"
                                    style="background-image: url('{{ isset($studio) && $studio->image
                                        ? (Str::startsWith($studio->image, 'storage/studio/')
                                            ? asset($studio->image)
                                            : asset('assets/img/' . $studio->image))
                                        : asset('assets/img/lab.jpeg') }}');
                                    background-size: cover; background-position: center; height: 250px; border-radius: 10px;">
                                </div>
                                <figcaption>
                                    <h5 class="from-top mb-0">Read More</h5>
                                </figcaption>
                            </a>
                        </figure>
                        <div class="card-body">
                            <h2 class="h3 text-dark">{{ $studio->name_labs }}</h2>
                            <p class="text-muted small">{{ $studio->description }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
</div>
