<?php
use Migrations\AbstractSeed;

/**
 * Departments seed.
 */
class DepartmentsSeed extends AbstractSeed
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
                'name' => 'Tischtennis',
                'description' => '',
                'created' => '2018-07-24 22:23:15',
                'modified' => '2018-07-24 22:23:15',
            ],
            [
                'id' => '2',
                'name' => 'Turnen',
                'description' => '',
                'created' => '2018-07-24 22:23:28',
                'modified' => '2018-07-24 22:23:28',
            ],
        ];

        $table = $this->table('departments');
        $table->insert($data)->save();
    }
}
