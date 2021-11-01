<?php

return [

    'register_page_title' => 'Création de votre compte',
    'register_text' => 'Créez votre compte',
    'register_sub_text' => 'Créez vite un compte pour ne pas rater de superbes formations près de chez vous.',
    'register_btn_text' => 'Créer mon compte',
    'already_account_text' => 'Vous avez déjà un compte ? <a href="/connexion" class="color-text"> Connectez-vous</a>',

    'register_error_no_credential' => 'Tous les champs sont requis !',
    'register_error_invalid_email' => 'L\'adresse mail est invalide !',
    'register_error_email_exists' => 'Cette adresse mail est associée à un compte existant !',
    'register_error_password_confirmation_no_match' => 'Le mot de passe et la confirmation ne correspondent pas !',

    'registration_done_confirm_text' => 'Votre compte a été créé avec succès !',
    'registration_done_confirm_sub_text' => 'Une confirmation vous a été envoyée à l\'adresse :',

    /*****************************************************************************************************************/

    'login_page_title' => 'Connexion',
    'login_text' => 'Connexion',
    'login_sub_text' => 'Connectez-vous à votre compte',
    'login_btn_text' => 'Se connecter',
    'no_account_text' => 'Vous n\'avez pas de compte ? <a href="/creer-un-compte" class="color-text"> Créer un compte</a>',

    'login_confirmation_text' => 'Content de vous revoir sur <b>'.config('app.name').'</b>, ',
    'logout_confirmation_text' => 'Vous êtes déconnecté(e) maintenant !',
    'login_error_no_credential' => 'Renseignez l\'email et le mot de passe !',
    'login_error_wrong_credentials' => 'Vos identifiants sont incorrects !',

    /*****************************************************************************************************************/

    'password_forgot_page_title' => '',
    'password_forgot_text' => 'Mot de passe oublié',
    'password_forgot_sub_text' => 'Entrez l\'adresse mail associée à votre compte, un lien vous sera envoyé pour réinitialiser votre mot de passe.',
    'password_forgot_btn_text' => 'Envoyer le lien',
    
    'password_reset_btn_text' => 'Envoyer le lien à nouveau',
    'password_reset_text' => 'Lien envoyé avec succès !',
    'password_reset_sub_text_1' => 'Un lien pour réinitialiser votre mot de passe a été envoyé à',
    'password_reset_sub_text_2' => 'Si vous ne recevez rien d\'ici quelques minutes, merci de vérifier vos courriers indésirables.',
    'new_password_text' => 'Réinitialisation',

    'resetpassword_error_no_credential' => 'Renseignez l\'adresse mail associée à votre compte !',
    'resetpassword_error_invalid_email' => 'L\'adresse mail est invalide !',
    'resetpassword_error_email_no_exists' => 'L\'adresse mail est introuvable !',

     /*****************************************************************************************************************/

    'email_text' => 'Email',
    'email_placeholder' => 'Entrez votre email',
    'password_text' => 'Mot de passe',
    'password_placeholder' => 'Entrez votre mot de passe',
    'firstname_text' => 'Prénom',
    'firstname_placeholder' => 'Entrez votre prénom',
    'lastname_text' => 'Nom',
    'lastname_placeholder' => 'Entrez votre nom',
    'password_confirm_text' => 'Confirmation du mot de passe',
    'password_confirm_placeholder' => 'Entrez la confirmation',
    'password_forgot_text' => 'Mot de passe oublié ?',
    'terms' => 'En vous inscrivant, vous acceptez <a href="/" class="color-text">nos conditions d\'utilisation</a>.',
    'remember_me_text' => 'Se souvenir de moi',

    /*****************************************************************************************************************/

    'user_registered_mail_title' => 'Bienvenue sur '.config('app.name'),
    'user_registered_mail_content_1' => 'Salut :firstname,',
    'user_registered_mail_content_2' => 'Toute l\'équipe de :app vous souhaite la bienvenue à bord.',
    'user_registered_mail_content_3' => 'Prêt(e) à commencer ? <a href="'.route('connexion').'" class="color-text">Cliquez ici pour vous connecter</a>',
    'user_registered_mail_content_4_1' => 'Votre nom d\'utilisateur : :email',
    'user_registered_mail_content_4_2' => 'Vous avez oublié le mot de passe ? Cliquez ici <a href="'.route('forgot').'" class="color-text">Réinitialiser mon mot de passe</a>',
    'user_registered_mail_content_5' => 'Sachez qu\'en vous connectant sur la plateforme :app, vous acceptez nos <a href="/" class="color-text">conditions d\'utilisation</a>.',
    'user_registered_mail_content_6' => 'Cordialement,',
    'user_registered_mail_content_7' => 'La :app Team',
    'user_registered_mail_content_8' => ':app_link',
    'user_registered_mail_footer_1' => '© '.date('Y').' '.config('app.name').'. Tous Droits Réservés.',
    'user_registered_mail_footer_2' => '<a href="/" class="color-text">Facebook</a> <a href="/" class="color-text">LinkedIn</a> <a href="/" class="color-text">Instagram</a> <a href="/" class="color-text">Twitter</a> <a href="/" class="color-text">YouTube</a>',

];
