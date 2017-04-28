@extends('master2')

@section('title','Schedule')

@section('content')
    <h2>Cities matching {{ $city }}%</h2>
    <h3>{{ $count }} zip codes were located</h3>
@endsection

@section ('footer')
<hr>
    <table border="1">
        <tr>
            <th>City</th>
            <th>State</th>
            <th>Postal Code</th>
        </tr>
    @foreach($rows as $row)
        <tr>
            @foreach($row as $field)
                <td>&nbsp;{{ $field }}&nbsp;</td>
                @endforeach
        </tr>
        @endforeach
    </table>
@endsection
