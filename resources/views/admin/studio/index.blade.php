<x-app-layout>

    @section('title', 'List Studio')
    <div class="container mt-5">
        <h1 class="mb-3">Manage Studio</h1>
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <form action="{{ route('admin.studio.index') }}" method="GET" class="mb-3">
                        <div class="input-group">
                            <input type="text" name="search" class="form-control" placeholder="Search"
                                value="{{ request('search') }}">
                        </div>
                    </form>
                    <a href="{{ route('admin.studio.create') }}" class="btn btn-primary">+ Add
                        User</a>
                </div>
                <table class="table align-middle">
                    <thead>
                        <tr>
                            <th class="fw-semibold">Name</th>
                            <th class="fw-semibold">Description</th>
                            <th class="fw-semibold">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($studios as $studio)
                            <tr>
                                <td>{{ $studio->name_labs }}</td>
                                <td>{{ $studio->description }}</td>
                                <td>
                                    <button class="btn btn-light dropdown-toggle"
                                        data-bs-toggle="dropdown">Actions</button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item"
                                                href="{{ route('admin.studio.show', $studio->slug) }}">Show</a>
                                        </li>
                                        <li><a class="dropdown-item"
                                                href="{{ route('admin.studio.edit', $studio->slug) }}">Edit</a></li>
                                        <li>
                                            <button type="button" class="dropdown-item"
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
