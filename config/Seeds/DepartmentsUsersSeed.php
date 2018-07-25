<?php
use Migrations\AbstractSeed;

/**
 * DepartmentsUsers seed.
 */
class DepartmentsUsersSeed extends AbstractSeed
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
                'department_id' => '1',
                'user_id' => '1',
            ],
        ];

        $table = $this->table('departments_users');
        $table->insert($data)->save();
    }
}
