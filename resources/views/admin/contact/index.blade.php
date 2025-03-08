<x-app-layout>
    @section('title', 'Contact')
    <div class="container mt-5">
        <h1 class="mb-3">Manage Contact</h1>
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <form action="{{ route('admin.studio.index') }}" method="GET" class="mb-3">
                        <div class="d-flex align-items-center position-relative my-1">
                            <i class="ki-outline ki-magnifier fs-3 position-absolute ms-5"></i>
                            <input type="text" name="search" class="form-control form-control-solid w-250px ps-13"
                                placeholder="Search" value="{{ request('search') }}">
                        </div>
                    </form>
                    <a href="{{ route('admin.studio.create') }}" class="btn btn-primary">+ Add
                        User</a>
                </div>
                <table class="table align-middle fw-bold">
                    <thead>
                        <tr>
                            <th scope="col">First Name</th>
                            <th scope="col">email</th>
                            <th scope="col">Messsage</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($contacts as $contact)
                            <tr>
                                <td class="text-gray-700">{{ $contact->first_name . ' ' . $contact->last_name }}</td>
                                <td class="text-gray-700">{{ $contact->email }}</td>
                                <td class="text-gray-700">{{ Str::limit($contact->message, 50, '...') }}</td>
                                <td>
                                    <button class="btn
                                    btn-light dropdown-toggle"
                                        data-bs-toggle="dropdown">Actions</button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item fw-bold text-gray-700"
                                                href="{{ route('admin.contact.show', $contact->slug) }}">Show</a>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{-- <div class="d-flex justify-content-center">
                    {{ $contacts->links() }}
                </div> --}}
            </div>
        </div>
    </div>
</x-app-layout>
