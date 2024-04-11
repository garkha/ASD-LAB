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
            <th colspan='4'>Complete Blood Count (CBC)</th>
        </tr>
        @if ($patient->gender == "FEMALE")
            <tr>
                <td>
                    Haemoglobin
                </td>
                @if ($test->HAEMOGLOBIN > 14 or $test->HAEMOGLOBIN < 11)
                    <td class="value_heilight">{{$test->HAEMOGLOBIN}}</td>
                @else
                    <td>{{$test->HAEMOGLOBIN}}</td>
                @endif
                <td>gm/dl</td>
                <td>11.0-14.0</td>
            </tr>
            
        @else
            <tr>
                <td>
                    Haemoglobin
                </td>
                @if ($test->HAEMOGLOBIN > 16 or $test->HAEMOGLOBIN < 12)
                    <td class="value_heilight">{{$test->HAEMOGLOBIN}}</td>
                @else
                    <td>{{$test->HAEMOGLOBIN}}</td>
                @endif
                <td>gm/dl</td>
                <td>12.0-16.0</td>
            </tr>
        @endif
        <tr>
            <td style="font-size: 8px; line-height: 0.2cm;">Whole Blood EDTA, Cyanide free</td>
        </tr>
        
        <tr>
            <td>
                TLC (Total Leucocyte Count)
            </td>
               @if ($test->TLC > 10000 or $test->TLC < 4000)
                  <td class="value_heilight">{{$test->TLC}}</td>
               @else
                  <td>{{$test->TLC}}</td>
               @endif
            <td>/cumm</td>
            <td>4000-10000</td>
        </tr>
        <tr>
            <td style="font-size: 8px; line-height: 0.2cm;">Whole Blood EDTA, Flow Cytometry</td>
        </tr>

        <tr>
            <td colspan="4" style="font-weight: bold; text-decoration:underline; padding-bottom:3px; padding-top:3px;">DIFFERENTIAL LEUCOCYTE COUNT</td>
        </tr>
        
        <tr>
            <td>
                Neutrophil
            </td>
               @if ($test->Neutrophil > 80 || $test->Neutrophil < 40)
                  <td class="value_heilight">{{$test->Neutrophil}}</td>
               @else
                  <td>{{$test->Neutrophil}}</td>
               @endif
            <td>%</td>
            <td>40-80</td>
        </tr>
        <tr>
            <td style="font-size: 8px; line-height: 0.2cm;">Whole Blood EDTA Flowcytometry</td>
        </tr>

        <tr>
            <td>
                Lymphocytes
            </td>
               @if ($test->Lymphocytes > 40 || $test->Lymphocytes < 20)
                  <td class="value_heilight">{{$test->Lymphocytes}}</td>
               @else
                  <td>{{$test->Lymphocytes}}</td>
               @endif
            <td>%</td>
            <td>20-40</td>
        </tr>
        <tr>
            <td style="font-size: 8px; line-height: 0.2cm;">Whole Blood EDTA Flowcytometry</td>
        </tr>

        <tr>
            <td>
                Eosinophils
            </td>
               @if ($test->Eosinophils > 6 || $test->Eosinophils < 1)
                  <td class="value_heilight">{{$test->Eosinophils}}</td>
               @else
                  <td>{{$test->Eosinophils}}</td>
               @endif
            <td>%</td>
            <td>20-40</td>
        </tr>
        <tr>
            <td style="font-size: 8px; line-height: 0.2cm;">Flowcytometry</td>
        </tr>

        <tr>
            <td>
                Monocytes
            </td>
               @if ($test->Monocytes > 10 || $test->Monocytes < 2)
                  <td class="value_heilight">{{$test->Monocytes}}</td>
               @else
                  <td>{{$test->Monocytes}}</td>
               @endif
            <td>%</td>
            <td>2-10</td>
        </tr>
        <tr>
            <td style="font-size: 8px; line-height: 0.2cm;">Whole Blood EDTA Flowcytometry</td>
        </tr>

        <tr>
            <td>
                Basophils
            </td>
               @if ($test->Basophils > 1 || $test->Basophils < 0)
                  <td class="value_heilight">{{$test->Basophils}}</td>
               @else
                  <td>{{$test->Basophils}}</td>
               @endif
            <td>%</td>
            <td>0-1</td>
        </tr>
        <tr>
            <td style="font-size: 8px; line-height: 0.2cm;">Whole Blood EDTA Flowcytometry</td>
        </tr>

        <tr>
            <td>
                Absolute Neutrophil Count
            </td>
               @if ($test->ANC > 7000 || $test->ANC < 2000)
                  <td class="value_heilight">{{$test->ANC}}</td>
               @else
                  <td>{{$test->ANC}}</td>
               @endif
            <td>/cumm</td>
            <td>2000-7000</td>
        </tr>
        <tr>
            <td style="font-size: 8px; line-height: 0.2cm;">Whole Blood EDTA, Calculated</td>
        </tr>

        <tr>
            <td>
                Absolute Lymphocyte Count
            </td>
               @if ($test->ALC > 3000 || $test->ALC < 1000)
                  <td class="value_heilight">{{$test->ALC}}</td>
               @else
                  <td>{{$test->ALC}}</td>
               @endif
            <td>/cumm</td>
            <td>1000-3000</td>
        </tr>
        <tr>
            <td style="font-size: 8px; line-height: 0.2cm;">Whole Blood EDTA, Calculated</td>
        </tr>

        <tr>
            <td>
                Absolute Eosinophil Count
            </td>
               @if ($test->AEC > 500 || $test->AEC < 20)
                  <td class="value_heilight">{{$test->AEC}}</td>
               @else
                  <td>{{$test->AEC}}</td>
               @endif
            <td>/cumm</td>
            <td>20-500</td>
        </tr>
        <tr>
            <td style="font-size: 8px; line-height: 0.2cm;">Whole Blood EDTA, Calculated</td>
        </tr>

        <tr>
            <td>
                Absolute Monocyte Count
            </td>
               @if ($test->AMC > 1000 || $test->AMC < 20)
                  <td class="value_heilight">{{$test->AMC}}</td>
               @else
                  <td>{{$test->AMC}}</td>
               @endif
            <td>/cumm</td>
            <td>20-1000</td>
        </tr>
        <tr>
            <td style="font-size: 8px; line-height: 0.2cm;">Whole Blood EDTA, Calculated</td>
        </tr>

        <tr>
            <td>
                Absolute Basophils Count
            </td>
               @if ($test->ABC > 100 || $test->ABC < 20)
                  <td class="value_heilight">{{$test->ABC}}</td>
               @else
                  <td>{{$test->ABC}}</td>
               @endif
            <td>/cumm</td>
            <td>20-100</td>
        </tr>
        <tr>
            <td style="font-size: 8px; line-height: 0.2cm;">Whole Blood EDTA, Calculated</td>
        </tr>

        <tr>
            <td>
                RBC
            </td>
               @if ($test->RBC > 4.8 || $test->RBC < 3.8)
                  <td class="value_heilight">{{$test->RBC}}</td>
               @else
                  <td>{{$test->RBC}}</td>
               @endif
            <td>millions/cmm</td>
            <td>3.8-4.8</td>
        </tr>
        <tr>
            <td style="font-size: 8px; line-height: 0.2cm;">Whole Blood EDTA, Impedance</td>
        </tr>

        <tr>
            <td>
                HCT
            </td>
               @if ($test->HCt > 46 || $test->HCt < 36)
                  <td class="value_heilight">{{$test->HCt}}</td>
               @else
                  <td>{{$test->HCt}}</td>
               @endif
            <td>%</td>
            <td>36-46</td>
        </tr>
        <tr>
            <td style="font-size: 8px; line-height: 0.2cm;">Whole Blood EDTA, Calculated</td>
        </tr>

        <tr>
            <td>
                MCV
            </td>
               @if ($test->MCV > 101 || $test->MCV < 83)
                  <td class="value_heilight">{{$test->MCV}}</td>
               @else
                  <td>{{$test->MCV}}</td>
               @endif
            <td>fl</td>
            <td>83-101</td>
        </tr>
        <tr>
            <td style="font-size: 8px; line-height: 0.2cm;">Whole Blood EDTA, Calculated</td>
        </tr>

        <tr>
            <td>
                MCH
            </td>
               @if ($test->MCH > 32 || $test->MCH < 27)
                  <td class="value_heilight">{{$test->MCH}}</td>
               @else
                  <td>{{$test->MCH}}</td>
               @endif
            <td>pg</td>
            <td>27-32</td>
        </tr>
        <tr>
            <td style="font-size: 8px; line-height: 0.2cm;">Whole Blood EDTA, Calculated</td>
        </tr>

        <tr>
            <td>
                MCHC
            </td>
               @if ($test->MCHC > 34.5 || $test->MCHC < 31.5)
                  <td class="value_heilight">{{$test->MCHC}}</td>
               @else
                  <td>{{$test->MCHC}}</td>
               @endif
            <td>g/dl</td>
            <td>31.5-34.5</td>
        </tr>
        <tr>
            <td style="font-size: 8px; line-height: 0.2cm;">Whole Blood EDTA, Calculated</td>
        </tr>

        <tr>
            <td>
                Platelet Count
            </td>
               @if ($test->PLATELET_COUNT > 410 || $test->PLATELET_COUNT < 150)
                  <td class="value_heilight">{{$test->PLATELET_COUNT}}</td>
               @else
                  <td>{{$test->PLATELET_COUNT}}</td>
               @endif
            <td>thou/µL</td>
            <td>150-410</td>
        </tr>
        <tr>
            <td style="font-size: 8px; line-height: 0.2cm;">Whole Blood EDTA, Impedance</td>
        </tr>

        @if ($test->MPV)
        <tr>
            <td>
                MPV
            </td>
               @if ($test->MPV > 10.4 || $test->MPV < 7.4)
                  <td class="value_heilight">{{$test->MPV}}</td>
               @else
                  <td>{{$test->MPV}}</td>
               @endif
            <td>fl</td>
            <td>7.4-10.4</td>
        </tr>
        <tr>
            <td style="font-size: 8px; line-height: 0.2cm;">Calculated</td>
        </tr>
        @endif

        <tr>
            <td>
                RDW- CV
            </td>
               @if ($test->RDW_CV > 14.0 || $test->RDW_CV < 11.6)
                  <td class="value_heilight">{{$test->RDW_CV}}</td>
               @else
                  <td>{{$test->RDW_CV}}</td>
               @endif
            <td>%</td>
            <td>11.6-14.0</td>
        </tr>
        <tr>
            <td style="font-size: 8px; line-height: 0.2cm;">Whole Blood EDTA, Flowcytometry</td>
        </tr>

        <tr>
            <td>
                RDW- SD
            </td>
               @if ($test->RDW_SD > 56 || $test->RDW_SD < 35)
                  <td class="value_heilight">{{$test->RDW_SD}}</td>
               @else
                  <td>{{$test->RDW_SD}}</td>
               @endif
            <td>fl</td>
            <td>35-56</td>
        </tr>
        <tr>
            <td style="font-size: 8px; line-height: 0.2cm;"> Whole Blood EDTA, Flowcytometry</td>
        </tr>

        @if ($test->PCT != null)
        <tr>
            <td>
                PCT
            </td>
               @if ($test->PCT > 0.28 || $test->PCT < 0.10)
                  <td class="value_heilight">{{$test->PCT}}</td>
               @else
                  <td>{{$test->PCT}}</td>
               @endif
            <td>%</td>
            <td>0.10-0.28</td>
        </tr>
        <tr>
            <td style="font-size: 8px; line-height: 0.2cm;">Whole Blood EDTA, Flow Cytometry</td>
        </tr>
        @endif

        @if ($test->PDW != null)
        <tr>
            <td>
                PDW
            </td>
               @if ($test->PDW > 17 || $test->PDW < 9)
                  <td class="value_heilight">{{$test->PDW}}</td>
               @else
                  <td>{{$test->PDW}}</td>
               @endif
            <td>fl</td>
            <td>9.0-17.0</td>
        </tr>
        <tr>
            <td style="font-size: 8px; line-height: 0.2cm;">Whole Blood EDTA, Flow Cytometry</td>
        </tr>
        @endif

        <tr>
            <td>
                Neutrophil - Lymphocyte Ratio
            </td>
            <td>{{$test->NLR}}</td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td style="font-size: 8px; line-height: 0.2cm;">Calculated</td>
        </tr>

        <tr>
            <td>
                Lymphocyte - Monocyte Ratio
            </td>
            <td>{{$test->LMR}}</td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td style="font-size: 8px; line-height: 0.2cm;">Calculated</td>
        </tr>

        <tr>
            <td>
                Platelet - Lymphocyte Ratio
            </td>
            <td>{{$test->PLR}}</td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td style="font-size: 8px; line-height: 0.2cm;">Calculated</td>
        </tr>

        @if ($test->ESR != null)
            @if ($patient->gender == "FEMALE")
                <tr>
                    <td>
                        ESR [Westergren] 
                    </td>
                    @if ($test->ESR > 20 || $test->ESR < 0)
                        <td class="value_heilight">{{$test->ESR}}</td>
                    @else
                        <td>{{$test->ESR}}</td>
                    @endif
                    <td>mm / 1 hr</td>
                    <td>0-20</td>
                </tr>
            @else
                <tr>
                    <td>
                        ESR [Westergren] 
                    </td>
                    @if ($test->ESR > 15 || $test->ESR < 0)
                        <td class="value_heilight">{{$test->ESR}}</td>
                    @else
                        <td>{{$test->ESR}}</td>
                    @endif
                    <td>mm / 1 hr</td>
                    <td>0-15</td>
                </tr>
            @endif
            
            <tr>
                <td style="font-size: 8px; line-height: 0.2cm;">Modified Westergren</td>
            </tr>
        @endif
        
    </table>

    <br><br>

    <div class='comment'>
        <span style='font-size: 13px;'>
            <b>COMMENT:</b>
            <span style='font-size: 11px;'>
                Kindly correlate clinically. Advise for recheck from fresh sample in case, it is not correlation clinically, to rule out any pranalytical error.
            </span>
        </span>
    </div>

    <div id='end_report'>
        <hr>
        <span>*** End Of Report ***</span>
    </div>
@endsection