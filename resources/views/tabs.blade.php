@extends('layouts.app')

@section('content')

<tabs>

  <tab name="about" :selected="true">
    <h1>Here is the content for about tab</h1>
  </tab>

  <tab name="about us">
    <h1>Here is the content for about us tab</h1>
  </tab>

  <tab name="about you">
    <h1>Here is the content for about tab</h1>
  </tab>

</tabs>

@endsection
