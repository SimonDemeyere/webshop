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
                    <h4 class="header-title">Create Role</h4>
                    <p class="sub-header">Create <b><code>role</code></b> records.</p>

                    <form action="{{ route('roles.store') }}" method="POST" class="needs-validation">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="name">Name</label>
                            <input id="name" name="name" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary">Create role</button>
                        </div>
                    </form>
                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col-->
    </div>
    <!-- end row -->
@endsection
