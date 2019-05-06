@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
			<div>
				<a href="{{ route('game.create') }}" class="btn btn-success">Add game</a>
			</div>
                <div class="panel-heading">
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">rating</th>
      <th scope="col">platform</th>
	  <th scope="col" colspan="3">detail</th>
	  <th scope="col">genre</th>
	  <th scope="col">developer</th>
	  <th scope="col" colspan="2"><center>operation</center></th>
    </tr>
  </thead>
  <?php $i=1; ?>
  @foreach($game as $row)
  <tbody>
    <tr>
      <th scope="row">{{ $row->game_id }}</th>
      <td>{{ $row->name }}</td>
      <td>{{ $row->rating }}</td>
      <td>{{ $row->platform }}</td>
	  <td colspan="3">{{ $row->detail }}</td>
	    <td>{{ $row->genre }}</td>
	  <td>{{ $row->developer }}</td>
	 <td><a href="{{ route('game.edit',$row->game_id) }}" class="btn btn-warning">edit</a></td>
	  <td>
		<form action="{{ route('game.destroy',$row->game_id) }}" method="post">
		@csrf
		@method("DELETE")
			 <button type="submit" class="btn btn-danger">delete game</button>
		</form>
	  </td>
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
