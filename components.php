<?php
/*
|--------------------------------------------------------------------------
| COMPONENTS
|--------------------------------------------------------------------------
| This file specifies the your application components.
*/

/*
|--------------------------------------------------------------------------
| App
|--------------------------------------------------------------------------
*/
$c['app'] = function () use ($c) {
    return new Obullo\App\App($c);
};
/*
|--------------------------------------------------------------------------
| Db
|--------------------------------------------------------------------------
*/
$c['db'] = function () use ($c) {
    return new Obullo\Database\Pdo\Mysql($c, $c->load('config')['database']['db']);
};
/*
|--------------------------------------------------------------------------
| Session
|--------------------------------------------------------------------------
*/
$c['session'] = function () use ($c) {
    return new Obullo\Session\Session($c, $c->load('config')['session']);
};
/*
|--------------------------------------------------------------------------
| Form
|--------------------------------------------------------------------------
*/
$c['form'] = function () use ($c) {
    return new Obullo\Form\Form($c, $c->load('config')->load('form'));
};
/*
|--------------------------------------------------------------------------
| Exception
|--------------------------------------------------------------------------
*/
$c['exception'] = function () use ($c) {
    return new Obullo\Error\Exception($c);
};
/*
|--------------------------------------------------------------------------
| Translator
|--------------------------------------------------------------------------
*/
$c['translator'] = function () use ($c) { 
    return new Obullo\Translation\Translator($c, $c->load('config')->load('translator'));
};
/*
|--------------------------------------------------------------------------
| Request
|--------------------------------------------------------------------------
*/
$c['request'] = function () use ($c) { 
    return new Obullo\Http\Request($c);
};
/*
|--------------------------------------------------------------------------
| Response
|--------------------------------------------------------------------------
*/
$c['response'] = function () use ($c) { 
    return new Obullo\Http\Response($c);
};
/*
|--------------------------------------------------------------------------
| Input Get
|--------------------------------------------------------------------------
*/
$c['get'] = function () use ($c) { 
    return new Obullo\Http\Get($c);
};
/*
|--------------------------------------------------------------------------
| Input Post
|--------------------------------------------------------------------------
*/
$c['post'] = function () use ($c) { 
    return new Obullo\Http\Post($c);
};
/*
|--------------------------------------------------------------------------
| View
|--------------------------------------------------------------------------
*/
$c['view'] = function () use ($c) {
    return new Obullo\View\View($c, $c->load('config')['schemes']);
};
/*
|--------------------------------------------------------------------------
| Layers
|--------------------------------------------------------------------------
*/
$c['layer'] = function () use ($c) { 
    return new Obullo\Layer\Request($c, $c->load('config')['layers']);
};
/*
|--------------------------------------------------------------------------
| Uri
|--------------------------------------------------------------------------
*/
$c['uri'] = function () use ($c) {
    return new Obullo\Uri\Uri($c, $c->load('config')['uri']);
};
/*
|--------------------------------------------------------------------------
| Router
|--------------------------------------------------------------------------
*/
$c['router'] = function () use ($c) { 
    return new Obullo\Router\Router($c, $c->load('config')['router']);
};


/* End of file components.php */
/* Location: .components.php */