<?php
namespace common\components;

use Yii;
use yii\rbac\Rule;

/**
 * User group rule class.
 */
class UserRoleRule extends Rule
{
    /**
     * @inheritdoc
     */
    public $name = 'UserRole';

    /**
     * @inheritdoc
     */
    public function execute($user, $item, $params)
    {
        if (!Yii::$app->user->isGuest) {
            $role = Yii::$app->user->identity->role;
//            $rbacRole = Yii::$app->authManager->getRolesByUser($user);
//
//            if ($rbacRole) {
//                foreach ($rbacRole as $item) {
//                    $role = $item->name;
//                }
//            }
//
//            if ($item->name === 'client') {
//                return 'c';
//            }

            if ($item->name === 'admin') {
                return $role == $item->name;
            } elseif ($item->name === 'client') {
                return $role === 'admin' ||  $role === $item->name;
            }
        }
        return false;
    }


}
?>