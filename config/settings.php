<?php

/**
 * Defaults settings that should be added in database when project run first time
 */

return [
    
	'fixed_roles' => [
        'super_admin' => ['label'=>'Super Admin']
    ],

    'role_types' => [
    	2 => 'Admin',
    	3 => 'User',
    ],
    'not_action_admin_roles' => ['super_admin']
    
];