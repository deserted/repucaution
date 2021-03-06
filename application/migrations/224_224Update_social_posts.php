<?php if ( ! defined('BASEPATH')) die('No direct script access allowed');

class Migration_224Update_social_posts extends CI_Migration {

    private $_table = 'social_posts';

    public function up() {
        $fields = array(
            'post_cron_id' => array(
                'type' => 'INT',
                'unsigned' => TRUE
            )
        );

        $this->dbforge->add_column($this->_table, $fields);
    }

    public function down() {
        $this->dbforge->drop_column($this->_table, 'post_cron_id');
    }

}