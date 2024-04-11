@extends('layout.pdflayout')
@section('style')
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
            <th colspan='4'>Malaria Parasite (MP- Slide)</th>
        </tr>
        <tr>
            <td>Malaria Parasite- Slide</td>
            @if ($test->mp == "Seen")
                <td class="value_heilight">{{$test->mp}}</td>
            @else
                <td>{{$test->mp}}</td>
            @endif
            <td></td>
            <td>Not Seen</td>
        </tr>
        <tr>
            <td style="font-size: 8px; line-height: 0.2cm;">Serum,Rapid immunochromatographic</td>
        </tr>
        @if ($test->comment != null)
            <tr>
                <td>COMMENT : </td>
                <td colspan="3">{{$test->comment}}</td>
            </tr>
        @endif
    </table>

    <br><br>

    <div class='comment'>
        <span style='font-size: 13px;'>
            <b>COMMENT:</b>
            <ul>
                <li>Malaria is acute and sometimes a chronic infection of red blood cells by parasites of the genus, plasmodium.</li>
                <li>Malaria is characterized clinically by fever, anemia and spenomegaly. Demonstration of these parasites in the blood filmestablishes the diagnosis of malaria.</li>
                <li>The four species of plasmodia causing human malaria are P.vivax, P.Falciparum, P.malariae and P.ovale.</li>
                <li>Each one of these has typical morphologic features which help in their identification.</li>
            </ul>
        </span>
    </div>

    <div id='end_report'>
        <hr>
        <span>*** End Of Report ***</span>
    </div>
@endsection
