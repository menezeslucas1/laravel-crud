<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;

    protected $table = "products";
    protected $primaryKey = "id";
    public $timestamps = false;

    /**
     * @return array VALIDATION_RULES regras para validar valores para cada campo da tabela
     */
    public const VALIDATION_RULES = [
        'id' => ['required', 'unique:App/Models/Products,id', 'numeric', 'integer'],
        'name' => ['required','string', 'between:1,50', 'regex:/\A[\w\ \.\-]*\Z/'],
        'price' => ['required','numeric', 'regex:/\A[0-9]{1,5}(\.[0-9]{0,2})?\Z/'],
        'description' => ['required'],
    ];

}
