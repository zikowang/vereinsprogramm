<?php
use Migrations\AbstractSeed;

/**
 * Groups seed.
 */
class GroupsSeed extends AbstractSeed
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
                'name' => 'Admin',
                'created' => '2018-07-24 22:19:06',
                'modified' => '2018-07-24 22:19:06',
            ],
            [
                'id' => '2',
                'name' => 'Admin of Department',
                'created' => '2018-07-24 22:19:41',
                'modified' => '2018-07-24 22:19:41',
            ],
            [
                'id' => '3',
                'name' => 'Coach',
                'created' => '2018-07-24 22:20:17',
                'modified' => '2018-07-24 22:20:17',
            ],
            [
                'id' => '4',
                'name' => 'Member',
                'created' => '2018-07-24 22:20:32',
                'modified' => '2018-07-24 22:20:32',
            ],
            [
                'id' => '5',
                'name' => 'Inactive',
                'created' => '2018-07-24 22:20:48',
                'modified' => '2018-07-24 22:20:49',
            ],
            [
                'id' => '6',
                'name' => 'Deleted',
                'created' => '2018-07-24 22:21:02',
                'modified' => '2018-07-24 22:21:02',
            ],
        ];

        $table = $this->table('groups');
        $table->insert($data)->save();
    }
}
