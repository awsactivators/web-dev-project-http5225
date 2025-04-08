@extends('layout')
@section('content')
<h1>Add Student</h1>
  @if ($errors -> any())
    @foreach ($errors -> all() as $error)
        <li>{{ $error }}</li>
    @endforeach
  @endif
  <form action="{{ route('students.store') }}" method="POST">
    {{-- pass a token: any form in laravel should have the csrf token so that theres no middle man attack like when you work with api. --}}

    {{-- value attribute is to retain input values, like old() lib save sthe old value --}}
      {{ csrf_field() }}
      <input type="text" name="fname" placeholder="fname" value="{{ old('fname') }}"> 
      <input type="text" name="lname" placeholder="lname" value="{{ old('lname') }}">
      <input type="email" name="email" placeholder="email" value="{{ old('email') }}">

      <select name="" id="">
        @foreach ($courses as $course)
            <option value="">{{ $course -> courseName }}</option>
        @endforeach
      </select>
      <input type="submit" value="Create">
  </form>
@endsection