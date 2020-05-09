@extends("layouts.admin")
@section("title")
    Addresses
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
                        <li class="breadcrumb-item active">Addresses</li>
                    </ol>
                </div>
                <h4 class="page-title">Addresses</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Address Table</h4>
                    <p class="text-muted font-13 mb-2">
                        This table shows all records of <b><code>Addresses</code></b>.
                    </p>
                    <a href="{{ route('addresses.create') }}" class="btn btn-success mb-2">Create Address</a>
{{--                    <h3 align="center">Total Data : <span id="total_records"></span></h3>--}}
                    <table id="basic-datatable" class="table dt-responsive nowrap">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Street</th>
                            <th>House number</th>
                            <th>Postcode</th>
                            <th>Country</th>
                            <th>Created at</th>
                            <th>Updated at</th>
                            <th>Actions</th>
                        </tr>
                        </thead>


                        <tbody>
                        @if($addresses)
                            @foreach ($addresses as $address)
                            <tr>
                                <td>{{ $address->id }}</td>
                                <td>{{ $address->street }}</td>
                                <td>{{ $address->house_number }}</td>
                                <td>{{ $address->postcode }}</td>
                                <td>{{ $address->country->name }}</td>
                                <td>{{ $address->created_at ? $address->created_at : '/'}}</td>
                                <td>{{ $address->updated_at ? $address->updated_at : '/'}}</td>
                                <td><a class="btn btn-outline-warning rounded-pill w-50 mb-1" href="{{ route('addresses.edit', $address->id) }}"><i class="fas fa-edit"></i></a></td>
                            </tr>
                            @endforeach
                        @endif
                        </tbody>
                    </table>
                    {{ $addresses->links() }}
                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div><!-- end col-->
    </div>
@endsection
