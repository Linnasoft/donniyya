<?php

return [

    'register_page_title' => 'Create a new account',
    'register_text' => 'Create your account',
    'register_sub_text' => 'no text for now',
    'register_btn_text' => 'Create my account',
    'already_account_text' => 'Already have an account ? <a href="'.route('connexion').'" class="color-text"> Sign In</a>',


    'login_page_title' => 'Login',
    'login_text' => 'Login',
    'login_sub_text' => 'Login to your account',
    'login_btn_text' => 'Login to your account',
    'no_account_text' => 'Don\'t have an account ? <a href="/creer-un-compte" class="color-text"> Create an account</a>',


    'password_forgot_page_title' => '',
    'password_forgot_text' => 'Password forgotten',
    'password_forgot_sub_text' => 'Enter the email of your account, you will receive a link to reset the password.',
    'password_forgot_btn_text' => 'Send the link',

    'password_reset_btn_text' => 'Send the link again',
    'password_reset_text' => 'Link sent successfully !',
    'password_reset_sub_text_1' => 'A link has been sent to',
    'password_reset_sub_text_2' => 'no text for now',
    'new_password_text' => 'Reset password',


    'email_text' => 'Email',
    'email_placeholder' => 'Enter your email',
    'password_text' => 'Password',
    'password_placeholder' => 'Enter your password',
    'firstname_text' => 'First name',
    'firstname_placeholder' => 'Enter your first name',
    'lastname_text' => 'Last name',
    'lastname_placeholder' => 'Enter your last name',
    'password_confirm_text' => 'Confirm your password',
    'password_confirm_placeholder' => 'Enter password confirmation',
    'password_forgot_text' => 'Forgot password ?',
    'terms' => 'I agree to '.config('app.name').'\'s <a href="/" class="color-text">terms of services</a>.',
    'remember_me_text' => 'Keep me logged in',


    'login_confirmation_text' => 'Happy to see you again on <b>'.config('app.name').'</b>, ',
    'logout_confirmation_text' => 'You are now signed out !',
    'login_error_no_credential' => 'The email address and password are both required !',
    'login_error_wrong_credentials' => 'The email address and/or password you entered is incorrect !',

];
