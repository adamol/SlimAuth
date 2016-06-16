<?php
namespace App\Controllers;

use App\Models\User;
use Slim\Views\Twig as View;

class HomeController extends Controller
{

	public function index($request, $response)
	{
		User::create([
			'name' => 'Adam Olsson',
			'email' => 'adam@olsson.com',
			'password' => 'password',
		]);

		return $this->view->render($response, 'home.twig');
	}
}