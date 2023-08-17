<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GitHubController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public static function getUser(Request $request)
    {
        $api_url = 'https://api.github.com/users/{username}';
        $username = $request->username; // Substitua pelo nome de usuário do GitHub que você deseja consultar

        $context = stream_context_create([
            'http' => [
                'header' => 'User-Agent: MyPHPApp', // Um cabeçalho User-Agent é necessário para a API do GitHub
            ],
        ]);

        $response = file_get_contents(str_replace('{username}', $username, $api_url), false, $context);

        if ($response === false) {
            die('Erro ao acessar a API');
        }

        $data = json_decode($response, true);

        return view('user')->with('git', $data);
    
    }
}
