@extends('layouts.app')
@section('content')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Your Categories</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Categories</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
  <div class="container-fluid">
      <div class="row mb-2">
          <div class="col-6">
              <table class="table table-striped table-responsive">
                  <thead>
                      <tr>
                          <th>Category</th>
                          <th>Created At</th>
                          <th>Updated At</th>
                      </tr>
                      </thead>
                      <tbody>
                          <tr>
                              <td scope="row">category 1</td>
                              <td>234578</td>
                              <td>123578</td>
                          </tr>
                          <tr>
                              <td scope="row">category 2</td>
                              <td>234578</td>
                              <td>123578</td>
                          </tr>
                          <tr>
                              <td scope="row">category 3</td>
                              <td>234578</td>
                              <td>123578</td>
                          </tr>

                      </tbody>
              </table>
          </div>
      </div>
  </div>
@endsection
