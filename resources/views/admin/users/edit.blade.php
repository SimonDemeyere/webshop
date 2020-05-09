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
        <div class="col-12">
            <form id="saveRow" action="{{ route('users.update', $user) }}" method="post" enctype="multipart/form-data">
                {{ method_field('PATCH') }}
                @csrf
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Edit User</h4>
                                <p class="sub-header">Change <b><code>user</code></b> records.</p>
                                <div class="form-group mb-3">
                                    <label for="first_name">Firstname</label>
                                    <input id="first_name" name="first_name" type="text" class="form-control" value="{{ $user->first_name }}">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="last_name">Lastname</label>
                                    <input id="last_name" name="last_name" type="text" class="form-control" value="{{ $user->last_name }}">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="email">Email</label>
                                    <input id="email" name="email" type="email" class="form-control" value="{{ $user->email }}">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="role">Role</label>
                                    <select name="role" id="role" class="form-control">
                                        @foreach($roles as $role)
                                            <option value="{{ $role->id }}" @if($user->role->id == $role->id) selected @endif>{{ $role->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                    <div class="form-group mb-3">
                                        <p>Image</p>
                                        <div class="row">
                                            @if($user->photo)
                                                <div class="col-lg-6">
                                                    <img height="100" src="{{ asset('assets/' . $user->photo->src) }}" alt="user_image">
                                                </div>
                                            @endif
                                            <div class="col-lg-6">
                                                <label for="src">Select new image</label>
                                                <input id="src" name="src" type="file" class="form-control-file">
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Edit user address</h4>
                                <p class="sub-header">Change <code>address</code> records.</p>


                                <div class="form-group mb-3">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="street">Street</label>
                                            <input id="street" name="street" type="text" class="form-control" value="{{ $user->address->street }}">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="house_number">House number</label>
                                            <input id="house_number" name="house_number" type="text" class="form-control" value="{{ $user->address->house_number }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="postcode">Postcode</label>
                                            <input id="postcode" name="postcode" type="text" class="form-control" value="{{ $user->address->postcode }}">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="city">City</label>
                                            <input id="city" name="city" type="text" class="form-control" value="{{ $user->address->city }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="country">Country</label>
                                    <select name="country" id="country" class="form-control">
                                        @foreach($countries as $country)
                                            <option value="{{ $country->id }}" @if($user->address->country_id == $country->id) selected @endif>{{ $country->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <form id="deleteRow" action="{{ route('users.destroy', $user) }}" method="post">
                {{ method_field('DELETE') }}
                @csrf
            </form>
            <div class="row">
                <div class="col-12 d-flex justify-content-start">
                    <div class="form-group mr-3">
                        <input form="saveRow" type="submit" value="Edit User" class="btn btn-primary">
                    </div>
                    <div class="form-group">
                        <input form="deleteRow" type="submit" value="Delete User" class="btn btn-danger">
                    </div>
                </div>
            </div>
        </div>

                   {{-- {!! Form::open(['action' => ['UserController@update', $user->id], 'method' => 'PATCH', 'class' => 'needs-validation']) !!}
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
                            <label for="role">Role</label>
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
                        {!! Form::close(); !!}--}}
                    </div>
                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col-->
    </div>
    <!-- end row -->
@endsection
