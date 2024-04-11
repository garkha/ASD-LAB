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
            <th colspan='4'>CRP (C Reactive Protein) Qualitative</th>
        </tr>
        <tr>
            <td>CRP Qualitative</td>
            @if ($test->crp == "POSITIVE")
                <td class="value_heilight">{{$test->crp}}</td>
            @else
                <td>{{$test->crp}}</td>
            @endif
            <td>ug/mL</td>
            <td>NEGATIVE</td>
        </tr>
        <tr>
            <td style="font-size: 8px; line-height: 0.2cm;">Serum, Slide agglutination method</td>
        </tr>
    </table>
    <br><br>

    <div class='comment'>
        <span style='font-size: 13px;'>
            <b>COMMENT:</b><br>
            <span style='font-size: 11px;'>
                A C-reactive protein (CRP), a type of acute phase protein, is used to identify inflammation or infection in the body. CRP is an
                early indicator of these problems and its levels can rise quickly. 
            </span>
        </span>
    </div>

    <div id='end_report'>
        <hr>
        <span>*** End Of Report ***</span>
    </div>
@endsection
