<?php
$phpFrameworksArray = array(
    'Aura' => 'https://auraphp.com/',
    'CakePHP' => 'https://cakephp.org/',
    'CodeIgniter' => 'https://codeigniter.com/',
    'Drupal' => 'https://www.drupal.org/',
    'Kohana' => 'https://kohanaframework.org/',
    'Laravel' => 'https://laravel.com/',
    'Nette' => 'https://nette.org/',
    'Qcodo' => 'https://github.com/qcodo/qcodo/',
    'Silverstripe' => 'https://www.silverstripe.com/',
    'Symfony' => 'https://symfony.com/',
    'Yii' => 'https://www.yiiframework.com/',
    'Zend' => 'https://framework.zend.com/'
);

$phpFrameworksJSONString = json_encode($phpFrameworksArray);

file_put_contents('php-frameworks.json', $phpFrameworksJSONString);
