@extends("layouts.admin")
@section("title")
    Edit Address
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
                    <h4 class="header-title">Edit Address</h4>
                    <p class="sub-header">Change <b><code>address</code></b> records.</p>

                    <form action="{{ route('addresses.update', $address) }}" method="POST" class="needs-validation">
                        {!! method_field('patch') !!}
                        @csrf
                        <div class="form-row mb-3">
                            <div class="form-group col-md-6">
                                <label for="street">Street</label>
                                <input id="street" name="street" type="text" value="{{ $address->street }}" class="form-control">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="house_number">House number</label>
                                <input id="house_number" name="house_number" value="{{ $address->house_number }}" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-row mb-3">
                            <div class="form-group col-md-6">
                                <label for="postcode">Postcode</label>
                                <input id="postcode" name="postcode" value="{{ $address->postcode }}" type="text" class="form-control">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="city">City</label>
                                <input id="city" name="city" value="{{ $address->city }}" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="country">Country</label>
                                <select name="country" id="country" class="form-control">
                                    @foreach($countries as $country)
                                        <option value="{{ $country->id }}" @if($address->country->id == $country->id) selected @endif>{{ $country->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group d-flex justify-content-between">
                            <div class="form-group">
                                <button class="btn btn-primary">Update address</button>
                            </div>
                    </form>
                            <div class="form-group">
                                <form action="{{ route('addresses.destroy', $address->id) }}">
                                    {!! method_field('delete') !!}
                                    <input type="submit" class="btn btn-danger" value="Delete Address">
                                </form>
                            </div>
                        </div>

                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col-->
    </div>
    <!-- end row -->
@endsection
