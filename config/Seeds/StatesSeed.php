<?php
use Migrations\AbstractSeed;

/**
 * States seed.
 */
class StatesSeed extends AbstractSeed
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
                'name' => 'Active',
                'created' => '2018-07-24 22:21:21',
                'modified' => '2018-07-24 22:21:21',
            ],
            [
                'id' => '2',
                'name' => 'Inactive',
                'created' => '2018-07-24 22:21:30',
                'modified' => '2018-07-24 22:21:28',
            ],
        ];

        $table = $this->table('states');
        $table->insert($data)->save();
    }
}
