@extends('layouts.master')

@section('content')
<div class="container">

<div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Categories</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm">
                    <a href="{{ route('categories.create')}}"><i class="fa fa-plus" aria-hidden="true"></i></a>
                  </div>
                 
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Category NAME</th>
                      <th>DESCRIPTION</th>
                      <th>CREATED AT</th>
                      <th></th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($categories as $key => $category)
 
                    <tr>
                    <td>{{$category->id}}</td>
                      <td> {{ $category->title}}</td>
                      <td>{{ $category->description}}</td>
                      <td>{{ $category->created_at}}</td>
                      <td><span><a href="{{ route('categories.detail',$category->id)}}"><i class="fa fa-eye"></i></a>
                      <td><span><a href="{{ route('categories.edit',$category->id)}}"><i class="fa fa-edit"></i></a>
                    
                    </span></td>
                      <td><a href="{{ route('categories.delete',$category->id)}}"><i class="fa fa-trash"></i></a></span></td>
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
