<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trading Gernal</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">

</head>

<body>
    <div class="container">
        <div class="row my-3 py-3">
            <div class="col mx-auto">
                <h1 class="text-center">
                    Edit Trad
                </h1>
            </div>
        </div>
        <form method="post" class="row" action="{{ route('trad.update', $trad->id) }}">
            @csrf
            <div class="form-group col-md-6 mx-auto">
                <label for="market">Market/Coin</label>
                <input id="market" value="{{ $trad->market }}" placeholder="Market/Coin" class="form-control"
                    type="text" name="market">
            </div>
            <div class="form-group col-md-6 mx-auto">
                <label for="type">Trad_type</label>
                <select placeholder="Trad_type" id="type" class="form-control" name="trad_type">
                    <option @if ($trad->trade_type == 'long') selected @endif>Long</option>
                    <option @if ($trad->trade_type == 'short') selected @endif>Short</option>
                </select>
            </div>
            <div class="form-group col-md-6 mx-auto">
                <label for="market">Open Price <small><i class="text-info text-sm">(USDT)</i></small></label>
                <input id="market" value="{{ $trad->open_price }}" placeholder="Open Price" class="form-control"
                    type="number" name="open_price">
            </div>
            <div class="form-group col-md-6 mx-auto">
                <label for="amount">Position Amount <small><i class="text-info text-sm">(USDT)</i></small></label>
                <input id="amount" value="{{ $trad->position_amount }}" placeholder="Position Amount"
                    class="form-control" type="number" name="amount">
            </div>
            <div class="form-group col-md-6 mx-auto">
                <label for="tp">TP <small><i class="text-info text-sm">(USDT)</i></small></label>
                <input id="tp" value="{{ $trad->tp }}" placeholder="TP" class="form-control" type="number"
                    name="tp">
            </div>
            <div class="form-group col-md-6 mx-auto">
                <label for="sl">SL <small><i class="text-info text-sm">(USDT)</i></small></label>
                <input id="sl" value="{{ $trad->sl }}" placeholder="SL" class="form-control" type="number"
                    name="sl">
            </div>
            <div class="form-group col-md-12 mx-auto">
                <button class="btn btn-success btn-lg btn-block" type="submit">Add Trad</button>
            </div>
        </form>
    </div>
</body>

</html>
