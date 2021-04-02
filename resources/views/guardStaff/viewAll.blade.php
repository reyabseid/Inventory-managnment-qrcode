@extends('guardStaff.app')
 
@section('content')
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
            <th>First Name</th>
            <th>Middle Name</th>
            <th>Last Name</th>
            <th>Inv ID</th>
            <th>Type</th>
            <th>Campus ID</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($personalInvs as $personalInv)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $personalInv->firstName }}</td>
            <td>{{ $personalInv->lastName }}</td>
            <td>{{ $personalInv->middleName }}</td>
            <td>{{ $personalInv->invId }}</td>
            <td>{{ $personalInv->type }}</td>
            <td>{{ $personalInv->campusId }}</td>
            <td>
                <a 
                href="{{ route('qrGenerate',$personalInv->invId)}}"
                >Generate Qr</a>            </td>
        </tr>
        @endforeach
    </table>
  
      
@endsection