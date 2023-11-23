@extends('layouts.app')

@section('content')
<h3>Users</h3>
<table>
    <tr>
        <th>name</th>
        <th>gender</th>
        <th>role</th>
        <th>phone</th>
        <th>email</th>
        <th>password</th>
    </tr>
    @foreach($users as $id)
        <tr>
            @foreach($id as $forms => $item)
                <td>{{$item}}</td>
            @endforeach  
        </tr>
    @endforeach  
</table>

@endsection
