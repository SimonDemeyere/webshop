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

                    <form class="needs-validation" method="PATCH" action="{{ route('users.update') }}" novalidate>
                        <div class="form-group mb-3">
                            <label for="validationCustom01">First name</label>
                            <input type="text" class="form-control" id="validationCustom01" placeholder="First name" value="{{ $user->first_name }}" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="validationCustom02">Last name</label>
                            <input type="text" class="form-control" id="validationCustom02" placeholder="Last name" value="{{ $user->last_name }}" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="validationCustomUsername">Email</label>
                            <input type="text" class="form-control" id="validationCustomUsername" placeholder="{{ $user->email }}" aria-describedby="inputGroupPrepend" >
                            <div class="invalid-feedback">
                                Please choose another email.
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
                        <button class="btn btn-primary" type="submit">Submit form</button>
                    </form>

                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col-->
    </div>
    <!-- end row -->
@endsection
