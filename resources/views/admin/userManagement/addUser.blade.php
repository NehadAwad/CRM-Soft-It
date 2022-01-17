@extends('admin.main')
@section('content')
    <main class="app-content">
        <!-- Breadcamps -->
{{--        @include('admin.layout.breadcamp' , ['heading'=>'Add New Brand', 'section' => 'Brand Management', 'link' => route('brand.create'), 'icon' => 'fa fa-edit'])--}}

        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="tile">
                    <form action="" enctype="multipart/form-data" method="post">@csrf
                        @if ($errors->any())
                            <div class="alert alert-warning">
                                <div>
                                    @foreach ($errors->all() as $error)
                                        <p>{{ $error }}</p>
                                    @endforeach
                                </div>
                            </div>
                        @endif

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1"><strong>User Name</strong></label>
                                    <input class="form-control" name="brand_name" type="text" placeholder="Enter brand name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputFile"><strong>User Photo</strong></label>
                                    <input class="form-control" name="brand_logo" id="exampleInputFile" type="file" aria-describedby="fileHelp">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1"><strong>Mobile Number</strong></label>
                                    <input class="form-control" name="brand_name" type="text" placeholder="Enter brand name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputFile"><strong>User Address</strong></label>
                                    <input class="form-control" name="brand_logo" id="exampleInputFile" type="text" aria-describedby="fileHelp">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1"><strong>Voter Id Number</strong></label>
                                    <input class="form-control" name="brand_name" type="text" placeholder="Enter brand name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputFile"><strong>Installment Amount</strong></label>
                                    <input class="form-control" name="brand_logo" id="exampleInputFile" type="text" aria-describedby="fileHelp">
                                </div>
                            </div>
                        </div>
{{--                        <div class="form-group">--}}
{{--                            <label for="exampleInputEmail1"><strong>Slogan</strong></label>--}}
{{--                            <input class="form-control" name="slogan" type="text" placeholder="Enter brand slogan">--}}
{{--                        </div>--}}
{{--                        <div class="form-group">--}}
{{--                            <label for="exampleInputEmail1"><strong>Address</strong></label>--}}
{{--                            <input class="form-control" name="address" type="text" placeholder="Enter brand address here ...">--}}
{{--                        </div>--}}
                        <div class="tile-footer">
                            <button class="btn btn-primary" type="submit">Add User</button>
                        </div>
                    </form>

                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </main>
@endsection
