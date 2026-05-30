<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Aqui é onde você pode registrar as rotas da sua API. Todas estas rotas
| são carregadas pelo RouteServiceProvider dentro de um grupo "api".
|
*/

// 1. Rota de Status da API
Route::get('/status', function () {
    return response()->json([
        'status' => 'sucesso',
        'mensagem' => 'API do App de Reciclagem está online!',
        'timestamp' => now()->toDateTimeString()
    ]);
});

// 2. Rota para listar os Pontos de Coleta
Route::get('/pontos-coleta', function () {
    return response()->json([
        'mensagem' => 'Lista de pontos de coleta disponíveis',
        'dados' => [
            [
                'id' => 1,
                'nome' => 'Escola Vigneron',
                'endereco' => 'Rua da Educação, 123',
                'latitude' => -23.5505,
                'longitude' => -46.6333,
                'recebe' => ['papel', 'plástico']
            ],
            [
                'id' => 2,
                'nome' => 'Casa da Agricultura',
                'endereco' => 'Av. Rural, 456',
                'latitude' => -23.5550,
                'longitude' => -46.6400,
                'recebe' => ['orgânico', 'vidro']
            ],
            [
                'id' => 3,
                'nome' => 'Mercado Magnanimmo',
                'endereco' => 'Praça do Comércio, 789',
                'latitude' => -23.5600,
                'longitude' => -46.6500,
                'recebe' => ['plástico', 'metal', 'papel']
            ]
        ]
    ]);
});

// 3. Rota para consultar as Cores da Reciclagem
Route::get('/cores-reciclagem', function () {
    return response()->json([
        'mensagem' => 'Padrão de cores para lixeiras de reciclagem',
        'dados' => [
            'papel' => ['cor' => 'Azul', 'descricao' => 'Papéis, jornais, papelões'],
            'plastico' => ['cor' => 'Vermelho', 'descricao' => 'Garrafas PET, embalagens plásticas'],
            'vidro' => ['cor' => 'Verde', 'descricao' => 'Garrafas, frascos, cacos de vidro'],
            'metal' => ['cor' => 'Amarelo', 'descricao' => 'Latinhas, tampinhas, alumínio']
        ]
    ]);
});

// 4. Rota para simular o Cadastro/Perfil do Usuário e sua Localização
Route::get('/usuario', function () {
    return response()->json([
        'mensagem' => 'Perfil do usuário carregado com sucesso',
        'dados' => [
            'id' => 101,
            'nome' => 'Maria Recicladora',
            'email' => 'maria@exemplo.com',
            'pontuacao_reciclagem' => 350,
            'localizacao_atual' => [
                'latitude' => -23.5520,
                'longitude' => -46.6350,
                'endereco_aproximado' => 'Rua das Flores, Centro'
            ]
        ]
    ]);
});
