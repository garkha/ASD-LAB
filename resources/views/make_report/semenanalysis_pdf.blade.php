@extends('layout.pdflayout')
@section('style')
@endsection
@section('body')
    <h4>SPERM QUALITY ANALYSER</h4>
    <table id='test'>
        <tr>
            <th>Test Name</th>
            <th class='result'>Result</th>
            <th class='Unit' style="width: 100px;">Unit</th>
            <th class='Biological'>Biological Ref.Interval</th>
        </tr>
        <tr>
            <th colspan='4'>SEMEN ANALYSIS</th>
        </tr>
        <br>
        <tr>
            <td colspan="4>" style="font-weight: bold; text-decoration: underline">PHYSICAL EXAMINATION</td>
        </tr>

        <tr>
            <td>
                VOLUME
            </td>
                @if ($test->VOLUME > 3.5 or $test->VOLUME < 1.5)
                    <td class="value_heilight">{{$test->VOLUME}}</td>
                @else
                    <td>{{$test->VOLUME}}</td>
                @endif
            <td>ml</td>
            <td>1.5 - 3.5</td>
        </tr>
        <tr>
            <td>COLOUR</td>
            <td>{{$test->COLOUR}}</td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>REACTION</td>
            <td>{{$test->REACTION}}</td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>VISCOCITY</td>
            <td>{{$test->VISCOCITY}}</td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>LIQUEFACTION TIME</td>
            <td>{{$test->LIQUEFACTION_TIME}}</td>
            <td></td>
            <td></td>
        </tr>
        <br>

        <tr>
            <td colspan="4>" class="value_heilight">MICROSCOPIC EXAMINATION</td>
        </tr>
        <tr>
            <td>TOTAL SPERMCOUNT</td>
            @if ($test->TOTAL_SPERMCOUNT>150 || $test->TOTAL_SPERMCOUNT<60)
                <td class="value_heilight">{{$test->TOTAL_SPERMCOUNT}}</td>
            @else
                <td>{{$test->TOTAL_SPERMCOUNT}}</td>
            @endif
            
            <td>million / ml</td>
            <td>60-150</td>
        </tr>
        
        <br>
        <tr>
            <td colspan="4>" class="value_heilight">SPERM MOTILE</td>
        </tr>
        <tr>
            <td>ACTIVE</td>
            <td>{{$test->ACTIVE}}%</td>
            <td>%</td>
            <td></td>
        </tr>
        <tr>
            <td>SLUGGISH</td>
            <td>{{$test->SLUGGISH}}%</td>
            <td>%</td>
            <td></td>
        </tr>
        <tr>
            <td>NON-MOTILE</td>
            <td>{{$test->NON_MOTILE}}%</td>
            <td>%</td>
            <td></td>
        </tr>
        <tr>
            <td>PUS CELLS</td>
            @if ($test->PUS_CELLS>4 || $test->PUS_CELLS<2)
                <td class="value_heilight">{{$test->PUS_CELLS}}</td>
            @else
                <td>{{$test->PUS_CELLS}}</td>
            @endif
            <td>/HPF</td>
            <td>Range (2-4)</td>
        </tr>
        <tr>
            <td>EPITHELIAL CELLS </td>
            @if ($test->EPITHELIAL_CELLS>2 || $test->EPITHELIAL_CELLS<1)
                <td class="value_heilight">{{$test->EPITHELIAL_CELLS }}</td>
            @else
                <td>{{$test->EPITHELIAL_CELLS }}</td>
            @endif
            <td>/HPF</td>
            <td>Range (1-2)</td>
        </tr>
    </table>

    <br><br>

    <div class='comment'>
        <span style='font-size: 13px;'>
            <b>COMMENT:</b><br>
            <span style='font-size: 11px;'>
                PLEASE CORRELATE THE FINDINGS WITH CLINICAL CONDITIONS.
            </span>
        </span>
        <ul style="font-size: 12px; text-align:left; font-weight:bold;">
            <li>SPECIAL PRECAUTIONS BEFORE DOINGTESTS FROM ASD-LAB.</li>
        </ul>
        <p style="font-size: 12px; text-align:left;">
            <span style="font-weight: bold">SEMENANALYSIS : </span>
            Total abstention from intercourse or masturbation for 4 consecutive days. Sample must be given in the lab, ensuring that the first drop of
            semen is placed in the specified bottle. No accompaniment inside the toilet is allowed during sampling.
        </p>
    </div>

    <div id='end_report'>
        <hr>
        <span>*** End Of Report ***</span>
    </div>
@endsection
