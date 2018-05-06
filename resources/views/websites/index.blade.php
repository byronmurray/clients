@extends('layouts.app')

@section('title', 'Websites')

@section('content')

  <table class="table">
    <thead>
      <tr>
        <th scope="col">Company Name</th>
        <th scope="col">Domain Names</th>
        <th scope="col">Created On</th>
        <th scope="col">Hosting Expires</th>
        <th scope="col">SSL Cert</th>
        <th scope="col">Hosted By</th>
        <th scope="col">Logins</th>
      </tr>
    </thead>
  <tbody>

  @foreach ($websites as $website)

    <tr>
      <th scope="row"><a href="clients/{{ $website->client->id }}">{{ $website->client->company }}</a> </th>
      <td><a href="{{ $website->url }}">{{ $website->url }}</a></td>
      <td>{{ $website->created_at }}</td>
      <td>{{ $website->expires }}</td>
      <td>{{ ($website->ssl == 0 ? 'No' : "Yes") }}</td>
      <td>Dubzz, Cloudways</td>
      <td>
        <a data-toggle="collapse" data-target="#collapse-{{ $website->id }}" aria-expanded="false" aria-controls="collapse-{{ $website->id }}">
          <i class="fa fa-minus-square"></i>
        </a>
      </td>
    </tr>

    <tr style="width:100%" class="collapse" id="collapse-{{ $website->id }}">
      <td  colspan="7">
          <ul>
            <li>Wordpress</li>
            <li>Google</li>
            <li>Domain</li>
            <li>Hosting</li>
            <li>Booking Channel</li>
          </ul>
      </td>
    </tr>

  @endforeach

  </tbody>
</table>

@endsection
