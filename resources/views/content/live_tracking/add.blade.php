@extends('layouts.app')

@section('js')
    <script src="{{asset('/')}}assets/custom/products.js"></script>
@endsection

@section('content')
    <div data-pages="parallax">
        <div class="container-fluid p-l-25 p-r-25 sm-p-l-0 sm-p-r-0">
            <div class="inner" style="transform: translateY(0px); opacity: 1;">
                <!-- START BREADCRUMB -->
                <ol class="breadcrumb sm-p-b-5">
                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                    <li class="breadcrumb-item active">Products</li>
                </ol>
            </div>
        </div>
    </div>

    <div class=" container-fluid container-fixed-lg">
        <div class="row">
            <div class="col-lg-6">
                <!-- START card -->
                <div class="card card-default">
                    <div class="card-header ">
                        <div class="card-title">
                            Option #one
                        </div>
                    </div>
                    <div class="card-body">
                        <h4>Pages default text-field design</h4>
                        <p class="m-t-10 m-b-20 mw-80">Pages Form Elements reshaped the conventional text-fields in aim to
                            improve usability and create a fun, unique and exciting experience.</p>
                        <form class="" role="form">
                            <div class="form-group form-group-default required ">
                                <label>Project</label>
                                <input type="email" class="form-control" required>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group form-group-default required">
                                        <label>First name</label>
                                        <input type="text" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group form-group-default">
                                        <label>Last name</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group form-group-default required">
                                <label>Password</label>
                                <input type="password" class="form-control" required>
                            </div>
                            <div class="form-group  form-group-default required">
                                <label>Placeholder</label>
                                <input type="email" class="form-control" placeholder="ex: some@example.com" required>
                            </div>
                            <div class="form-group form-group-default disabled">
                                <label>Disabled</label>
                                <input type="email" class="form-control" value="You can put anything here" disabled>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- END card -->
            </div>
            <div class="col-lg-6">
                <!-- START card -->
                <div class="card card-default">
                    <div class="card-header ">
                        <div class="card-title">
                            Option #two
                        </div>
                    </div>
                    <div class="card-body">
                        <h4>Traditional text-field design.</h4>
                        <p class="m-t-10 m-b-20 mw-80">We understand that sometimes conventions shouldn't be removed
                            completely. People are already used to them. Use these text-fields whenever it is necessary.</p>
                        <form role="form">
                            <div class="form-group">
                                <label>Your name</label>
                                <input type="email" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" required>
                                <span class="help">Requires a minimum of 12 characters.</span>
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" placeholder="ex: some@example.com" required>
                                <span class="help">This will not be shown publicly</span>
                            </div>
                            <div class="form-group">
                                <label>Placeholder</label>
                                <input type="email" class="form-control" placeholder="ex: some@example.com" required>
                            </div>
                            <div class="form-group">
                                <label>Disabled</label>
                                <input type="email" class="form-control" value="You can put anything here" disabled>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- END card -->
            </div>
        </div>
    </div>
@endsection
