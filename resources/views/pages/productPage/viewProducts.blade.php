@extends('layouts.app')

@section('content')

{{-- breadCrumb --}}

<div class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">View Products</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href={{ route('homePage') }}><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">View Products</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>


<form class="pform">
<div class="col-sm-12" >
    <div class="anew-btn">
        <button type="submit" class="btn  btn-primary" onclick="location.href='{{ url('productPage') }}'">Add new Product +</button>
    </div>
    
  <div class="card">
    

<div style="margin-top: 50px">
    <table class="table">
      <thead class="table-dark"></thead>
      <tbody>
          <tr>
              <th>Product ID</th>
              <th>Product Name</th>
              <th>Category</th>
              <th>Description</th>
              <th>Unit Name</th>
              <th>Create Date</th>
              <th>Update Date</th>
              <th>Actions</th>
          </tr>
          
      </tbody>
    </table>
    </div>

    

@endsection
