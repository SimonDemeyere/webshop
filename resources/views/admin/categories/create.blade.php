@extends("layouts.admin")
@section("title")
    Create Category
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
                    <h4 class="header-title">Create Category</h4>
                    <p class="sub-header">Create <b><code>category</code></b> records.</p>

                    <form action="{{ route('categories.store') }}" method="POST" class="needs-validation">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="category">Category name</label>
                            <input id="category" name="category" type="text" class="form-control">
                            @if($errors->first('category'))
                            <div class="alert alert-danger mt-3" role="alert">
                                @foreach($errors->all() as $error)
                                {{ $errors->first('category') }}
                                @endforeach
                            </div>
                            @endif
                        </div>
                        <div class="form-group mb-3">
                            <label class="unselectable_custom"><input id="subcategory_switch" type="checkbox" name="subcategory_switch" value="subcategory_switch"> Create as subcategory</label>
                        </div>
                        <div id="parent_categories" class="form-group mb-3">
                            <label for="parent_category">Parent category list</label>
                            <select name="parent_category" id="parent_category" class="form-control mb-4">
                                <option disabled selected value> Select a parent category </option>
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->category }}</option>
                                @endforeach
                            </select>
                            <label for="child_category">Child category list</label>
                            <p class="subtext">Select <span>only</span> when creating a <span>subcategory of a subcategory</span></p>
                            <select name="child_category" id="child_category" class="form-control">
                                <option selected value>Select subcategory (No selected)</option>
                        </select>
                            <script type="text/javascript">

                            </script>
                            {{--@foreach($categories as $category)
                                @foreach($category->childrenCategories as $childCategory)
                                    <option value="{{ $childCategory->id }}">{{ $childCategory->category }}</option>
                                @endforeach
                            @endforeach--}}
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary">Create Category</button>
                        </div>
                    </form>
                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col-->
    </div>
    <!-- end row -->
@endsection

