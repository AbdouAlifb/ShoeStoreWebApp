@extends('admin.adminlayout')

@section('content')
<div class="container">
    <h1>Commands</h1>

    <table class="table">
    <thead>
        <tr>
            <th>Client ID</th>
            <th>Shoe ID</th>
            <th>Quantity</th>
            <th>Size</th>
            <th>Price</th>
            <th>Total</th>
            <th>Image</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($commands as $command)
    <tr>
        <td>{{ $command->user_id }}</td>
        <td>{{ $command->shoe_id }}</td>
        <td>{{ $command->quantity }}</td>
        <td>{{ $command->size }}</td>
        <td>
            ${{ $command->price }}
        </td>
        <td>
            @php
                $total = $command->price * $command->quantity;
            @endphp
            ${{ $total }}
        </td>
        <td>
            <img src="{{ asset('storage/' . $command->shoe->image) }}" alt="Shoe Image" class="img-thumbnail" style="max-width: 100px;">
        </td>
    </tr>
@endforeach

    </tbody>
</table>

</div>



@endsection
