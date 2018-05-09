@extends('layouts.app')

@section('title', $client->company)

@section('content')

  <div class="panel">
    <h3 class="panel-heading">Contacts</h3>

    <div class="panel-block">

      <table class="table">
        <thead>
          <tr>
            <th scope="col">Name</th>
            <th scope="col">Phone</th>
            <th scope="col">Email</th>
          </tr>
        </thead>
      <tbody>

        @foreach ($client->contacts as $contact)
          <tr>
            <th>{{ $contact->name }}</th>
            <td>{{ $contact->phone }}</td>
            <td>{{ $contact->email }}</td>
          </tr>
        @endforeach

      </tbody>
    </table>

  </div>
</div>

  <div class="panel">
    <h3 class="panel-heading">Websites</h3>

    <div class="panel-block">

      <table class="table">
        <thead>
          <tr>
            <th scope="col">Name</th>
            <th scope="col">Domains</th>
            <th scope="col">Created</th>
            <th scope="col">Expires</th>
            <th scope="col">SSL</th>
            <th scope="col">Hosted</th>
          </tr>
        </thead>
      <tbody>

        <tr>
          <td>Website Name</td>
          <td>
            @foreach ($client->website->domains as $domain)
              <a href="{{ $domain->url }}" target="_blank">{{ $domain->url }}</a><br>
            @endforeach
          </td>
          <td>{{ $client->website->created_by }} on {{ $client->website->start }}</td>
          <td>{{ $client->website->expires }}</td>
          <td>{{ ($client->website->ssl == 0 ? 'No' : "Yes") }}</td>
          <td>Dubzz, Cloudways</td>
        </tr>

      </tbody>
    </table>

  </div>
</div>



<div class="panel">
  <h3 class="panel-heading">Logins</h3>

  <div class="panel-block">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Name</th>
          <th scope="col">URL</th>
          <th scope="col">Username</th>
          <th scope="col">Password</th>
          <th scope="col">Notes</th>
        </tr>
      </thead>

      <tbody>

        @foreach ($client->logins as $login)
          <tr>
            <th>{{ $login->name }}</th>
            <td><a href="{{ $login->url }}">{{ $login->url }}</a> </td>
            <td>{{ $login->username }}</td>
            <td>{{ $login->password }}</td>
            <td>{{ $login->notes }}</td>
          </tr>
        @endforeach

      </tbody>
    </table>
  </div>
</div>



<div class="panel">
  <h3 class="panel-heading">Notes</h3>

  <div class="panel-block">

    <table class="table">
      <thead>
        <tr>
          <th scope="col">Date</th>
          <th scope="col">Title</th>
          <th scope="col">Body</th>
          <th scope="col">User</th>
        </tr>
      </thead>
    <tbody>

      @foreach ($client->notes as $note)
      <tr>
        <td>{{ $note->created_at }}</td>
        <td>{{ $note->title }}</td>
        <td>{{ $note->body }}</td>
        <td>username</td>
      </tr>
      @endforeach

    </tbody>
  </table>

</div>
</div>


@endsection
