@extends('layout.pdflayout')
@section('style')
<style>
    .comment_table{
        border-collapse: collapse;
        font-size: 12px;
        width: 50%;
    }
    .comment_table th, .comment_table td{
        border: 1px solid;
    }
    ul{
        list-style-type: square;
        font-size: 11px;
        font-family:Arial, Helvetica, sans-serif;
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
        @if ($test->igg != null && $test->igm != null)
            <tr>
                <th colspan='4'>TYPHIDOT IGG / IGM</th>
            </tr>
            <tr>
                <td>IgG TO SALMONELLA TYPHI</td>
                @if ($test->igg == "POSITIVE")
                   <td class="value_heilight">{{$test->igg}}</td>
                @else
                   <td>{{$test->igg}}</td>
                @endif
                <td></td>
                <td>NEGATIVE</td>
            </tr>
            <tr>
                <td>IgM TO SALMONELLA TYPHI</td>
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
                <th colspan='4'>TYPHIDOT IGG</th>
            </tr>
            <tr>
                <td>IgG TO SALMONELLA TYPHI</td>
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
                <th colspan='4'>TYPHIDOT IGM</th>
            </tr>
            <tr>
                <td>IgM TO SALMONELLA TYPHI</td>
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
            <b>COMMENT:</b>
        </span>
        <ul>
            <li>A febrile condition, Typhoid fever, is a bacterial infection caused by salmonella serotypes including S.typhi, S.paratyphi A, S.paratyphi Band
                salmonella sendai.</li>
            <li>The symptoms of the illness include higher fever, headache, abdominal pain, constipation and appearance of skin rashes. Accurate
                diagnosis of typhoid fever at an early stage is not only important diagnosis but to identify and treat the potential carriers and prevent acute
                typhoid fever outbreaks.
                </li>
            <li>The conventional WIDAL test usually detects antibodies to S.typhi in the patient serum fromthe second week of onset of the symptoms. Early
                rising antibodies to Lypopolysaccharides (LPS) Oand predominantly IgMin nature.</li>
            <li>Detection of S.typhi specific IgM antibodies instead of IgGor both IgGand IgM(as measured by widal test) serve as a rapid marker for recent
                infection.</li>
            <li>A negative result does not rule out recent of current infection, as the positivity is influenced by the time elapsed fromthe onset of fever and
                immunocompetence of the patient.</li>
            <li>However, if S.typhi infection is still suspected, retesting with second specimen obtained 5-7 days later is recommended.</li>
        </ul>
        <table class="comment_table">
            <tr>
                <th colspan="2">MEASURABLE IGM RESPONSE</th>
            </tr>
            <tr>
                <th>STARTOFFEVER</th>
                <th>PERCENT POSITIVE</th>
            </tr>
            <tr>
                <td>4-6DAYS </td>
                <td>43.44%</td>
            </tr>
            <tr>
                <td>6-9DAYS</td>
                <td>90-94%</td>
            </tr>
            <tr>
                <td>{{">"}}9DAYS</td>
                <td>100 %</td>
            </tr>
        </table>
    </div>

    <div id='end_report'>
        <hr>
        <span>*** End Of Report ***</span>
    </div>
@endsection
