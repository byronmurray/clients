@extends('layouts.app')

@section('title', $website->client->company)

@section('content')

  <table class="table">
    <thead>
      <tr>
        <th scope="col">Company Name</th>
        <th scope="col">Domains</th>
        <th scope="col">Created by</th>
        <th scope="col">Hosting Expires</th>
        <th scope="col">SSL Cert</th>
        <th scope="col">Hosted By</th>
        <th scope="col">Logins</th>
      </tr>
    </thead>
  <tbody>



    <tr>
      <th scope="row"><a href="#">{{ $website->client->company }}</a> </th>
      <td>
        @foreach ($website->domains as $domain)
          <a href="{{ $domain->url }}" target="_blank">{{ $domain->url }}</a><br>
        @endforeach
      </td>
      <td>{{ $website->created_by }} on {{ $website->start }}</td>
      <td>{{ $website->expires }}</td>
      <td>{{ ($website->ssl == 0 ? 'No' : "Yes") }}</td>
      <td>Dubzz, Cloudways</td>
      <td>
        <i class="fa fa-minus-square"></i>
      </td>
    </tr>

    <tr style="width:100%">
      <td  colspan="8">
        <thead>
          <tr>
            <th scope="col">Title</th>
            <th scope="col">URL</th>
            <th scope="col">Username</th>
            <th scope="col">Password</th>
            <th scope="col">Notes</th>
          </tr>
        </thead>
        @foreach ($website->client->logins as $login)
          <tr>
            <th>{{ $login->name }}</th>
            <td><a href="{{ $login->url }}">{{ $login->url }}</a> </td>
            <td>{{ $login->username }}</td>
            <td>{{ $login->password }}</td>
            <td>{{ $login->notes }}</td>
          </tr>
        @endforeach
      </td>
    </tr>



  </tbody>
</table>

@endsection
