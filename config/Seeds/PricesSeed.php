<?php
use Migrations\AbstractSeed;

/**
 * Prices seed.
 */
class PricesSeed extends AbstractSeed
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
                'name' => 'Mitgrlied',
                'price' => '60.00',
                'created' => '2018-07-24 22:24:12',
                'modified' => '2018-07-24 22:24:12',
            ],
        ];

        $table = $this->table('prices');
        $table->insert($data)->save();
    }
}
