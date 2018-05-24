<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class UsersTable extends Table {
    public function initialize(array $config){
        parent::initialize($config);
    }

    public function validationDefault(Validator $validator){
        $validator
            ->requirePresence('user_name')
            ->notEmpty('user_name','必須項目です')
            ->maxLength('user_name',16,'16文字以内で入力してください。');
        $validator
            ->add('user_id','custom',[
                'rule'=>['custom',"/^[0-9a-z]+$/"],
                'message'=>__('英数字で入力してください'),
            ])
            ->notEmpty('user_id')
            ->minLength('display_name',6,'6文字以上で入力してください。')
            ->maxLength('display_name',16,'20文字以内で入力してください。');
        $validator
            ->add('password','custom',[
                'rule'=>['custom',"/^[0-9a-z]+$/"],
                'message'=>__('英数字で入力してください'),
            ])
            ->notEmpty('password')
            ->minLength('password',8,'8文字以上で入力してください。')
            ->maxLength('password',16,'16文字以内で入力してください。');
        return $validator;
    }

}
