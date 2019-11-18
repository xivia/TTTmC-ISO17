@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit Profile') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('edit') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="firstname" class="col-md-4 col-form-label text-md-right">{{ __('First Name') }}</label>

                            <div class="col-md-6">
                                <input id="firstname" type="text" class="form-control @error('firstname') is-invalid @enderror" name="firstname" placeholder="{{ Auth::user()->firstname }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="lastname" class="col-md-4 col-form-label text-md-right">{{ __('Last Name') }}</label>

                            <div class="col-md-6">
                                <input id="lastname" type="text" class="form-control @error('lastname') is-invalid @enderror" name="lastname" placeholder="{{ Auth::user()->lastname }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="username" class="col-md-4 col-form-label text-md-right">{{ __('Username') }}</label>

                            <div class="col-md-6">
                                <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" placeholder="{{ Auth::user()->username }}">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="status" class="col-md-4 col-form-label text-md-right">{{ __('Status') }}</label>

                            <div class="col-md-6">
                                <input id="status" type="text" class="form-control @error('status') is-invalid @enderror" name="status" placeholder="{{ Auth::user()->status }}">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="{{ Auth::user()->email }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right"></label>
                            <button class="col-md-6 btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">Change your Password</button>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right"></label>
                            <div class="collapse col-md-6" id="collapseExample">

                                <input id="oldpassword" type="password" class="form-control @error('oldpassword') is-invalid @enderror" name="oldpassword" placeholder="Current Password">

                                <br>

                                <input id="passwordnew" type="password" class="form-control @error('passwordnew') is-invalid @enderror" name="passwordnew" placeholder="New Password">

                                <br>

                                <input id="confirmpassword" type="password" class="form-control @error('confirmpassword') is-invalid @enderror" name="confirmpassword" placeholder="Confirm new Password">

                            </div>
                        </div>

                        <br>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Submit') }}
                                </button>

                                <button type="reset" class="btn btn-primary">
                                    {{ __('Reset') }}
                                </button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection