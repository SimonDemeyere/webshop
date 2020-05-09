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
                    <h4 class="header-title">Create Address</h4>
                    <p class="sub-header">Create <b><code>address</code></b> records.</p>

                    <form action="{{ route('addresses.store') }}" method="POST" class="needs-validation">
                        @csrf
                        <div class="form-row mb-3">
                            <div class="form-group col-md-6">
                                <label for="street">Street</label>
                                <input id="street" name="street" type="text" class="form-control">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="house_number">House number</label>
                                <input id="house_number" name="house_number" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-row mb-3">
                            <div class="form-group col-md-6">
                                <label for="postcode">Postcode</label>
                                <input id="postcode" name="postcode" type="text" class="form-control">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="city">City</label>
                                <input id="city" name="city" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="country">Country</label>
                                <select name="country" id="country" class="form-control">
                                    @foreach($countries as $country)
                                        <option value="{{ $country->id }}">{{ $country->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary">Create address</button>
                        </div>
                    </form>
                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col-->
    </div>
    <!-- end row -->
@endsection
