<?php

class CadastroController extends \HXPHP\System\Controller
{
	public function cadastrarAction()
	{
		$this->view->setFile('index');

		$this->request->setCustomFilters(array(
			'email' => FILTER_VALIDATE_EMAIL
		));

		$cadastrarUsuario = User::cadastrar($this->request->post());
	}
}