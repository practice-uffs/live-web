<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    /**
     * Eager load the following always
     */
    protected $with = [
        'user',
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'user_id',
        'title',
        'description',
        'meet_type',
        'meet_url',
        'youtube_key',
        'status',
        'hash',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'created_at' => 'datetime:d/m/Y',
        'updated_at' => 'datetime:h-i d/m/Y',
    ];

    /**
     * Meta information about Livewire crud
     *
     * @var array
     */
    public static $crud = [
        'fields' => [
            'title' => [
                'label' => 'Título',
                'placeholder' => 'Ex.: Entrevista com equipe Practice',
                'validation' => 'present',
            ],
            'description' => [
                'label' => 'Descrição',
                'placeholder' => 'Ex.: Conheça melhor a equipe que cria diversos produtos para a comunidade acadêmica.',
                'validation' => 'present',
            ],            
        ]
    ];

    /**
     * Get the user associated with the order.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
