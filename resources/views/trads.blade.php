<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trading Gernal</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

</head>

<body>
    <div class="container">
        <div class="row">
            <nav class="nav">
                <li class="nav-item">
                    <a class="nav-link active" href="trads">Trads</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="{{ route('trad.add') }}">Add</a>
                </li>
            </nav>
        </div>
        <div class="row mx-auto my-4">
            <div class="col-md-12 py-3">
                <center>
                    <h1 class="text-center">Trading Gernal</h1>
                </center>
            </div>
        </div>
        <div class="row mx-auto">
            <div class="col-md-12 ">
                <table class="table table-light">
                    <thead class="thead-light">
                        <tr>
                            <th>#</th>
                            <th>Market</th>
                            <th>Trad Type</th>
                            <th>Open</th>
                            <th>TP</th>
                            <th>Current Price</th>
                            <th>SL</th>
                            <th>Status</th>
                            <th>Time</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($trads as $trad)
                            <tr>
                                <td>{{ $loop->index + 1 }}</td>
                                <td><b>{{ $trad->market }}</b></td>
                                <td>{{ ucfirst($trad->trade_type) }}</td>
                                <td>{{ $trad->open_price }}</td>
                                <td>{{ $trad->tp }}</td>
                                {{-- this will be comming from api --}}
                                <td>--</td>
                                <td>{{ $trad->sl }}</td>
                                <td>{{ ucfirst($trad->status) }}</td>
                                <td>{{ $trad->created_at->diffForHumans() }}</td>
                                <td>
                                    <div class="btn-group" role="group" aria-label="Button group">
                                        <a href="{{ route('trad.edit', $trad->id) }}" class="btn btn-warning"
                                            type="button">Edit</button>
                                            <a href="{{ route('trad.delete', $trad->id) }}" class="btn btn-danger"
                                                type="button">Delete</button>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="9">
                                    <p class="text-warning text-center">No Trad Found!</p>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>
