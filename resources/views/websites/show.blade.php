@extends('layouts.app')

@section('title', $website->client->company)

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



    <tr>
      <th scope="row"><a href="#">{{ $website->client->company }}</a> </th>
      <td><a href="{{ $website->url }}">{{ $website->url }}</a></td>
      <td>{{ $website->created_at }}</td>
      <td>{{ $website->expires }}</td>
      <td>{{ ($website->ssl == 0 ? 'No' : "Yes") }}</td>
      <td>Dubzz, Cloudways</td>
    </tr>



  </tbody>
</table>

@endsection
