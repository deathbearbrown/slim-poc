<?php

use Phinx\Migration\AbstractMigration;

class ApplicationsSetup extends AbstractMigration
{
  /**
   * Change Method.
   *
   * More information on this method is available here:
   * http://docs.phinx.org/en/latest/migrations.html#the-change-method
   *
   * Uncomment this method if you would like to use it.
   *
   */
  public function change()
  {
    $table = $this->table('applications');
    $table->addColumn('name', 'string',['default' => ''])
      ->addColumn('url', 'string',['default' => ''])
      ->addColumn('icon', 'string',['default' => ''])
      ->addColumn('redirect-uri', 'string',['default' => ''])
      ->addColumn('inactive', 'boolean', ['default' => false])
      ->create();
  }

}
