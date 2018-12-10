<?php
namespace console\controllers;

use Yii;
use yii\console\Controller;
use common\components\UserRoleRule;
use yii\rbac\DbManager;

/**
 * RBAC console controller.
 */
class RbacController extends Controller
{
    /**
     * Initial RBAC action
     * @param integer $id Superadmin ID
     */
    public function actionInit($id = null)
    {
        $auth = new DbManager;
        $auth->init();

        $auth->removeAll(); //удаляем старые данные
        // Rules
        $groupRule = new UserRoleRule();
        $auth->add($groupRule);

        // Roles
        $client = $auth->createRole('client');
        $client->description = 'Clients';
        $client->ruleName = $groupRule->name;
        $auth->add($client);

        $admin = $auth->createRole('admin');
        $admin->description = 'Admin';
        $admin->ruleName = $groupRule->name;
        $auth->add($admin);
        $auth->addChild($admin, $client);

        // Superadmin assignments
        if ($id !== null) {
            $auth->assign($client, $id);
        }
    }
}
?>