@extends("layouts.admin")
@section("title")
    Products
@endsection
@section("content")
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">UBold</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                        <li class="breadcrumb-item active">Products</li>
                    </ol>
                </div>
                <h4 class="page-title">Products</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Product Table</h4>
                    <p class="text-muted font-13 mb-2">
                        This table shows all records of <b><code>products</code></b>.
                    </p>
                    <a href="{{ route('products.create') }}" class="btn btn-success mb-2">Create Product</a>
{{--                    <h3 align="center">Total Data : <span id="total_records"></span></h3>--}}
                    <table id="basic-datatable" class="table dt-responsive nowrap">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Created at</th>
                            <th>Updated at</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if($products)
                            @foreach ($products as $product)
                            <tr>
                                <td>{{ $product->id }}</td>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->created_at ? $product->created_at : '/'}}</td>
                                <td>{{ $product->updated_at ? $product->updated_at : '/'}}</td>
                                <td><a class="btn btn-outline-warning rounded-pill w-50 mb-1" href="{{ route('products.edit', $product->id) }}"><i class="fas fa-edit"></i></a></td>
                            </tr>
                            @endforeach
                        @endif
                        </tbody>
                    </table>
                    {{ $products->links() }}
                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div><!-- end col-->
    </div>
@endsection
