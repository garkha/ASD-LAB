@extends('layout.pdflayout')
@section('style')
<style>
    .comment{
        width: 100%;
        border-collapse: collapse;
        line-height: 15px;
    }

    .comment td{
        border: 1px solid;
        padding-left: 5px;
    }
</style>
@endsection
@section('body')
    <h4>SEROLOGY</h4>
    <table id='test'>
        <tr>
            <th>Test Name With Methodology</th>
            <th class='result'>Result</th>
            <th class='Unit'>Unit</th>
            <th class='Biological'>Biological Ref.Interval</th>
        </tr>
        <tr>
            <td>Dengue NS1 antigen, serum </td>
            @if ($test->dengue >0.9)
               <td class="value_heilight">{{$test->dengue}}</td>
            @else
               <td>{{$test->dengue}}</td>
            @endif
            <td>UNIT</td>
            <td>{{"< 0.9"}}</td>
        </tr>
        <tr>
            <td style="font-size: 8px; line-height: 0.2cm;">Method : Immunofluorescent ELISA</td>
        </tr>
    </table>
    <br><br>
    <div class='comment'>
        <span style='font-size: 11px;'>
            <b>INTERPRETATION :</b>
            <table class="comment">
                <tr>
                    <td>Negative</td>
                    <td>Units</td>
                    <td>{{"< 0.9 "}}</td>
                </tr>
                <tr>
                    <td>Equivocal</td>
                    <td>Units</td>
                    <td>{{"0.9 - 1.1 "}}</td>
                </tr>
                <tr>
                    <td>Positive</td>
                    <td>Units</td>
                    <td>{{"> 1.1"}}</td>
                </tr>
            </table>
            <p style="font-weight:bold; font-size:10px;">
                This is a fluorescence immunoassay based sandwich automated ELISA test for the quantitative detection of the specific NS-1 Dengue antigen
            </p>
            <p>
                The test becomes positive within 0-9 days of exposure to the virus (positive results are obtained within 24 hours of exposure in the overwhelming majority of patients) and
                generally remains positive till 15 days after exposure. The Dengue NS-1 antigen test is extremely useful in the early diagnosis of the disease thus helping in proper follow up
                and monitoring of the patients.
            </p>
            <p>
                The IgM antibodies on the other hand take a minimum of 5-10 days in primary infection and 4-5 days in secondary infections to test positive and hence are suitable for the
                diagnosis of dengue fever only when the fever is approximately one week old.
            </p>
            
        </span>
    </div>

    <div id='end_report'>
        <hr>
        <span>*** End Of Report ***</span>
    </div>
@endsection
