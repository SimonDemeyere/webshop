@extends("layouts.admin")
@section("title")
    Edit User
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
                    <h4 class="header-title">Create Photo</h4>
                    <p class="sub-header">Create <b><code>photo</code></b> records.</p>

                    {!! Form::open(['action' => ['PhotoController@store'], 'method' => 'POST', 'class' => 'needs-validation', 'files' => true]) !!}
                    <div class="form-group mb-3">
                        {{ Form::label('src', 'File') }}
                        {{ Form::file('src', null, ['id' => 'validationCustom01', 'class' => 'form-control']) }}
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                    {{ Form::submit('Submit', ['class' => 'btn btn-primary']) }}
                    {!! Form::close() !!}
                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col-->
    </div>
    <!-- end row -->
@endsection
