<?php

namespace App\Model\Table;

use Cake\ORM\Table;

class PostCommentsTable extends Table {

    public function initialize(array $config) {
        $this->hasOne('user_det', ['className' => 'UserDetails', 'foreignKey' => 'user_id', 'bindingKey' => 'user_id']);
        $this->hasOne('profile_pic', ['className' => 'UserPic', 'foreignKey' => 'user_id', 'bindingKey' => 'user_id'])->setConditions(['profile_pic.is_profile_pic' => 1]);
    }

}
