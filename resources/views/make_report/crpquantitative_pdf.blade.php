@extends('layout.pdflayout')
@section('style')
@endsection
@section('body')
    <h4>IMMUNOLOGY ROUTINE</h4>
    <table id='test'>
        <tr>
            <th>Test Name With Methodology</th>
            <th class='result'>Result</th>
            <th class='Unit'>Unit</th>
            <th class='Biological'>Biological Ref.Interval</th>
        </tr>
        <tr>
            <th colspan='4'>CRP (C Reactive Protein) Quantitative</th>
        </tr>
        <tr>
            <td>CRP Quantitative</td>
            @if ($test->crp>6)
               <td class="value_heilight">{{$test->crp}}</td>
            @else
               <td>{{$test->crp}}</td>
            @endif
            <td>mg/l </td>
            <td>0 - 6</td>
        </tr>
        <tr>
            <td style="font-size: 8px; line-height: 0.2cm;">Immunoturbidimetry</td>
        </tr>
    </table>

    <br><br>

    <div class='comment'>
        <span style='font-size: 13px;'>
            <b>SUMMARY AND EXPLANATION OF THE TEST :</b><br>
            <span style='font-size: 11px;'>
                C- Reactive Protein (CRP),which is synthesized in the liver, is one of the most sensitive acute phase reactants after tissue
                damage or inflammation. The level can rise dramatically after myocardial infarction, stress, trauma, infection, inflammation,
                surgery or neoplastic proliferation. The increase occurs within 24 to 48 hours and level may be 200 times normal. An elevation
                can be expected in virtually all diseases involving tissue damage so the finding is nonspecific. Therefore, final diagnosis to be
                made considering both clinical and laboratory data.
            </span>
        </span>
    </div>

    <div id='end_report'>
        <hr>
        <span>*** End Of Report ***</span>
    </div>
@endsection
