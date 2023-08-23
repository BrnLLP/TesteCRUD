<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Veiculo;

class VeiculoController extends Controller
{
    public function list(){
        return Veiculo::all();
    }
    public function create(Request $request)
    {
        $insert=[
            'modelo'=> $request->modelo,
            'data_aquisicao'=> $request->data_aquisicao,
            'placa'=> $request->placa,
            'tipo_acessibilidade'=> $request->tipo_acessibilidade

        ];
    }
    public function show(Request $request)
    {
        return Veiculo::find($request->id);
    }
    public function edit(Request $request)
    {
        $update=[
            'modelo'=> $request->modelo,
            'data_aquisicao'=> $request->data_aquisicao,
            'placa'=> $request->placa,
            'tipo_acessibilidade'=> $request->tipo_acessibilidade
        ];
        $veiculo=Veiculo::where("id",$request->id)->update($update);
        if($veiculo){
            $response = [
                'status'=>'ok',
                'success'=>true,
                'message'=>'Veiculo atualizado.'
            ];
            return $response;
        }else{
            $response = [
                'status'=>'ok',
                'success'=>false,
                'message'=>'Veiculo atualizado.'
            ];
            return $response;
        }
    }
    public function delete(Request $request)
    {
        $delete =  Veiculo::destroy($request->id);
        if($delete){
            $response = [
                'status'=>'ok',
                'success'=>true,
                'message'=>'Veiculo deletado.'
            ];
            return $response;
        }else{
            $response = [
                'status'=>'ok',
                'success'=>false,
                'message'=>'Falha do deletar.'
            ];
            return $response;
    }
}   
}
