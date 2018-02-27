@extends('layout')

@section('content')

  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6">
        <div>{{ $data -> title }}</div>
        <div>
          <h4>{{ $data -> title }}</h4>
          <p class="card-text">{{ $data -> description }}</p>
        </div>
      </div>
    </div>


  </div>
@endsection
