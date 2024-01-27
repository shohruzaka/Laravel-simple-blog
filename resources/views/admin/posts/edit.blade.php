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
    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title">Editing this Post</h3>
        </div>
        <form action="{{route('posts.update',$post->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method("PUT")
            <div class="card-body">
                <div class="form-group">
                    <label for="title">Post title</label>
                    <input type="text" class="@error('title') is-invalid @enderror form-control" id="title" name='title'
                        autofocus value="{{$post->title}}">
                    @error('title')
                    <div class="invalid-feedback"> {{$message}} </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="description">Decription</label>
                    <textarea class="@error('descript') is-invalid @enderror form-control"
                        id="description" name='descript' rows="4"> {{$post->descript}} </textarea>
                    @error('descript')
                    <div class="invalid-feedback"> {{$message}} </div>
                    @enderror
                </div>  
                <div class="form-group">
                    <label for="content">Content</label>
                    <textarea id="content" class="@error('content') is-invalid @enderror form-control" id="content" name='content'
                        placeholder="content..." rows=7>{{$post->content}}</textarea>
                    @error('content')
                    <div class="invalid-feedback"> {{$message}} </div>
                    @enderror
                </div>



                <div class="form-group">
                    <label for="category">Category</label>
                    <select name="category_id" id="category" class="form-control custom-select">
                        @foreach($cat as $id => $title)
                        <option value="{{$id}}" @if($id==$post->category_id) selected @endif>
                            {{$title}}
                        </option>
                        @endforeach
                    </select>
                </div>


                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label>Tags</label>
                            <select name="tags[]" class="select2" multiple="multiple" data-placeholder="Select the Tags"
                                style="width: 100%;">
                                @foreach($tag as $k=>$v)
                                <option value="{{$k}}" @if(in_array($k, $post->tags->pluck('id')->all())) selected
                                    @endif>{{$v}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label for="customFile">Custom File</label>
                            <div class="custom-file">
                                <input type="file" name="thumbnail" class="custom-file-input" id="customFile">
                                <label class="custom-file-label" for="customFile">Choose a file</label>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary float-right">Submit</button>
            </div>
        </form>
    </div>
</section>

@endsection
