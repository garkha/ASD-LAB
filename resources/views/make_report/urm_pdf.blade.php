@extends('layout.pdflayout')
@section('style')
@endsection
@section('body')
    <h4>CLINICAL PATHOLOGY</h4>
    <table id='test'>
        <tr>
            <th>Test Name With Methodology</th>
            <th class='result'>Result</th>
            <th class='Unit'>Unit</th>
            <th class='Biological'>Biological Ref.Interval</th>
        </tr>
        <tr>
            <th colspan='4'>Urine R/M (Urine Analysis)</th>
        </tr>
        <tr>
            <td colspan="4>" class="value_heilight">PHYSICAL EXAMINATION</td>
        </tr>
        <tr>
            <td>
                Color
            </td>
            <td>{{$test->Color}}</td>
            <td></td>
            <td>Pale Yellow</td>
        </tr>
        <tr>
            <td style="font-size: 8px; line-height: 0.2cm;">Urine, Visual</td>
        </tr>

        <tr>
            <td>Transparencybr>
            </td>
            <td>{{$test->Transparency}}</td>
            <td></td>
            <td>Clear</td>
        </tr>
        <tr>
            <td style="font-size: 8px; line-height: 0.2cm;">Visual</td>
        </tr>

        <tr>
            <td>pH</td>
            @if ($test->pH > 7.5 or $test->pH < 4.7)
                  <td class="value_heilight">{{$test->pH}}</td>
            @else
                  <td>{{$test->pH}}</td>
            @endif
            <td></td>
            <td>4.7-7.5</td>
        </tr>
        <tr>
            <td style="font-size: 8px; line-height: 0.2cm;">Double indicator</td>
        </tr>

        <tr>
            <td>Specific Gravity</td>
            @if ($test->Specific_Gravity > 1.035 or $test->Specific_Gravity < 1.005)
                  <td class="value_heilight">{{$test->Specific_Gravity}}</td>
            @else
                  <td>{{$test->Specific_Gravity}}</td>
            @endif
            <td></td>
            <td>1.005-1.035</td>
        </tr>
        <tr>
            <td style="font-size: 8px; line-height: 0.2cm;">Urine, Hydrogenous ionogen reaction</td>
        </tr>

        <br>
        <tr>
            <td colspan="4>" style="font-weight: bold; text-decoration: underline; padding-bottom:5px;">PHYSICAL EXAMINATION</td>
        </tr>
        <tr>
            <td>Urine Glucose
            </td>
            @if ($test->Urine_Glucose != "Negative")
              <td class="value_heilight">{{$test->Urine_Glucose}}</td>
            @else
            <td>{{$test->Urine_Glucose}}</td>
            @endif
            <td></td>
            <td>Negative</td>
        </tr>
        <tr>
            <td style="font-size: 8px; line-height: 0.2cm;">Urine, Oxidation reaction</td>
        </tr>

        <tr>
            <td>Urine Protein</td>
            @if ($test->Urine_Protein !="Negative")
               <td class="value_heilight">{{$test->Urine_Protein}}</td>
            @else
               <td>{{$test->Urine_Protein}}</td>
            @endif
            <td></td>
            <td>Negative</td>
        </tr>
        <tr>
            <td style="font-size: 8px; line-height: 0.2cm;">Urine, Protein ionization</td>
        </tr>

        <tr>
            <td>Urine Bilirubin</td>
            @if ($test->Urine_Bilirubin != "Negative")
               <td class="value_heilight">{{$test->Urine_Bilirubin}}</td>
            @else
               <td>{{$test->Urine_Bilirubin}}</td>
            @endif
            <td></td>
            <td>Negative</td>
        </tr>
        <tr>
            <td style="font-size: 8px; line-height: 0.2cm;">Urine, Azo- coupling reaction</td>
        </tr>

        <tr>
            <td>Ketones</td>
            @if ($test->Ketones != "Negative")
                <td class="value_heilight">{{$test->Ketones}}</td>
            @else
                <td>{{$test->Ketones}}</td>
            @endif
            <td></td>
            <td>Negative</td>
        </tr>
        <tr>
            <td style="font-size: 8px; line-height: 0.2cm;">Urine, Acetoacetate and nitroprusside reaction</td>
        </tr>


        <tr>
            <td>Blood</td>
            @if ($test->Blood != "Negative")
                <td class="value_heilight">{{$test->Blood}}</td>
            @else
                <td>{{$test->Blood}}</td>
            @endif
            <td></td>
            <td>Negative</td>
        </tr>
        <tr>
            <td style="font-size: 8px; line-height: 0.2cm;">Urine, perroxiase reaction</td>
        </tr>

        <tr>
            <td>Leukocytes Est</td>
            @if ($test->Leukocytes_Est == "Positive" || $test->Leukocytes_Est == "Seen")
                <td class="value_heilight">{{$test->Leukocytes_Est}}</td>
            @else
                <td>{{$test->Leukocytes_Est}}</td>
            @endif
            <td></td>
            <td>Negative</td>
        </tr>
        <tr>
            <td style="font-size: 8px; line-height: 0.2cm;">Urine, Esterases</td>
        </tr>
        
        <br>
        <tr>
            <td colspan="4>" class="value_heilight">MICROSCOPIC EXAMINATION</td>
        </tr>

        <tr>
            <td>Pus Cells</td>
            @if ($test->Pus_Cells>5 || $test->Pus_Cells<3)
                <td class="value_heilight">{{$test->Pus_Cells}}</td>
            @else
                <td>{{$test->Pus_Cells}}</td>
            @endif
            <td>/hpf</td>
            <td>3-5</td>
        </tr>
        <tr>
            <td style="font-size: 8px; line-height: 0.2cm;">Urine, Manual Microscopic</td>
        </tr>

        <tr>
            <td>Epithelial Cells</td>
            @if ($test->Epithelial_Cells >5 || $test->Epithelial_Cells<3)
                <td class="value_heilight">{{$test->Epithelial_Cells}}</td>
            @else
                <td>{{$test->Epithelial_Cells}}</td>
            @endif
            <td>/hpf</td>
            <td>3-5</td>
        </tr>
        <tr>
            <td style="font-size: 8px; line-height: 0.2cm;">Urine, Manual Microscopic</td>
        </tr>

        <tr>
            <td>R.B.C</td>
            @if ($test->Rbc != "Not Seen" || $test->Rbc == "Positive")
                <td class="value_heilight">{{$test->Rbc}}</td>
            @else
                <td>{{$test->Rbc}}</td> 
            @endif
            <td>/hpf</td>
            <td>Not Seen</td>
        </tr>
        <tr>
            <td style="font-size: 8px; line-height: 0.2cm;">Manual Microscopic</td>
        </tr>

        <tr>
            <td>Crystals</td>
            @if ($test->Crystals != "Not Seen" || $test->Crystals == "Positive")
                <td class="value_heilight">{{$test->Crystals}}</td>
            @else
                <td>{{$test->Crystals}}</td>
            @endif
            <td>/hpf</td>
            <td>Not Seen</td>
        </tr>
        <tr>
            <td style="font-size: 8px; line-height: 0.2cm;">Urine, Manual Microscopic</td>
        </tr>

        <tr>
            <td>Casts</td>
            @if ($test->Leukocytes_Est != "Not Seen" || $test->Leukocytes_Est == "Positive")
                <td class="value_heilight">{{$test->Leukocytes_Est}}</td>
            @else
                <td>{{$test->Leukocytes_Est}}</td>
            @endif
            
            <td>/lpf</td>
            <td>Not Seen</td>
        </tr>
        <tr>
            <td style="font-size: 8px; line-height: 0.2cm;">Urine, Manual Microscopic</td>
        </tr>

        <tr>
            <td>Bacteria</td>
            @if ($test->Bacteria != "Not Seen" || $test->Bacteria == "Positive")
               <td class="value_heilight">{{$test->Bacteria}}</td>
            @else
               <td>{{$test->Bacteria}}</td>
            @endif
            <td>/hpf</td>
            <td>Not Seen</td>
        </tr>
        <tr>
            <td style="font-size: 8px; line-height: 0.2cm;">Manual Microscopic</td>
        </tr>

        <tr>
            <td>Others
                
            </td>
            <td>{{$test->Others}}</td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td style="font-size: 8px; line-height: 0.2cm;">Serum</td>
        </tr>

    </table>

    <br><br>

    
    <div id='end_report'>
        <hr>
        <span>*** End Of Report ***</span>
    </div>
@endsection
