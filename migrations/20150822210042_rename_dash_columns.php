<?php

use Phinx\Migration\AbstractMigration;

class RenameDashColumns extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-abstractmigration-class
     */
    public function change()
    {
      $table = $this->table('addresses');
      $table->renameColumn('country-code', 'country_code')
        ->update();

      $table = $this->table('applications');
      $table->renameColumn('redirect-uri', 'redirect_uri')
        ->update();

      $table = $this->table('users');
      $table->renameColumn('session-id', 'session_id')
        ->renameColumn('failed-login-attempts', 'failed_login_attempts')
        ->renameColumn('email-verified', 'email_verified')
        ->renameColumn('email-verification-time', 'email_verification_time')
        ->renameColumn('account-locked', 'account_locked')
        ->renameColumn('account-locked-until', 'account_locked_until')
        ->renameColumn('previous-login-time', 'previous_login_time')
        ->renameColumn('previous-login-ip', 'previous_login_ip')
        ->renameColumn('current-login-time', 'current_login_time')
        ->renameColumn('current-login-ip', 'current_login_ip')
        ->renameColumn('password-reset-token', 'password_reset_token')
        ->renameColumn('password-reset-token-expires', 'password_reset_token_expires')
        ->renameColumn('signup-token', 'signup_token')
        ->renameColumn('signup-token-expires', 'signup_token_expires')
        ->update();
    }
}
