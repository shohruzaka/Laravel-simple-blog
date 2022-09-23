@extends('admin.layouts.layout')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">

    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Post</h1>
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
    <div class="card card-info mx-4 mb-4">
        <div class="card-header">
            <h3 class="card-title">Add new Post</h3>
        </div>
        <form action="{{route('posts.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="@error('title') is-invalid @enderror form-control" id="title" name='title' placeholder="category title here..." autofocus>
                    @error('title')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="descript">Description</label>
                    <textarea class="@error('descript') is-invalid @enderror form-control" id="descript" name='descript' placeholder="post description here..." rows="4"></textarea>
                    @error('descript')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Content</label>
                    <textarea id="content" name="content" class="form-control @error('content') is-invalid @enderror" rows="5"></textarea>
                    @error('content')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Category</label>
                    <select class="form-control" name="category_id">
                        @foreach ($cat as $id => $title)
                        <option value="{{$id}}">{{$title}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label>Tags</label>
                            <select class="select2" name="tags[]" multiple="multiple" data-placeholder="choose a tag" style="width: 100%;">
                                @foreach ($tag as $id => $title)
                                <option value="{{$id}}">{{$title}}</option>
                                @endforeach

                            </select>
                        </div>
                    </div>
                    <div class="col-6">
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