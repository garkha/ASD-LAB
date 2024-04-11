@extends('layout.pdflayout')
@section('style')
@endsection
@section('body')
    <h4>IMMUNO BIOCHEMISTRY</h4>
    <table id='test'>
        <tr>
            <th>Test Name With Methodology</th>
            <th class='result'>Result</th>
            <th class='Unit'>Unit</th>
            <th class='Biological'>Biological Ref.Interval</th>
        </tr>
        <tr>
            <th colspan='4'>Kidney Function Test (KFT)</th>
        </tr>
        <tr>
            <td>
                Blood Urea
            </td>
               @if ($test->Blood_Urea > 36 or $test->Blood_Urea < 15)
                  <td style="text-decoration: underline; font-weight: bold;">{{$test->Blood_Urea}}</td>
               @else
                  <td>{{$test->Blood_Urea}}</td>
               @endif
            <td>mg/dL</td>
            <td>15-36</td>
        </tr>
        <tr>
            <td style="font-size: 8px; line-height: 0.2cm;">Serum, Urease, GLDH</td>
        </tr>

        <tr>
            <td>
                Serum Creatinine 
            </td>
               @if ($test->Serum_Creatinine > 0.9 or $test->Serum_Creatinine < 0.5)
                  <td style="text-decoration: underline; font-weight: bold;">{{$test->Serum_Creatinine}}</td>
               @else
                  <td>{{$test->Serum_Creatinine}}</td>
               @endif
            <td>mg/dL</td>
            <td>0.5-0.9</td>
        </tr>
        <tr>
            <td style="font-size: 8px; line-height: 0.2cm;">Serum, Jaffes</td>
        </tr>

        <tr>
            <td>
                Uric Acid
            </td>
               @if ($test->Uric_Acid > 5.7 or $test->Uric_Acid < 2.4)
                  <td style="text-decoration: underline; font-weight: bold;">{{$test->Uric_Acid}}</td>
               @else
                  <td>{{$test->Uric_Acid}}</td>
               @endif
            <td>mg/dL</td>
            <td>2.4-5.7</td>
        </tr>
        <tr>
            <td style="font-size: 8px; line-height: 0.2cm;">Serum, Uricase</td>
        </tr>

        <tr>
            <td>
                Sodium
            </td>
               @if ($test->Sodium > 148 or $test->Sodium < 135)
                  <td style="text-decoration: underline; font-weight: bold;">{{$test->Sodium}}</td>
               @else
                  <td>{{$test->Sodium}}</td>
               @endif
            <td>mmol/L</td>
            <td>135-148</td>
        </tr>
        <tr>
            <td style="font-size: 8px; line-height: 0.2cm;">Serum, Ion Selective Electrode</td>
        </tr>

        <tr>
            <td>
                Potassium
            </td>
               @if ($test->Potassium > 5.5 or $test->Potassium < 3.7)
                  <td style="text-decoration: underline; font-weight: bold;">{{$test->Potassium}}</td>
               @else
                  <td>{{$test->Potassium}}</td>
               @endif
            <td>mmol/L</td>
            <td>3.7-5.5</td>
        </tr>
        <tr>
            <td style="font-size: 8px; line-height: 0.2cm;">Serum, Ion Selective Electrode</td>
        </tr>

        <tr>
            <td>
                Chloride
            </td>
               @if ($test->Chloride > 107 or $test->Chloride < 98)
                  <td style="text-decoration: underline; font-weight: bold;">{{$test->Chloride}}</td>
               @else
                  <td>{{$test->Chloride}}</td>
               @endif
            <td>mmol/L</td>
            <td>98-107</td>
        </tr>
        <tr>
            <td style="font-size: 8px; line-height: 0.2cm;">Serum, Ion Selective Electrode</td>
        </tr>

        <tr>
            <td>
                BUN (Blood Urea Nitrogen)
            </td>
               @if ($test->Blood_Urea_Nitrogen > 18.0 or $test->Blood_Urea_Nitrogen < 4.0)
                  <td style="text-decoration: underline; font-weight: bold;">{{$test->Blood_Urea_Nitrogen}}</td>
               @else
                  <td>{{$test->Blood_Urea_Nitrogen}}</td>
               @endif
            <td>mg/dl</td>
            <td>4.0-18.0</td>
        </tr>
        <tr>
            <td style="font-size: 8px; line-height: 0.2cm;">Serum, Calculated</td>
        </tr>

        <tr>
            <td>
                BUN/Creatinine Ratio
            </td>
               @if ($test->Creatinine_Ratio > 20 or $test->Creatinine_Ratio < 10)
                  <td style="text-decoration: underline; font-weight: bold;">{{$test->Creatinine_Ratio}}</td>
               @else
                  <td>{{$test->Creatinine_Ratio}}</td>
               @endif
            <td>Ratio</td>
            <td>10-20</td>
        </tr>
        <tr>
            <td style="font-size: 8px; line-height: 0.2cm;">Serum, Calculated</td>
        </tr>
        
    </table>

    <br><br>

    <div class='comment'>
        <span style='font-size: 13px;'>
            <b>COMMENT:</b><br>
            <span style='font-size: 11px;'>
                Kindly correlate clinically. Advise for recheck from fresh sample in case, it is not correlation clinically, to rule out any pre-analytical error.
            </span>
        </span>
    </div>

    <div id='end_report'>
        <hr>
        <span>*** End Of Report ***</span>
    </div>
@endsection
