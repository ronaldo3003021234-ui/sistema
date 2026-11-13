<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\ConteudoModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class Painel extends BaseController
{
    public function index()
    {
        return view('admin/painel');
    }

    public function conteudos()
    {
        $model = new ConteudoModel();
        return view('admin/conteudo/listar', [
            'conteudos' => $model->findAll(),
        ]);
    }

    public function editar($id)
    {
        $model = new ConteudoModel();
        $conteudo = $model->find($id);

        if ($conteudo === null) {
            throw PageNotFoundException::forPageNotFound('O conteúdo solicitado não foi encontrado.');
        }

        return view('admin/conteudo/editar', [
            'conteudo' => $conteudo,
            'erros' => [],
        ]);
    }

    public function atualizar($id)
    {
        $model = new ConteudoModel();
        $conteudo = $model->find($id);

        if ($conteudo === null) {
            throw PageNotFoundException::forPageNotFound('O conteúdo solicitado não foi encontrado.');
        }

        $dadosPost = [
            'Titulo' => $this->request->getPost('Titulo'),
            'Texto' => $this->request->getPost('Texto'),
        ];

        $regras = [
            'Titulo' => 'required|max_length[255]',
            'Texto' => 'required',
        ];

        if (! $this->validate($regras)) {
            $conteudo['Titulo'] = $dadosPost['Titulo'] ?? '';
            $conteudo['Texto'] = $dadosPost['Texto'] ?? '';
            return view('admin/conteudo/editar', [
                'conteudo' => $conteudo,
                'erros' => $this->validator->getErrors(),
            ]);
        }

        $model->update($id, $dadosPost);

        return redirect()
            ->to(site_url('admin/conteudos'))
            ->with('mensagem', 'Conteúdo atualizado com sucesso.');
    }

    public function logout()
    {
        auth()->logout();
        return redirect()->to('login');
    }
}