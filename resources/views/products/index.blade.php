@extends('layouts.master')

@section('content')
<div class="container">

<div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Products</h3>

                <div class="card-tools">
                  <div class="input-group">
                  <a href="{{url('products')}}""> <i class="fa fa-undo" aria-hidden="true">Reset</i></a>
                  <form  style="margin: 0 36px;" class="form-inline" action="{{ route('products.search') }}" method="GET">
                    <input type="text" name="search"  value=""/>
                    <button type="submit">Search</button>
                  </form>
                    <a href="{{ route('products.create')}}"><i class="fa fa-plus" aria-hidden="true"></i></a>
                   
                  </div>
                 
                </div>
              </div>
              <!-- /.card-header -->
              @if($products->isNotEmpty())
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Product NAME</th>
                      <th>PRODUCTCODE</th>
                      <th>QUANTITY</th>
                      <th>PRICE</th>
                      <th>MODEL</th>
                      <th>Category</th>
                      <th>Brand</th>
                      <th></th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($products as $key => $product)
 
                    <tr>
                    
                      <td> {{ $product->id}}</td>
                      <td>{{ $product->name}}</td>
                      <td>{{ $product->productCode}}</td>
                      <td>{{ $product->quantity}}</td>
                      <td>{{ $product->price}}</td>
                      <td>{{ $product->model}}</td>
                      <td>{{ $product->category_id}}</td>
                      <td>{{ $product->brand_id}}</td>
                      <td><span><a href="{{ route('products.detail',$product->id)}}"><i class="fa fa-eye"></i></a>
                      <td><span><a href="{{ route('products.edit',$product->id)}}"><i class="fa fa-edit"></i></a>
                    
                    </span></td>
                      <td><a onclick="return confirm('Are you sure to delete?')" href="{{ route('products.delete',$product->id)}}"><i class="fa fa-trash"></i></a></span></td>
                    </tr>
                  @endforeach
                   
                    
                  </tbody>
                </table>
              </div>
              @else 
                <div>
                    <h2>No posts found</h2>
                </div>
            @endif
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
    </div>
</div>
@endsection
