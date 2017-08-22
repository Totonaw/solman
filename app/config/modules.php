<?php 

return [
    'frontend' =>[
        'className' =>'Solman\Frontend\Module',
        'path'=>'../app/frontend/Module.php',
        'url_prefix'=>'',
    ],
    'admin'=>[
        'className'=>'Solman\Admin\Module',
        'path'=>'../app/admin/Module.php',
        'url_prefix'=>'/admin'
    ],
];