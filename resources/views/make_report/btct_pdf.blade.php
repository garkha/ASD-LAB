@extends('layout.pdflayout')
@section('style')
@endsection

@section('body')
<h4>HAEMATOLOGY</h4>
<table id="test">
    <tr>
        <th>Test Name With Methodology</th>
        <th class="result">Result</th>
        <th class="Unit">Unit</th>
        <th class="Biological">Biological Ref.Interval</th>
    </tr>
    <tr>
        <td>BLEEDING TIME</td>
        <td>{{$test->BLEEDING_TIME}}</td>
        <td>Minute</td>
        <td>2 - 7</td>
    </tr>
    <tr>
        <td>CLOTTING TIME</td>
        <td>{{$test->CLOTTING_TIME}}</td>
        <td>Minute</td>
        <td>5 - 10</td>
    </tr>
</table>

<div id="end_report">
    <hr>
    <span>*** End Of Report ***</span>
</div>

@endsection



