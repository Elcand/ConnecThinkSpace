<x-app-layout>

    @section('title', 'List Studio')
    <div class="container mt-5">
        <h1 class="mb-3">Manage Studio</h1>
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <input type="text" class="form-control w-50" placeholder="Search user">
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
                                        <li><a class="dropdown-item" href="#">Edit</a></li>
                                        <li><a class="dropdown-item" href="#">Delete</a></li>
                                    </ul>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
