<div class="table-responsive">
    <table class="table" id="orders-table">
        <thead>
            <tr>
                <th>Customer</th>
        <th>Barcode</th>
        <th>Type</th>
        <th>Address</th>
        <th>Date</th>
        <th>Time</th>
        <th>Recipient Mobile</th>
        <th>Recipient Name</th>
        <th>Delivery Street</th>
        <th>Delivery City</th>
        <th>Deliver Zip</th>
        <th>Item Description</th>
        <th>Quantity</th>
        <th>Total Weight</th>
        <th>Dimension</th>
        <th>Payment Type</th>
        <th>Cod Amount</th>
        <th>Sender Name</th>
        <th>Sender Phone</th>
        <th>Sender Message</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($orders as $order)
            <tr>
                <td>{{ $order->customer }}</td>
            <td>{{ $order->barcode }}</td>
            <td>{{ $order->type }}</td>
            <td>{{ $order->address }}</td>
            <td>{{ $order->date }}</td>
            <td>{{ $order->time }}</td>
            <td>{{ $order->recipient_mobile }}</td>
            <td>{{ $order->recipient_name }}</td>
            <td>{{ $order->delivery_street }}</td>
            <td>{{ $order->delivery_city }}</td>
            <td>{{ $order->deliver_zip }}</td>
            <td>{{ $order->item_description }}</td>
            <td>{{ $order->quantity }}</td>
            <td>{{ $order->total_weight }}</td>
            <td>{{ $order->dimension }}</td>
            <td>{{ $order->payment_type }}</td>
            <td>{{ $order->cod_amount }}</td>
            <td>{{ $order->sender_name }}</td>
            <td>{{ $order->sender_phone }}</td>
            <td>{{ $order->sender_message }}</td>
                <td>
                    {!! Form::open(['route' => ['orders.destroy', $order->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('orders.show', [$order->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('orders.edit', [$order->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
