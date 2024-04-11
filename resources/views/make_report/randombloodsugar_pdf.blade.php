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
    <table id='test'>
        <tr>
            <th>Test Name With Methodology</th>
            <th class='result'>Result</th>
            <th class='Unit'>Unit</th>
            <th class='Biological'>Biological Ref.Interval</th>
        </tr>
        <tr>
            <th colspan='4'>Random glucose</th>
        </tr>
        <tr>
            <td>Random Blood Sugar</td>
                @if ($test->random_sugar>160 || $test->random_sugar<80)
                  <td class="value_heilight">{{$test->random_sugar}}</td>
                @else
                  <td>{{$test->random_sugar}}</td>
                @endif
            <td>mg/dl </td>
            <td>80-160</td>
        </tr>
        <tr>
            <td style="font-size: 8px; line-height: 0.2cm;">Plasma Fluoride, Hexokinase</td>
        </tr>
    </table>
    <div class="comment">
        <h5>Interpretation:</h5>
        <span style="font-size: 13px;">
            <b>Fasting blood sugar test.</b> A blood sample will be taken after an overnight fast. A fasting blood sugar level less than 100
            mg/dL is normal. A fasting blood sugar level from 100 to 125 mg/dL is considered prediabetes. If it's 126 mg/dL or
            higher on two separate tests, you have diabetes.
        </span>
        <br><br>
        <span style="font-size: 13px;">
            <b>Post-prandial Blood Sugar test.</b> A blood sugar level less than 140 mg/dL is normal. A reading of more than 200 mg/dL
            after two hours indicates diabetes. A reading between 140 and 199 mg/dL indicates prediabetes.
        </span>
        <br><br>
        <table class="temp_table">
            <tr>
                <th>Plasma glucose test</th>
                <th>Normal</th>
                <th>Prediabetes</th>
                <th>Diabetes</th>
            </tr>
            <tr>
                <th>Fasting (FBS) </th>
                <td>Below 100 mg/dl </td>
                <td>100 to 125 mg/dl </td>
                <td>126 mg/dl or more</td>
            </tr>
            <tr>
                <th>2 hour post-prandial (PPBS)</th>
                <td>Below 140 mg/dl </td>
                <td>140 to 199 mg/dl </td>
                <td>200 mg/dl or more</td>
            </tr>
        </table>
    </div>
    <div id="end_report">
        <hr>
        <span>*** End Of Report ***</span>
    </div>
    </table>
@endsection
