@extends('layouts.base')
@section('main')
    <h1>Edit {{$contact->first_name}}</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <br /> 
    @endif
    <form action="/contacts/{{$contact->id}}" method="POST">
        @csrf
        @method('PATCH')
        <div class="form-group">
          <label for="first_name">First Name</label>
          <input type="text"
            class="form-control" name="first_name" id="first_name" placeholder="First Name" value={{ $contact->first_name }}>
        </div>
        <div class="form-group">
          <label for="last_name">Last Name</label>
          <input type="text"
            class="form-control" name="last_name" id="last_name" placeholder="Last Name" value={{ $contact->last_name }}>
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email"
            class="form-control" name="email" id="email" placeholder="Email" value={{ $contact->email }}>
        </div>
        <button type="submit" class="btn btn-success">Edit contact</button>
        <a href="/contacts" class="btn btn-danger">Cancel</a>
    </form>
@endsection