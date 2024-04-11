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
            <th colspan="4">ABO Group & RH Type (Blood Group)</th>
        </tr>
        <tr>
            <td>Blood Group</td>
            <td>{{$test->blood_group}}</td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>Rh Factor</td>
            <td>{{$test->rh_typing}}</td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td colspan="4">
                <span class="method_name">
                    Method: Agglutination
                </span>
            </td>
        </tr>
    </table>
    <div id="end_report">
        <hr>
        <span>*** End Of Report ***</span>
    </div>
@endsection



