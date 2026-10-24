<?php

namespace App\Models;

use CodeIgniter\Model;

class ConteudoModel extends Model
{
    // Nome exato da tabela no banco de dados
    protected $table            = 'conteudo';
    
    // Nome da chave primária
    protected $primaryKey       = 'Id';
    
    // Auto-incremento ativado
    protected $useAutoIncrement = true;
    
    // Retorna os dados em formato de array
    protected $returnType       = 'array';
    
    // Soft deletes desativado
    protected $useSoftDeletes   = false;
    
    // Campos que podem ser editados (segurança)
    protected $protectFields    = true;
    protected $allowedFields    = ['Titulo', 'Texto'];
}