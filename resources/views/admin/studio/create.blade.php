<x-app-layout>
    @section('title', 'List Studio')
    <section>
        <div class="container">
            <div class="row">
                <h1 class="text-gray-900 text-2xl font-bold mb-6">Create Studio</h1>
                <div class="col-md-12">
                    <div class="card border-0 shadow-sm rounded">
                        <div class="card-body">
                            <form class="form" action="{{ route('admin.studio.store') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="card-body py-4">
                                    <div class="mb-7">
                                        <label class="fw-semibold fs-6 mb-2">Input Image</label>
                                        <input type="file" name="image" id="image"
                                            class="form-control form-control-solid mb-3 mb-lg-0 {{ $errors->get('image') ? 'is-invalid border border-1 border-danger' : '' }}"
                                            value="{{ old('image') }}" />
                                        <x-input-error class="mt-2" :messages="$errors->get('image')" />
                                    </div>

                                    <div class="mb-7">
                                        <label class="required fw-semibold fs-6 mb-2">Name Lab</label>
                                        <input type="text" name="name_labs" id="name_labs"
                                            class="form-control form-control-solid mb-3 mb-lg-0 {{ $errors->get('name_labs') ? 'is-invalid border border-1 border-danger' : '' }}"
                                            placeholder="Full name lab" value="{{ old('name_labs') }}" />
                                        <x-input-error class="mt-2" :messages="$errors->get('name_labs')" />
                                    </div>

                                    <div class="mb-7">
                                        <label class="required fw-semibold fs-6 mb-2">Description</label>
                                        <input type="text" name="description" id="description"
                                            class="form-control form-control-solid mb-3 mb-lg-0 {{ $errors->get('description') ? 'is-invalid border border-1 border-danger' : '' }}"
                                            placeholder="Input description" value="{{ old('description') }}" />
                                        <x-input-error class="mt-2" :messages="$errors->get('description')" />
                                    </div>
                                </div>
                                <div class="card-footer d-flex justify-content-end py-6 px-9">
                                    <a href="{{ route('admin.studio.index') }}">
                                        <button type="button" class="btn btn-light me-3">Cancel</button>
                                    </a>
                                    <!-- <button type="submit" class="btn btn-primary me-3" name="save_and_add_other" value="1">
                                        <span class="indicator-label" id="submitAndOther">Create & Add Another</span>
                                    </button> -->
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
