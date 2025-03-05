<x-app-layout>

    @section('title', 'List Studio')
    <div class="container mt-5">
        <h4 class="mb-3">Manage User</h4>
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <input type="text" class="form-control w-50" placeholder="Search user">
                    <button class="btn btn-dark"> <a href="{{ route('admin.studio.create') }}">+ Add
                            User</a></button>
                </div>
                <table class="table align-middle">
                    <thead>
                        <tr>
                            <th class="fw-semibold">Name</th>
                            <th class="fw-semibold">Role</th>
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
                                        <li><a class="dropdown-item" href="#">Show</a></li>
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
