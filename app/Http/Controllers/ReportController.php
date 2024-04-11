<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use PDF;
use App\Models\patient;
use App\Models\bloodgroup;
use App\Models\fastingbloodsugar;
use App\Models\btct;
use App\Models\fastingpp;
use App\Models\randombloodsugar;
use App\Models\hcv;
use App\Models\hiv;
use App\Models\vdrl;
use App\Models\vitaminbtwelve;
use App\Models\plateletcount;
use App\Models\thyroid;
use App\Models\widal;
use App\Models\typhidotiggigm;
use App\Models\mantoux;
use App\Models\dengueiggigm;
use App\Models\denguensone;
use App\Models\dengueelisa;
use App\Models\crpquantitative;
use App\Models\crpqualitative;
use App\Models\hbsag;
use App\Models\malariaparasite;
use App\Models\semenanalysis;
use App\Models\kft;
use App\Models\hbaonec;
use App\Models\gtt;
use App\Models\cbc;
use App\Models\urm;
use App\Models\upt;
use App\Models\lft;

class ReportController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    |------------------- OPEN MAKE REPORT VIEW GET REQUEST --------------------
    |--------------------------------------------------------------------------
    |
    */
    public function open_report_view($mv_name,$patient_id){
        $view_name = $mv_name;
        $pid = base64_decode($patient_id);
        $check = patient::find($pid)->$view_name;

        if ($check) {
            return redirect()->route('patient_panel',$patient_id)->with('fail','Report Done! value is already saved.');
        } else {
            return view("make_report.$view_name");
        } 
    }
    /*
    |--------------------------------------------------------------------------
    |----- END ---------- END ---------- END ---------- END ---------- END ----
    |--------------------------------------------------------------------------
    |
    */



    /*
    |--------------------------------------------------------------------------
    |------------------- OPEN UPDATE REPORT VIEW GET REQUEST ------------------
    |--------------------------------------------------------------------------
    |
    */
    public function open_update_view($mv_name,$patient_id){
        $view_name = $mv_name."_update";
        $pid = base64_decode($patient_id);

        $check = patient::find($pid)->$mv_name;
        if ($check) {
            return view("make_report.$view_name",['test'=>$check]);
        } else {
            return redirect()->route('patient_panel',$patient_id)->with('fail','Nothing for update in Result value');
        }
    }
    /*
    |--------------------------------------------------------------------------
    |----- END ---------- END ---------- END ---------- END ---------- END ----
    |--------------------------------------------------------------------------
    |
    */



    /*
    |--------------------------------------------------------------------------
    | SUBMIT OR ADD RESULT VALUE IN REPORT
    |--------------------------------------------------------------------------
    |
    */
    public function submit_report($mv_name,$patient_id,Request $request){
        $pid = base64_decode($patient_id);
        $patient = patient::find($pid);//find patient
        
        switch ($mv_name) {
            case 'upt':
                $request->validate([
                    'UPT' => ['required','string']
                ]);
                $upt = new upt();
                $upt->UPT = $request->UPT;

                if ($patient->upt()->save($upt)) {
                    return redirect()->route('patient_panel',$patient_id)->with('success','URINE PREGNANCY TEST value is Saved.');
                } else {
                    return redirect()->route('patient_panel',$patient_id)->with('fail','URINE PREGNANCY TEST value is not Saved.');
                }
            break;
            
            case 'lft':
                $request->validate([
                    'Total_Bilirubin' => ['required','string'],
                    'Conjugated_Bilirubin' => ['required','string'],
                    'Unconjugated_Bilirubin' => ['required','string'],
                    'SGOT' => ['required','string'],
                    'SGPT' => ['required','string'],
                    'Alk_Phosphatase' => ['required','string'],
                    'T_Protein' => ['required','string'],
                    'Albumin' => ['required','string'],
                    'Globulin' => ['required','string'],
                    'AG_Ratio' => ['required','string'],
                    
                ]);
                $lft = new lft();
                $lft->Total_Bilirubin = $request->Total_Bilirubin;
                $lft->Conjugated_Bilirubin = $request->Conjugated_Bilirubin;
                $lft->Unconjugated_Bilirubin = $request->Unconjugated_Bilirubin;
                $lft->SGOT = $request->SGOT;
                $lft->SGPT = $request->SGPT;
                $lft->Alk_Phosphatase = $request->Alk_Phosphatase;
                $lft->T_Protein = $request->T_Protein;
                $lft->Albumin = $request->Albumin;
                $lft->Globulin = $request->Globulin;
                $lft->AG_Ratio = $request->AG_Ratio;
                

                if ($patient->lft()->save($lft)) {
                    return redirect()->route('patient_panel',$patient_id)->with('success','LFT value is Saved.');
                } else {
                    return redirect()->route('patient_panel',$patient_id)->with('fail','LFT value is not Saved.');
                }
            break;
                
            case 'urm':
                $request->validate([
                    'Color' => ['required','string'],
                    'Transparency' => ['required','string'],
                    'pH' => ['required','numeric'], 
                    'Specific_Gravity' => ['required','numeric'],
                    'Urine_Glucose' => ['required','string'],
                    'Urine_Protein' => ['required','string'],
                    'Urine_Bilirubin' => ['required','string'],
                    'Ketones' => ['required','string'],
                    'Blood' => ['required','string'],
                    'Leukocytes_Est' => ['required','string'],
                    'Rbc' => ['required','string'],
                    'Crystals' => ['required','string'],
                    'Rbc' => ['required','string'],
                    'Casts' => ['required','string'],
                    'Bacteria' => ['required','string'],
                    'Pus_Cells' => ['required','numeric'],
                    'Epithelial_Cells' => ['required','numeric'],
                    
                ]);

                $urine = new urm();
                $urine->Color = $request->Color;
                $urine->Transparency = $request->Transparency;
                $urine->pH = $request->pH;
                $urine->Specific_Gravity = $request->Specific_Gravity;
                $urine->Urine_Glucose = $request->Urine_Glucose;
                $urine->Urine_Protein = $request->Urine_Protein;
                $urine->Urine_Bilirubin = $request->Urine_Bilirubin;

                $urine->Ketones = $request->Ketones;
                $urine->Blood = $request->Blood;
                $urine->Leukocytes_Est = $request->Leukocytes_Est;
                $urine->Pus_Cells = $request->Pus_Cells;
                $urine->Epithelial_Cells = $request->Epithelial_Cells;
                $urine->Rbc = $request->Rbc;
                $urine->Crystals = $request->Crystals;
                $urine->Casts = $request->Casts;
                $urine->Bacteria = $request->Bacteria;
                $urine->Others = $request->Others;
            

                if ($patient->urm()->save($urine)) {
                    return redirect()->route('patient_panel',$patient_id)->with('success','URINE ROUTINE AND MICROSCOPY value is Saved.');
                } else {
                    return redirect()->route('patient_panel',$patient_id)->with('fail','URINE ROUTINE AND MICROSCOPY value is not Saved.');
                }
                break;

            case 'cbc':
                $request->validate([
                    'Haemoglobin' => ['required','numeric'],
                    'RBC' => ['required','numeric'],
                    'HCT' => ['required','numeric'], 
                    'MCV' => ['required','numeric'],
                    'MCH' => ['required','numeric'],
                    'MCHC' => ['required','numeric'],
                    'RDWSD' => ['required','numeric'],
                    'RDWCV' => ['required','numeric'],

                    'TLC' => ['required','numeric'],
                    'Platelet' => ['required','numeric'],
                    
                    'Neutrophil' => ['required','numeric'],
                    'Lymphocytes' => ['required','numeric'],
                    'Eosinophils' => ['required','numeric'],
                    'Monocytes' => ['required','numeric'],
                    'Basophils' => ['required','numeric'],

                    'ANC' => ['required','numeric'],
                    'ALC' => ['required','numeric'],
                    'AEC' => ['required','numeric'],
                    'AMC' => ['required','numeric'],
                    'ABC' => ['required','numeric'],

                    'NLR' => ['required','numeric'],
                    'LMR' => ['required','numeric'],
                    'PLR' => ['required','numeric'],

                ]);

                if($request->ESR != null){
                    $request->validate([
                        'ESR' => ['required','numeric'],
                    ]);  
                }
                if($request->MPV != null && $request->PCT != null && $request->PDW != null){
                    $request->validate([
                        'MPV' => ['required','numeric'],
                        'PCT' => ['required','numeric'],
                        'PDW' => ['required','numeric'],
                    ]);
                }

                $cbc = new cbc();
                $cbc->HAEMOGLOBIN = $request->Haemoglobin;
                $cbc->RBC = $request->RBC;
                $cbc->HCt = $request->HCT;
                $cbc->MCV = $request->MCV;
                $cbc->MCH=  $request->MCH;
                $cbc->MCHC = $request->MCHC;
                $cbc->RDW_SD = $request->RDWSD;
                $cbc->RDW_CV = $request->RDWCV;

                $cbc->TLC = $request->TLC;
                $cbc->PLATELET_COUNT = $request->Platelet;
                $cbc->ESR = $request->ESR;

                $cbc->Neutrophil = $request->Neutrophil;
                $cbc->Lymphocytes = $request->Lymphocytes;
                $cbc->Eosinophils = $request->Eosinophils;
                $cbc->Monocytes = $request->Monocytes;
                $cbc->Basophils = $request->Basophils;

                $cbc->ANC = $request->ANC;
                $cbc->ALC = $request->ALC;
                $cbc->AEC = $request->AEC;
                $cbc->AMC = $request->AMC;
                $cbc->ABC = $request->ABC;

                $cbc->NLR = $request->NLR;
                $cbc->LMR = $request->LMR;
                $cbc->PLR = $request->PLR;

                $cbc->MPV = $request->MPV;
                $cbc->PCT = $request->PCT;
                $cbc->PDW = $request->PDW;

                if ($patient->cbc()->save($cbc)) {
                    return redirect()->route('patient_panel',$patient_id)->with('success','CBC value is Saved.');
                } else {
                    return redirect()->route('patient_panel',$patient_id)->with('fail','CBC value is not Saved.');
                }
                break;

            case 'gtt':
                if($request->bs_fasting != null && $request->bs_after_one_hour != null && $request->bs_after_two_hour != null){
                    $request->validate([
                        'bs_fasting' => ['required','numeric'],
                        'bs_after_one_hour' => ['required','numeric'],
                        'bs_after_two_hour' => ['required','numeric'], 
                    ]);
                    
                }else if($request->bs_fasting != null && $request->bs_after_one_hour != null){
                    $request->validate([
                        'bs_fasting' => ['required','numeric'],
                        'bs_after_one_hour' => ['required','numeric'],
                    ]);
                    
                }else if($request->bs_after_one_hour != null && $request->bs_after_two_hour != null){
                    $request->validate([
                        'bs_after_one_hour' => ['required','numeric'],
                        'bs_after_two_hour' => ['required','numeric'],
                    ]);
                }else if($request->bs_fasting != null && $request->bs_after_two_hour != null){
                    $request->validate([
                        'bs_fasting' => ['required','numeric'],
                        'bs_after_two_hour' => ['required','numeric'],
                    ]);
                }else if($request->bs_fasting != null){
                    $request->validate([
                        'bs_fasting' => ['required','numeric'],
                    ]);
                }else if($request->bs_after_two_hour != null){
                    $request->validate([
                        'bs_after_two_hour' => ['required','numeric'],
                    ]);
                }else if($request->bs_after_one_hour){
                    $request->validate([
                        'bs_after_one_hour' => ['required','numeric'],
                    ]);
                }else{
                    $request->validate([
                        'bs_fasting' => ['required','numeric'],
                        'bs_after_one_hour' => ['required','numeric'],
                        'bs_after_two_hour' => ['required','numeric'],
                    ]);
                }
                
                $gtt = new gtt();
                $gtt->bs_fasting = $request->bs_fasting;
                $gtt->bs_after_one_hour = $request->bs_after_one_hour;
                $gtt->bs_after_two_hour = $request->bs_after_two_hour;
                
                if ($patient->gtt()->save($gtt)) {
                    return redirect()->route('patient_panel',$patient_id)->with('success','Glucose Tolerance Test (GTT) 3 Sample value is Saved.');
                } else {
                    return redirect()->route('patient_panel',$patient_id)->with('fail','Glucose Tolerance Test (GTT) 3 Sample value is not Saved.');
                }
                break;

            case 'hbaonec':
                if($request->ag != null){
                    $request->validate([
                        'hb' => ['required','numeric'],
                        'ag' => ['required','numeric'],  
                    ]);
                }else{
                    $request->validate([
                        'hb' => ['required','numeric'],  
                    ]);
                }
                $hbaonec = new hbaonec();
                $hbaonec->hb = $request->hb;
                $hbaonec->ag = $request->ag;
                if ($patient->hbaonec()->save($hbaonec)) {
                    return redirect()->route('patient_panel',$patient_id)->with('success','HbA1c (Glycated hemoglobin) value is Saved.');
                } else {
                    return redirect()->route('patient_panel',$patient_id)->with('fail','HbA1c (Glycated hemoglobin) value is not Saved.');
                }
                break;

            case 'kft':
                $request->validate([
                    'Blood_Urea' => ['required','numeric'],
                    'Serum_Creatinine' => ['required','numeric'],
                    'Uric_Acid' => ['required','numeric'],
                    'Sodium' => ['required','numeric'],
                    'Potassium' => ['required','numeric'],
                    'Chloride' => ['required','numeric'],
                    'Blood_Urea_Nitrogen' => ['required','numeric'],
                    'Creatinine_Ratio' => ['required','numeric'],  
                ]);

                $kft = new kft();
                $kft->Blood_Urea = $request->Blood_Urea;
                $kft->Serum_Creatinine = $request->Serum_Creatinine;
                $kft->Uric_Acid = $request->Uric_Acid;
                $kft->Sodium = $request->Sodium;
                $kft->Potassium = $request->Potassium;
                $kft->Chloride = $request->Chloride;
                $kft->Blood_Urea_Nitrogen = $request->Blood_Urea_Nitrogen;
                $kft->Creatinine_Ratio = $request->Creatinine_Ratio;

                if ($patient->kft()->save($kft)) {
                    return redirect()->route('patient_panel',$patient_id)->with('success','KFT value is Saved.');
                } else {
                    return redirect()->route('patient_panel',$patient_id)->with('fail','KFT value is not Saved.');
                }
                break;
                
            case 'semenanalysis':
                $request->validate([
                    'VOLUME' => ['required','numeric'],
                    'COLOUR' => ['required','alpha'],
                    'REACTION' => ['required','string'],
                    'VISCOCITY' => ['required','string'],
                    'LIQUEFACTION_TIME' => ['required','string'],
                    'TOTAL_SPERMCOUNT' => ['required','numeric'],
                    'ACTIVE' => ['required','numeric'],
                    'SLUGGISH' => ['required','numeric'],
                    'NON_MOTILE' => ['required','numeric'],
                    'PUS_CELLS' => ['required','numeric'],
                    'EPITHELIAL_CELLS' => ['required','numeric'],
                ]);
                $semenanalysis = new semenanalysis();
                $semenanalysis->VOLUME = $request->VOLUME;
                $semenanalysis->COLOUR = $request->COLOUR;
                $semenanalysis->REACTION = $request->REACTION;
                $semenanalysis->VISCOCITY = $request->VISCOCITY;
                $semenanalysis->LIQUEFACTION_TIME = $request->LIQUEFACTION_TIME;
                $semenanalysis->TOTAL_SPERMCOUNT = $request->TOTAL_SPERMCOUNT;
                $semenanalysis->ACTIVE = $request->ACTIVE;
                $semenanalysis->SLUGGISH = $request->SLUGGISH;
                $semenanalysis->NON_MOTILE = $request->NON_MOTILE;
                $semenanalysis->PUS_CELLS = $request->PUS_CELLS;
                $semenanalysis->EPITHELIAL_CELLS = $request->EPITHELIAL_CELLS;
                if ($patient->semenanalysis()->save($semenanalysis)) {
                    return redirect()->route('patient_panel',$patient_id)->with('success','Semenan Alysis value is Saved.');
                } else {
                    return redirect()->route('patient_panel',$patient_id)->with('fail','Semenan Alysis value is not Saved.');
                }
                break;

            case 'malariaparasite':
                if($request->comment != null){
                    $request->validate([
                        'mp' => ['required','string'],
                        'comment' => ['required','string'],
                    ]);
                }else{
                    $request->validate([
                        'mp' => ['required','string'],
                    ]);
                }

                $malariaparasite = new malariaparasite();
                $malariaparasite->mp = $request->mp;
                $malariaparasite->comment = $request->comment;
                
                if ($patient->malariaparasite()->save($malariaparasite)) {
                    return redirect()->route('patient_panel',$patient_id)->with('success','Malaria parasite value is Saved.');
                } else {
                    return redirect()->route('patient_panel',$patient_id)->with('fail','Malaria parasite value is not Saved.');
                }
                break;

            case 'hbsag':
                $request->validate([
                    'hbsag' => ['required','string'],
                ]);
                $hbsag = new hbsag();
                $hbsag->hbsag = $request->hbsag;
                
                if ($patient->hbsag()->save($hbsag)) {
                    return redirect()->route('patient_panel',$patient_id)->with('success','HBSAG value is Saved.');
                } else {
                    return redirect()->route('patient_panel',$patient_id)->with('fail','HBSAG value is not Saved.');
                }
                break;

            case 'crpqualitative':
                $request->validate([
                    'crp' => ['required','string'],
                ]);
                $crpqualitative = new crpqualitative();
                $crpqualitative->crp = $request->crp;
                
                if ($patient->crpqualitative()->save($crpqualitative)) {
                    return redirect()->route('patient_panel',$patient_id)->with('success','CRP Qualitative value is Saved.');
                } else {
                    return redirect()->route('patient_panel',$patient_id)->with('fail','CRP Qualitative value is not Saved.');
                }
                break;

            case 'crpquantitative':
                $request->validate([
                    'crp' => ['required','numeric'],
                ]);
            
                $crpquantitative = new crpquantitative();
                $crpquantitative->crp = $request->crp;
                
                if ($patient->crpquantitative()->save($crpquantitative)) {
                    return redirect()->route('patient_panel',$patient_id)->with('success','CRP Quantitative value is Saved.');
                } else {
                    return redirect()->route('patient_panel',$patient_id)->with('fail','CRP Quantitative value is not Saved.');
                }
                break;

            case 'dengueelisa':
                $request->validate([
                    'dengue' => ['required','numeric'],
                ]);
            
                $dengueelisa = new dengueelisa();
                $dengueelisa->dengue = $request->dengue;
                
                if ($patient->dengueelisa()->save($dengueelisa)) {
                    return redirect()->route('patient_panel',$patient_id)->with('success','DENGUE NS1 ELISA value is Saved.');
                } else {
                    return redirect()->route('patient_panel',$patient_id)->with('fail','DENGUE NS1 ELISA value is not Saved.');
                }
                break;

            case 'denguensone':
                $request->validate([
                    'dengue' => ['required','string'],
                ]);
            
                $denguensone = new denguensone();
                $denguensone->dengue = $request->dengue;
                
                if ($patient->denguensone()->save($denguensone)) {
                    return redirect()->route('patient_panel',$patient_id)->with('success','DENGUE NS1 ANTIGEN value is Saved.');
                } else {
                    return redirect()->route('patient_panel',$patient_id)->with('fail','DENGUE NS1 ANTIGEN value is not Saved.');
                }
                break;

            case 'dengueiggigm':
            
                if ($request->igg != null && $request->igm != null) {
                    $request->validate([
                        'igg' => ['required','string'],
                        'igm' => ['required','string'],
                    ]);
                } else if($request->igg != null) {
                    $request->validate([
                        'igg' => ['required','string'],
                    ]);
                } else if($request->igm != null) {
                    $request->validate([
                        'igm' => ['required','string'],
                    ]);
                } else if($request->igg == null && $request->igm == null){
                    $request->validate([
                        'igg' => ['required','string'],
                        'igm' => ['required','string'],
                    ]); 
                }else{
                    return "somthig went worng from typhidot igg igm";
                }
                
                $dengueiggigm = new dengueiggigm();
                $dengueiggigm->igg = $request->igg;
                $dengueiggigm->igm = $request->igm;

                if ($patient->dengueiggigm()->save($dengueiggigm)) {
                    return redirect()->route('patient_panel',$patient_id)->with('success','DENGUE IgG IgM value is Saved.');
                } else {
                    return redirect()->route('patient_panel',$patient_id)->with('fail','Dengue IgG IgM value is not Saved.');
                }
                break;

            case 'bloodgroup':

                $request->validate([
                    'blood_group' => ['required','alpha'],
                    'rh_typing' => ['required','alpha'],
                ]);
                $bloodgroup = new bloodgroup();
                $bloodgroup->blood_group = $request->blood_group;
                $bloodgroup->rh_typing = $request->rh_typing;
                
                if ($patient->bloodgroup()->save($bloodgroup)) {
                    return redirect()->route('patient_panel',$patient_id)->with('success','Blood Group value is saved.');
                } else {
                    return redirect()->route('patient_panel',$patient_id)->with('fail','Blood Group value is not saved.');
                }
                
                break;

            case 'fastingbloodsugar':
                $request->validate([
                    'fasting' => ['required','numeric'],
                ]);
                $fastingbloodsugar = new fastingbloodsugar();
                $fastingbloodsugar->fasting = $request->fasting;

                if ($patient->fastingbloodsugar()->save($fastingbloodsugar)) {
                    return redirect()->route('patient_panel',$patient_id)->with('success','Blood Sugar Fasting value is saved.');
                } else {
                    return redirect()->route('patient_panel',$patient_id)->with('fail','Blood Sugar Fasting value is not saved.');
                }

                break;
            case 'btct':
            
                $request->validate([
                    'BLEEDING_TIME' => ['required','string'],
                    'CLOTTING_TIME' => ['required','string'],
                ]);
                $btct = new btct();
                $btct->BLEEDING_TIME = $request->BLEEDING_TIME;
                $btct->CLOTTING_TIME = $request->CLOTTING_TIME;
                if ($patient->btct()->save($btct)) {
                    return redirect()->route('patient_panel',$patient_id)->with('success','BTCT value is saved.');
                } else {
                    return redirect()->route('patient_panel',$patient_id)->with('fail','BTCT value is not saved.');
                }
                break;

            case 'fastingpp':
                $request->validate([
                    'fasting' => ['required','numeric'],
                    'pp' => ['required','numeric'],
                ]);
                $fastingpp = new fastingpp();
                $fastingpp->fasting = $request->fasting;
                $fastingpp->pp = $request->pp;
                if ($patient->fastingpp()->save($fastingpp)) {
                    return redirect()->route('patient_panel',$patient_id)->with('success','Glucose Fasting + Post Prandial value is saved.');
                } else {
                    return redirect()->route('patient_panel',$patient_id)->with('fail','Glucose Fasting + Post Prandial value is not saved.');
                }
                break;
            case 'randombloodsugar':
                $request->validate([
                    'random_sugar' => ['required','numeric'],
                ]);
                $randombloodsugar = new randombloodsugar();
                $randombloodsugar->random_sugar = $request->random_sugar;

                if ($patient->randombloodsugar()->save($randombloodsugar)) {
                    return redirect()->route('patient_panel',$patient_id)->with('success','Blood Sugar Random value is saved.');
                } else {
                    return redirect()->route('patient_panel',$patient_id)->with('fail','Blood Sugar Random value is not saved.');
                }

                break;
            case 'hcv':
                $request->validate([
                    'hcv' => ['required','string'],
                ]);
                $hcv = new hcv();
                $hcv->hcv = $request->hcv;

                if ($patient->hcv()->save($hcv)) {
                    return redirect()->route('patient_panel',$patient_id)->with('success','HCV value is saved.');
                } else {
                    return redirect()->route('patient_panel',$patient_id)->with('fail','HCV value is not saved.');
                }

                break;
            case 'hiv':
                $request->validate([
                    'hiv' => ['required','string'],
                ]);
                $hiv = new hiv();
                $hiv->hiv = $request->hiv;

                if ($patient->hiv()->save($hiv)) {
                    return redirect()->route('patient_panel',$patient_id)->with('success','HIV value is saved.');
                } else {
                    return redirect()->route('patient_panel',$patient_id)->with('fail','HIV value is not saved.');
                }

                break;

            case 'vdrl':
                $request->validate([
                    'rpr' => ['required','string'],
                ]);
                $vdrl = new vdrl();
                $vdrl->rpr = $request->rpr;

                if ($patient->vdrl()->save($vdrl)) {
                    return redirect()->route('patient_panel',$patient_id)->with('success','VDRL Test RPR value is saved.');
                } else {
                    return redirect()->route('patient_panel',$patient_id)->with('fail','VDRL Test RPR value is not saved.');
                }
                break;

            case 'vitaminbtwelve':
                $request->validate([
                    'vitaminb' => ['required','numeric'],
                ]);
                $vitaminbtwelve = new vitaminbtwelve();
                $vitaminbtwelve->vitaminb = $request->vitaminb;

                if ($patient->vitaminbtwelve()->save($vitaminbtwelve)) {
                    return redirect()->route('patient_panel',$patient_id)->with('success','Vitamin B12 Level Test value is saved.');
                } else {
                    return redirect()->route('patient_panel',$patient_id)->with('fail','Vitamin B12 Level value is not saved.');
                }
                break;

            case 'plateletcount':
                $request->validate([
                    'platelet' => ['required','numeric'],
                ]);
                $plateletcount = new plateletcount();
                $plateletcount->platelet = $request->platelet;

                if ($patient->plateletcount()->save($plateletcount)) {
                    return redirect()->route('patient_panel',$patient_id)->with('success','Platelet counte value is saved.');
                } else {
                    return redirect()->route('patient_panel',$patient_id)->with('fail','Platelet counte value is not saved.');
                }
                break;

            case 'thyroid':
                if ($request->t3 != "" && $request->t4 != "" && $request->tsh != "") {
                    $request->validate([
                        't3' => ['required','numeric'],
                        't4' => ['required','numeric'],
                        'tsh' => ['required','numeric'],
                    ]);
                } else if ($request->t3 != "" && $request->t4 != ""){
                    $request->validate([
                        't3' => ['required','numeric'],
                        't4' => ['required','numeric'],
                    ]);
                }else if ($request->t4 != "" && $request->tsh != ""){
                    $request->validate([
                        't4' => ['required','numeric'],
                        'tsh' => ['required','numeric'],
                    ]);
                }else if ($request->t3 != "" && $request->tsh != ""){
                    $request->validate([
                        't3' => ['required','numeric'],
                        'tsh' => ['required','numeric'],
                    ]);
                }else if ($request->t3 != ""){
                    $request->validate([
                        't3' => ['required','numeric'],
                    ]);
                }else if ($request->t4 != ""){
                    $request->validate([
                        't4' => ['required','numeric'],
                    ]);
                }else if ($request->tsh != ""){
                    $request->validate([
                        'tsh' => ['required','numeric'],
                    ]);
                }else if ($request->t3 == "" && $request->t4 == "" && $request->tsh == ""){
                    $request->validate([
                        't3' => ['required','numeric'],
                        't4' => ['required','numeric'],
                        'tsh' => ['required','numeric'],
                    ]);
                }else{
                    return "somthing went worng.!";
                }
                
                $thyroid = new thyroid();
                $thyroid->t3 = $request->t3;
                $thyroid->t4 = $request->t4;
                $thyroid->tsh = $request->tsh;;

                if ($patient->thyroid()->save($thyroid)) {
                    return redirect()->route('patient_panel',$patient_id)->with('success','Thyroid Function test value is saved.');
                } else {
                    return redirect()->route('patient_panel',$patient_id)->with('fail','Thyroid Function test value is not saved.');
                }
                break;
            
            case 'widal':
                $request->validate([
                    'RESULT' => ['required','string'],
                ]);
                $widal = new widal();
                $widal->TYPHI_O_1_40 = $request->TYPHI_O_1_40;
                $widal->TYPHI_O_1_80 = $request->TYPHI_O_1_80;
                $widal->TYPHI_O_1_160 = $request->TYPHI_O_1_160;
                $widal->TYPHI_O_1_320 = $request->TYPHI_O_1_320;

                $widal->TYPHI_H_1_40 = $request->TYPHI_H_1_40;
                $widal->TYPHI_H_1_80 = $request->TYPHI_H_1_80;
                $widal->TYPHI_H_1_160 = $request->TYPHI_H_1_160;
                $widal->TYPHI_H_1_320 = $request->TYPHI_H_1_320;

                $widal->TYPHI_AH_1_40 = $request->TYPHI_AH_1_40;
                $widal->TYPHI_AH_1_80 = $request->TYPHI_AH_1_80;
                $widal->TYPHI_AH_1_160 = $request->TYPHI_AH_1_160;
                $widal->TYPHI_AH_1_320 = $request->TYPHI_AH_1_320;

                $widal->TYPHI_BH_1_40 = $request->TYPHI_BH_1_40;
                $widal->TYPHI_BH_1_80 = $request->TYPHI_BH_1_40;
                $widal->TYPHI_BH_1_160 = $request->TYPHI_BH_1_40;
                $widal->TYPHI_BH_1_320 = $request->TYPHI_BH_1_40;

                $widal->RESULT = $request->RESULT;

                if ($patient->widal()->save($widal)) {
                    return redirect()->route('patient_panel',$patient_id)->with('success','Widal slide method value is saved.');
                } else {
                    return redirect()->route('patient_panel',$patient_id)->with('fail','Widal slide method value is not saved.');
                }
                break;

            case 'typhidotiggigm':
            
                if ($request->igg != null && $request->igm != null) {
                    $request->validate([
                        'igg' => ['required','string'],
                        'igm' => ['required','string'],
                    ]);
                } else if($request->igg != null) {
                    $request->validate([
                        'igg' => ['required','string'],
                    ]);
                } else if($request->igm != null) {
                    $request->validate([
                        'igm' => ['required','string'],
                    ]);
                } else if($request->igg == null && $request->igm == null){
                    $request->validate([
                        'igg' => ['required','string'],
                        'igm' => ['required','string'],
                    ]); 
                }else{
                    return "somthig went worng from typhidot igg igm";
                }
                
                $typhidotiggigm = new typhidotiggigm();
                $typhidotiggigm->igg = $request->igg;
                $typhidotiggigm->igm = $request->igm;

                if ($patient->typhidotiggigm()->save($typhidotiggigm)) {
                    return redirect()->route('patient_panel',$patient_id)->with('success','Typhidot IgG IgM value is Saved.');
                } else {
                    return redirect()->route('patient_panel',$patient_id)->with('fail','Typhidot IgG IgM value is not Saved.');
                }
                break;
            
            case 'mantoux':
                $request->validate([
                    'Date_of_inoculation' => 'date',
                    'Date_of_reporting' => 'date',
                    'ANTIGEN' => 'alpha',
                    'DOSE' => 'numeric',
                    'MODE' => 'alpha',
                    'OBSERVATION' => 'numeric',
                    'INDURATION' => 'numeric',
                    'IMPRESSION' => 'string', 

                ]);
                $Date_of_inoculation = date_format(date_create($request->Date_of_inoculation.$request->Time_of_inoculation),"Y-m-d H:i:s");
                $Date_of_reporting = date_format(date_create($request->Date_of_reporting.$request->Time_of_reporting),"Y-m-d H:i:s");

                $mantoux = new mantoux();
                $mantoux->Date_of_inoculation = $Date_of_inoculation;
                $mantoux->Date_of_reporting = $Date_of_reporting;
                $mantoux->ANTIGEN = $request->ANTIGEN;
                $mantoux->DOSE = $request->DOSE;
                $mantoux->MODE = $request->MODE;
                $mantoux->OBSERVATION = $request->OBSERVATION;
                $mantoux->INDURATION = $request->INDURATION;
                $mantoux->IMPRESSION = $request->IMPRESSION;
                
                if ($patient->mantoux()->save($mantoux)) {
                    return redirect()->route('patient_panel',$patient_id)->with('success','Mantoux value is Saved.');
                } else {
                    return redirect()->route('patient_panel',$patient_id)->with('fail','Mantoux value is not Saved.');
                }
                break;
    
            
            default:
                return "somthing worng";
                break;
        }//END SWITCH 
    }
    /*
    |--------------------------------------------------------------------------
    |----- END ---------- END ---------- END ---------- END ---------- END ----
    |--------------------------------------------------------------------------
    |
    */


    
    /*
    |--------------------------------------------------------------------------
    |------- UPDATE REPORT ------- UPDATE REPORT ------- UPDATE REPORT -------- 
    |--------------------------------------------------------------------------
    |
    */
    public function upate_report($mv_name,$patient_id,Request $request){
        switch ($mv_name) {
            case 'upt':
                $request->validate([
                    'UPT' => ['required','string']
                ]);
                $upt = upt::find($request->test_id);
                $upt->UPT = $request->UPT;

                if ($upt->save()) {
                    return redirect()->route('patient_panel',$patient_id)->with('success','URINE PREGNANCY TEST value is Update.');
                } else {
                    return redirect()->route('patient_panel',$patient_id)->with('fail','URINE PREGNANCY TEST value is not Update.');
                }
                break;

            case 'urm':
                $request->validate([
                    'Color' => ['required','string'],
                    'Transparency' => ['required','string'],
                    'pH' => ['required','numeric'], 
                    'Specific_Gravity' => ['required','numeric'],
                    'Urine_Glucose' => ['required','string'],
                    'Urine_Protein' => ['required','string'],
                    'Urine_Bilirubin' => ['required','string'],
                    'Ketones' => ['required','string'],
                    'Blood' => ['required','string'],
                    'Leukocytes_Est' => ['required','string'],
                    'Rbc' => ['required','string'],
                    'Crystals' => ['required','string'],
                    'Rbc' => ['required','string'],
                    'Casts' => ['required','string'],
                    'Bacteria' => ['required','string'],
                    'Pus_Cells' => ['required','numeric'],
                    'Epithelial_Cells' => ['required','numeric'],
                    
                ]);
                $urine = urm::find($request->test_id);
                $urine->Color = $request->Color;
                $urine->Transparency = $request->Transparency;
                $urine->pH = $request->pH;
                $urine->Specific_Gravity = $request->Specific_Gravity;
                $urine->Urine_Glucose = $request->Urine_Glucose;
                $urine->Urine_Protein = $request->Urine_Protein;
                $urine->Urine_Bilirubin = $request->Urine_Bilirubin;

                $urine->Ketones = $request->Ketones;
                $urine->Blood = $request->Blood;
                $urine->Leukocytes_Est = $request->Leukocytes_Est;
                $urine->Pus_Cells = $request->Pus_Cells;
                $urine->Epithelial_Cells = $request->Epithelial_Cells;
                $urine->Rbc = $request->Rbc;
                $urine->Crystals = $request->Crystals;
                $urine->Casts = $request->Casts;
                $urine->Bacteria = $request->Bacteria;
                $urine->Others = $request->Others;

                if ($urine->save()) {
                    return redirect()->route('patient_panel',$patient_id)->with('success','URINE ROUTINE AND MICROSCOPY value is Update.');
                } else {
                    return redirect()->route('patient_panel',$patient_id)->with('fail','URINE ROUTINE AND MICROSCOPY value is not Update.');
                }
                break;

            case 'cbc':
                $request->validate([
                    'Haemoglobin' => ['required','numeric'],
                    'RBC' => ['required','numeric'],
                    'HCT' => ['required','numeric'], 
                    'MCV' => ['required','numeric'],
                    'MCH' => ['required','numeric'],
                    'MCHC' => ['required','numeric'],
                    'RDWSD' => ['required','numeric'],
                    'RDWCV' => ['required','numeric'],

                    'TLC' => ['required','numeric'],
                    'Platelet' => ['required','numeric'],
                    
                    'Neutrophil' => ['required','numeric'],
                    'Lymphocytes' => ['required','numeric'],
                    'Eosinophils' => ['required','numeric'],
                    'Monocytes' => ['required','numeric'],
                    'Basophils' => ['required','numeric'],

                    'ANC' => ['required','numeric'],
                    'ALC' => ['required','numeric'],
                    'AEC' => ['required','numeric'],
                    'AMC' => ['required','numeric'],
                    'ABC' => ['required','numeric'],

                    'NLR' => ['required','numeric'],
                    'LMR' => ['required','numeric'],
                    'PLR' => ['required','numeric'],

                ]);

                if($request->ESR != null){
                    $request->validate([
                        'ESR' => ['required','numeric'],
                    ]);  
                }
                if($request->MPV != null && $request->PCT != null && $request->PDW != null){
                    $request->validate([
                        'MPV' => ['required','numeric'],
                        'PCT' => ['required','numeric'],
                        'PDW' => ['required','numeric'],
                    ]);
                }
                $cbc = cbc::find($request->test_id);
                $cbc->HAEMOGLOBIN = $request->Haemoglobin;
                $cbc->RBC = $request->RBC;
                $cbc->HCt = $request->HCT;
                $cbc->MCV = $request->MCV;
                $cbc->MCH=  $request->MCH;
                $cbc->MCHC = $request->MCHC;
                $cbc->RDW_SD = $request->RDWSD;
                $cbc->RDW_CV = $request->RDWCV;

                $cbc->TLC = $request->TLC;
                $cbc->PLATELET_COUNT = $request->Platelet;
                $cbc->ESR = $request->ESR;

                $cbc->Neutrophil = $request->Neutrophil;
                $cbc->Lymphocytes = $request->Lymphocytes;
                $cbc->Eosinophils = $request->Eosinophils;
                $cbc->Monocytes = $request->Monocytes;
                $cbc->Basophils = $request->Basophils;

                $cbc->ANC = $request->ANC;
                $cbc->ALC = $request->ALC;
                $cbc->AEC = $request->AEC;
                $cbc->AMC = $request->AMC;
                $cbc->ABC = $request->ABC;

                $cbc->NLR = $request->NLR;
                $cbc->LMR = $request->LMR;
                $cbc->PLR = $request->PLR;

                $cbc->MPV = $request->MPV;
                $cbc->PCT = $request->PCT;
                $cbc->PDW = $request->PDW;

                if ($cbc->save()) {
                    return redirect()->route('patient_panel',$patient_id)->with('success','CBC value is Update.');
                } else {
                    return redirect()->route('patient_panel',$patient_id)->with('fail','CBC value is not Update.');
                }
                break;

            case 'gtt':
                if($request->bs_fasting != null && $request->bs_after_one_hour != null && $request->bs_after_two_hour != null){
                    $request->validate([
                        'bs_fasting' => ['required','numeric'],
                        'bs_after_one_hour' => ['required','numeric'],
                        'bs_after_two_hour' => ['required','numeric'], 
                    ]);
                    
                }else if($request->bs_fasting != null && $request->bs_after_one_hour != null){
                    $request->validate([
                        'bs_fasting' => ['required','numeric'],
                        'bs_after_one_hour' => ['required','numeric'],
                    ]);
                    
                }else if($request->bs_after_one_hour != null && $request->bs_after_two_hour != null){
                    $request->validate([
                        'bs_after_one_hour' => ['required','numeric'],
                        'bs_after_two_hour' => ['required','numeric'],
                    ]);
                }else if($request->bs_fasting != null && $request->bs_after_two_hour != null){
                    $request->validate([
                        'bs_fasting' => ['required','numeric'],
                        'bs_after_two_hour' => ['required','numeric'],
                    ]);
                }else if($request->bs_fasting != null){
                    $request->validate([
                        'bs_fasting' => ['required','numeric'],
                    ]);
                }else if($request->bs_after_two_hour != null){
                    $request->validate([
                        'bs_after_two_hour' => ['required','numeric'],
                    ]);
                }else if($request->bs_after_one_hour){
                    $request->validate([
                        'bs_after_one_hour' => ['required','numeric'],
                    ]);
                }else{
                    $request->validate([
                        'bs_fasting' => ['required','numeric'],
                        'bs_after_one_hour' => ['required','numeric'],
                        'bs_after_two_hour' => ['required','numeric'],
                    ]);
                }
                
                $gtt = gtt::find($request->test_id);
                $gtt->bs_fasting = $request->bs_fasting;
                $gtt->bs_after_one_hour = $request->bs_after_one_hour;
                $gtt->bs_after_two_hour = $request->bs_after_two_hour;
                
                if ($gtt->save()) {
                    return redirect()->route('patient_panel',$patient_id)->with('success','Glucose Tolerance Test (GTT) 3 Sample value is Update.');
                } else {
                    return redirect()->route('patient_panel',$patient_id)->with('fail','Glucose Tolerance Test (GTT) 3 Sample value is not Update.');
                }
                break;

            case 'hbaonec':
                if($request->ag != null){
                    $request->validate([
                        'hb' => ['required','numeric'],
                        'ag' => ['required','numeric'],  
                    ]);
                }else{
                    $request->validate([
                        'hb' => ['required','numeric'],  
                    ]);
                }
                $hbaonec = hbaonec::find($request->test_id);
                $hbaonec->hb = $request->hb;
                $hbaonec->ag = $request->ag;
                if ($hbaonec->save()) {
                    return redirect()->route('patient_panel',$patient_id)->with('success','HbA1c (Glycated hemoglobin) value is Updated.');
                } else {
                    return redirect()->route('patient_panel',$patient_id)->with('fail','HbA1c (Glycated hemoglobin) value is not Updated.');
                }
                break;

            case 'kft':
                $request->validate([
                    'Blood_Urea' => ['required','numeric'],
                    'Serum_Creatinine' => ['required','numeric'],
                    'Uric_Acid' => ['required','numeric'],
                    'Sodium' => ['required','numeric'],
                    'Potassium' => ['required','numeric'],
                    'Chloride' => ['required','numeric'],
                    'Blood_Urea_Nitrogen' => ['required','numeric'],
                    'Creatinine_Ratio' => ['required','numeric'],  
                ]);

                $kft = kft::find($request->test_id);
                $kft->Blood_Urea = $request->Blood_Urea;
                $kft->Serum_Creatinine = $request->Serum_Creatinine;
                $kft->Uric_Acid = $request->Uric_Acid;
                $kft->Sodium = $request->Sodium;
                $kft->Potassium = $request->Potassium;
                $kft->Chloride = $request->Chloride;
                $kft->Blood_Urea_Nitrogen = $request->Blood_Urea_Nitrogen;
                $kft->Creatinine_Ratio = $request->Creatinine_Ratio;
                
               
                if ($kft->save()) {
                    return redirect()->route('patient_panel',$patient_id)->with('success','KFT value is Updated.');
                } else {
                    return redirect()->route('patient_panel',$patient_id)->with('fail','KFT value is not Updated.');
                }
                break;

            case 'semenanalysis':
                $request->validate([
                    'VOLUME' => ['required','numeric'],
                    'COLOUR' => ['required','alpha'],
                    'REACTION' => ['required','string'],
                    'VISCOCITY' => ['required','string'],
                    'LIQUEFACTION_TIME' => ['required','string'],
                    'TOTAL_SPERMCOUNT' => ['required','numeric'],
                    'ACTIVE' => ['required','numeric'],
                    'SLUGGISH' => ['required','numeric'],
                    'NON_MOTILE' => ['required','numeric'],
                    'PUS_CELLS' => ['required','numeric'],
                    'EPITHELIAL_CELLS' => ['required','numeric'],
                ]);
                $semenanalysis = semenanalysis::find($request->test_id);
                $semenanalysis->VOLUME = $request->VOLUME;
                $semenanalysis->COLOUR = $request->COLOUR;
                $semenanalysis->REACTION = $request->REACTION;
                $semenanalysis->VISCOCITY = $request->VISCOCITY;
                $semenanalysis->LIQUEFACTION_TIME = $request->LIQUEFACTION_TIME;
                $semenanalysis->TOTAL_SPERMCOUNT = $request->TOTAL_SPERMCOUNT;
                $semenanalysis->ACTIVE = $request->ACTIVE;
                $semenanalysis->SLUGGISH = $request->SLUGGISH;
                $semenanalysis->NON_MOTILE = $request->NON_MOTILE;
                $semenanalysis->PUS_CELLS = $request->PUS_CELLS;
                $semenanalysis->EPITHELIAL_CELLS = $request->EPITHELIAL_CELLS;
                if ($semenanalysis->save()) {
                    return redirect()->route('patient_panel',$patient_id)->with('success','Semenan Alysis value is Updated.');
                } else {
                    return redirect()->route('patient_panel',$patient_id)->with('fail','Semenan Alysis value is not Updated.');
                }
                break;

            case 'malariaparasite':

                if($request->comment != null){
                    $request->validate([
                        'mp' => ['required','string'],
                        'comment' => ['required','string'],
                    ]);
                }else{
                    $request->validate([
                        'mp' => ['required','string'],
                    ]);
                }
                $malariaparasite = malariaparasite::find($request->test_id);
                $malariaparasite->mp = $request->mp;
                $malariaparasite->comment = $request->comment;
                
                if ($malariaparasite->save()) {
                    return redirect()->route('patient_panel',$patient_id)->with('success','Malaria parasite value is UPDATED.');
                } else {
                    return redirect()->route('patient_panel',$patient_id)->with('fail','Malaria parasite value is not UPDATED.');
                }
                break;

            case 'hbsag':
                $request->validate([
                    'hbsag' => ['required','string'],
                ]);
                $hbsag = hbsag::find($request->test_id);
                $hbsag->hbsag = $request->hbsag;
                
                if ($hbsag->save()) {
                    return redirect()->route('patient_panel',$patient_id)->with('success','HBSAG value is UPDATED.');
                } else {
                    return redirect()->route('patient_panel',$patient_id)->with('fail','HBSAG value is not UPDATED.');
                }
                break;

            case 'crpqualitative':
                $request->validate([
                    'crp' => ['required','string'],
                ]);
                $crpqualitative = crpqualitative::find($request->test_id);
                $crpqualitative->crp = $request->crp;
                
                if ($crpqualitative->save()) {
                    return redirect()->route('patient_panel',$patient_id)->with('success','CRP Qualitative value is UPDATED.');
                } else {
                    return redirect()->route('patient_panel',$patient_id)->with('fail','CRP Qualitative value is not UPDATED.');
                }
                break;

            case 'crpquantitative':
                $request->validate([
                    'crp' => ['required','numeric'],
                ]);
            
                $crpquantitative = crpquantitative::find($request->test_id);
                $crpquantitative->crp = $request->crp;
                
                if ($crpquantitative->save()) {
                    return redirect()->route('patient_panel',$patient_id)->with('success','CRP Quantitative value is UPDATED.');
                } else {
                    return redirect()->route('patient_panel',$patient_id)->with('fail','CRP Quantitative value is not UPDATED.');
                }
                break;

            case 'dengueelisa':
                $request->validate([
                    'dengue' => ['required','numeric'],
                ]);
                $dengueelisa = dengueelisa::find($request->test_id);
                $dengueelisa->dengue = $request->dengue;
            
                if ($dengueelisa->save()) {
                    return redirect()->route('patient_panel',$patient_id)->with('success','Dengue ELISA value is Updated.');
                } else {
                    return redirect()->route('patient_panel',$patient_id)->with('fail','Dengue NS1 ELISA is not Updated.');
                }
                break;

            case 'denguensone':
                $request->validate([
                    'dengue' => ['required','string'],
                ]);
                $denguensone = denguensone::find($request->test_id);
                $denguensone->dengue = $request->dengue;
            
                if ($denguensone->save()) {
                    return redirect()->route('patient_panel',$patient_id)->with('success','Dengue NS1 value is Updated.');
                } else {
                    return redirect()->route('patient_panel',$patient_id)->with('fail','Dengue NS1 value is not Updated.');
                }
                break;

            case 'dengueiggigm':
                
                if ($request->igg != null && $request->igm != null) {
                    $request->validate([
                        'igg' => ['required','string'],
                        'igm' => ['required','string'],
                    ]);
                } else if($request->igg != null) {
                    $request->validate([
                        'igg' => ['required','string'],
                    ]);
                } else if($request->igm != null) {
                    $request->validate([
                        'igm' => ['required','string'],
                    ]);
                } else if($request->igg == null && $request->igm == null){
                    $request->validate([
                        'igg' => ['required','string'],
                        'igm' => ['required','string'],
                    ]); 
                }else{
                    return "somthig went worng from dengue igg igm";
                }
                
                $dengueiggigm = dengueiggigm::find($request->test_id);
                $dengueiggigm->igg = $request->igg;
                $dengueiggigm->igm = $request->igm;

                if ($dengueiggigm->save()) {
                    return redirect()->route('patient_panel',$patient_id)->with('success','Dengue IgG IgM value is Updated.');
                } else {
                    return redirect()->route('patient_panel',$patient_id)->with('fail','Dengue IgG IgM value is not Updated.');
                }
                break;

            case 'bloodgroup':
                $request->validate([
                    'blood_group' => ['required','alpha'],
                    'rh_typing' => ['required','alpha'],
                ]);
                $bloodgroup = bloodgroup::find($request->test_id);
                $bloodgroup->blood_group = $request->blood_group;
                $bloodgroup->rh_typing = $request->rh_typing;
                if ($bloodgroup->save()) {
                    return redirect()->route('patient_panel',$patient_id)->with('success','Blood Group value is Updated.');
                } else {
                    return redirect()->route('patient_panel',$patient_id)->with('success','Blood Group value is not Updated.');
                }
                break;

            case 'fastingbloodsugar':
                $request->validate([
                    'fasting' => ['required','numeric'],
                ]);
                $fastingbloodsugar = fastingbloodsugar::find($request->test_id);
                $fastingbloodsugar->fasting = $request->fasting;
                if ($fastingbloodsugar->save()) {
                    return redirect()->route('patient_panel',$patient_id)->with('success','Blood Sugar Fasting value is Updated.');
                } else {
                    return redirect()->route('patient_panel',$patient_id)->with('success','Blood Sugar Fasting value is not Updated.');
                }
                break;

            case 'btct':
                $request->validate([
                    'BLEEDING_TIME' => ['required','string'],
                    'CLOTTING_TIME' => ['required','string'],
                ]);
                $btct = btct::find($request->test_id);
                $btct->BLEEDING_TIME = $request->BLEEDING_TIME;
                $btct->CLOTTING_TIME = $request->CLOTTING_TIME;
                if ($btct->save()) {
                    return redirect()->route('patient_panel',$patient_id)->with('success','BTCT value is Updated.');
                } else {
                    return redirect()->route('patient_panel',$patient_id)->with('success','BTCT value is not Updated.');
                }
                break;
            case 'fastingpp':
                $request->validate([
                    'fasting' => ['required','numeric'],
                    'pp' => ['required','numeric'],
                ]);
                $fastingpp = fastingpp::find($request->test_id);
                $fastingpp->fasting = $request->fasting;
                $fastingpp->pp = $request->pp;
                if ($fastingpp->save()) {
                    return redirect()->route('patient_panel',$patient_id)->with('success','Glucose Fasting + Post Prandial value is Updated.');
                } else {
                    return redirect()->route('patient_panel',$patient_id)->with('fail','Glucose Fasting + Post Prandial value is not Updated.');
                }
                break;

            case 'randombloodsugar':
                $request->validate([
                    'random_sugar' => ['required','numeric'],
                ]);

                $randombloodsugar = randombloodsugar::find($request->test_id);
                $randombloodsugar->random_sugar = $request->random_sugar;

                if ($randombloodsugar->save()) {
                    return redirect()->route('patient_panel',$patient_id)->with('success','Blood Sugar Random value is Updated.');
                } else {
                    return redirect()->route('patient_panel',$patient_id)->with('fail','Blood Sugar Random value is not Updated.');
                }
                break;

            case 'hcv':
                $request->validate([
                    'hcv' => ['required','string'],
                ]);
                $hcv = hcv::find($request->test_id);
                $hcv->hcv = $request->hcv;

                if ($hcv->save()) {
                    return redirect()->route('patient_panel',$patient_id)->with('success','HCV value is Updated.');
                } else {
                    return redirect()->route('patient_panel',$patient_id)->with('fail','HCV value is not Updated.');
                }

                break;

            case 'hiv':
                $request->validate([
                    'hiv' => ['required','string'],
                ]);
                $hiv = hiv::find($request->test_id);
                $hiv->hiv = $request->hiv;

                if ($hiv->save()) {
                    return redirect()->route('patient_panel',$patient_id)->with('success','HIV  value is Updated.');
                } else {
                    return redirect()->route('patient_panel',$patient_id)->with('fail','HIV value is not Updated.');
                }

                break;

            case 'vdrl':
                $request->validate([
                    'rpr' => ['required','string'],
                ]);
                $vdrl = vdrl::find($request->test_id);
                $vdrl->rpr = $request->rpr;

                if ($vdrl->save()) {
                    return redirect()->route('patient_panel',$patient_id)->with('success','VDRL Test (RPR)  value is Updated.');
                } else {
                    return redirect()->route('patient_panel',$patient_id)->with('fail','VDRL Test (RPR) value is not Updated.');
                }
                break;

            case 'vitaminbtwelve':
                $request->validate([
                    'vitaminb' => ['required','numeric'],
                ]);
                $vitaminbtwelve = vitaminbtwelve::find($request->test_id);
                $vitaminbtwelve->vitaminb = $request->vitaminb;

                if ($vitaminbtwelve->save()) {
                    return redirect()->route('patient_panel',$patient_id)->with('success','Vitamin B12 Level Test value is Updated.');
                } else {
                    return redirect()->route('patient_panel',$patient_id)->with('fail','Vitamin B12 Level value is not Updated.');
                }
                break;

            case 'plateletcount':
                $request->validate([
                    'platelet' => ['required','numeric'],
                ]);
                $plateletcount = plateletcount::find($request->test_id);
                $plateletcount->platelet = $request->platelet;
                $plateletcount->reamrak = $request->reamrak;

                if ($plateletcount->save()) {
                    return redirect()->route('patient_panel',$patient_id)->with('success','Platelet counte value is Updated.');
                } else {
                    return redirect()->route('patient_panel',$patient_id)->with('fail','Platelet counte value is not Updated.');
                }
                break;
            
            case 'thyroid':
                if ($request->t3 != "" && $request->t4 != "" && $request->tsh != "") {
                    $request->validate([
                        't3' => ['required','numeric'],
                        't4' => ['required','numeric'],
                        'tsh' => ['required','numeric'],
                    ]);
                } else if ($request->t3 != "" && $request->t4 != ""){
                    $request->validate([
                        't3' => ['required','numeric'],
                        't4' => ['required','numeric'],
                    ]);
                }else if ($request->t4 != "" && $request->tsh != ""){
                    $request->validate([
                        't4' => ['required','numeric'],
                        'tsh' => ['required','numeric'],
                    ]);
                }else if ($request->t3 != "" && $request->tsh != ""){
                    $request->validate([
                        't3' => ['required','numeric'],
                        'tsh' => ['required','numeric'],
                    ]);
                }else if ($request->t3 != ""){
                    $request->validate([
                        't3' => ['required','numeric'],
                    ]);
                }else if ($request->t4 != ""){
                    $request->validate([
                        't4' => ['required','numeric'],
                    ]);
                }else if ($request->tsh != ""){
                    $request->validate([
                        'tsh' => ['required','numeric'],
                    ]);
                }else if ($request->t3 == "" && $request->t4 == "" && $request->tsh == ""){
                    $request->validate([
                        't3' => ['required','numeric'],
                        't4' => ['required','numeric'],
                        'tsh' => ['required','numeric'],
                    ]);
                }else{
                    return "somthing went worng.!";
                }

                $thyroid = thyroid::find($request->test_id);
                $thyroid->t3 = $request->t3;
                $thyroid->t4 = $request->t4;
                $thyroid->tsh = $request->tsh;

                if ($thyroid->save()) {
                    return redirect()->route('patient_panel',$patient_id)->with('success','Thyroid function test value is Updated.');
                } else {
                    return redirect()->route('patient_panel',$patient_id)->with('fail','Thyroid function test value is not Updated.');
                }
                break;

            case 'widal':
                $request->validate([
                    'RESULT' => ['required','string'],
                ]);
                $widal = widal::find($request->test_id);
                $widal->TYPHI_O_1_40 = $request->TYPHI_O_1_40;
                $widal->TYPHI_O_1_80 = $request->TYPHI_O_1_80;
                $widal->TYPHI_O_1_160 = $request->TYPHI_O_1_160;
                $widal->TYPHI_O_1_320 = $request->TYPHI_O_1_320;

                $widal->TYPHI_H_1_40 = $request->TYPHI_H_1_40;
                $widal->TYPHI_H_1_80 = $request->TYPHI_H_1_80;
                $widal->TYPHI_H_1_160 = $request->TYPHI_H_1_160;
                $widal->TYPHI_H_1_320 = $request->TYPHI_H_1_320;

                $widal->TYPHI_AH_1_40 = $request->TYPHI_AH_1_40;
                $widal->TYPHI_AH_1_80 = $request->TYPHI_AH_1_80;
                $widal->TYPHI_AH_1_160 = $request->TYPHI_AH_1_160;
                $widal->TYPHI_AH_1_320 = $request->TYPHI_AH_1_320;

                $widal->TYPHI_BH_1_40 = $request->TYPHI_BH_1_40;
                $widal->TYPHI_BH_1_80 = $request->TYPHI_BH_1_40;
                $widal->TYPHI_BH_1_160 = $request->TYPHI_BH_1_40;
                $widal->TYPHI_BH_1_320 = $request->TYPHI_BH_1_40;

                $widal->RESULT = $request->RESULT;

                if ($widal->save()) {
                    return redirect()->route('patient_panel',$patient_id)->with('success','WIDAL TEST (SLIDE METHOD) value is Updated.');
                } else {
                    return redirect()->route('patient_panel',$patient_id)->with('fail','WIDAL TEST (SLIDE METHOD) value is not Updated.');
                }
                break;

            case 'typhidotiggigm':
                
                if ($request->igg != null && $request->igm != null) {
                    $request->validate([
                        'igg' => ['required','string'],
                        'igm' => ['required','string'],
                    ]);
                } else if($request->igg != null) {
                    $request->validate([
                        'igg' => ['required','string'],
                    ]);
                } else if($request->igm != null) {
                    $request->validate([
                        'igm' => ['required','string'],
                    ]);
                } else if($request->igg == null && $request->igm == null){
                    $request->validate([
                        'igg' => ['required','string'],
                        'igm' => ['required','string'],
                    ]); 
                }else{
                    return "somthig went worng from typhidot igg igm";
                }
                
                $typhidotiggigm = typhidotiggigm::find($request->test_id);
                $typhidotiggigm->igg = $request->igg;
                $typhidotiggigm->igm = $request->igm;

                if ($typhidotiggigm->save()) {
                    return redirect()->route('patient_panel',$patient_id)->with('success','Typhidot IgG IgM value is Updated.');
                } else {
                    return redirect()->route('patient_panel',$patient_id)->with('fail','Typhidot IgG IgM value is not Updated.');
                }
                break;

            case 'mantoux':
                
                $request->validate([
                    'ANTIGEN' => 'alpha',
                    'DOSE' => 'numeric',
                    'MODE' => 'alpha',
                    'OBSERVATION' => 'numeric',
                    'INDURATION' => 'numeric',
                    'IMPRESSION' => 'string', 
                ]);
                $Date_of_inoculation = date_format(date_create($request->Date_of_inoculation.$request->Time_of_inoculation),"Y-m-d H:i:s");
                $Date_of_reporting = date_format(date_create($request->Date_of_reporting.$request->Time_of_reporting),"Y-m-d H:i:s");
                $mantoux = mantoux::find($request->test_id);
                $mantoux->Date_of_inoculation = $Date_of_inoculation;
                $mantoux->Date_of_reporting = $Date_of_reporting;
                $mantoux->ANTIGEN = $request->ANTIGEN;
                $mantoux->DOSE = $request->DOSE;
                $mantoux->MODE = $request->MODE;
                $mantoux->OBSERVATION = $request->OBSERVATION;
                $mantoux->INDURATION = $request->INDURATION;
                $mantoux->IMPRESSION = $request->IMPRESSION;

                if ($mantoux->save()) {
                    return redirect()->route('patient_panel',$patient_id)->with('success','Mantoux value is Updated.');
                } else {
                    return redirect()->route('patient_panel',$patient_id)->with('fail','Mantoux value is not Updated.');
                }
                break;

            default:
                # code...
                break;
        }
    }
    /*
    |--------------------------------------------------------------------------
    |----- END ---------- END ---------- END ---------- END ---------- END ----
    |--------------------------------------------------------------------------
    |
    */



    /*
    |--------------------------------------------------------------------------
    |------- DOWNLOAD REPORT ------- DOWNLOAD REPORT ------- DOWNLOAD REPORT --
    |--------------------------------------------------------------------------
    |
    */
    public function download_report($mv_name,$patient_id,Request $request){
        $view_name = $mv_name."_pdf";
        $pid = base64_decode($patient_id);

        $patient = patient::find($pid);
        $test = patient::find($pid)->$mv_name;

        if ($test) {
            $pdf = PDF::loadView("make_report.$view_name",['patient'=>$patient,'test'=>$test]);
            return $pdf->download('Asd Lab Report.pdf');
        } else {
            return back()->with('fail',"Report Not ready. please make report first");
        }
         
    }
    
    /*
    |--------------------------------------------------------------------------
    |----- END ---------- END ---------- END ---------- END ---------- END ----
    |--------------------------------------------------------------------------
    |
    */

    
    
}
