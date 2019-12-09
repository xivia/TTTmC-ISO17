@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            	@foreach($users as $user)
	                <div class="card-header">
                        <img src="/images/{{ $user->picturepath }}" alt="profilBild" height="42" width="42" class="rounded-circle">
                    </div>
	                	<div class="card-body">

                            <h3>{{ ($user->username) }}</h3>
                            <br>
                            <br>
	                		{{ $user->firstname }}
							<br>
                            {{ $user->lastname }}
                            <br>
                            {{ $user->status }}
                            <br>
							{{ $user->email }} 

	                    </div>
	                </div>
                @endforeach
                <br>
                <a href="{{ URL::route('editProfile') }}" class="btn btn-primary"> Edit Profile </a>
            </div>
        </div>
    </div>
</div>

@endsection