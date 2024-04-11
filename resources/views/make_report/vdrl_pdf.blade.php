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
            <th colspan='4'>VDRL Test (RPR)</th>
        </tr>
        <tr>
            <td>RPR</td>
            @if ($test->rpr == "REACTIVE")
                <td class="value_heilight">{{$test->rpr}}</td>
            @else
                <td>{{$test->rpr}}</td>
            @endif
           
            <td></td>
            <td>Non Reactive</td>
        </tr>
        <tr>
            <td style="font-size: 8px; line-height: 0.2cm;">Serum, Rapid immunochromatographic</td>
        </tr>
    </table>
    <br><br>
    <div class="comment">
        <span style="font-size: 13px;">
            <b>COMMENT:</b> <span style="font-size: 11px;">This is a screening test for syphilis which is useful for following the progression of disease and response to therapy.
                Syphilis is a sexually transmitted (venereal) disease caused by the spirochete Treponema pallidum. The disease can also be transmitted congenitally thereby
                attaining its importance in antenatal screening. After infection the host forms non-treponemal anti lipoidal antibodies (reagins) to the lipoidal material released from
                the damaged host cells as well as treponema specific antibodies. Serological tests for nontreponemal antibodies such as VDRL, RPR, etc. are useful as screening
                tests. Tests for treponema specific antibodies such as TPHA, rapid treponema antibody tests are gaining importance as screening as well as confirmatory tests
                because they detect the presence of antibodies specific to Treponema pallidum.</span> 
        </span>
        <br><br>
    </div>
    <div id="end_report">
        <hr>
        <span>*** End Of Report ***</span>
    </div>
@endsection
