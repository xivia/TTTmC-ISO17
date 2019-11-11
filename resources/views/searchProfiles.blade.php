    @extends('layouts.app')

    @section('content')


    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">

            <form method="POST" action="{{ route('search') }}">
                <input class="form-control col-md-10" type="search" name="input" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success col-md-2" type="submit">Search</button>
            </form>

        </div>
        <div class="col-md-2"></div>
    </div>

    <br>

    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">username</th>
                                <th scope="col">firstname</th>
                                <th scope="col">email</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                            <tr>
                                <td>{{ $user->username }}</td>
                                <td>{{ $user->firstname }}</td>
                                <td>{{ $user->email }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-2"></div>
    </div>
    
    

@endsection