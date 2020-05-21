@extends("layouts.admin")
@section("title")
    Edit Role
@endsection
@section("content")
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">UBold</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                        <li class="breadcrumb-item active">Validation</li>
                    </ol>
                </div>
                <h4 class="page-title">Form Validation</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Edit Role</h4>
                    <p class="sub-header">Change <b><code>role</code></b> records.</p>

                    <Form id="saveRow" action="{{ route('roles.update', $role) }}" method="post" class="needs-validation">
                        {{ method_field('PATCH') }}
                        @csrf
                        <div class="form-group mb-3">
                            <label for="role">Role</label>
                            <input id="role" name="role" type="text" value="{{ $role->name }}" class="form-control">
                        </div>
                    </Form>
                    <form id="deleteRow" action="{{ route('roles.destroy', $role) }}" method="post">
                        {{ method_field('DELETE') }}
                        @csrf
                    </form>
                    <div class="row">
                        <div class="col-12 d-flex justify-content-start">
                            <div class="form-group mr-3">
                                <input form="saveRow" type="submit" value="Edit Role" class="btn btn-primary">
                            </div>
                            <div class="form-group">
                                <input form="deleteRow" type="submit" value="Delete Role" class="btn btn-danger">
                            </div>
                        </div>
                    </div>
                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col-->
    </div>
    <!-- end row -->
@endsection
