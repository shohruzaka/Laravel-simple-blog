@extends('admin.layouts.layout')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Posts</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Posts</li>
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
                    <a href="{{route('posts.create')}}" class="btn btn-primary"> <i class="fas fa-plus"></i> New Post</a>
                </div> 
            </div>  
        </div>   
      

        <div class="table-responsive"> 
            <div class="col-12">
                {{-- {{dd($posts)}} --}}
                <table class="table table-bordered">
                    <thead>
                        <tr>
                        <th style="width: 10px">id</th>
                        <th style="width: auto">Title</th>
                        <th>Slug</th>
                        <th>content</th>
                        <th>Category</th>
                        <th>Tags</th>
                        <th style="min-width: 140px">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($posts as $post)
                        <tr>
                            <td>{{$post->id}}</td>
                            <td>{{$post->title}}</td>
                            <td>{{$post->slug}} </td>
                            <td>{{$post->content}} </td>
                            <td>{{$post->category->title}} </td>
                            <td>@foreach ($post->tags as $k)
                                #{{$k->title}}
                            @endforeach</td>
                        <td> 
                            <a href="{{route('posts.edit', $post->id)}}" class="btn btn-sm btn-primary">Edit</i></a>

                            <form method='post' class="d-inline" action="{{route('posts.destroy',$post->id)}}">
                                @csrf
                                @method('DELETE')
                                <button type='submit' onclick="return confirm('Delete this tag ?')" class="btn btn-danger btn-sm">Delete</i>            
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
                <div class='float-right mr-3'>{{$posts->links()}}</div>
                {{-- {{dd($post->tags[0]['title'])}} --}}
            </div>
        </div>
     
    </section>

@endsection      