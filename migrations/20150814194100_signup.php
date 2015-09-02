<?php

use Phinx\Migration\AbstractMigration;

class Signup extends AbstractMigration
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
      // Do these need to follow the dash case convention?
      $table->addColumn('signup-token', 'string',['default' => ''])
            ->addColumn('signup-token-expires', 'integer',['default' => 0])
      ->update();
    }
}
