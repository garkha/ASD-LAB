@extends('layout.pdflayout')
@section('style')
@endsection
@section('body')
    <h4>SEROLOGY</h4>
    <table id='test'>
        <tr>
            <th>Test Name</th>
            <th class='result'>Result</th>
            <th class='Unit'>Unit</th>
            <th class='Biological'>Biological Ref.Interval</th>
        </tr>
        @if ($test->igg != null && $test->igm != null)
        <tr>
            <th colspan='4'>Dengue IgG / IgM</th>
        </tr>
        <tr>
            <td>Dengue IgG-Serum</td>
            @if ($test->igg == "POSITIVE")
               <td class="value_heilight">{{$test->igg}}</td>
            @else
               <td>{{$test->igg}}</td>
            @endif
            <td></td>
            <td>NEGATIVE</td>
        </tr>
        <tr>
            <td>Dengue IgM-Serum</td>
            @if ($test->igm == "POSITIVE")
               <td class="value_heilight">{{$test->igm}}</td>
            @else
               <td>{{$test->igm}}</td>
            @endif
            <td></td>
            <td>NEGATIVE</td>
        </tr>
    @elseif ($test->igg != null)
        <tr>
            <th colspan='4'>Dengue IgG<th>
        </tr>
        <tr>
            <td>Dengue IgG-Serum</td>
            @if ($test->igg == "POSITIVE")
               <td class="value_heilight">{{$test->igg}}</td>
            @else
               <td>{{$test->igg}}</td>
            @endif
            <td></td>
            <td>NEGATIVE</td>
        </tr>
    @elseif ($test->igm != null)
        <tr>
            <th colspan='4'>Dengue IgM<th>
        </tr>
        <tr>
            <td>Dengue IgM-Serum</td>
            @if ($test->igm == "POSITIVE")
               <td class="value_heilight">{{$test->igm}}</td>
            @else
               <td>{{$test->igm}}</td>
            @endif
            <td></td>
            <td>NEGATIVE</td>
        </tr>
    @endif
    </table>

    <br><br>

    <div class='comment'>
        <span style='font-size: 13px;'>
            <b>NOTE:</b>
            <span style='font-size: 11px;'>
                Dengue viruses are mosquito-borne viruses.infections may lead to Dengue fever or dengue haemorrhagic fever and dengue shock syndrome. In
                the extreme cases, IgM antibodies appear around the 5th day of a Dengue infection, rise for 1-3 weeks and last for 60-90days. IgG antibo-dies appear by the 14th
                day in primary infections and on the 2nd day in secondary infections and can usually be detected for life. Both Dengue fever IgM & IgG are useful in the early
                detection of primary and secondary Dengue infections. 
            </span>
        </span>
    </div>

    <div id='end_report'>
        <hr>
        <span>*** End Of Report ***</span>
    </div>
@endsection
