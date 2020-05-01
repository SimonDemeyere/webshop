@extends("layouts.admin")
@section("title")
    Users
@endsection
@section("content")
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">UBold</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                        <li class="breadcrumb-item active">Users</li>
                    </ol>
                </div>
                <h4 class="page-title">Users</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">User Table</h4>
                    <p class="text-muted font-13 mb-2">
                        This table shows all records of <b><code>Users</code></b>.
                    </p>
                    <a href="{{ route('users.create') }}" class="btn btn-success mb-2">Create User</a>
                    {{--<div class="form-group">
                        <input type="text" name="search" id="search" class="form-control" placeholder="Search user" />
                    </div>--}}
                    <table id="basic-datatable" class="table dt-responsive nowrap">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Profile picture</th>
                            <th>Full Name</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Created at</th>
                            <th>Updated at</th>
                            <th>Deleted at</th>
                            <th>Actions</th>
                        </tr>
                        </thead>


                        <tbody>
                        @if($users)
                            @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>
                                    @if($user->photo)
                                        <img height="50" src="{{ asset('/assets/images/' . $user->photo ? '/assets/images/' . $user->photo->src : '/')  }} " alt="profile_picture">
                                    @else
                                        /
                                    @endif
                                </td>
                                <td>{{ $user->first_name . ' ' . $user->last_name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->role->name }}</td>
                                <td>{{ $user->created_at ? $user->created_at : '/'}}</td>
                                <td>{{ $user->updated_at ? $user->updated_at : '/'}}</td>
                                <td>{{ $user->trashed() ? $user->deleted_at : 'Active' }}</td>
                                <td><a class="btn btn-outline-warning rounded-pill w-50 mb-1" href="{{ route('users.edit', $user->id) }}"><i class="fas fa-edit"></i></a></td>
                            </tr>
                            @endforeach
                        @endif
                        </tbody>
                    </table>
{{--                    {{ $users->links() }}--}}
                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div><!-- end col-->
    </div>
@endsection
