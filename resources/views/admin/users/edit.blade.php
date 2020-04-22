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
                    <h4 class="header-title">Edit User</h4>
                    <p class="sub-header">Change <b><code>user</code></b> records.</p>

                    {!! Form::open(['action' => ['UserController@update', $user->id], 'method' => 'PATCH', 'class' => 'needs-validation']) !!}
                        <div class="form-group mb-3">
                            {{ Form::label('first_name', 'Firstname') }}
                            {{ Form::text('first_name', $user->first_name, ['id' => 'validationCustom01', 'class' => 'form-control']) }}
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            {{ Form::label('last_name', 'Lastname') }}
                            {{ Form::text('last_name', $user->last_name, ['id' => 'validationCustom02', 'class' => 'form-control']) }}
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            {{ Form::label('email', 'Email') }}
                            {{ Form::email('email', $user->email, ['id' => 'validationCustomUsername', 'class' => 'form-control']) }}
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="validationCustom03">City</label>
                            <input type="text" class="form-control" id="validationCustom03" placeholder="City" >
                            <div class="invalid-feedback">
                                Please provide a valid city.
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="validationCustom04">State</label>
                            <input type="text" class="form-control" id="validationCustom04" placeholder="State" >
                            <div class="invalid-feedback">
                                Please provide a valid state.
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="validationCustom05">Zip</label>
                            <input type="text" class="form-control" id="validationCustom05" placeholder="Zip" >
                            <div class="invalid-feedback">
                                Please provide a valid zip.
                            </div>
                        </div>
                    <div class="form-group mb-3">
                        <select name="role" id="role" class="form-control">
                            @foreach($roles as $role)
                                <option value="{{ $role->id }}" @if($user->role->id == $role->id) selected @endif>{{ $role->name }}</option>
                            @endforeach
                        </select>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                    <div class="d-flex justify-content-between">
                        <div class="form-group">
                            {{ Form::submit('Edit User', ['class' => 'btn btn-primary']) }}
                        </div>

                        {!! Form::close() !!}

                        {!! Form::open(['action' => ['UserController@destroy', $user->id], 'method' => 'DELETE']) !!}
                            <div class="form-group">
                                {{ Form::submit('Delete User', ['class' => 'btn btn-danger']) }}
                            </div>
                        {!! Form::close(); !!}
                    </div>


                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col-->
    </div>
    <!-- end row -->
@endsection
