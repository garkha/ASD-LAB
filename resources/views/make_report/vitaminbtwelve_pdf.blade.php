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
            <th colspan='4'>Vitamin B12 (Cynocobalamin)</th>
        </tr>
        <tr>
            <td>Vitamin B12 Level</td>
                @if ($test->vitaminb>100 || $test->vitaminb<70)
                  <td class="value_heilight">{{$test->vitaminb}}</td>
                @else
                  <td>{{$test->vitaminb}}</td>
                @endif
            <td>pg/ml</td>
            <td>197-711</td>
        </tr>
        <tr>
            <td style="font-size: 8px; line-height: 0.2cm;">Serum, Electro Chemi Luminescent Immuno Assay</td>
        </tr>
    </table>
    <br><br>
    <div class="comment">
        <span style="font-size: 13px;">
            <b>COMMENT:</b> 
            <span style="font-size: 11px;">Vitamin B12 (cobalamin) is an important water-soluble vitamin. In contrast to other water-soluble vitamins it is not excreted quickly in the urine, but rather accumulates and is stored in the liver, kidney and other body tissues. Humans obtain Vitamin B12 exclusively from animal dietary sources, such as meat, eggs and milk. As a result,
                a vitamin B12 deficiency may not manifest itself until after 5 or 6 years of a diet supplying inadequate amounts. Vitamin B12 functions as a methyl donor and works
                with folic acid in the synthesis of DNA and red blood cells and is vitally important in maintaining the health of the insulation sheath (myelin sheath) that surrounds
                nerve cells. Preservatives such as fluorides & ascorbic acid interfere with this assay. Excessive exposure of the specimen to light may alter Vitamin B12 result. <br>
                <b>Kindly correlate with clinical conditions.</b>
            </span> 
        </span>
        <br><br>
    </div>
    <div id="end_report">
        <hr>
        <span>*** End Of Report ***</span>
    </div>
@endsection
