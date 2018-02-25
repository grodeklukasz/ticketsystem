@extends('layout')

@section('content')
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-4 col-sm-3">
        <div class="card text-white bg-primary mb-3" style="max-width: 20rem;">
          <div class="card-header">Technical support for Companies {{ $data['name'] }}</div>
            <div class="card-body">
              <h4 class="card-title">Primary card title</h4>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
          
          </div>
      </div>
  </div>
@endsection
