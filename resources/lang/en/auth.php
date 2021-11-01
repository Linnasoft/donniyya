<?php

return [

    'register_page_title' => 'Create a new account',
    'register_text' => 'Create your account',
    'register_sub_text' => 'Don\'t miss great training courses, create an account.', 
    'register_btn_text' => 'Create my account',
    'already_account_text' => 'Already have an account ? <a href="'.route('connexion').'" class="color-text"> Sign In</a>',

    'register_error_no_credential' => 'All the fields are required !',
    'register_error_invalid_email' => 'The email address is invalid !',
    'register_error_email_exists' => 'The email address already exists !',
    'register_error_password_confirmation_no_match' => 'The password and confirmation do not match !',

    /*****************************************************************************************************************/

    'login_page_title' => 'Sign In',
    'login_text' => 'Sign In',
    'login_sub_text' => 'Login to your account',
    'login_btn_text' => 'Login to your account',
    'no_account_text' => 'Don\'t have an account ? <a href="/creer-un-compte" class="color-text"> Create an account</a>',

    'login_confirmation_text' => 'Happy to see you again on <b>'.config('app.name').'</b>, ',
    'logout_confirmation_text' => 'You are now signed out !',
    'login_error_no_credential' => 'The email address and password are both required !',
    'login_error_wrong_credentials' => 'The email address and/or password you entered is incorrect !',

    /*****************************************************************************************************************/

    'password_forgot_page_title' => '',
    'password_forgot_text' => 'Password forgotten',
    'password_forgot_sub_text' => 'Enter the email of your account, you will receive a link to reset the password.',
    'password_forgot_btn_text' => 'Send the link',


    'password_reset_btn_text' => 'Send the link again',
    'password_reset_text' => 'Link sent successfully !',
    'password_reset_sub_text_1' => 'A link has been sent to',
    'password_reset_sub_text_2' => 'If don\'t see any link, please check your spams.',
    'new_password_text' => 'Reset password',

    'resetpassword_error_no_credential' => 'Your email address is required !',
    'resetpassword_error_invalid_email' => 'The email address is invalid !',
    'resetpassword_error_email_no_exists' => 'The email address doesn\'t exist !',

    /*****************************************************************************************************************/

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

    /*****************************************************************************************************************/

    'user_registered_mail_title' => 'Welcome to '.config('app.name'),
    'user_registered_mail_content_1' => 'Hello :firstname,',
    'user_registered_mail_content_2' => 'The entire team at :app welcomes you aboard.',
    'user_registered_mail_content_3' => 'Ready to start ? <a href="'.route('connexion').'" class="color-text">Click here to sign in</a>',
    'user_registered_mail_content_4_1' => 'Your login : :email',
    'user_registered_mail_content_4_2' => 'Forgot your password ? Click here <a href="'.route('forgot').'" class="color-text">Reset my password</a>',
    'user_registered_mail_content_5' => 'Please note that using the :app platform with the new credentials signifies your acceptance of our <a href="/" class="color-text">terms of services</a>.',
    'user_registered_mail_content_6' => 'Regards,',
    'user_registered_mail_content_7' => ':app Team',
    'user_registered_mail_content_8' => ':app_link',
    'user_registered_mail_footer_1' => '© '.date('Y').' '.config('app.name').'. All Rights Reserved.',
    'user_registered_mail_footer_2' => '<a href="/" class="color-text">Facebook</a> <a href="/" class="color-text">LinkedIn</a> <a href="/" class="color-text">Instagram</a> <a href="/" class="color-text">Twitter</a> <a href="/" class="color-text">YouTube</a>',

];
