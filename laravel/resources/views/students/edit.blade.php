@extends('layout')
@section('content')
<h1>Add Student</h1>
  @if ($errors -> any())
    @foreach ($errors -> all() as $error)
        <li>{{ $error }}</li>
    @endforeach
  @endif
  <form action="{{ route('students.update', $student -> id) }}" method="POST">
    {{-- pass a token: any form in laravel should have the csrf token so that theres no middle man attack like when you work with api. --}}

    {{-- value attribute is to retain input values, like old() lib save sthe old value --}}
      {{ csrf_field() }}
      @method('PUT')
      {{-- @method('PUT') is used to specify the HTTP method for the form submission. In this case, it indicates that the form should be submitted using the PUT method, which is typically used for updating existing resources. --}}
      <input type="text" name="fname" placeholder="fname" value="{{ old('fname') ?? $student -> fname }}"> 
      <input type="text" name="lname" placeholder="lname" value="{{ old('lname') ?? $student -> lname }}">
      <input type="email" name="email" placeholder="email" value="{{ old('email') ?? $student -> email }}">
      <input type="submit" value="Edit">
  </form>
@endsection