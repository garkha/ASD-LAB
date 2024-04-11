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
            <td>Urine Pregnancy Test</td>
            @if ($test->UPT == "Positive")
                <td class="value_heilight">{{$test->UPT}}</td>
            @else
                <td>{{$test->UPT}}</td>
            @endif
            <td></td>
            <td>Negative</td>
        </tr>
        <tr>
            <td style="font-size: 8px; line-height: 0.2cm;">Immunochemical sandwich assay</td>
        </tr>
    </table>

    <br><br>

    <div class='comment'>
        <span style='font-size: 13px;'>
            <b>{{strtoupper("Interpretation")}} :</b> <br>
            <span style='font-size: 11px;'>
                Urine Pregnancy test have 99% sensitivity, hence the result must be co-related with clinical findings and ultrasound report.
                <ul>
                    <li>In addition to pregnancy elevated hCG levels have been reported with gestation and non-gestational trophoblastic disease.</li>
                    <li>Very early pregnancy contaning low concentration of hormone in urine can give a negative result. In such cases urine should be retested after proper interval.</li>
                    <li>HCG level remain detectable for several weeks after normal delivery after casearean, spontaneous abortion or therapeutic abortion.</li>
                    <li>Even very high levels of hCG give test results as weak positive or negative. Ectopic pregnancy may also give weak positive results.</li>
                    <li>Urine sample with infections and samples with low specific gravity may not give satisfactory results.</li>
                </ul>
            </span>
        </span>
        
    </div>

    <div id='end_report'>
        <hr>
        <span>*** End Of Report ***</span>
    </div>
@endsection
