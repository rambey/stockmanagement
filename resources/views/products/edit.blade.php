@extends('layouts.master')

@section('content')
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Product details</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
            <form action="{{ route('products.update' , $product->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Product Name:</strong>
                            <input type="text" name="name" class="form-control" value="{{ $product->name}}">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Product Code:</strong>
                            <input type="text" name="productCode" class="form-control" value="{{ $product->productCode}}" readonly>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Product Quantity:</strong>
                            <input type="number" name="quantity" class="form-control" value="{{ $product->quantity}}">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Product Price:</strong>
                            <input type="text" name="price" class="form-control" value="{{ $product->price}}">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                      <div class="form-group">
                        <label for="productmodel">Model</label>
                          <select name="model" class="form-control" id="productmodel">
                            @foreach (config('enums.product_models') as $key => $value)
                                <option value="{{ $key }}">{{ $value }}</option>
                            @endforeach
                          </select>
                      </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                      <div class="form-group">
                        <label for="category_id">Category</label>
                          <select name="category_id" class="form-control" id="category_id">
                            @foreach($categories as $key => $value)
                                <option value="{{ $value->id }}">{{$value->title}}</option>
                            @endforeach
                          </select>
                      </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                      <div class="form-group">
                        <label for="brand_id">Brand</label>
                          <select name="brand_id" class="form-control" id="brand_id">
                            @foreach($brands as $key => $value)
                                <option value="{{ $value->id }}">{{$value->title}}</option>
                            @endforeach
                          </select>
                      </div>
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
