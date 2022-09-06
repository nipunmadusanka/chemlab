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
                            <h5 class="m-b-10">GDN</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href={{ route('homePage') }}><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">GDN</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>


<form class="pform">
<div class="col-sm-12" >
  <div class="card">
    
      
      <div class="card-body">
          <h5>Manage GDN</h5>
          <hr>
          <div class="row">
              <div class="col-md-12">
                  <form class="row">
                    <div class="form-group col-md-6">
                        <label>User ID</label>
                        <select class="mb-3 form-control">
                          <option>Default select</option>
                      </select>
                    </div>

                      <div class="form-group col-md-6">
                          <label>Dispatch Location</label>
                          <select class="mb-3 form-control">
                            <option>Default select</option>
                        </select>
                      </div>

                      <div class="form-group col-md-6">
                        <label>Issued Location</label>
                        <select class="mb-3 form-control">
                          <option>Default select</option>
                      </select>
                    </div>


                    <div class="form-group col-md-6">
                        <label for="exampleFormControlTextarea1">Note</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Add Note Here"></textarea>
                    </div>
                      

                      

                      <button type="submit" class="btn  btn-primary">Add GDN</button>
                  </form>
              </div>
              
              </div>
          </div>
    
@endsection