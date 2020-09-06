<div class="table-responsive">
    <table class="table" id="orderAddresses-table">
        <thead>
            <tr>
                <th>Street</th>
        <th>City</th>
        <th>Postal Code</th>
        <th>Date</th>
        <th>Time</th>
        <th>Order Uuid</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($orderAddresses as $orderAddress)
            <tr>
                <td>{{ $orderAddress->street }}</td>
            <td>{{ $orderAddress->city }}</td>
            <td>{{ $orderAddress->postal_code }}</td>
            <td>{{ $orderAddress->date }}</td>
            <td>{{ $orderAddress->time }}</td>
            <td>{{ $orderAddress->order_uuid }}</td>
                <td>
                    {!! Form::open(['route' => ['orderAddresses.destroy', $orderAddress->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('orderAddresses.show', [$orderAddress->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('orderAddresses.edit', [$orderAddress->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
