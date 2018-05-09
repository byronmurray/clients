@extends('layouts.app')

@section('title', 'Clients')

@section('content')

<ul class="panel list-group">
  @foreach ($clients as $client)
    @if ($client->website)
      <a href="clients/{{ $client->id }}" class="panel-block list-group-item">
    @else
      <a href="#" class="panel-block list-group-item">
    @endif
      {{ $client->company }}
    </a>
  @endforeach
</ul>

@endsection
