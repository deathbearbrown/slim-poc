<?php

use Phinx\Migration\AbstractMigration;

class UserLogin extends AbstractMigration
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
      $table = $this->table('users');
      // make this unique
      $table->addColumn('failed-login-attempts', 'integer',['default' => 0])
            ->addColumn('email-verified', 'boolean',['default' => false])
            ->addColumn('email-verification-time', 'integer',['default' => null])
            ->addColumn('account-locked', 'boolean',['default' => false])
            ->addColumn('account-locked-until', 'integer',['default' => null])
            ->addColumn('previous-login-time', 'integer',['default' => 0])
            ->addColumn('previous-login-ip', 'string',['default' => ''])
            ->addColumn('current-login-time', 'integer',['default' => 0])
            ->addColumn('current-login-ip', 'string',['default' => ''])
            ->addColumn('inactive', 'boolean',['default' => false])
      ->update();
    }
}
