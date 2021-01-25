@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">

        <div class="panel panel-primary">
            <div class="panel-heading">
                <h2>All Donations</h2>
            </div>
            <div class="panel-body">
                {{ $donations->links() }}

                <table class="table table-striped">
                    <tr>
                        <th colspan="7" class="text-center">Totla Donation: NGN{{ number_format($totalDonation, 2) }}</th>
                    </tr>
                    <tr>
                        <th></th>
                        <th>name</th>
                        <th>email</th>
                        <th>phone</th>
                        <th>message</th>
                        <th>status</th>
                        <th>amount</th>
                    </tr>
                    <?php $total = 0; ?>
                    @foreach($donations as $donation)
                    <tr>
                        <td>{{ $sn++ }}</td>
                        <td>{{ $donation->name }}</td>
                        <td>{{ $donation->email }}</td>
                        <td>{{ $donation->phone }}</td>
                        <td>{{ $donation->message }}</td>
                        <td>{{ $donation->status }}</td>
                        <td class="text-right">{{ number_format($donation->amount, 2) }}</td>
                    </tr>
                    <?php $total += $donation->amount; ?>
                    @endforeach
                    <tr>
                        <th colspan="6" class="text-right">TOTAL</th>
                        <th class="text-right">{{ number_format($total,2) }}</th>
                    </tr>
                </table>

            </div>
        </div>

    </div>
</div>
@endsection