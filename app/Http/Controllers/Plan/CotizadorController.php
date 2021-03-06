<?php

namespace App\Http\Controllers\Plan;

use App\Plan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CotizadorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $res=null;
        if($request->monto && $request->plan){
            // $this->cotizar($request->monto,$request->plan);
            $plan = Plan::find($request->plan);
            $res=$plan->cotizador($request->monto);
            // dd($res);
        }
        $planes = Plan::orderBy('nombre','asc')->get();
        return view('cotizador.index',['planes'=>$planes,'request'=>$request,'res'=>$res]);

    }

    // public function cotizar($monto,$plan){
        
    //     $anual_total = $plan->anual_total;
    //     $aportaciones_extraordinarias = $plan->apor_extr;
    //     $monto_financiar = $plan->monto_financiar($monto);
    //     $monto_adjudicar = $plan->monto_adjudicar($monto);
    //     $mes_actual = date('2018-11-11');
    //     // dd($mes_actual);
    //     $aportacion_mes = $monto_financiar/$plan->plazo;
    //     $cuota_admon_mes = $monto_financiar*($plan->cuota_admon/100);
    //     $cuota_admon_mes_iva=$cuota_admon_mes*(16/100);
    //     $seguro_vida_mes = $monto*($plan->s_v/100);
    //     $seguro_desempleo = $monto_adjudicar*($plan->s_d/100);
    //     $corrida = [];
    //     // dd($seguro_desempleo);
    //     $total_aportacion_en_mensualidades= 0.00;
    //     $total_cuota_administracion=0.00;
    //     for ($i = 1; $i <= $plan->plazo; $i++) {
    //         if(date('m',strtotime($mes_actual)) == "06" || date('m',strtotime($mes_actual)) == "12")
    //         {
    //             $aportacion_mes = $aportacion_mes*1.03;
    //             $cuota_admon_mes= $cuota_admon_mes*1.03;
    //             $cuota_admon_mes_iva = $cuota_admon_mes_iva*1.03;
    //             $seguro_vida_mes = $seguro_vida_mes*1.03;
    //         }
    //         if($plan->plan_meses<$i){
    //             // $seguro_desempleo = $monto_adjudicar*($plan->s_d/100);
    //             if(date('m',strtotime($mes_actual)) == "06" || date('m',strtotime($mes_actual)) == "12")
    //             {
    //                 $seguro_desempleo = $seguro_desempleo*1.03;
    //             }
    //             $mes = [
    //                 'mes'=>date('m',strtotime($mes_actual)),
    //                 'aportacion'=>$aportacion_mes,
    //                 'cuota_administracion'=>$cuota_admon_mes,
    //                 'iva'=>$cuota_admon_mes_iva,
    //                 'sv'=>$seguro_vida_mes,
    //                 'sd'=>$seguro_desempleo,
    //                 'total'=>$aportacion_mes+$cuota_admon_mes+$cuota_admon_mes_iva+$seguro_vida_mes+$seguro_desempleo,
    //             ];
    //         }
    //         else{
    //             $mes = [
    //                 'mes'=>date('m',strtotime($mes_actual)),
    //                 'aportacion'=>$aportacion_mes,
    //                 'cuota_administracion'=>$cuota_admon_mes,
    //                 'iva'=>$cuota_admon_mes_iva,
    //                 'sv'=>$seguro_vida_mes,
    //                 'sd'=>0.00,
    //                 'total'=>$aportacion_mes+$cuota_admon_mes+$cuota_admon_mes_iva+$seguro_vida_mes+0.00,
    //             ];
    //         }
    //         array_push($corrida,$mes);
    //         $total_aportacion_en_mensualidades += $aportacion_mes;
    //         $total_cuota_administracion +=$cuota_admon_mes;
    //         $mes_actual = date('Y-m-d',strtotime("+1 month",strtotime($mes_actual)));
            
    //     }
    //     $aportacion_integrante= 0.00;
    //     $cuota_periodica_integrante = 0.00;
    //     for ($i = 0 ; $i <  $plan->plan_meses; $i++) {
    //         // var_dump($i);
    //         $aportacion_integrante += $corrida[$i]['aportacion'];
    //         $cuota_periodica_integrante += $corrida[$i]['total'];
    //     }
    //     $aportacion_integrante = $aportacion_integrante/$plan->plan_meses;
    //     $cuota_periodica_integrante = $cuota_periodica_integrante/$plan->plan_meses;
    //     $aportacion_adjudicado = 0.00;
    //     $cuota_periodica_adjudicado = 0.00;
    //     // var_dump('adjudicado');
    //     for($i= $plan->plan_meses; $i< $plan->plazo;$i++){
    //         $aportacion_adjudicado += $corrida[$i]['aportacion'];
    //         $cuota_periodica_adjudicado += $corrida[$i]['total'];
    //         // var_dump($i);
    //     }
    //     // dd($plan->plazo-$plan->plan_meses);
    //     $aportacion_adjudicado = $aportacion_adjudicado/($plan->plazo-$plan->plan_meses);
    //     $cuota_periodica_adjudicado = $cuota_periodica_adjudicado/($plan->plazo-$plan->plan_meses);
    //     $total_aportaciones_en_extraordin= $monto_adjudicar*($aportaciones_extraordinarias/100);
    //     $total_aportacion = $total_aportacion_en_mensualidades+$total_aportaciones_en_extraordin;
    //     dd($total_cuota_administracion);
    //     dd($aportacion_integrante." ".$aportacion_adjudicado);
    //     dd($corrida);

    // }

    
}
