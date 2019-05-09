<?php

use Illuminate\Database\Seeder;

class StatesTableSeeder extends Seeder
{

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{


		\DB::table('states')->delete();

		\DB::table('states')->insert(array(
			0 =>
			array(
				'id' => 1,
				'name' => 'Abia',
				'square_area' => rand(234567, 24356700),
				'population' => rand(3456780, 1000000000),
				'created_at' => '2019-05-07 08:08:55',
				'updated_at' => '2019-05-07 08:08:55',
			),
			1 =>
			array(
				'id' => 2,
				'name' => 'Adamawa',
				'square_area' => rand(234567, 24356700),
				'population' => rand(3456780, 1000000000),
				'created_at' => '2019-05-07 08:08:55',
				'updated_at' => '2019-05-07 08:08:55',
			),
			2 =>
			array(
				'id' => 3,
				'name' => 'Akwa Ibom',
				'square_area' => rand(234567, 24356700),
				'population' => rand(3456780, 1000000000),
				'created_at' => '2019-05-07 08:08:55',
				'updated_at' => '2019-05-07 08:08:55',
			),
			3 =>
			array(
				'id' => 4,
				'name' => 'Anambra',
				'square_area' => rand(234567, 24356700),
				'population' => rand(3456780, 1000000000),
				'created_at' => '2019-05-07 08:08:55',
				'updated_at' => '2019-05-07 08:08:55',
			),
			4 =>
			array(
				'id' => 5,
				'name' => 'Bauchi',
				'square_area' => rand(234567, 24356700),
				'population' => rand(3456780, 1000000000),
				'created_at' => '2019-05-07 08:08:55',
				'updated_at' => '2019-05-07 08:08:55',
			),
			5 =>
			array(
				'id' => 6,
				'name' => 'Bayelsa',
				'square_area' => rand(234567, 24356700),
				'population' => rand(3456780, 1000000000),
				'created_at' => '2019-05-07 08:08:55',
				'updated_at' => '2019-05-07 08:08:55',
			),
			6 =>
			array(
				'id' => 7,
				'name' => 'Benue',
				'square_area' => rand(234567, 24356700),
				'population' => rand(3456780, 1000000000),
				'created_at' => '2019-05-07 08:08:55',
				'updated_at' => '2019-05-07 08:08:55',
			),
			7 =>
			array(
				'id' => 8,
				'name' => 'Borno',
				'square_area' => rand(234567, 24356700),
				'population' => rand(3456780, 1000000000),
				'created_at' => '2019-05-07 08:08:55',
				'updated_at' => '2019-05-07 08:08:55',
			),
			8 =>
			array(
				'id' => 9,
				'name' => 'Cross River',
				'square_area' => rand(234567, 24356700),
				'population' => rand(3456780, 1000000000),
				'created_at' => '2019-05-07 08:08:55',
				'updated_at' => '2019-05-07 08:08:55',
			),
			9 =>
			array(
				'id' => 10,
				'name' => 'Delta',
				'square_area' => rand(234567, 24356700),
				'population' => rand(3456780, 1000000000),
				'created_at' => '2019-05-07 08:08:55',
				'updated_at' => '2019-05-07 08:08:55',
			),
			10 =>
			array(
				'id' => 11,
				'name' => 'Ebonyi',
				'square_area' => rand(234567, 24356700),
				'population' => rand(3456780, 1000000000),
				'created_at' => '2019-05-07 08:08:55',
				'updated_at' => '2019-05-07 08:08:55',
			),
			11 =>
			array(
				'id' => 12,
				'name' => 'Edo',
				'square_area' => rand(234567, 24356700),
				'population' => rand(3456780, 1000000000),
				'created_at' => '2019-05-07 08:08:55',
				'updated_at' => '2019-05-07 08:08:55',
			),
			12 =>
			array(
				'id' => 13,
				'name' => 'Ekiti',
				'square_area' => rand(234567, 24356700),
				'population' => rand(3456780, 1000000000),
				'created_at' => '2019-05-07 08:08:55',
				'updated_at' => '2019-05-07 08:08:55',
			),
			13 =>
			array(
				'id' => 14,
				'name' => 'Enugu',
				'square_area' => rand(234567, 24356700),
				'population' => rand(3456780, 1000000000),
				'created_at' => '2019-05-07 08:08:55',
				'updated_at' => '2019-05-07 08:08:55',
			),
			14 =>
			array(
				'id' => 15,
				'name' => 'FCT',
				'square_area' => rand(234567, 24356700),
				'population' => rand(3456780, 1000000000),
				'created_at' => '2019-05-07 08:08:55',
				'updated_at' => '2019-05-07 08:08:55',
			),
			15 =>
			array(
				'id' => 16,
				'name' => 'Gombe',
				'square_area' => rand(234567, 24356700),
				'population' => rand(3456780, 1000000000),
				'created_at' => '2019-05-07 08:08:55',
				'updated_at' => '2019-05-07 08:08:55',
			),
			16 =>
			array(
				'id' => 17,
				'name' => 'Imo',
				'square_area' => rand(234567, 24356700),
				'population' => rand(3456780, 1000000000),
				'created_at' => '2019-05-07 08:08:55',
				'updated_at' => '2019-05-07 08:08:55',
			),
			17 =>
			array(
				'id' => 18,
				'name' => 'Jigawa',
				'square_area' => rand(234567, 24356700),
				'population' => rand(3456780, 1000000000),
				'created_at' => '2019-05-07 08:08:55',
				'updated_at' => '2019-05-07 08:08:55',
			),
			18 =>
			array(
				'id' => 19,
				'name' => 'Kaduna',
				'square_area' => rand(234567, 24356700),
				'population' => rand(3456780, 1000000000),
				'created_at' => '2019-05-07 08:08:55',
				'updated_at' => '2019-05-07 08:08:55',
			),
			19 =>
			array(
				'id' => 20,
				'name' => 'Kano',
				'square_area' => rand(234567, 24356700),
				'population' => rand(3456780, 1000000000),
				'created_at' => '2019-05-07 08:08:55',
				'updated_at' => '2019-05-07 08:08:55',
			),
			20 =>
			array(
				'id' => 21,
				'name' => 'Katsina',
				'square_area' => rand(234567, 24356700),
				'population' => rand(3456780, 1000000000),
				'created_at' => '2019-05-07 08:08:55',
				'updated_at' => '2019-05-07 08:08:55',
			),
			21 =>
			array(
				'id' => 22,
				'name' => 'Kebbi',
				'square_area' => rand(234567, 24356700),
				'population' => rand(3456780, 1000000000),
				'created_at' => '2019-05-07 08:08:55',
				'updated_at' => '2019-05-07 08:08:55',
			),
			22 =>
			array(
				'id' => 23,
				'name' => 'Kogi',
				'square_area' => rand(234567, 24356700),
				'population' => rand(3456780, 1000000000),
				'created_at' => '2019-05-07 08:08:55',
				'updated_at' => '2019-05-07 08:08:55',
			),
			23 =>
			array(
				'id' => 24,
				'name' => 'Kwara',
				'square_area' => rand(234567, 24356700),
				'population' => rand(3456780, 1000000000),
				'created_at' => '2019-05-07 08:08:55',
				'updated_at' => '2019-05-07 08:08:55',
			),
			24 =>
			array(
				'id' => 25,
				'name' => 'Lagos',
				'square_area' => rand(234567, 24356700),
				'population' => rand(3456780, 1000000000),
				'created_at' => '2019-05-07 08:08:55',
				'updated_at' => '2019-05-07 08:08:55',
			),
			25 =>
			array(
				'id' => 26,
				'name' => 'Nasarawa',
				'square_area' => rand(234567, 24356700),
				'population' => rand(3456780, 1000000000),
				'created_at' => '2019-05-07 08:08:55',
				'updated_at' => '2019-05-07 08:08:55',
			),
			26 =>
			array(
				'id' => 27,
				'name' => 'Niger',
				'square_area' => rand(234567, 24356700),
				'population' => rand(3456780, 1000000000),
				'created_at' => '2019-05-07 08:08:55',
				'updated_at' => '2019-05-07 08:08:55',
			),
			27 =>
			array(
				'id' => 28,
				'name' => 'Ogun',
				'square_area' => rand(234567, 24356700),
				'population' => rand(3456780, 1000000000),
				'created_at' => '2019-05-07 08:08:55',
				'updated_at' => '2019-05-07 08:08:55',
			),
			28 =>
			array(
				'id' => 29,
				'name' => 'Ondo',
				'square_area' => rand(234567, 24356700),
				'population' => rand(3456780, 1000000000),
				'created_at' => '2019-05-07 08:08:55',
				'updated_at' => '2019-05-07 08:08:55',
			),
			29 =>
			array(
				'id' => 30,
				'name' => 'Osun',
				'square_area' => rand(234567, 24356700),
				'population' => rand(3456780, 1000000000),
				'created_at' => '2019-05-07 08:08:55',
				'updated_at' => '2019-05-07 08:08:55',
			),
			30 =>
			array(
				'id' => 31,
				'name' => 'Oyo',
				'square_area' => rand(234567, 24356700),
				'population' => rand(3456780, 1000000000),
				'created_at' => '2019-05-07 08:08:55',
				'updated_at' => '2019-05-07 08:08:55',
			),
			31 =>
			array(
				'id' => 32,
				'name' => 'Plateau',
				'square_area' => rand(234567, 24356700),
				'population' => rand(3456780, 1000000000),
				'created_at' => '2019-05-07 08:08:55',
				'updated_at' => '2019-05-07 08:08:55',
			),
			32 =>
			array(
				'id' => 33,
				'name' => 'Rivers',
				'square_area' => rand(234567, 24356700),
				'population' => rand(3456780, 1000000000),
				'created_at' => '2019-05-07 08:08:55',
				'updated_at' => '2019-05-07 08:08:55',
			),
			33 =>
			array(
				'id' => 34,
				'name' => 'Sokoto',
				'square_area' => rand(234567, 24356700),
				'population' => rand(3456780, 1000000000),
				'created_at' => '2019-05-07 08:08:55',
				'updated_at' => '2019-05-07 08:08:55',
			),
			34 =>
			array(
				'id' => 35,
				'name' => 'Taraba',
				'square_area' => rand(234567, 24356700),
				'population' => rand(3456780, 1000000000),
				'created_at' => '2019-05-07 08:08:55',
				'updated_at' => '2019-05-07 08:08:55',
			),
			35 =>
			array(
				'id' => 36,
				'name' => 'Yobe',
				'square_area' => rand(234567, 24356700),
				'population' => rand(3456780, 1000000000),
				'created_at' => '2019-05-07 08:08:55',
				'updated_at' => '2019-05-07 08:08:55',
			),
			36 =>
			array(
				'id' => 37,
				'name' => 'Zamfara',
				'square_area' => rand(234567, 24356700),
				'population' => rand(3456780, 1000000000),
				'created_at' => '2019-05-07 08:08:55',
				'updated_at' => '2019-05-07 08:08:55',
			),
		));
	}
}
