@extends('guard.app')
 
@section('content')

<div class="row">
    <div class="col-6 row justify-content-center">
        @include('guard.qrjs')
    </div>
    <div class="col-6">
        <!-- Card -->
<div class="card promoting-card">

    <!-- Card content -->
    <div class="card-body d-flex flex-row">
  
      <!-- Content -->
      <div>
  
        <!-- Title -->
        <h4 class="card-title font-weight-bold mb-2">New spicy meals</h4>
        <!-- Subtitle -->
        <p class="card-text"><i class="far fa-clock pr-2"></i>07/24/2018</p>
  
      </div>
  
    </div>
  
    <!-- Card image -->
    <div class="view overlay col-4">
      <img class="card-img-top rounded-0" id="photo" alt="Card image cap">
      <a href="#!">
        <div class="mask rgba-white-slight"></div>
      </a>
    </div>
  
    <!-- Card content -->
    <div class="card-body">
  
      <div class="collapse-content">
  
        name
      </div>
  
    </div>
  
  </div>
  <!-- Card -->
    </div>
</div>
   
@endsection