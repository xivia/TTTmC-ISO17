@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Username</th>
                            <th scope="col">Ranking League</th>
                            <th scope="col">Played Games</th>
                            <th scope="col">W/L Ratio</th>
                            <th scope="col">Rating points</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Icerite</td>
                            <td>Grand Master</td>
                            <td>265</td>
                            <td>265/0</td>
                            <td>36109</td>
                        </tr>
                        <tr>
                            <td>Simon</td>
                            <td>Diamond</td>
                            <td>112</td>
                            <td>78/34</td>
                            <td>11769</td>
                        </tr>
                        <tr>
                            <td>Nils</td>
                            <td>Rookie</td>
                            <td>4</td>  
                            <td>1/3</td>
                            <td>1978</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection