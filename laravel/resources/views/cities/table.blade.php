<div class="table-responsive">
    <table class="table" id="cities-table">
        <thead>
            <tr>
                <th>District Id</th>
        <th>Name En</th>
        <th>Name Si</th>
        <th>Name Ta</th>
        <th>Sub Name En</th>
        <th>Sub Name Si</th>
        <th>Sub Name Ta</th>
        <th>Postcode</th>
        <th>Latitude</th>
        <th>Longitude</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($cities as $city)
            <tr>
                <td>{{ $city->district_id }}</td>
            <td>{{ $city->name_en }}</td>
            <td>{{ $city->name_si }}</td>
            <td>{{ $city->name_ta }}</td>
            <td>{{ $city->sub_name_en }}</td>
            <td>{{ $city->sub_name_si }}</td>
            <td>{{ $city->sub_name_ta }}</td>
            <td>{{ $city->postcode }}</td>
            <td>{{ $city->latitude }}</td>
            <td>{{ $city->longitude }}</td>
                <td>
                    {!! Form::open(['route' => ['cities.destroy', $city->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('cities.show', [$city->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('cities.edit', [$city->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
