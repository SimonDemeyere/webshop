@extends("layouts.admin")
@section("title")
    Users
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
                        <li class="breadcrumb-item active">Photos</li>
                    </ol>
                </div>
                <h4 class="page-title">Photos</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Photo Table</h4>
                    <p class="text-muted font-13 mb-2">
                        This table shows all records of <b><code>Photos</code></b>.
                    </p>
                    <a href="{{ route('photos.create') }}" class="btn btn-success mb-2">Create Photo</a>

                    <table id="basic-datatable" class="table dt-responsive nowrap">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>src</th>
                            <th>Created at</th>
                            <th>Updated at</th>
                            <th>Actions</th>
                        </tr>
                        </thead>


                        <tbody>
                        @if($photos)
                            @foreach ($photos as $photo)
                            <tr>
                                <td>{{ $photo->id }}</td>
                                <td><img height="50" src="/assets/images/{{ $photo->src }}" alt="uploaded_img"></td>
                                <td>{{ $photo->created_at ? $photo->created_at : '/' }}</td>
                                <td>{{ $photo->updated_at ? $photo->updated_at : '/' }}</td>
                                <td><a class="btn btn-outline-warning rounded-pill w-50 mb-1" href="{{ route('photos.edit', $photo->id) }}"><i class="fas fa-edit"></i></a></td>
                            </tr>
                            @endforeach
                        @endif
                        </tbody>
                    </table>
                    {{ $photos->links() }}

                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div><!-- end col-->
    </div>

    <!-- Footer Start -->
    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    2015 - 2019 &copy; UBold theme by <a href="">Coderthemes</a>
                </div>
                <div class="col-md-6">
                    <div class="text-md-right footer-links d-none d-sm-block">
                        <a href="javascript:void(0);">About Us</a>
                        <a href="javascript:void(0);">Help</a>
                        <a href="javascript:void(0);">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end Footer -->
@endsection
