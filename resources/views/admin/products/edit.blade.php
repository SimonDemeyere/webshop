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
                    <h4 class="header-title">Edit Product</h4>
                    <p class="sub-header">Change <b><code>Product</code></b> records.</p>
                    <Form id="saveRow" action="{{ route('products.update', $product) }}" method="post" class="needs-validation">
                        {{ method_field('PATCH') }}
                        @csrf
                        <div class="form-group mb-3">
                            <label for="name">Name</label>
                            <input id="name" name="name" type="text" value="{{ $product->name }}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="short_description">Short Description</label>
                            <input id="short_description" name="short_description" type="text" value="{{ $product->short_description }}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="product">Description</label>
                            <textarea id="product" name="product" type="textarea" class="form-control">{{ $product->description }}</textarea>
                        </div>
                        <div class="form-group mb-3">
                            <label for="price">Price</label>
                            <input id="price" name="price" type="number" value="{{ $product->price }}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="category">Select category</label>
                            <select name="category" id="category" class="form-control">
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->category }}</option>
                                @endforeach
                            </select>
                        </div>
                    </Form>
                    <form id="deleteRow" action="{{ route('products.destroy', $product) }}" method="post">
                        {{ method_field('DELETE') }}
                        @csrf
                    </form>
                    <div class="row">
                        <div class="col-12 d-flex justify-content-start">
                            <div class="form-group mr-3">
                                <input form="saveRow" type="submit" value="Edit Product" class="btn btn-primary">
                            </div>
                            <div class="form-group">
                                <input form="deleteRow" type="submit" value="Delete Product" class="btn btn-danger">
                            </div>
                        </div>
                    </div>
                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col-->
        <div class="col-lg-6 d- flex-wrap justify-content-between">
            @if(count($product->photos) > 0)
                @foreach($product->photos as $photo)
                    <img width="150" height="150" src="{{ asset('assets/'.$photo->src) }}" alt="photo">
                @endforeach
            @endif
        </div>
    </div>
    <!-- end row -->
@endsection
