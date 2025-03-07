<x-app-layout>

    @section('title', 'List Studio')
    <div class="container mt-5">
        <h1 class="mb-3">Manage Studio</h1>
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
                            <th scope="col">Name</th>
                            <th scope="col">Description</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($studios as $studio)
                            <tr>
                                <td class="text-gray-700">{{ $studio->name_labs }}</td>
                                <td class="text-gray-700">{{ $studio->description }}</td>
                                <td>
                                    <button class="btn
                                    btn-light dropdown-toggle"
                                        data-bs-toggle="dropdown">Actions</button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item fw-bold text-gray-700"
                                                href="{{ route('admin.studio.show', $studio->slug) }}">Show</a>
                                        </li>
                                        <li><a class="dropdown-item fw-bold text-gray-700"
                                                href="{{ route('admin.studio.edit', $studio->slug) }}">Edit</a></li>
                                        <li>
                                            <button type="button" class="dropdown-item fw-bold text-gray-700"
                                                onclick="confirmDelete('{{ route('admin.studio.delete', $studio->slug) }}')">
                                                Delete
                                            </button>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="d-flex justify-content-center">
                    {{ $studios->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
