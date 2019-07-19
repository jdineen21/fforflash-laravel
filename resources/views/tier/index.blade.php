@extends('layout')

@section('content')
    
    <div class="stan_cont_wrapper">
        <div class="table_wrapper">
            <table class='tier_table'>
                <tr>
                    <td>Rank</td>
                    <td>Champion</td>
                    <td>Win Rate</td>
                    <td>Pick Rate</td>
                    <td>Ban Rate</td>
                    <td>Matches</td>
                </tr>

                @foreach ($stats as $key => $stat)

                <tr>
                    <td>{{ $key+1 }}</td>
                    <td>{{ $stat->champion->name }}</td>
                    <td>{{ $stat->win_rate }}%</td>
                    <td>{{ $stat->pick_rate }}%</td>
                    <td>0.2%</td>
                    <td>{{ $stat->matches }}</td>
                </tr>

				@endforeach
            </table>
        </div>
    </div>

@endsection