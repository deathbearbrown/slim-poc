<?php

use Phinx\Migration\AbstractMigration;

class AddressSetup extends AbstractMigration
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
    $table = $this->table('addresses');
    $table->addColumn('street1', 'string', ['default' => ''])
      ->addColumn('street2', 'string', ['default' => ''])
      ->addColumn('city', 'string', ['default' => ''])
      ->addColumn('state', 'string', ['default' => ''])
      ->addColumn('zip', 'string', ['default' => ''])
      ->addColumn('country-code', 'string',['default' => ''])
      ->addColumn('type', 'string', ['default' => ''])
      ->addColumn('user-id', 'integer', ['default' => 0])
      ->addForeignKey('user-id', 'users', 'id')
      ->addColumn('tag', 'string', ['default' => ''])
      ->addColumn('inactive', 'boolean', ['default' => false])
      ->create();
  }

}
