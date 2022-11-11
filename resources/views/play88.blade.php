<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <meta name="csrf-token" content="{{ csrf_token() }}"> -->
    <title>Play88 Play2Win Raffle Tickets Dashboard</title>
    <link rel="shortcut icon" href="{{ asset('images/favicon.webp') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container">
    <div class="card bg-light mt-3 mb-3">
        <div class="card-header text-center">
            <h4>Import Export Prize Excel & CSV File to Database</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.import')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="file" name="file" class="form-control">
                <br>
                <button class="btn btn-primary" name="upload">Import Data</button>
                <a class="btn btn-danger float-end" href="{{ route('admin.export')}}">Export Data</a>
            </form>

            <table class="table table-bordered mt-3">
                <tr>
                    <th colspan="4">List of Play88 Players Raffle Tickets</th>
                </tr>
                <tr>
                    <th>Username</th>
                    <th>Raffle Tickets</th>
                    <th>Created Datetime</th>
                    <th>Updated Datetime</th>
                </tr>
                @foreach($raffle_tickets as $raffle_ticket)
                <tr>
                    <td>{{ $raffle_ticket->username }}</td>
                    <td>{{ $raffle_ticket->raffle_tickets }}</td>
                    <td>{{ $raffle_ticket->created_at }}</td>
                    <td>{{ $raffle_ticket->updated_at }}</td>
                </tr>
                @endforeach
            </table>

        </div>
    </div>
</div>
</body>
</html>
