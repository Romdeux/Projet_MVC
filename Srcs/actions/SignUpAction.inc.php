<?php

require_once("actions/Action.inc.php");
//require_once("../views/templates/signupform.inc.php");
require_once("../views/templates/signupform.inc.php");

class SignUpAction extends Action {

	/**
	 * Traite les données envoyées par le formulaire d'inscription
	 * ($_POST['signUpLogin'], $_POST['signUpPassword'], $_POST['signUpPassword2']).
	 *
	 * Le compte est crée à l'aide de la méthode 'addUser' de la classe Database.
	 *
	 * Si la fonction 'addUser' retourne une erreur ou si le mot de passe et sa confirmation
	 * sont différents, on envoie l'utilisateur vers la vue 'SignUpForm' contenant 
	 * le message retourné par 'addUser' ou la chaîne "Le mot de passe et sa confirmation 
	 * sont différents.";
	 *
	 * Si l'inscription est validée, le visiteur est envoyé vers la vue 'MessageView' avec
	 * un message confirmant son inscription.
	 *
	 * @see Action::run()
	 */
	public function run() {
		/* TODO START */
		/* TODO END */
        $newUser = new Database();
        $nickname = $_POST['signUpLogin'];
        $password = $_POST['signUpPassword'];
        //$password2 = $_POST['signUpPassword2'];
        var_dump($nickname, $password);
        $newUser->addUser($nickname, $password);
	}

	private function setSignUpFormView($message) {
		$this->setView(getViewByName("SignUpForm"));
		$this->getView()->setMessage($message);
	}

}


?>
