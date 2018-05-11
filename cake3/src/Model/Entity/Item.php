<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

class Item extends Entity{
    protected $_accesible = [
        '*' => true,
        'id' => false
    ];
}
