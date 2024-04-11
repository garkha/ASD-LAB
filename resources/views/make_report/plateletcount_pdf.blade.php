@extends('layout.pdflayout')
@section('style')
@endsection
@section('body')
    <h4>HAEMATOLOGY</h4>
    <table id='test'>
        <tr>
            <th>Test Name With Methodology</th>
            <th class='result'>Result</th>
            <th class='Unit'>Unit</th>
            <th class='Biological'>Biological Ref.Interval</th>
        </tr>
        <tr>
            <th colspan='4'></th>
        </tr>
        <tr>
            <td>Platelet Count</td>
                @if ($test->platelet>410 || $test->platelet<150)
                  <td class="value_heilight">{{$test->platelet}}</td>
                @else
                  <td>{{$test->platelet}}</td>
                @endif
            <td>thou/µL</td>
            <td>150-410</td>
        </tr>
        <tr>
            <td style="font-size: 8px; line-height: 0.2cm;">Whole Blood EDTA, Impedance</td>
        </tr>
        @if ($test->reamrak)
            <tr>
                <td>Reamrak : {{$test->reamrak}}</td>
            </tr>
        @endif
        
    </table>
    <br><br>
    <div id='end_report'>
        <hr>
        <span>*** End Of Report ***</span>
    </div>
@endsection
