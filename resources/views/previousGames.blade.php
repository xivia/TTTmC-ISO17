<!-- Stored in resources/views/child.blade.php -->

@extends('layouts.app')

@section('title', 'Page Title')

@section('sidebar')
@parent

<!-- <p>This is appended to the master sidebar.</p> -->

@endsection

@section('content')
<div class="table-responsive">
	<table class="table">
		<thead>
			<tr>
				<th scope="col">match</th>
				<th scope="col">Enemy</th>
				<th scope="col">Result</th>
				<th scope="col">Difficulty</th>
				<th scope="col">Moves</th>
			</tr>
		</thead>
		<tbody>

			@if(isset($log))
			@foreach($log as $log)
			<tr>
				<td> {{$log->match}} </td>
				<td> {{$log->enemy}} </td>
				<td> {{$log->result}} </td>
				<td> {{$log->difficulty}} </td>
				<td> {{$log->moves}} </td>
			</tr>
			@endforeach
			@endif
		</tbody>
	</table>
</div>
@endsection