<!-- Main Content -->
@extends('layouts.store')

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

            <form action="{{ route('inventorie.store') }}" method="POST">
                @csrf

                <div class="row d-flex justify-content-center"">
                    <div class="col-xs-12 col-sm-10 col-md-8">
                        <div class="form-group">
                            <strong>Name:</strong>
                            <input type="text" name="name" class="form-control" placeholder="Name">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-10 col-md-8">
                        <div class="form-group">
                            <strong>TypeName:</strong>
                            <input type="text" name="inventorieTypeId" class="form-control" placeholder="Name">
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-10 col-md-8">
                        <div class="form-group">
                            <label for="type">Type</label>
                            <select class="form-control" name="type">
                                <option>furniture</option>
                                <option>stationery</option>
                                <option>electronics</option>
                                <option>vehicle</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="col-xs-12 col-sm-10 col-md-8">
                        <div class="form-group">
                            <label for="unit">Type</label>
                            <select class="form-control" name="unit">
                                <option>litter</option>
                                <option>kilo</option>
                                <option>count</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-10 col-md-8">
                        <div class="form-group">
                            <label for="status">Status</label>
                            <select class="form-control" name="status">
                                <option>new</option>
                                <option>meddium</option>
                                <option>old</option>
                                <option>veryold</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-10 col-md-8">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" name="movable">
                            <label class="form-check-label" for="movable">Movable</label>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-10 col-md-8">
                        <div class="form-group">
                            <strong>ShelfId:</strong>
                            <input type="text" name="shelfId" class="form-control" placeholder="Name">
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-10 col-md-8">
                        <div class="form-group">
                            <strong>Amount:</strong>
                            <input type="number" name="count" class="form-control" placeholder="Name">
                        </div>
                    </div>


                    <div class="col-xs-12 col-sm-10 col-md-8 text-center">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>

            </form>
        </div>



    </div>
    <!-- End of Main Content -->

@endsection
