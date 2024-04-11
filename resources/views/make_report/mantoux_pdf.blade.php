@extends('layout.pdflayout')
@section('style')
@endsection
@section('body')
    <h4>MANTOUX TEST</h4>
    <table id='test'>
        <tr>
            <th>Test Name</th>
            <th class='result' style="width:200px;">Result</th>
            <th class='Unit'>Unit</th>
            <th class='Biological'>Biological Ref.Interval</th>
        </tr>
        <tr>
            <td>DATE OF INOCULATION</td>
            <td>{{date_format(date_create($test->Date_of_inoculation),"d-m-Y h:i A")}}</td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>DATE OF REPORTING</td>
            <td>{{date_format(date_create($test->Date_of_reporting),"d-m-Y h:i A")}}</td>
            <td></td>
            <td></td>
        </tr>
    
        <tr>
            <td>ANTIGEN</td>
            <td>{{$test->ANTIGEN}}</td>
            <td></td>
            <td></td>
        </tr>

        <tr>
            <td>DOSE</td>
            <td>{{$test->DOSE}}</td>
            <td>T.U.</td>
            <td></td>
        </tr>

        <tr>
            <td>MODE</td>
            <td>{{$test->MODE}}</td>
            <td></td>
            <td></td>
        </tr>


        <tr>
            <td>OBSERVATION</td>
            <td>After {{$test->OBSERVATION}} hrs</td>
            <td>hrs</td>
            <td>48 Hours - 72 Hours</td>
        </tr>
        
        <br>
        <tr>
            <td colspan="4" style="font-weight: bold; text-decoration: underline">READINGS</td>
        </tr>
        <tr>
            <td>INDURATION</td>
            <td>{{$test->INDURATION}} mm</td>
            <td>mm</td>
            <td>0-5 mm : Negative</td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td>6-9 mm : Equivocal</td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td>More than 10 mm : Positive</td>
        </tr>
        <br>
        
        <tr>
            <td>IMPRESSION (MT) </td>
            @if ($test->IMPRESSION == "POSITIVE")
            <td style="font-weight: bold;text-decoration: underline">{{$test->IMPRESSION}}</td>
            @else
                <td>{{$test->IMPRESSION}}</td>
            @endif
            
            <td></td>
            <td>NEGATIVE</td>
        </tr>
        
    </table>

    <br><br>

    <div class='comment'>
        <span style='font-size: 13px;'>
            <b>INTERPRETATION :</b>
            <ul>
                <li>Positive Reaton indicates that the person is having hypersensitivity to tuberculous antigens, however it does not prove that the person is suffering from the disease.</li>
                <li>A Positive Reaction is considered significant in younger age groups (specially below 2 years).</li>
                <li>Causes of false positive reacion: Infection by atypical mycobacteria, recent BCG vaccination.</li>
                <li>Causes of false negative reaction : Immunosuppression (HIV infection, corticosteroid therapy), malignancy, Hodgkin's disease, sarcoidosis, milliary tuberculosis, malnutrition.</li>
            </ul>
        </span>
        <p style="font-size: 13px; text-align:left;">
            <span style="font-weight: bold">Note : </span>
            In Case of Equivocal result, retesting is indicated at the another site after few weeks.
        </p>
    </div>

    <div id='end_report'>
        <hr>
        <span>*** End Of Report ***</span>
    </div>
@endsection
