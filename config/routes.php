<?php
/**
 * Setup routes with a single request method:
 *
 * $app->get('/', App\Action\HomePageAction::class, 'home');
 * $app->post('/album', App\Action\AlbumCreateAction::class, 'album.create');
 * $app->put('/album/:id', App\Action\AlbumUpdateAction::class, 'album.put');
 * $app->patch('/album/:id', App\Action\AlbumUpdateAction::class, 'album.patch');
 * $app->delete('/album/:id', App\Action\AlbumDeleteAction::class, 'album.delete');
 *
 * Or with multiple request methods:
 *
 * $app->route('/contact', App\Action\ContactAction::class, ['GET', 'POST', ...], 'contact');
 *
 * Or handling all request methods:
 *
 * $app->route('/contact', App\Action\ContactAction::class)->setName('contact');
 *
 * or:
 *
 * $app->route(
 *     '/contact',
 *     App\Action\ContactAction::class,
 *     Zend\Expressive\Router\Route::HTTP_METHOD_ANY,
 *     'contact'
 * );
 */

$app->get('/', App\Action\HomeAction::class, 'home');
$app->get('/api/aboutme', App\Action\AboutMeAction::class, 'api-aboutme');
$app->get('/api/contact', App\Action\ContactAction::class, 'api-contacct');
$app->get('/api/cursolivre', App\Action\CursoLivreAction::class, 'api-cursolivre');
$app->get('/api/education', App\Action\EducationAction::class, 'api-education');
$app->get('/api/experience', App\Action\ExperienceAction::class, 'api-experience');
$app->get('/api/hobby', App\Action\HobbyAction::class, 'api-hobby');
$app->get('/api/language', App\Action\LanguageAction::class, 'api-language');
$app->get('/api/skill', App\Action\SkillAction::class, 'api-skill');
$app->get('/api/curriculum', App\Action\CurriculumAction::class, 'api-curriculum');
