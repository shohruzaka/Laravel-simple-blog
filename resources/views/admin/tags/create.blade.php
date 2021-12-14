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
              <li class="breadcrumb-item active">Tag</li>
            </ol>
          </div>
        </div>
      </div>
    </section>

    <!-- Main content -->
    <section class="content">           
        <div class="card card-info">
            <div class="card-header">
            <h3 class="card-title">Add new Tag</h3>
            </div>
        <form action="{{route('tags.store')}}" method="post">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="title">Tag title</label>
                    <input type="text" class="@error('title') is-invalid @enderror form-control" id="title" name='title' placeholder="tag title here..." autofocus>
                    @error('title')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </div>
            </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary float-right">Submit</button>
                </div>
            </form>
        </div>
    </section>

@endsection      