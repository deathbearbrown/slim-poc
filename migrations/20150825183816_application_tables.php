<?php

use Phinx\Migration\AbstractMigration;

class ApplicationTables extends AbstractMigration
{

    public function change()
    {

  /*
  CREATE TABLE oauth_clients (
        client_id VARCHAR(80) NOT NULL,
        client_secret VARCHAR(80) NOT NULL,
        redirect_uri VARCHAR(2000) NOT NULL,
        grant_types VARCHAR(80),
        scope VARCHAR(100),
        user_id VARCHAR(80),
        CONSTRAINT clients_client_id_pk PRIMARY KEY (client_id));

  */
    $table = $this->table('oauth_clients');
    $table->addColumn('client_id', 'string',  array('null' => false, 'limit' => 80))
          ->addColumn('client_secret', 'string',  array('null' => false, 'limit' => 80))
          ->addColumn('redirect_uri', 'string',  array('null' => false, 'limit' => 2000))
          ->addColumn('grant_types', 'string',  array('null' => true, 'limit' => 80))
          ->addColumn('scope', 'string',  array('null' => true, 'limit' => 100))
          ->addColumn('user_id', 'integer', array('null' => true, 'limit' => 80))
          ->addForeignKey('user_id', 'users', 'id')
          ->addColumn('inactive', 'boolean', ['default' => false])
          ->addIndex(array('client_id', 'user_id'), array('unique' => true))
          ->create();

    $this->dropTable('applications');
  }
}
