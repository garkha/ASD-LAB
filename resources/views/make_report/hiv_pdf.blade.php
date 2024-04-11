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
            <th colspan='4'>HIV I & II Serology (Rapid)</th>
        </tr>
        <tr>
            <td>HIV I & II Serology (Rapid)</td>
            @if ($test->hiv == "REACTIVE")
                <td class="value_heilight">{{$test->hiv}}</td>
            @else
                <td>{{$test->hiv}}</td>
            @endif
           
            <td></td>
            <td>Non Reactive</td>
        </tr>
        <tr>
            <td style="font-size: 8px; line-height: 0.2cm;">Serum,Rapid immunochromatographic</td>
        </tr>
    </table>
    <br><br>
    <div class="comment">
        <span style="font-size: 13px;">
            <b>COMMENT:</b> The differential detection of hiv-1 & hiv-2 antibodies (IgG) in human serum or plasma using hiv-1 & hiv-2 .the test is a screening test for anti hiv-1 and hiv-2. A
            positive test indicates hiv-1/hiv-2 presence hiv-1 & hiv-2 antibodies (IgG).this indicates hiv-1/hiv-2 infection but needs to be further confirmed.
        </span>
        <br><br>
        <span><b>*Results relate only to the sample, as received</b></span>
        <br><br>
    </div>
    <div id="end_report">
        <hr>
        <span>*** End Of Report ***</span>
    </div>
@endsection
