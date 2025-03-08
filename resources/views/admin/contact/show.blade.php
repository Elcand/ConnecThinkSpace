<x-app-layout>
    @section('title', 'Contact')
    <div class="container mt-5">
        <h1 class="mb-3">Contact Show</h1>
        <div class="card">
            <div class="container mt-10 ps-8">
                <div class="row">
                    <div>
                        <label class="fw-bold fs-4 text-gray-900 mb-2 mt-4">First Name</label>
                        <h4 class="mb-4 text-2xl text-gray-700  border border-gray-200 rounded ps-4 pt-2 pb-2">
                            {{ $contact->first_name }}</h4>
                    </div>
                    <div>
                        <label class="fw-bold fs-4 text-gray-900 mb-2 mt-4">Last Name</label>
                        <h4 class="mb-4 text-2xl text-gray-700  border border-gray-200 rounded ps-4 pt-2 pb-2">
                            {{ $contact->last_name }}</h4>
                    </div>
                    <div>
                        <label class="fw-bold fs-4 text-gray-900 mb-2 mt-4">Email</label>
                        <h4 class="mb-4 text-2xl text-gray-700  border border-gray-200 rounded ps-4 pt-2 pb-2">
                            {{ $contact->email }}</h4>
                    </div>
                    <div>
                        <label class="fw-bold fs-4 text-gray-900 mb-2 mt-4">Message</label>
                        <h5 class="mb-4 text-xs  text-gray-700 border border-gray-200 rounded ps-4 pt-2 pb-2">
                            {{ $contact->message }}</h5>
                    </div>
                    <div class="text-end pb-5 pt-3">
                        <a href="{{ route('admin.contact.index') }}">
                            <button type="button" class="btn btn-light">{{ __('Back') }}</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
