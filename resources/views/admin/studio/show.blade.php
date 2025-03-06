<x-app-layout>
    @section('title', 'List Studio')
    <div class="container mt-5">
        <h1 class="mb-3">Show Studio</h1>
        <div class="card">
            <div class="container mt-10 ps-8">
                <div class="row">
                    <div class="col-md-6 ">
                        <label class="fw-bold fs-4 text-gray-800">Image Studio :</label>
                        <div class="card-body ">
                            <img src="{{ asset('storage/' . $studio->image) }}" class="rounded"
                                style="width: 200px; height:auto;">
                        </div>
                    </div>
                    <div>
                        <label class="fw-bold fs-4 text-gray-800 mb-2 mt-4">Name Studio</label>
                        <h3 class="mb-4 text-2xl font-bold border border-gray-300 rounded ps-4 pt-2 pb-2">
                            {{ $studio->name_labs }}</h3>
                    </div>
                    <div>
                        <label class="fw-bold fs-4 text-gray-800 mb-2 mt-4">Description</label>
                        <h3 class="mb-4 fs-4 font-bold border border-gray-300 rounded ps-4 pt-2 pb-2">
                            {{ $studio->description }}</h3>
                    </div>
                    <div class="d-flex justify-content-end">
                        <a href="{{ route('admin.studio.index') }}" class="btn btn-warning text-dark fw-bold mb-4 mt-4">
                            Back
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
