@extends('layouts.master')

@section('content')
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">New Category</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
            <form action="{{ route('categories.store') }}" method="POST">
                @csrf

                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Category Name:</strong>
                            <input type="text" name="title" class="form-control" placeholder="Title">
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                        <strong>Category Description:</strong>
                            <textarea class="form-control" style="height:150px" name="description" placeholder="Description"></textarea>
                        </div>
                    </div>

                    <div >
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </div>
            </form>
           
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      
      </div>
    
    </section>
    
@endsection
