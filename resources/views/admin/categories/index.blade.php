@extends("layouts.admin")
@section("title")
    Categories
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
                        <li class="breadcrumb-item active">Categories</li>
                    </ol>
                </div>
                <h4 class="page-title">Categories</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Category Table</h4>
                    <p class="text-muted font-13 mb-2">
                        This table shows all records of <b><code>Categories</code></b>.
                    </p>
                    <a href="{{ route('categories.create') }}" class="btn btn-success mb-2">Create Category</a>
                    <div class="form-group">
                        <input type="text" name="search" id="search" class="form-control" placeholder="Search categories" />
                    </div>
{{--                    <h3 align="center">Total Data : <span id="total_records"></span></h3>--}}
                    <table id="basic-datatable" class="table dt-responsive nowrap">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Category</th>
                            <th>Created at</th>
                            <th>Updated at</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if($categories)
                            @foreach ($categories as $category)
                                <tr>
                                    <td>{{ $category->id }}</td>
                                    <td>{{ $category->category }}</td>
                                    <td>{{ $category->created_at ? $category->created_at : '/'}}</td>
                                    <td>{{ $category->updated_at ? $category->updated_at : '/'}}</td>
                                    <td><a class="btn btn-outline-warning rounded-pill w-50 mb-1" href="{{ route('categories.edit', $category->id) }}"><i class="fas fa-edit"></i></a></td>
                                </tr>
                                @if($category->childrenCategories)
                                    <tr>
                                        @foreach ($category->childrenCategories as $childCategory)
                                            @include("admin.categories.child_category", ['child_category' => $childCategory])
                                        @endforeach
                                    </tr>
                                @endif
                            @endforeach
                        @endif
                        </tbody>
                    </table>
{{--                    {{ $categories->links() }}--}}
                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div><!-- end col-->
    </div>
@endsection
