<?php
use Migrations\AbstractSeed;

/**
 * Users seed.
 */
class UsersSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'id' => '1',
                'state_id' => '1',
                'group_id' => '1',
                'firstname' => 'Zicheng',
                'surname' => 'Wang',
                'email' => 'zikoscheng@gmx.de',
                'password' => 'password',
                'created' => '2018-07-24 22:21:52',
                'modified' => '2018-07-24 22:21:52',
            ],
        ];

        $table = $this->table('users');
        $table->insert($data)->save();
    }
}
