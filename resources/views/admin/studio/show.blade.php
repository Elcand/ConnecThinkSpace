<x-app-layout>
    @section('title', 'List Studio')
    <div class="container mt-5">
        <h1 class="mb-3">Show Studio</h1>
        <div class="card">
            <div class="container mt-10 ps-8">
                <div class="row">
                    <label class="fw-bold fs-4 text-gray-800">Image Studio :</label>
                    <div class="col-md-6 ">
                        @if (
                            !empty($studio->image) &&
                                file_exists(public_path('storage/' . $studio->image)) &&
                                !str_contains($studio->image, 'http'))
                            <img src="{{ asset('storage/' . $studio->image) }}" class="rounded"
                                style="width: 200px; height: auto;">
                        @elseif(filter_var($studio->image, FILTER_VALIDATE_URL))
                            <img src="{{ $studio->image }}" class="rounded" style="width: 200px; height: auto;">
                        @else
                            <img src="{{ asset('assets/img/lab.jpeg') }}" class="rounded"
                                style="width: 200px; height: auto;">
                        @endif

                    </div>
                    <div>
                        <label class="fw-bold fs-4 text-gray-900 mb-2 mt-4">Name Studio</label>
                        <h3 class="mb-4 text-2xl text-gray-700 font-bold border border-gray-300 rounded ps-4 pt-2 pb-2">
                            {{ $studio->name_labs }}</h3>
                    </div>
                    <div>
                        <label class="fw-bold fs-4 text-gray-900 mb-2 mt-4">Description</label>
                        <h5
                            class="mb-4 text-xs font-semibold text-gray-700 border border-gray-300 rounded ps-4 pt-2 pb-2">
                            {{ $studio->description }}</h5>
                    </div>
                    <div class="text-end pb-5 pt-3">
                        <a href="{{ route('admin.studio.index') }}">
                            <button type="button" class="btn btn-light">{{ __('Back') }}</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
