@extends("layouts.admin")
@section("title")
    Edit Product
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
                    <h4 class="header-title">Create Product</h4>
                    <p class="sub-header">Create <b><code>product</code></b> records.</p>

                    <form action="{{ route('products.store') }}" method="POST" class="needs-validation">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="name">Name</label>
                            <input id="name" name="name" type="text" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="description">Description</label>
                            <textarea id="description" name="description" type="text" class="form-control"></textarea>
                        </div>
                        <div class="form-group mb-3">
                            <label for="short_description">Short description <span class="subtext">(not required)</span></label>
                            <input id="short_description" name="short_description" type="text" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="price">Price</label>
                            <input id="price" name="price" type="number" step=".01" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="category">Select category</label>
                            <select name="category" id="category" class="form-control">
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->category }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div id="subCategories" class="d-none"></div>
                        <div class="form-group mb-3">
                            <label for="file">Product Image</label>
                            <input name="file[]" type="file" id="file" class="form-control-file">
                        </div>
                       {{-- <div class="form-group mb-3">
                            <label for="child_category">Select subcategory</label>
                            <p class="subtext">Select <span>only</span> when creating a <span>subcategory</span></p>
                            <select name="child_category" id="child_category" data-selectcount="select-0" class="form-control mb-3">
                                <option selected value>Select subcategory (No selected)</option>
                            </select>
                        </div>--}}
                        <div class="form-group">
                            <button class="btn btn-primary">Create product</button>
                        </div>
                    </form>
                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col-->
    </div>
    <!-- end row -->
@endsection
