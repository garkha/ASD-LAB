@extends('layout.pdflayout')
@section('style')
    <style>
        .temp_table{
            width: 100%;
            border-collapse: collapse;
        }
        .temp_table, .temp_table td, .temp_table th{
        border:1px solid black;
        text-align: left;
        font-size: 12px;
        }
        
    </style>
@endsection
@section('body')
<h4>IMMUNO BIOCHEMISTRY</h4>
<table id="test">
    <tr>
        <th>Test Name With Methodology</th>
        <th class="result">Result</th>
        <th class="Unit">Unit</th>
        <th class="Biological">Biological Ref.Interval</th>
    </tr>
    <tr>
        <th colspan="4">Glucose Fasting (Blood Glucose Fasting)</th>
    </tr>
    <tr>
        <td>Blood Sugar Fasting</td>
            @if ($test->fasting>100 || $test->fasting<70)
              <td class="value_heilight">{{$test->fasting}}</td>
            @else
              <td>{{$test->fasting}}</td>
            @endif
        <td>mg/dl </td>
        <td>70-100</td>
    </tr>
    <tr>
        <td style="font-size: 8px; line-height: 0.2cm;">Plasma Fluoride, Hexokinase</td>
    </tr>
</table>
<div class="comment">
    <h5>COMMENTS:</h5>
    <span style="font-size: 13px;">
        <b>Fasting blood sugar test.</b> Fasting Blood Sugar/Glucose test. A blood sample will be taken after an overnight fast. A fasting blood sugar level less than 100 mg/dL
        is normal. A fasting blood sugar level from 100 to 125 mg/dL is considered prediabetes. If it's 126 mg/dL or higher on two separate tests,
        you have diabetes. (American Diabetes Association)
    </span>
    <br><br>
</div>
<div id="end_report">
    <hr>
    <span>*** End Of Report ***</span>
</div>
@endsection



