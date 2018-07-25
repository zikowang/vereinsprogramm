<?php
use Migrations\AbstractSeed;

/**
 * Addresses seed.
 */
class AddressesSeed extends AbstractSeed
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
                'optname' => NULL,
                'street' => 'Webereistrasse',
                'houseno' => '26',
                'zipcode' => '33607',
                'city' => 'Bielefeld',
                'country_id' => '1',
                'created' => '2018-07-24 22:24:44',
                'modified' => '2018-07-24 22:24:44',
            ],
        ];

        $table = $this->table('addresses');
        $table->insert($data)->save();
    }
}
