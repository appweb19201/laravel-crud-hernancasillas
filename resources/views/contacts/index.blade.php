
@extends('layouts.app')
@section('content')
    <h1 class="text-center">{{Auth::user()->name}}'s Contacts</h1>
    @if(count($contacts) == 0)
        <p class="text-center">There are no contacts!</p>
        <a href="/contacts/create" class="btn btn-primary m-3"><i class="fas fa-user-plus"></i></a>
    @else
    <table class="table">
        <thead class="thead-lhght">
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Actions</th>
        </thead>
        <tbody>
            @foreach ($contacts as $contact)
                <tr>
                    <td>{{$contact->first_name}}</td>
                    <td>{{$contact->last_name}}</td>
                    <td>{{$contact->email}}</td>
                    <td>
                        <div class="row">
                            <a href="/contacts/{{$contact->id}}/edit" class="btn btn-primary"><i class="fas fa-user-edit"></i></a>
                            <form action="/contacts/{{$contact->id}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit"><i class="fas fa-trash"></i></button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="/contacts/create" class="btn btn-primary m-3"><i class="fas fa-user-plus"></i></a>
    <div class="col-sm-12">

        @if(session()->get('success'))
          <div class="alert alert-success">
            {{ session()->get('success') }}  
          </div>
        @endif
      </div>
    @endif
    
@endsection
