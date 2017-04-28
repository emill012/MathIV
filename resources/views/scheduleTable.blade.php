@extends('master2')

@section('title','Schedule')

@section('content')
    <h2>Cities matching {{ $city }}%</h2>
    <h3>{{ $count }} zip codes were located</h3>
@endsection

@section ('footer')
<hr>
    <table border="1">
    @foreach($columns as $column)
        <tr>
            @foreach($column as $name)
                <th>&nbsp;{{ $name }}&nbsp;</th>
                @endforeach
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
