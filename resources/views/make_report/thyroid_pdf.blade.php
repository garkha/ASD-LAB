@extends('layout.pdflayout')
@section('style')
    <style>
        ul li{
            font-size: 10px;
            font-family:Arial, Helvetica, sans-serif;
            line-height: 15px;
        }
        #a{
            width: 50%;
            font-size: 10px;
            border-collapse: collapse;
            line-height: 10px;
        }
        #a td, #a th {
            border: 1px solid;
            font-family:Arial, Helvetica, sans-serif;
        }
        #b{
            width: 30%;
            font-size: 10px;
            border-collapse: collapse;
            font-family:Arial, Helvetica, sans-serif;
            line-height: 10px;
        }
        #b td, #b th {
            border: 1px solid;
            font-family:Arial, Helvetica, sans-serif;
            text-align: left;
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
        @if ($test->t3 != null && $test->t4 != null && $test->tsh != null)
            <tr>
                <th colspan='4'>Thyroid Profile-I [T3,T4,TSH]</th>
            </tr>
            <tr>
                <td>T3 (Trilodothyronine)</td>
                @if ($test->t3 <60 || $test->t3>181)
                    <td class="value_heilight">{{$test->t3}}</td>
                @else
                    <td>{{$test->t3}}</td>
                @endif
                <td>ng/dl</td>
                <td>60-181</td>
            </tr>
            <tr>
                <td style="font-size: 8px; line-height: 0.2cm;">Serum, Electro Chemi Luminescent Immuno Assay</td>
            </tr>
            <tr>
                <td>T4 (Thyroxine) </td>
                @if ($test->t4 < 4.5 || $test->t4 > 12.6)
                    <td class="value_heilight">{{$test->t4}}</td>
                @else
                    <td>{{$test->t4}}</td>
                @endif
                <td>ng/dl</td>
                <td>4.5-12.6</td>
            </tr>
            <tr>
                <td style="font-size: 8px; line-height: 0.2cm;">Serum, Electro Chemi Luminescent Immuno Assay</td>
            </tr>
            <tr>
                <td>TSH (Ultrasensitive)</td>
                @if ($test->tsh < 0.13 || $test->tsh > 6.33)
                    <td class="value_heilight">{{$test->tsh}}</td>
                @else
                    <td>{{$test->tsh}}</td>
                @endif
                <td>uIU/mL</td>
                <td>0.13-6.33</td>
            </tr>
            <tr>
                <td style="font-size: 8px; line-height: 0.2cm;">Serum, Electro Chemi Luminescent Immuno Assay</td>
            </tr>
        @elseif ($test->t3 != null && $test->t4 != null)
            <tr>
                <th colspan='4'>Thyroid Function Test</th>
            </tr>
            <tr>
                <td>T3 (Trilodothyronine)</td>
                @if ($test->t3 <60 || $test->t3>181)
                    <td class="value_heilight">{{$test->t3}}</td>
                @else
                    <td>{{$test->t3}}</td>
                @endif
                <td>ng/dl</td>
                <td>60-181</td>
            </tr>
            <tr>
                <td style="font-size: 8px; line-height: 0.2cm;">Serum, Electro Chemi Luminescent Immuno Assay</td>
            </tr>
            <tr>
                <td>T4 (Thyroxine) </td>
                @if ($test->t4 < 4.5 || $test->t4 > 12.6)
                    <td class="value_heilight">{{$test->t4}}</td>
                @else
                    <td>{{$test->t4}}</td>
                @endif
                <td>ng/dl</td>
                <td>4.5-12.6</td>
            </tr>
            <tr>
                <td style="font-size: 8px; line-height: 0.2cm;">Serum, Electro Chemi Luminescent Immuno Assay</td>
            </tr>
        @elseif ($test->t3 != null && $test->tsh != null)
            <tr>
                <th colspan='4'>Thyroid Function Test</th>
            </tr>
            <tr>
                <td>T3 (Trilodothyronine)</td>
                @if ($test->t3 <60 || $test->t3>181)
                    <td class="value_heilight">{{$test->t3}}</td>
                @else
                    <td>{{$test->t3}}</td>
                @endif
                <td>ng/dl</td>
                <td>60-181</td>
            </tr>
            <tr>
                <td style="font-size: 8px; line-height: 0.2cm;">Serum, Electro Chemi Luminescent Immuno Assay</td>
            </tr>
            <tr>
                <td>TSH (Ultrasensitive)</td>
                @if ($test->tsh < 0.13 || $test->tsh > 6.33)
                    <td class="value_heilight">{{$test->tsh}}</td>
                @else
                    <td>{{$test->tsh}}</td>
                @endif
                <td>uIU/mL</td>
                <td>0.13-6.33</td>
            </tr>
            <tr>
                <td style="font-size: 8px; line-height: 0.2cm;">Serum, Electro Chemi Luminescent Immuno Assay</td>
            </tr>
        @elseif ($test->t4 != null && $test->tsh != null)
            <tr>
                <th colspan='4'>Thyroid Function Test</th>
            </tr>
            <tr>
                <td>T4 (Thyroxine) </td>
                @if ($test->t4 < 4.5 || $test->t4 > 12.6)
                    <td class="value_heilight">{{$test->t4}}</td>
                @else
                    <td>{{$test->t4}}</td>
                @endif
                <td>ng/dl</td>
                <td>4.5-12.6</td>
            </tr>
            <tr>
                <td style="font-size: 8px; line-height: 0.2cm;">Serum, Electro Chemi Luminescent Immuno Assay</td>
            </tr>
            <tr>
                <td>TSH (Ultrasensitive)</td>
                @if ($test->tsh < 0.13 || $test->tsh > 6.33)
                    <td class="value_heilight">{{$test->tsh}}</td>
                @else
                    <td>{{$test->tsh}}</td>
                @endif
                <td>uIU/mL</td>
                <td>0.13-6.33</td>
            </tr>
            <tr>
                <td style="font-size: 8px; line-height: 0.2cm;">Serum, Electro Chemi Luminescent Immuno Assay</td>
            </tr>
        @elseif ($test->t3 != null)
            <tr>
                <th colspan='4'>Thyroid Function Test</th>
            </tr>
            <tr>
                <td>T3 (Trilodothyronine)</td>
                @if ($test->t3 <60 || $test->t3>181)
                    <td class="value_heilight">{{$test->t3}}</td>
                @else
                    <td>{{$test->t3}}</td>
                @endif
                <td>ng/dl</td>
                <td>60-181</td>
            </tr>
            <tr>
                <td style="font-size: 8px; line-height: 0.2cm;">Serum, Electro Chemi Luminescent Immuno Assay</td>
            </tr>
        @elseif ($test->t4 != null)
            <tr>
                <th colspan='4'>Thyroid Function Test</th>
            </tr>
            <tr>
                <td>T4 (Thyroxine) </td>
                @if ($test->t4 < 4.5 || $test->t4 > 12.6)
                    <td class="value_heilight">{{$test->t4}}</td>
                @else
                    <td>{{$test->t4}}</td>
                @endif
                <td>ng/dl</td>
                <td>4.5-12.6</td>
            </tr>
            <tr>
                <td style="font-size: 8px; line-height: 0.2cm;">Serum, Electro Chemi Luminescent Immuno Assay</td>
            </tr>
        @elseif ($test->tsh != null)
            <tr>
                <th colspan='4'>Thyroid Function Test</th>
            </tr>
            <tr>
                <td>TSH (Ultrasensitive)</td>
                @if ($test->tsh < 0.13 || $test->tsh > 6.33)
                    <td class="value_heilight">{{$test->tsh}}</td>
                @else
                    <td>{{$test->tsh}}</td>
                @endif
                <td>uIU/mL</td>
                <td>0.13-6.33</td>
            </tr>
            <tr>
                <td style="font-size: 8px; line-height: 0.2cm;">Serum, Electro Chemi Luminescent Immuno Assay</td>
            </tr>
        @endif

    </table>

    <br><br>

    <div class='comment'>
        <span style='font-size: 13px;'>
            <b>COMMENT:</b>
            <ul>
                <li>Our reference range applies the central 95th interval (2.5th – 97.5th quantile) according to the CLSI/IFCC guidelines EP28-A3c</li>
                <li>
                    A circadian variation in serum TSH in healthy subjects is well documented. TSH level is reaching peak levels between 2-4 am and at a minimum between 6-10 pm. The variation is of the order of 50%, hence time of
                    the day has influence on the value of TSH. 
                </li>
                <li>TSH levels between 6.3 and 15.0 may represent subclinical or compensated hypothyroidism or show considerable physiological & seasonal variation, suggest clinical correlation or repeat testing with fresh sample.</li>
                <li>TSH levels may be transiently altered because of non-thyroid illness, like severe infection, renal disease, liver disease, heart disease, severe burns, trauma, surgery etc. Few drugs also altered the TSH values. </li>
                <li>
                    A high TSH result often means an underactive thyroid gland caused by failure of the gland (hypothyroidism). A low TSH result can indicate an overactive thyroid gland (hyperthyroidism) or damage to the pituitary
                    gland that prevents it from producing TSH.
                </li>
                <li>Resistance to thyroid hormone (RTH) and central hyperthyroidism (TSH-oma) are rare conditions associated with elevated TSH, T4 and T3 levels.</li>
            </ul>
            <span style='font-size: 11px; font-weight:bold;'>
                Below mentioned are the guidelines for age reference ranges for T3,T4 and TSH results:
            </span>
        </span>
        <table id='a'>
            <tr>
                <th>Age</th>
                <th>Total T3 (ng/dl)</th>
                <th>(ng/dl) Total T4 ( µg/dl)</th>
                <th>TSH (µlU/ml)</th>
            </tr>
            <tr>
                <td>1 - 6 days</td>
                <td>73 - 288</td>
                <td>5.04 - 18.5</td>
                <td>0.7 - 15.0</td>
            </tr>
            <tr>
                <td>6 days -3 months</td>
                <td>80 - 275 </td>
                <td>5.41 - 17.0 </td>
                <td>0.72 - 11.0</td>
            </tr>
            <tr>
                <td>4 - 12 months </td>
                <td>86 - 265 </td>
                <td>5.67 - 16.0 </td>
                <td>0.73 - 8.35</td>
            </tr>
            <tr>
                <td>1 - 6 years </td>
                <td>92 - 248 </td>
                <td>5.95 - 14.7 </td>
                <td>0.70 - 5.97</td>
            </tr>
            <tr>
                <td>7 - 11 years </td>
                <td>93 - 231 </td>
                <td>5.99 - 13.8</td>
                <td>0.60 - 5.84</td>
            </tr>
            <tr>
                <td>12 - 20 years </td>
                <td>91 - 218 </td>
                <td>5.91 - 13.2 </td>
                <td>0.51 - 6.50</td>
            </tr>
            <tr>
                <td>>20 years </td>
                <td>60 - 181 </td>
                <td>4.50 - 12.6</td>
                <td>0.13 - 6.33</td>
            </tr>
        </table>
        <span style="font-weight: bold; font-size:10px;">TSH Level in pregnancy</span>
        <table id='b'>
            <tr>
                <th>First Trimester </th>
                <td>0.10 – 2.5 µlU/ml</td>
            </tr>
            <tr>
                <th>Second Trimester </th>
                <td>0.20 – 3.0 µlU/ml</td>
            </tr>
            <tr>
                <th>Third Trimester </th>
                <td>0.30 – 3.0 µlU</td>
            </tr>
        </table><br>
    </div>

    <div id='end_report'>
        <hr>
        <span>*** End Of Report ***</span>
    </div>
@endsection
