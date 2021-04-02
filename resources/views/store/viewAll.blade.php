@extends('layouts.store')

<style>
    #store-view{
        min-height: 81vh;
    }
</style>
@section('content')
    <div id="store-view">

        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left text-center">
                    <h2>Show All inventorie</h2>
                </div>
            </div>
        </div>


        <table class="table table-bordered">
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Inventorie Type</th>

                <th>Type</th>
                <th>Movable</th>
                <th>Returnable</th>

                <th>ShelfId</th>
                <th>Status</th>
                <th>Is Transferd</th>

                <th width="280px">Action</th>
            </tr>
            @foreach ($inventories as $inventorie)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $inventorie->name }}</td>
                    <td>{{ $inventorie->inventorieTypeId }}</td>

                    <td>{{ $inventorie->type }}</td>
                    <td>{{ $inventorie->movable }}</td>
                    <td>{{ $inventorie->returnable }}</td>

                    <td>{{ $inventorie->shelfId }}</td>
                    <td>{{ $inventorie->status }}</td>
                    <td>{{ $inventorie->isTransferd }}</td>
                    <td>
                        <a href="{{ route('qrGenerate', $inventorie->id) }}">Generate Qr</a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
