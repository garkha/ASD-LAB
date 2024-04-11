@extends('layout.pdflayout')
@section('style')
<style>
    #test{
        width: 60%;
    }
</style>
@endsection
@section('body')
    <h4>SEROLOGY</h4>
    <table id='test'>
        <tr>
            <th colspan="5">Test Name With Methodology</th>
        </tr>
        <tr>
            <th colspan='5'>WIDAL TEST (SLIDE METHOD)</th>
        </tr>
        <br>
        <tr>
            <th></th>
            <th>1/40</th>
            <th>1/80</th>
            <th>1/160</th>
            <th>1/320</th>
        </tr>
        <tr>
            <td>TYPHI "O"</td>
            <td>{{ $test->TYPHI_O_1_40 }}</td>
            <td>{{ $test->TYPHI_O_1_80 }}</td>
            <td>{{ $test->TYPHI_O_1_160 }}</td>
            <td>{{ $test->TYPHI_O_1_320 }}</td>
        </tr>
        <tr>
            <td>TYPHI "H"</td>
            <td>{{ $test->TYPHI_H_1_40 }}</td>
            <td>{{ $test->TYPHI_H_1_80 }}</td>
            <td>{{ $test->TYPHI_H_1_160 }}</td>
            <td>{{ $test->TYPHI_H_1_320 }}</td>
        </tr>
        <tr>
            <td>TYPHI "AH"</td>
            <td>{{ $test->TYPHI_AH_1_40 }}</td>
            <td>{{ $test->TYPHI_AH_1_80 }}</td>
            <td>{{ $test->TYPHI_AH_1_160 }}</td>
            <td>{{ $test->TYPHI_AH_1_320 }}</td>
        </tr>
        <tr>
            <td>TYPHI "BH"</td>
            <td>{{ $test->TYPHI_BH_1_40 }}</td>
            <td>{{ $test->TYPHI_BH_1_80 }}</td>
            <td>{{ $test->TYPHI_BH_1_160 }}</td>
            <td>{{ $test->TYPHI_BH_1_320 }}</td>
        </tr>
    </table>
    <br>
    <div>
        <span style='font-size: 15px;'>
            @if ($test->RESULT == "NEGATIVE")
              <b>RESULT : </b> {{ $test->RESULT }}
            @else
            <b>RESULT : {{ $test->RESULT }}</b>
            @endif
            
        </span>
    </div>

    <div style="padding-top:15px;">
        <span style='font-size: 13px;'>
            <b>INTERPRETEATION OF RESULT  : </b>
            Agglutinine titre greater 1:80 is considered significant and suggests infection, whereas low titre
            are fpound in - npormal, individuals. Diagnostic titre is observed after the onset of fever. In first week of infection test is negative.
        </span>
    </div>

    <div id='end_report'>
        <hr>
        <span>*** End Of Report ***</span>
    </div>
@endsection
