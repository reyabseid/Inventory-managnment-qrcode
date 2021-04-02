<!-- Main Content -->
@extends('guardStaff.app')

@section('content')

    <div id="content">
        <div class="card-body">
            <div class="row">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-left">
                        <h2>Add New Inventorie</h2>
                    </div>
                </div>
            </div>
               
            @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Error!</strong> <br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
        <div class="card-body">

            <form action="{{ route('guardStaff.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row d-flex justify-content-center"">
                    <div class="col-xs-12 col-sm-10 col-md-8">
                        <div class="form-group">
                            <strong>First Name:</strong>
                            <input type="text" name="firstName" class="form-control" placeholder="firstName">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-10 col-md-8">
                        <div class="form-group">
                            <strong>Middle Name:</strong>
                            <input type="text" name="middleName" class="form-control" placeholder="middleName">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-10 col-md-8">
                        <div class="form-group">
                            <strong>Last Name:</strong>
                            <input type="text" name="lastName" class="form-control" placeholder="lastsName">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-10 col-md-8">
                        <div class="form-group">
                            <strong>Invontorie Id:</strong>
                            <input type="text" name="invId" class="form-control" placeholder="invId">
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-10 col-md-8">
                        <div class="form-group">
                            <label for="type">Type</label>
                            <select class="form-control" name="type">
                                <option>pc</option>
                                <option>bag</option>
                                <option>mobile</option>
                                <option>other</option>
                            </select>
                        </div>
                    </div>


                    <div class="col-xs-12 col-sm-10 col-md-8">
                        <div class="form-group">
                            <strong>Campus Id:</strong>
                            <input type="text" name="campusId" class="form-control" placeholder="invId">
                        </div>
                    </div>
                    @include('guardStaff.camera')
                    <div class="col-xs-12 col-sm-10 col-md-8 text-center">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>

            </form>
        </div>



    </div>
    <!-- End of Main Content -->

@endsection
