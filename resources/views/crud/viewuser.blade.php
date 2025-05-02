{{-- @extends('layouts.app') --}}

@section('content')
    View User
@endsection

    @foreach ($users as $user)

        <h1>ID : {{ $user->id }}</h1>
        <h1>Name : {{ $user->name }}</h1>
        <h1>Email : {{ $user->email }}</h1>
        <h1>Title : {{ $user->title }}</h1>
        <h1>Description : {{ $user->description }}</h1>

    @endforeach
