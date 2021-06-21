@extends('layouts.master')

@section('content')
<div class="container">

<div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Brands</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm">
                    <a href="{{ route('brands.create')}}"><i class="fa fa-plus" aria-hidden="true"></i></a>
                  </div>
                 
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Brand NAME</th>
                      <th>DESCRIPTION</th>
					            <th>URL</th>
                      <th>CREATED AT</th>
                      <th></th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($brands as $key => $brand)
 
                    <tr>
                    <td>{{$brand->id}}</td>
                      <td> {{ $brand->title}}</td>
                      <td>{{ $brand->description}}</td>
					           <td>{{ $brand->url}}</td>
                      <td>{{ $brand->created_at}}</td>
                      <td><span><a href="{{route('brands.detail', $brand->id)}}"><i class="fa fa-eye"></i></a>
                      <td><span><a href="{{ route('brands.edit',$brand->id)}}"><i class="fa fa-edit"></i></a>
                    
                    </span></td>
                      <td><a href="{{ route('brands.delete',$brand->id)}}"><i class="fa fa-trash"></i></a></span></td>
                    </tr>
                  @endforeach
                   
                    
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
    </div>
</div>
@endsection
