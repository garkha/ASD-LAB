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
            <th colspan='4'>HBsAg (Rapid)</th>
        </tr>
        <tr>
            <td>HBSAG (Rapid)</td>
            @if ($test->hbsag == "Reactive")
                <td class="value_heilight">{{$test->hbsag}}</td>
            @else
                <td>{{$test->hbsag}}</td>
            @endif
            <td>ug/mL</td>
            <td>Non Reactive</td>
        </tr>
        <tr>
            <td style="font-size: 8px; line-height: 0.2cm;">Serum, Rapid immunochromatographic</td>
        </tr>
    </table>

    <br><br>

    <div class='comment'>
        <span style='font-size: 13px;'>
            <b>COMMENT:</b><br>
            <span style='font-size: 11px;'>
                This screening test is used to detects Hepatitis B surface antigen (HBsAg). HBsAg is a protein antigen produced by Hepatitis B virus (HBV). This antigen is the
                earliest indicator of acute hepatitis B and frequently identifies infected people before symptoms appear. HbsAg disappears from the blood during the recovery
                period. Positive report indicates HBV infection, this needs to be further confirmed with ELISA or Real time PCR.

            </span>
        </span>
    </div>

    <div id='end_report'>
        <hr>
        <span>*** End Of Report ***</span>
    </div>
@endsection
