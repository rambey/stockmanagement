@extends('layouts.master')

@section('content')
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Edit Brand</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
            <form action="{{ route('brands.update' , $brand->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Brand Name:</strong>
                            <input type="text" name="title" class="form-control" value="{{ $brand->title}}">
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                        <strong>Brand Description:</strong>
                            <textarea class="form-control" style="height:150px" name="description">{{$brand->description}}"</textarea>
                        </div>
                    </div>
					
					  <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Brand Url:</strong>
                            <input type="text" name="url" class="form-control" value="{{$brand->url}}">
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
