@extends('layout.pdflayout')
@section('style')
<style>
    .temp_table{
        width: 100%;
        border-collapse: collapse;
        font-size: 12px;
        line-height: 0.3cm;
        width: 100%;
    }
    .temp_table, .temp_table td, .temp_table th{
        text-align: left
    }
    .temp_table th{
        text-decoration: underline;
    }
</style>
@endsection
@section('body')
    <h4>HAEMATOLOGY</h4>
    <table id='test'>
        <tr>
            <th>Test Name With Methodology</th>
            <th class='result'>Result</th>
            <th class='Unit'>Unit</th>
            <th class='Biological'>Biological Ref.Interval</th>
        </tr>
        <tr>
            <th colspan='4'>HbA1c (Glycated hemoglobin)</th>
        </tr>
        <tr>
            <td>Glycosylated Hb (HbA1c)</td>
            @if ($test->hb >6.5 || $test->hb<4.2)
                <td class="value_heilight">{{$test->hb}}</td>
            @else
                <td>{{$test->hb}}</td>
            @endif
            
            <td>%</td>
            <td>4.2 - 6.5</td>
        </tr>
        <tr>
            <td style="font-size: 8px; line-height: 0.2cm;">EDTA, HPLC</td>
        </tr>
        @if ($test->ag != null)
            <tr>
                <td>Average Glucose</td>
                @if ($test->ag >140 || $test->ag < 73)
                    <td class="value_heilight">{{$test->ag}}</td>
                @else
                    <td>{{$test->ag}}</td>
                @endif
                <td>mg/dl </td>
                <td>73-140</td>
            </tr>
            <tr>
                <td style="font-size: 8px; line-height: 0.2cm;">Calculated</td>
            </tr>
        @endif
    </table>

    <br><br>
    <table class="temp_table">
        <tr>
            <th colspan="2">Ref Range for HBA1c</th>
        </tr>
        <tr>
            <td style="width: 200px;">Non Diabetic : </td>
            <td>{{"< 5.7 %"}}</td>
        </tr>
        <tr>
            <td>Pre-Diabetic : </td>
            <td>5.7 - 6.5 % </td>
        </tr>
        <tr>
            <td>Diabetic : </td>
            <td>{{"> 6.5 %"}}</td>
        </tr>
        <tr>
            <td colspan="2">
                Remark : Hemoglobin A1c criteria for diagnosing diabetes have not been established for patients who are {{"<18"}} years of age.
            </td>
        </tr>
    </table>
    <br>
    <table class="temp_table">
        <tr>
            <th colspan="2">HbA1c goals in treatment of diabetes</th>
        </tr>
        <tr>
            <td style="width: 200px;">Ages 0-6 years : </td>
            <td>7.6% - 8.4%</td>
        </tr>
        <tr>
            <td> Ages 6-12 years : </td>
            <td>{{"<8%"}}</td>
        </tr>
        <tr>
            <td> Ages 13-19 years : </td>
            <td>{{"<7.5% "}}</td>
        </tr>
        <tr>
            <td>Adults : </td>
            <td>{{"<7%"}}</td>
        </tr>
    </table>
    <br>
    <div class='comment'>
        <span style='font-size: 13px;'>
            <b>COMMENT:</b><br>
            <span style='font-size: 11px;'>
                The Glycosylated Hemoglobin (HbA1c or A1c) test evaluates the average amount of glucose in the blood over the last 2 to 3 months.
                This test is used to monitor treatment in someone who has been diagnosed with diabetes. It helps to evaluate how well the person's
                glucose levels have been controlled by treatment over time. This test may be used to screen for and diagnose diabetes or risk of
                developing diabetes. Depending on the type of diabetes that a person has, how well their diabetes is controlled, and on doctor
                recommendations, the HbA1c test may be measured 2 to 4 times each year. The American Diabetes Association recommends HbA1c
                testing in diabetics at least twice a year. When someone is first diagnosed with diabetes or if control is not good, HbA1c may be ordered
                more frequently.
            </span><br>
            <span style='font-size: 11px; font-weight:bold;' >
                Note: If a person has anemia, few type of hemoglobinopathy, hemolysis, or heavy bleeding, HbA1c test results may be falsely
                low. If someone is iron-deficient, the HbA1c level may be increased. If a person has had a recent blood transfusion, the HbA1c
                may be inaccurate and may not accurately reflect glucose control for 2 to 3 months..
            </span>
        </span>
    </div>

    <div id='end_report'>
        <hr>
        <span>*** End Of Report ***</span>
    </div>
@endsection
