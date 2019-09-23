@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            	@foreach($users as $user)
	                <div class="card-header">{{ __($user->firstname) }}</div>
	                	<div class="card-body">

	                		{{ $user->firstname }}
							<br>
							{{ $user->email }}

	                    </div>
	                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

@endsection