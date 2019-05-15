@extends('layouts.app')
<link href="{{ asset('css/style.css') }}" rel="stylesheet">
<script src="/js/confirm.js"></script>
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2>Game Manage<h2>
                </div>

                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-10">
                            <form action="{{ url('admin/search') }}" method="get" class="form-inline">


                                <input type="text" class="form-control" placeholder="Search game" name="search"
                                    id="search" style="border: 1px solid #4dd0e1">
                                    &nbsp;<button class="btn btn-primary" type="submit">Search</button>


                            </form>
                        </div>
                        <div class="col-md-2">
                            <a href="{{ route('game.create') }}" class="btn btn-success">Add game</a>
                        </div>
                    </div>
                    
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Rating</th>
									<th scope="col">Age limit</th>
                                    <th scope="col" colspan="1">Platform</th>
                                    <th scope="col" colspan="1">Genre</th>
                                    <th scope="col">Developer</th>
                                    <th scope="col" colspan="3">
                                        <center>Operation</center>
                                    </th>
                                </tr>
                            </thead>
                            @foreach($game as $row)
                            <tbody>
                                <tr>
                                    <th scope="row">{{ $row->game_id }}</th>
                                    <td>{{ $row->name }}</td>
                                    <td>{{ $row->rating }}</td>
									<td>{{ $row->age_limit }}</td>
                                    <td colspan="1">
                                        <div>{{ $row->platform }}</div>
                                    </td>
                                    
                                    <td colspan="1">
                                        <div>{{ $row->genre }}</div>
                                    </td>
                                    <td>{{ $row->developer }}</td>

                                    <td><a href="{{ route('game.edit',$row->game_id) }}"
                                            class="btn btn-warning">Edit</a></td>

                                    <td>
                                        <form action="{{ route('game.destroy',$row->game_id) }}" method="post" onsubmit="event.preventDefault(); check(this);">
                                            @csrf
                                            @method("DELETE")
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                    <td><a href="{{ route('chapters.show',$row->game_id) }}" class="btn btn-primary">Manage chapter</a></td>
                                </tr>
                            </tbody>
                            @endforeach
                        </table>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
