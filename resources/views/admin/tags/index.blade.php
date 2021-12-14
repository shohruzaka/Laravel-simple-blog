@extends('admin.layouts.layout')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tags</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Tags</li>
            </ol>
          </div>
        </div>
      </div>
    </section>


    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row py-2">
                <div class="col-12">
                    <a href="{{route('tags.create')}}" class="btn btn-primary"> <i class="fas fa-plus"></i> Add new Tag</a>
                </div> 
            </div>  
        </div>   

        <div class="table-responsive"> 
            <div class="col-12">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                        <th style="width: 10px">id</th>
                        <th style="width: auto">Title</th>
                        <th>Slug</th>
                        <th style="min-width: 140px">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $tag)
                        <tr>
                            <td>{{$tag->id}}</td>
                            <td>{{$tag->title}}</td>
                            <td>{{$tag->slug}} </td>
                        <td> 
                            <a href="{{route('tags.edit', $tag->id)}}" class="btn btn-sm btn-primary">Edit</i></a>

                            <form method='post' class="d-inline" action="{{route('tags.destroy',$tag->id)}}">
                                @csrf
                                @method('DELETE')
                                <button type='submit' onclick="return confirm('Rozimisiz?')" class="btn btn-danger btn-sm">Delete</i>            
                            </form> 
                        </td>
                        </tr>
                        @endforeach
                    </tbody>
                    
                </table>
            </div>  
        </div>   
        <div class="row">
            <div class="col-12">
                <div class='float-right mr-3'>{{$data->links()}}</div>
            </div>
        </div>
     
    </section>

@endsection      