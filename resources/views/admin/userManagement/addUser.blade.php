@extends('admin.main')
@section('content')
    <main class="app-content">
        <!-- Breadcamps -->
{{--        @include('admin.layout.breadcamp' , ['heading'=>'Add New Brand', 'section' => 'Brand Management', 'link' => route('brand.create'), 'icon' => 'fa fa-edit'])--}}

        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="tile">
                    <form action="{{ route('store.user') }}" enctype="multipart/form-data" method="post">@csrf
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
                                    <input class="form-control" name="user_name" type="text" placeholder="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputFile"><strong>User Photo</strong></label>
                                    <input class="form-control" name="user_photo" id="user_photo" type="file" aria-describedby="fileHelp">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1"><strong>Mobile Number</strong></label>
                                    <input class="form-control" name="mobile_number" type="text" placeholder="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputFile"><strong>User Address</strong></label>
                                    <input class="form-control" name="user_address" id="user_address" type="text" aria-describedby="fileHelp">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1"><strong>Voter Id Number</strong></label>
                                    <input class="form-control" name="voter_id" type="text" placeholder="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputFile"><strong>Installment Amount</strong></label>
                                    <input class="form-control" name="installment" id="installment" type="text" aria-describedby="fileHelp">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="exampleInputEmail1"><strong>Email</strong></label>
                                    <input class="form-control" name="user_email" type="text" placeholder="">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="exampleInputEmail1"><strong>Password</strong></label>
                                    <input class="form-control" name="password" type="password" placeholder="">
                                </div>
                            </div>
                        </div>

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
