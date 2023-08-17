<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ViaCepController extends Controller
{
    public function index()
    {
        return view('via-cep');
    }

    public function consultarCep(Request $request)
    {
        $cep = $request->input('cep');
        $response = Http::get("https://viacep.com.br/ws/$cep/json/");
        $data = $response->json();
        return view('via-cep', compact('data'));
    }

    public function exportarCsv()
    {
        $ceps = session('ceps', []);
        $csvFileName = 'ceps.csv';

        $file = fopen(storage_path("app/$csvFileName"), 'w');
        fputcsv($file, ['CEP', 'Logradouro', 'Bairro', 'Cidade', 'UF']);

        foreach ($ceps as $cep) {
            fputcsv($file, $cep);
        }

        fclose($file);

        return Response::download(storage_path("app/$csvFileName"));
    }
}
