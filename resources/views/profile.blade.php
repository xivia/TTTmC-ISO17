@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            	@foreach($users as $user)
	                <div class="card-header">
                        {{ ($user->username) }}
                    </div>
	                	<div class="card-body">

	                		{{ $user->firstname }}
							<br>
                            {{ $user->lastname }}
                            <br>
                            {{ $user->status }}
                            <br>
							{{ $user->email }}
                            <br>
                            <a href="{{ URL::route('editProfile') }}" class="btn btn btn-primary"> Edit Profile </a>

	                    </div>
	                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

@endsection