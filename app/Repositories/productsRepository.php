<?php

namespace App\Repositories;

use App\Models\products;
use InfyOm\Generator\Common\BaseRepository;

class productsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'supplier',
        'price'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return products::class;
    }
}
