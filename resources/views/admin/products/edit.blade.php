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

                    {!! Form::open(['action' => ['RoleController@update', $role->id], 'method' => 'PATCH', 'class' => 'needs-validation']) !!}
                        <div class="form-group mb-3">
                            {{ Form::label('role', 'Role') }}
                            {{ Form::text('role', $role->name, ['id' => 'validationCustom01', 'class' => 'form-control']) }}
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    <div class="d-flex justify-content-between">
                        <div class="form-group">
                            {{ Form::submit('Edit Role', ['class' => 'btn btn-primary']) }}
                        </div>

                        {!! Form::close() !!}

                        {!! Form::open(['action' => ['RoleController@destroy', $role->id], 'method' => 'DELETE']) !!}
                            <div class="form-group">
                                {{ Form::submit('Delete Role', ['class' => 'btn btn-danger']) }}
                            </div>
                        {!! Form::close(); !!}
                    </div>


                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col-->
    </div>
    <!-- end row -->
@endsection
