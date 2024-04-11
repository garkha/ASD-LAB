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
            <th colspan='4'>Liver Panel (LFT)</th>
        </tr>
        
        <tr>
            <td>Total Bilirubin</td>
            <td>{{$test->Total_Bilirubin}}</td>
               
            <td>mg/dl</td>
            <td>0.1-1.2</td>
        </tr>
        <tr>
            <td style="font-size: 8px; line-height: 0.2cm;">Serum, DCA</td>
        </tr>
        
        <tr>
            <td>Conjugated Bilirubin</td>
            <td>{{$test->Conjugated_Bilirubin}}</td>
               
            <td>mg/dl</td>
            <td>0.0-0.3</td>
        </tr>
        <tr>
            <td style="font-size: 8px; line-height: 0.2cm;">Serum, DCA</td>
        </tr>
        
        <tr>
            <td>Unconjugated Bilirubin</td>
            <td>{{$test->Unconjugated_Bilirubin}}</td>
               
            <td>mg/dl</td>
            <td>0.2-0.7</td>
        </tr>
        <tr>
            <td style="font-size: 8px; line-height: 0.2cm;">Serum, Calculated</td>
        </tr>
        
        <tr>
            <td>SGOT (AST)</td>
             @if ($test->SGOT > 32 or $test->SGOT < 0)
                <td class="value_heilight">{{$test->SGOT}}</td>
             @else
                <td>{{$test->SGOT}}</td>
             @endif
               
            <td>IU/L</td>
            <td>0-32</td>
        </tr>
        <tr>
            <td style="font-size: 8px; line-height: 0.2cm;">Serum, Optimized UV test with IFCC</td>
        </tr>
        
        <tr>
            <td>SGPT (ALT)</td>
            @if ($test->SGPT > 33 or $test->SGPT < 0)
                <td class="value_heilight">{{$test->SGPT}}</td>
            @else
                <td>{{$test->SGPT}}</td>
            @endif
            
               
            <td>IU/L</td>
            <td>0-33</td>
        </tr>
        <tr>
            <td style="font-size: 8px; line-height: 0.2cm;">Serum, Optimized UV test with IFCC</td>
        </tr>
        
        <tr>
            <td>Alk.Phosphatase</td>
            <td>{{$test->Alk_Phosphatase}}</td>
               
            <td>IU/L</td>
            <td>142-335</td>
        </tr>
        <tr>
            <td style="font-size: 8px; line-height: 0.2cm;">Serum, Optimized UV test with IFCC</td>
        </tr>
        
        <tr>
            <td>T.Protein</td>
            @if ($test->T_Protein > 8.3 or $test->T_Protein < 6.4)
                <td class="value_heilight">{{$test->T_Protein}}</td>
            @else
                <td>{{$test->T_Protein}}</td>
            @endif
               
            <td>gm/dl </td>
            <td>6.4-8.3</td>
        </tr>
        <tr>
            <td style="font-size: 8px; line-height: 0.2cm;">Serum, Biuret</td>
        </tr>
        
        <tr>
            <td>Albumin</td>
            <td>{{$test->Albumin}}</td>
               
            <td>gm/dl</td>
            <td>3.5-5.2</td>
        </tr>
        <tr>
            <td style="font-size: 8px; line-height: 0.2cm;">Serum, Bromocresol Green</td>
        </tr>
        
        <tr>
            <td>Globulin</td>
            @if ($test->Globulin > 3.8 or $test->Globulin < 2.5)
                <td class="value_heilight">{{$test->Globulin}}</td>
            @else
                <td>{{$test->Globulin}}</td>
            @endif
               
            <td>gm/dl </td>
            <td>2.5-3.8</td>
        </tr>
        <tr>
            <td style="font-size: 8px; line-height: 0.2cm;">Serum, Calculated</td>
        </tr>
        
        <tr>
            <td>A/G Ratio</td>
            @if ($test->AG_Ratio > 1.70 or $test->AG_Ratio < 1.30)
                <td class="value_heilight">{{$test->AG_Ratio}}</td>
            @else
                <td>{{$test->AG_Ratio}}</td>
            @endif
            
               
            <td></td>
            <td>1.30 - 1.70</td>
        </tr>
        <tr>
            <td style="font-size: 8px; line-height: 0.2cm;">Serum, Calculated</td>
        </tr>
        
        
        
    </table>

    <br><br>

    <div class='comment'>
        <span style='font-size: 13px;'>
            <b>COMMENT:</b>
            <span style='font-size: 11px;'>
                A liver panel (Liver function test) or one or more of its component tests may be used to help diagnose liver disease if a person has symptoms that indicate possible liver dysfunction. If a person has a known condition or liver disease, testing may be performed at intervals to monitor liver status and to evaluate the effectiveness of any treatments.
            </span>
        </span>
    </div>

    <div id='end_report'>
        <hr>
        <span>*** End Of Report ***</span>
    </div>
@endsection
