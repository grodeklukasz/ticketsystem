@extends('layout')

@section('content')
  <div class="container-fluid">
    <div class="row">
      <h1>Tickets</h1>
    </div>
    <div class="row">
      <table class="table table-hover">
        <tr>
          <th>id</th>
          <th>code</th>
          <th>title</th>
          <th>status</th>
          <th>user</th>
          <th>serviceman</th>
          <th>device</th>
        </tr>



      @foreach($data as $ticket)
      <tr>
        <td>{{ $ticket->id }}</td>
        <td><a href="ticket/{{ $ticket->id }}">{{ $ticket->code }}</a></td>
        <td><a href="#" data-toggle="popover"
                        data-trigger="focus"
                        title="{{ $ticket->title }}"
                        data-content="{{ $ticket->description }}">{{ $ticket->title }}</a></td>
        <td>{{ $ticket->status }}</td>
        <td>{{ $ticket->name }}</td>
        <td>{{ $ticket->serviceman_id }}</td>
        <td>{{ $ticket->device_id }}</td>
      </tr>

      @endforeach
      </table>

    </div>
    <div class="row" id="pad">
      <p>
        {{ $data->links() }}
      </p>
    </div>
  </div>
@endsection
