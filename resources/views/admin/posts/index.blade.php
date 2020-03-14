@extends('layouts.app')

@section('content')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Posts</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{ Route('dashboard') }}">Home</a></li>
            <li class="breadcrumb-item active">Layout</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>



<div class="container-fluid">
    <div class="row mb-2">
        @foreach ($posts as $item)
        <div class="col-sm-4">
            <div class="card">
                <div class="card-header">
                    <h1>{{ $item->title }}</h1>
                </div>
                <div class="card-body">
                    {{ $item->content }}
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection
