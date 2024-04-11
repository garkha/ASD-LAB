@extends('layout.pdflayout')
@section('style')
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
            <th colspan='4'>Dengue Ns 1 Antigen Rapid</th>
        </tr>
        <tr>
            <td>Dengue NS1</td>
            @if ($test->dengue == "POSITIVE")
               <td class="value_heilight">{{$test->dengue}}</td>
            @else
               <td>{{$test->dengue}}</td>
            @endif
            <td></td>
            <td>NEGATIVE</td>
        </tr>
        <tr>
            <td style="font-size: 8px; line-height: 0.2cm;">Serum, Rapid immuno chromatography.</td>
        </tr>
    </table>

    <br><br>

    <div class='comment'>
        <span style='font-size: 13px;'>
            <b>COMMENT:</b><br>
            <span style='font-size: 11px;'>
                Dengue fever and dengue hemorrhagic fever (DHF) are acute febrile diseases, found in the tropics, and caused by four closely related
                virus serotypes of the genus Flavivirus, family Flaviviridae.
                <br>
                This test detects NS1 antigen of Dengue in serum. Dengue NS1 antigen is a highly conserved glycoprotein that seems to be essential
                for virus viability, but has no established biological activity. This NS1 antigen is present at high concentrations in the sera of dengue virus
                infected patients during the early clinical phase of the disease. Dengue NS1 Ag can be detected from day 1 after onset of fever.
                <br>
                A positive test result indicates presence of NS1 antigen in the sample and may indicates dengue infection.
                <br>
                A negative result indicates absence of NS1 antigen.
                <br>
                This test is helpful in diagnosis of early acute dengue infection.
            </span>
        </span>
    </div>

    <div id='end_report'>
        <hr>
        <span>*** End Of Report ***</span>
    </div>
@endsection
