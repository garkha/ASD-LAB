@extends('layout.pdflayout')
@section('style')
    <style>
        .temp_table{
            width: 100%;
            border-collapse: collapse;
            font-size: 12px;
            line-height: 0.3cm;
            width: 40%;
        }
        .temp_table, .temp_table td, .temp_table th{
            text-align: left;
            border: 1px solid black;
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
            <th colspan='4'>Glucose Tolerance Test (GTT) 3 Sample</th>
        </tr>
        @if ($test->bs_fasting != null)
            <tr>
                <td>Blood Sugar Fasting</td>
                @if ($test->bs_fasting>110 || $test->bs_fasting<70)
                    <td class="value_heilight">{{$test->bs_fasting}}</td>
                @else
                    <td>{{$test->bs_fasting}}</td>
                @endif
                <td>mg/dl </td>
                <td>70-110</td>
            </tr>
            <tr>
                <td style="font-size: 8px; line-height: 0.2cm;">Plasma Fluoride, Hexokinase</td>
            </tr>
        @endif

        @if ($test->bs_after_one_hour !=null)
            <tr>
                <td>Blood Sugar 1 Hour</td>
                @if ($test->bs_after_one_hour>180 || $test->bs_after_one_hour<70)
                <td class="value_heilight">{{$test->bs_after_one_hour}}</td>
                @else
                <td>{{$test->bs_after_one_hour}}</td>
                @endif
                <td>mg/dl </td>
                <td>{{"<180"}}</td>
            </tr>
            <tr>
                <td style="font-size: 8px; line-height: 0.2cm;">Plasma Fluoride, Hexokinase</td>
            </tr>
        @endif
        
        @if ($test->bs_after_two_hour != null)
            <tr>
                <td>Blood Sugar Fasting</td>
                @if ($test->bs_after_two_hour>153 || $test->bs_after_two_hour<70)
                <td class="value_heilight">{{$test->bs_after_two_hour}}</td>
                @else
                <td>{{$test->bs_after_two_hour}}</td>
                @endif
                <td>mg/dl </td>
                <td>{{"<153"}}</td>
            </tr>
            <tr>
                <td style="font-size: 8px; line-height: 0.2cm;">Plasma Fluoride, Hexokinase</td>
            </tr>
        @endif
    </table>

    <br><br>

    <div class='comment'>
        <span style='font-size: 13px;'>
            <b>COMMENT:</b> <br>
            <span style='font-size: 11px;'>
                The International Association of Diabetes and Pregnancy Study Groups (IADPSG) recommended 75 gm OGTT for all pregnant women
                (at 24-28 weeks gestation) and diagnosed GDM if one or more plasma venous glucose values exceeded the following thresholds: fasting
                >92 mg/dl, one hour ?180.0 mg/dl, or two hour ?153 mg/dl. The WHO (2013) and ADA (2014) have accepted the IADPSG criteria.
            </span>
        </span>
    </div>
    <br>
    <table class="temp_table">
        <tr>
            <th style="width: 60%;">Time</th>
            <th>Plasma Glucose level, Reference Range in mg/dL </th>
        </tr>
        <tr>
            <td>Basal (Fasting)</td>
            <td>{{"<"}}92</td>
        </tr>
        <tr>
            <td>After 1 hour</td>
            <td>{{"<"}}180</td>
        </tr>
        <tr>
            <td>After 2 hours</td>
            <td>{{"<"}}153</td>
        </tr>
    </table>
    <br>
    <p>If results are normal in clinically suspected cases, test must be repeated in the third trimester.</p>

    <div id='end_report'>
        <hr>
        <span>*** End Of Report ***</span>
    </div>
@endsection
