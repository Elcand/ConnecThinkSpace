<x-app-layout>

    @section('title', 'Hero ')

    <section>
        <div class="container mt-8">
            <div class="row ps-3">
                <h1 class="text-gray-900 text-2xl font-bold ps-4">Manage Hero Section
                </h1>
                <div class="col-md-12 mt-3">
                    <div class="card border-0 shadow-sm rounded">
                        <div class="card-body">
                            <hr>
                            @if (session('success'))
                                <div class="alert alert-success mt-4 delay-200">
                                    {{ session('success') }}
                                </div>
                            @endif
                            <form action="{{ route('admin.hero.storeOrUpdate') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    @if (!empty($hero->image))
                                        <div class="mt-3">
                                            <p class="text-gray-700 dark:text-gray-300">This Background:</p>
                                            <img src="{{ asset('storage/hero/' . $hero->image) }}"
                                                alt="Background Image"
                                                class="img-fluid rounded-lg border border-gray-300 dark:border-gray-600"
                                                style="max-height: 200px; object-fit: cover;">
                                        </div>
                                    @endif
                                    <label for="formFile" class="form-label mt-4">Upload image</label>
                                    <input class="form-control" type="file" id="formFile"
                                        placeholder="Upload Image">
                                    @error('image')
                                        <div class="invalid-feedback mt-3 text-red-500 text-sm">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="name"
                                        class="form-label block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                                    <input type="text"
                                        class="form-control @error('name') is-invalid @enderror border-gray-300 rounded"
                                        id="name" name="name" value="{{ old('name', $hero->name ?? '') }}"
                                        placeholder="Masukkan judul hero section">
                                    @error('name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="slogan"
                                        class="form-label block mb-2 text-sm font-medium text-gray-900 dark:text-white">Slogan</label>
                                    <input type="text"
                                        class="form-control @error('slogan') is-invalid @enderror border-gray-300 rounded"
                                        id="slogan" name="slogan" value="{{ old('slogan', $hero->slogan ?? '') }}"
                                        placeholder="Masukkan deskripsi (opsional)">
                                    @error('slogan')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="card-footer d-flex justify-content-end py-6 px-9">
                                    <button type="submit" class="btn btn-primary" name="save">
                                        <span class="indicator-label" id="submit">Submit</span>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
