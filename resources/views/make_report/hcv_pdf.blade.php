@extends('layout.pdflayout')
@section('style')
@endsection
@section('body')
    <h4>SEROLOGY</h4>
    <table id='test'>
        <tr>
            <th>Test Name With Methodology</th>
            <th class='result'>Result</th>
            <th class='Unit'>Unit</th>
            <th class='Biological'>Biological Ref.Interval</th>
        </tr>
        <tr>
            <th colspan='4'>Hepatitis C virus (HCV Rapid)</th>
        </tr>
        <tr>
            <td>HCV (Rapid)</td>
            @if ($test->hcv == "REACTIVE")
                <td class="value_heilight">{{$test->hcv}}</td>
            @else
                <td>{{$test->hcv}}</td>
            @endif
           
            <td></td>
            <td>Non Reactive</td>
        </tr>
        <tr>
            <td style="font-size: 8px; line-height: 0.2cm;">Serum, Rapid immuno chromatographic</td>
        </tr>
    </table>
    <br><br>
    <div class="comment">
        <span style="font-size: 13px;">
            <b>Comment:</b> This test is used for the detection of antibodies to Hepatitis C virus in human serum or plasma. A positive test result
            indicates presence of antibodies to Hepatitis C virus. A negative test result indicates absence of antibodies to Hepatitis C virus.
        </span>
        <br><br>
    </div>
    <div id="end_report">
        <hr>
        <span>*** End Of Report ***</span>
    </div>
@endsection
