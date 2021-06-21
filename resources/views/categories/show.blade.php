@extends('layouts.master')

@section('content')
<div class="container">


    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Category Detail</h3>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-12 col-md-12 col-lg-8 order-2 order-md-1">
              <div class="row">
                <div class="col-12 col-sm-6">
                  <div class="info-box bg-light">
                    <div class="info-box-content">
                      <span class="info-box-text text-center text-muted">Realated Products</span>
                      <span class="info-box-number text-center text-muted mb-0">2300</span>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-6">
                  <div class="info-box bg-light">
                    <div class="info-box-content">
                      <span class="info-box-text text-center text-muted">Related Models</span>
                      <span class="info-box-number text-center text-muted mb-0">2000</span>
                    </div>
                  </div>
                </div>
               
              </div>
              <div class="row">
                <div class="col-12">
                 
                    <div class="post">
                     
                        <p class="username">
                          <a href="#">{{$category->title}}</a>
                        </p>
                        <p class="description">{{$category->created_at}}</p>
                      
                      <!-- /.user-block -->
                      <p>
                      {{$category->description}}
                      </p>

                      <p>
                        <a href="{{url('categories')}}" class="link-black text-sm"><i class="fa fa-list"></i> all category</a>
                      </p>
                    </div>


                </div>
              </div>
            </div>
            
          </div>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    
</div>
@endsection
