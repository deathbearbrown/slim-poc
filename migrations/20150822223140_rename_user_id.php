<?php

use Phinx\Migration\AbstractMigration;

class RenameUserId extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-abstractmigration-class
     */
    public function up()
    {

      $table = $this->table('addresses');
      $table->dropForeignKey('user-id')
        ->removeIndex('user-id')
        ->renameColumn('user-id', 'user_id')
        ->addForeignKey('user_id', 'users', 'id')
        ->save();
    }

  public function down()
  {
      $table = $this->table('addresses');
      $table->dropForeignKey('user_id')
        ->removeIndex('user_id')
        ->renameColumn('user_id', 'user-id')
        ->addForeignKey('user-id', 'users', 'id')
        ->save();
  }
}
