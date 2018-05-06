@extends('layouts.app')

@section('title', 'Clients')

@section('content')

<ul class="list-group">
  @foreach ($clients as $client)
    @if ($client->website)
      <a href="websites/{{ $client->website->id }}">
    @else
      <a href="#">
    @endif
      <li class="list-group-item">{{ $client->company }}</li>
    </a>
  @endforeach
</ul>

@endsection
