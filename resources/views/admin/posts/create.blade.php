@extends('layouts.app')
@section('content')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Create Your Post</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">posts</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
  <div class="row">
      <div class="col-md-6">
        <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Quick Example</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
        <form method="POST" action="{{ Route('posts.store')}}" enctype="multipart/form-data" >
            @csrf
              <div class="card-body">
                <div class="form-group">
                  <label for="Title">Post Title</label>
                  <input type="text" class="form-control" id="title" name="title" placeholder="enter Your Post Title">
                </div>
                <div class="form-group">
                  <label for="Category">Select your Category</label>
                  <select name="category" id="category" class="form-control">
                      <option selected disabled> Select One</option>
                      <option> YouTube</option>
                      <option> Gaming</option>
                      <option> Technology</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="Image">Add Your Image</label>
                  <div class="input-group">
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="image" name="image">
                      <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                    </div>
                    <div class="input-group-append">
                      <span class="input-group-text" id="">Upload</span>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                    <textarea name="content" id="content" class="form-control"></textarea>

                </div>
              </div>
              <div class="card-footer">
                <input type="submit" class="btn btn-primary" value="Submit"/>
              </div>
            </form>
          </div>
      </div>
  </div>
  @include('layouts.notifications.notify')
@endsection
