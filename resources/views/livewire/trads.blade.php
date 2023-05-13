<div class="row mx-auto my-4">
    <div class="col-md-12 py-3">
        <center>
            <h1 class="text-center">Trading Gernal</h1>
        </center>
    </div>
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
                                <a href="{{ route('edit_trad', $trad->id) }}" class="btn btn-warning"
                                    type="button">Edit</a>
                                <button wire:click="delete_trad({{$trad->id}})" class="btn btn-danger" type="button">Delete</button>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="10">
                            <p class="text-warning text-center">No Trad Found!</p>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
