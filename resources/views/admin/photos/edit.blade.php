@extends("layouts.admin")
@section("title")
    Edit Photo
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
                    <h4 class="header-title">Edit Photo</h4>
                    <p class="sub-header">Change <b><code>photo</code></b> records.</p>

                    <form id="saveRow" action="{{ route('photos.update', $photo) }}" method="post" enctype="multipart/form-data">
                        {{ method_field('PATCH') }}
                        @csrf
                        <div class="form-group mb-3">
                            <img height="300" src="{{ asset('/assets/' . $photo->src) }}" alt="photo">
                        </div>
                        <div class="form-group mb-3">
                            <label for="src">Upload new photo</label>
                            <input id="src" name="src" type="file" class="form-control-file">
                        </div>
                    </form>
                    <form id="deleteRow" action="{{ route('photos.destroy', $photo) }}" method="post">
                        {{ method_field('DELETE') }}
                        @csrf
                    </form>
                    <div class="row">
                        <div class="col-12 d-flex justify-content-start">
                            <div class="form-group mr-3">
                                <input form="saveRow" type="submit" value="Edit Image" class="btn btn-primary">
                            </div>
                            <div class="form-group">
                                <input form="deleteRow" type="submit" value="Delete Image" class="btn btn-danger">
                            </div>
                        </div>
                    </div>
                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col-->
    </div>
    <!-- end row -->
@endsection
