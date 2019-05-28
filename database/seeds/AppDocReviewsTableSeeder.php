<?php

use App\AppDocReview;
use App\JobAssignment;
use App\IssuedAtcLicense;
use Illuminate\Database\Seeder;
use App\SiteSuitabilityInspectionDocuments;

class AppDocReviewsTableSeeder extends Seeder
{

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{


		\DB::table('app_doc_reviews')->delete();

		\DB::table('app_doc_reviews')->insert(array(
			0 =>
			array(
				'id' => 1,
				'application_id' => 'DPRAPPLICATION00001',
				'state_id' => '1',
				'local_govt_id' => '2',
				'office' => 'Warri',
				'marketer_id' => 'DPRMKT00008',
				'company_id' => 'DPRCOMP00004',
				'name_of_gas_plant' => 'benjones',
				'application_type' => 'LPG Retailer Outlets',
				'sub_category' => 'Site Suitability Inspection',
				'plant_type' => 'Refilling Plant',
				'capacity_of_tank' => NULL,
				'state' => 'Abia State',
				'lga' => 'Aba South',
				'town' => 'aba',
				'address' => 'aba',
				'application_status' => 'Not Submitted',
				'to_zopscon' => NULL,
				'to_ADO' => NULL,
				'to_head_gas' => NULL,
				'to_team_lead' => NULL,
				'to_staff' => '',
				'created_at' => '2018-12-09 22:56:41',
				'updated_at' => '2018-12-09 22:56:41',
			),
			1 =>
			array(
				'id' => 2,
				'application_id' => 'DPRAPPLICATION00002',
				'state_id' => '1',
				'local_govt_id' => '3',
				'office' => 'Warri',
				'marketer_id' => 'DPRMKT00008',
				'company_id' => 'DPRCOMP00001',
				'name_of_gas_plant' => 'homer',
				'application_type' => 'LPG Retailer Outlets',
				'sub_category' => 'Site Suitability Inspection',
				'plant_type' => 'Refilling Plant',
				'capacity_of_tank' => NULL,
				'state' => 'Abia State',
				'lga' => 'Arochukwu',
				'town' => 'arochukwu',
				'address' => 'aba',
				'application_status' => 'Site Suitable',
				'to_zopscon' => 'forwarded',
				'to_ADO' => 'forwarded',
				'to_head_gas' => 'forwarded',
				'to_team_lead' => 'received',
				'to_staff' => 'forwarded',
				'created_at' => '2018-12-09 23:23:58',
				'updated_at' => '2018-12-13 19:32:37',
			),
			2 =>
			array(
				'id' => 3,
				'application_id' => 'DPRAPPLICATION00003',
				'state_id' => '1',
				'local_govt_id' => '3',
				'office' => 'Warri',
				'marketer_id' => 'DPRMKT00008',
				'company_id' => 'DPRCOMP00001',
				'name_of_gas_plant' => 'homer',
				'application_type' => 'LPG Retailer Outlets',
				'sub_category' => 'ATC',
				'plant_type' => 'Refilling Plant',
				'capacity_of_tank' => NULL,
				'state' => 'Abia State',
				'lga' => 'Arochukwu',
				'town' => 'arochukwu',
				'address' => 'aba',
				'application_status' => 'ATC Issued',
				'to_zopscon' => 'completed',
				'to_ADO' => 'completed',
				'to_head_gas' => 'completed',
				'to_team_lead' => 'completed',
				'to_staff' => 'completed',
				'created_at' => '2018-12-13 20:12:48',
				'updated_at' => '2018-12-21 15:00:28',
			),
			3 =>
			array(
				'id' => 4,
				'application_id' => 'DPRAPPLICATION00004',
				'state_id' => '1',
				'local_govt_id' => '2',
				'office' => 'Warri',
				'marketer_id' => 'DPRMKT00008',
				'company_id' => 'DPRCOMP00002',
				'name_of_gas_plant' => 'qq',
				'application_type' => 'LPG Retailer Outlets',
				'sub_category' => 'Site Suitability Inspection',
				'plant_type' => 'Refilling Plant',
				'capacity_of_tank' => NULL,
				'state' => 'Abia State',
				'lga' => 'Aba South',
				'town' => '13',
				'address' => '3eqwr',
				'application_status' => 'Site Suitable',
				'to_zopscon' => 'completed',
				'to_ADO' => 'completed',
				'to_head_gas' => 'completed',
				'to_team_lead' => 'completed',
				'to_staff' => 'completed',
				'created_at' => '2018-12-23 13:58:00',
				'updated_at' => '2018-12-24 21:57:59',
			),
			4 =>
			array(
				'id' => 5,
				'application_id' => 'DPRAPPLICATION00005',
				'state_id' => '1',
				'local_govt_id' => '2',
				'office' => 'Warri',
				'marketer_id' => 'DPRMKT00008',
				'company_id' => 'DPRCOMP00003',
				'name_of_gas_plant' => 'neewer plant',
				'application_type' => 'LPG Retailer Outlets',
				'sub_category' => 'Site Suitability Inspection',
				'plant_type' => 'Refilling Plant',
				'capacity_of_tank' => NULL,
				'state' => 'Abia State',
				'lga' => 'Aba South',
				'town' => 'aba',
				'address' => '12 aba road',
				'application_status' => 'Site Suitable',
				'to_zopscon' => 'true',
				'to_ADO' => NULL,
				'to_head_gas' => NULL,
				'to_team_lead' => NULL,
				'to_staff' => NULL,
				'created_at' => '2019-01-18 22:23:29',
				'updated_at' => '2019-03-09 12:33:15',
			),
			5 =>
			array(
				'id' => 6,
				'application_id' => 'DPRAPPLICATION00006',
				'state_id' => '2',
				'local_govt_id' => '20',
				'office' => 'Warri',
				'marketer_id' => 'DPRMKT00008',
				'company_id' => 'DPRCOMP00003',
				'name_of_gas_plant' => 'rodeo plant',
				'application_type' => 'LPG Retailer Outlets',
				'sub_category' => 'Site Suitability Inspection',
				'plant_type' => 'Refilling Plant',
				'capacity_of_tank' => NULL,
				'state' => 'Adamawa State',
				'lga' => 'Ganye',
				'town' => 'ganye',
				'address' => 'ganye',
				'application_status' => 'Site Suitable',
				'to_zopscon' => 'completed',
				'to_ADO' => 'completed',
				'to_head_gas' => 'completed',
				'to_team_lead' => 'completed',
				'to_staff' => 'completed',
				'created_at' => '2019-01-19 00:44:34',
				'updated_at' => '2019-01-25 19:28:10',
			),
			6 =>
			array(
				'id' => 7,
				'application_id' => 'DPRAPPLICATION00007',
				'state_id' => '1',
				'local_govt_id' => '2',
				'office' => 'Warri',
				'marketer_id' => 'DPRMKT00008',
				'company_id' => 'DPRCOMP00003',
				'name_of_gas_plant' => 'benjen',
				'application_type' => 'LPG Retailer Outlets',
				'sub_category' => 'Site Suitability Inspection',
				'plant_type' => 'Refilling Plant',
				'capacity_of_tank' => NULL,
				'state' => 'Abia State',
				'lga' => 'Aba South',
				'town' => 'awka',
				'address' => '56 awka road',
				'application_status' => 'Application Pending',
				'to_zopscon' => 'forwarded',
				'to_ADO' => 'forwarded',
				'to_head_gas' => 'forwarded',
				'to_team_lead' => 'forwarded',
				'to_staff' => 'true',
				'created_at' => '2019-01-20 01:23:51',
				'updated_at' => '2019-01-20 01:27:26',
			),
			7 =>
			array(
				'id' => 8,
				'application_id' => 'DPRAPPLICATION00008',
				'state_id' => '1',
				'local_govt_id' => '2',
				'office' => 'Warri',
				'marketer_id' => 'DPRMKT00008',
				'company_id' => 'DPRCOMP00003',
				'name_of_gas_plant' => 'mahjong',
				'application_type' => 'LPG Retailer Outlets',
				'sub_category' => 'Site Suitability Inspection',
				'plant_type' => 'Refilling Plant',
				'capacity_of_tank' => NULL,
				'state' => 'Abia State',
				'lga' => 'Aba South',
				'town' => 'aba',
				'address' => '45 aba road',
				'application_status' => 'Not Submitted',
				'to_zopscon' => NULL,
				'to_ADO' => NULL,
				'to_head_gas' => NULL,
				'to_team_lead' => NULL,
				'to_staff' => NULL,
				'created_at' => '2019-01-27 17:06:34',
				'updated_at' => '2019-01-27 17:06:34',
			),
			8 =>
			array(
				'id' => 9,
				'application_id' => 'DPRAPPLICATION00009',
				'state_id' => '12',
				'local_govt_id' => '235',
				'office' => 'Warri',
				'marketer_id' => 'DPRMKT00008',
				'company_id' => 'DPRCOMP00003',
				'name_of_gas_plant' => 'palmer oil',
				'application_type' => 'LPG Retailer Outlets',
				'sub_category' => 'Site Suitability Inspection',
				'plant_type' => 'Refilling Plant',
				'capacity_of_tank' => NULL,
				'state' => 'Edo State',
				'lga' => 'Ikpoba Okha',
				'town' => 'benin',
				'address' => '12 ring road',
				'application_status' => 'Application Pending',
				'to_zopscon' => 'forwarded',
				'to_ADO' => 'forwarded',
				'to_head_gas' => 'true',
				'to_team_lead' => NULL,
				'to_staff' => NULL,
				'created_at' => '2019-01-29 20:18:46',
				'updated_at' => '2019-01-31 09:33:03',
			),
			9 =>
			array(
				'id' => 10,
				'application_id' => 'DPRAPPLICATION00010',
				'state_id' => '10',
				'local_govt_id' => '210',
				'office' => 'Warri',
				'marketer_id' => 'DPRMKT00008',
				'company_id' => 'DPRCOMP00004',
				'name_of_gas_plant' => 'Cowin gas',
				'application_type' => 'LPG Retailer Outlets',
				'sub_category' => 'Site Suitability Inspection',
				'plant_type' => 'Refilling Plant',
				'capacity_of_tank' => NULL,
				'state' => 'Delta State',
				'lga' => 'Warri South',
				'town' => 'warri',
				'address' => '12 airport road',
				'application_status' => 'Site Suitable',
				'to_zopscon' => 'true',
				'to_ADO' => NULL,
				'to_head_gas' => NULL,
				'to_team_lead' => NULL,
				'to_staff' => NULL,
				'created_at' => '2019-02-01 13:40:06',
				'updated_at' => '2019-02-03 09:11:09',
			),
			10 =>
			array(
				'id' => 11,
				'application_id' => 'DPRAPPLICATION00011',
				'state_id' => '10',
				'local_govt_id' => '199',
				'office' => 'Warri',
				'marketer_id' => 'DPRMKT00008',
				'company_id' => 'DPRCOMP00003',
				'name_of_gas_plant' => 'sedco plant',
				'application_type' => 'LPG Retailer Outlets',
				'sub_category' => 'Site Suitability Inspection',
				'plant_type' => 'Industrial Plant',
				'capacity_of_tank' => NULL,
				'state' => 'Delta State',
				'lga' => 'Okpe',
				'town' => 'okpe',
				'address' => '51 okpe-isoko road',
				'application_status' => 'Site Suitable',
				'to_zopscon' => 'true',
				'to_ADO' => NULL,
				'to_head_gas' => NULL,
				'to_team_lead' => NULL,
				'to_staff' => NULL,
				'created_at' => '2019-02-02 18:24:11',
				'updated_at' => '2019-02-06 20:14:25',
			),
			11 =>
			array(
				'id' => 14,
				'application_id' => 'DPRAPPLICATION00012',
				'state_id' => '6',
				'local_govt_id' => '116',
				'office' => 'Warri',
				'marketer_id' => 'DPRST00007',
				'company_id' => 'DPRCOMP00004',
				'name_of_gas_plant' => 'Cowin gas',
				'application_type' => 'LPG Retailer Outlets',
				'sub_category' => 'ATC',
				'plant_type' => 'Refilling Plant',
				'capacity_of_tank' => NULL,
				'state' => 'Bayelsa State',
				'lga' => 'Sagbama',
				'town' => 'sagbama town',
				'address' => '22, cane road',
				'application_status' => 'ATC Issued',
				'to_zopscon' => 'true',
				'to_ADO' => NULL,
				'to_head_gas' => NULL,
				'to_team_lead' => NULL,
				'to_staff' => NULL,
				'created_at' => '2019-02-03 13:00:51',
				'updated_at' => '2019-02-03 17:15:39',
			),
			12 =>
			array(
				'id' => 16,
				'application_id' => 'DPRAPPLICATION00013',
				'state_id' => '6',
				'local_govt_id' => '116',
				'office' => 'Warri',
				'marketer_id' => 'DPRST00007',
				'company_id' => 'DPRCOMP00004',
				'name_of_gas_plant' => 'Cowin gas',
				'application_type' => 'LPG Retailer Outlets',
				'sub_category' => 'LTO',
				'plant_type' => 'Refilling Plant',
				'capacity_of_tank' => '500',
				'state' => 'Bayelsa State',
				'lga' => 'Sagbama',
				'town' => 'sagbama town',
				'address' => '22, cane road',
				'application_status' => 'Application Pending',
				'to_zopscon' => 'true',
				'to_ADO' => NULL,
				'to_head_gas' => NULL,
				'to_team_lead' => NULL,
				'to_staff' => NULL,
				'created_at' => '2019-02-03 21:16:40',
				'updated_at' => '2019-02-03 21:31:42',
			),
			13 =>
			array(
				'id' => 17,
				'application_id' => 'DPRAPPLICATION00014',
				'state_id' => '5',
				'local_govt_id' => '95',
				'office' => 'Warri',
				'marketer_id' => 'DPRMKT00008',
				'company_id' => 'DPRCOMP00003',
				'name_of_gas_plant' => 'neewer plant',
				'application_type' => 'LPG Retailer Outlets',
				'sub_category' => 'Renewal',
				'plant_type' => 'Select Type',
				'capacity_of_tank' => '450',
				'state' => 'Bauchi State',
				'lga' => 'Darazo',
				'town' => 'aba',
				'address' => '12 airport road',
				'application_status' => 'Not Submitted',
				'to_zopscon' => NULL,
				'to_ADO' => NULL,
				'to_head_gas' => NULL,
				'to_team_lead' => NULL,
				'to_staff' => NULL,
				'created_at' => '2019-02-04 15:27:51',
				'updated_at' => '2019-02-04 15:27:51',
			),
			14 =>
			array(
				'id' => 18,
				'application_id' => 'DPRAPPLICATION00015',
				'state_id' => '2',
				'local_govt_id' => '20',
				'office' => 'Warri',
				'marketer_id' => 'DPRMKT00008',
				'company_id' => 'DPRCOMP00003',
				'name_of_gas_plant' => 'rodeo plant',
				'application_type' => 'LPG Retailer Outlets',
				'sub_category' => 'ATC',
				'plant_type' => 'Refilling Plant',
				'capacity_of_tank' => NULL,
				'state' => 'Adamawa State',
				'lga' => 'Ganye',
				'town' => 'ganye',
				'address' => 'ganye',
				'application_status' => 'ATC Issued',
				'to_zopscon' => 'true',
				'to_ADO' => NULL,
				'to_head_gas' => NULL,
				'to_team_lead' => NULL,
				'to_staff' => NULL,
				'created_at' => '2019-02-04 20:27:47',
				'updated_at' => '2019-02-04 21:01:08',
			),
			15 =>
			array(
				'id' => 19,
				'application_id' => 'DPRAPPLICATION00016',
				'state_id' => '2',
				'local_govt_id' => '20',
				'office' => 'Warri',
				'marketer_id' => 'DPRMKT00008',
				'company_id' => 'DPRCOMP00003',
				'name_of_gas_plant' => 'rodeo plant',
				'application_type' => 'LPG Retailer Outlets',
				'sub_category' => 'LTO',
				'plant_type' => 'Refilling Plant',
				'capacity_of_tank' => '5000',
				'state' => 'Adamawa State',
				'lga' => 'Ganye',
				'town' => 'ganye',
				'address' => 'ganye',
				'application_status' => 'Application Pending',
				'to_zopscon' => 'true',
				'to_ADO' => NULL,
				'to_head_gas' => NULL,
				'to_team_lead' => NULL,
				'to_staff' => NULL,
				'created_at' => '2019-02-04 21:09:21',
				'updated_at' => '2019-02-04 21:11:35',
			),
			16 =>
			array(
				'id' => 22,
				'application_id' => 'DPRAPPLICATION00017',
				'state_id' => '10',
				'local_govt_id' => '205',
				'office' => 'Warri',
				'marketer_id' => 'DPRMKT00008',
				'company_id' => 'DPRCOMP00003',
				'name_of_gas_plant' => 'ages gas',
				'application_type' => 'CNG Retailer Outlets',
				'sub_category' => 'ATC',
				'plant_type' => 'Auto Gas Plant',
				'capacity_of_tank' => NULL,
				'state' => 'Delta State',
				'lga' => 'Ughelli North',
				'town' => 'ughelli',
				'address' => '24, ugehlli road',
				'application_status' => 'ATC Issued',
				'to_zopscon' => 'true',
				'to_ADO' => NULL,
				'to_head_gas' => NULL,
				'to_team_lead' => NULL,
				'to_staff' => NULL,
				'created_at' => '2019-02-04 23:20:10',
				'updated_at' => '2019-02-04 23:49:26',
			),
			17 =>
			array(
				'id' => 23,
				'application_id' => 'DPRAPPLICATION00018',
				'state_id' => '10',
				'local_govt_id' => '205',
				'office' => 'Warri',
				'marketer_id' => 'DPRMKT00008',
				'company_id' => 'DPRCOMP00003',
				'name_of_gas_plant' => 'ages gas',
				'application_type' => 'CNG Retailer Outlets',
				'sub_category' => 'LTO',
				'plant_type' => 'Auto Gas Plant',
				'capacity_of_tank' => '3400',
				'state' => 'Delta State',
				'lga' => 'Ughelli North',
				'town' => 'ughelli',
				'address' => '24, ugehlli road',
				'application_status' => 'Application Pending',
				'to_zopscon' => 'true',
				'to_ADO' => NULL,
				'to_head_gas' => NULL,
				'to_team_lead' => NULL,
				'to_staff' => NULL,
				'created_at' => '2019-02-05 00:32:54',
				'updated_at' => '2019-02-05 00:33:39',
			),
			18 =>
			array(
				'id' => 24,
				'application_id' => 'DPRAPPLICATION00019',
				'state_id' => '10',
				'local_govt_id' => '205',
				'office' => 'Warri',
				'marketer_id' => 'DPRMKT00008',
				'company_id' => 'DPRCOMP00003',
				'name_of_gas_plant' => 'ages gas',
				'application_type' => 'LPG Retailer Outlets',
				'sub_category' => 'Pressure Testing',
				'plant_type' => 'Auto Gas Plant',
				'capacity_of_tank' => NULL,
				'state' => 'Delta State',
				'lga' => 'Ughelli North',
				'town' => 'ughelli',
				'address' => '24, ugehlli road',
				'application_status' => 'Application Pending',
				'to_zopscon' => 'true',
				'to_ADO' => NULL,
				'to_head_gas' => NULL,
				'to_team_lead' => NULL,
				'to_staff' => NULL,
				'created_at' => '2019-02-05 01:36:26',
				'updated_at' => '2019-02-05 01:36:26',
			),
			19 =>
			array(
				'id' => 25,
				'application_id' => 'DPRAPPLICATION00020',
				'state_id' => '1',
				'local_govt_id' => '3',
				'office' => 'Warri',
				'marketer_id' => 'DPRMKT00008',
				'company_id' => 'DPRCOMP00001',
				'name_of_gas_plant' => 'homer',
				'application_type' => 'LPG Retailer Outlets',
				'sub_category' => 'LTO',
				'plant_type' => 'Refilling Plant',
				'capacity_of_tank' => '6700',
				'state' => 'Abia State',
				'lga' => 'Arochukwu',
				'town' => 'arochukwu',
				'address' => 'aba',
				'application_status' => 'LTO Issued',
				'to_zopscon' => 'true',
				'to_ADO' => NULL,
				'to_head_gas' => NULL,
				'to_team_lead' => NULL,
				'to_staff' => NULL,
				'created_at' => '2019-02-05 13:08:03',
				'updated_at' => '2019-03-03 07:05:58',
			),
			20 =>
			array(
				'id' => 26,
				'application_id' => 'DPRAPPLICATION00021',
				'state_id' => '10',
				'local_govt_id' => '199',
				'office' => 'Warri',
				'marketer_id' => 'DPRMKT00008',
				'company_id' => 'DPRCOMP00003',
				'name_of_gas_plant' => 'sedco plant',
				'application_type' => 'LPG Retailer Outlets',
				'sub_category' => 'ATC',
				'plant_type' => 'Industrial Plant',
				'capacity_of_tank' => NULL,
				'state' => 'Delta State',
				'lga' => 'Okpe',
				'town' => 'okpe',
				'address' => '51 okpe-isoko road',
				'application_status' => 'ATC Issued',
				'to_zopscon' => 'true',
				'to_ADO' => NULL,
				'to_head_gas' => NULL,
				'to_team_lead' => NULL,
				'to_staff' => NULL,
				'created_at' => '2019-02-06 20:38:03',
				'updated_at' => '2019-02-06 23:54:58',
			),
			21 =>
			array(
				'id' => 27,
				'application_id' => 'DPRAPPLICATION00022',
				'state_id' => '4',
				'local_govt_id' => '73',
				'office' => 'Warri',
				'marketer_id' => 'DPRMKT00008',
				'company_id' => 'DPRCOMP00003',
				'name_of_gas_plant' => 'tester rodes',
				'application_type' => 'LPG Retailer Outlets',
				'sub_category' => 'ATC',
				'plant_type' => 'Refilling Plant',
				'capacity_of_tank' => NULL,
				'state' => 'Anambra State',
				'lga' => 'Anaocha',
				'town' => 'aba',
				'address' => '45 aba road',
				'application_status' => 'Not Submitted',
				'to_zopscon' => NULL,
				'to_ADO' => NULL,
				'to_head_gas' => NULL,
				'to_team_lead' => NULL,
				'to_staff' => NULL,
				'created_at' => '2019-02-06 23:22:36',
				'updated_at' => '2019-02-06 23:22:36',
			),
			22 =>
			array(
				'id' => 28,
				'application_id' => 'DPRAPPLICATION00023',
				'state_id' => '10',
				'local_govt_id' => '199',
				'office' => 'Warri',
				'marketer_id' => 'DPRMKT00008',
				'company_id' => 'DPRCOMP00003',
				'name_of_gas_plant' => 'sedco plant',
				'application_type' => 'LPG Retailer Outlets',
				'sub_category' => 'LTO',
				'plant_type' => 'Industrial Plant',
				'capacity_of_tank' => '34500',
				'state' => 'Delta State',
				'lga' => 'Okpe',
				'town' => 'okpe',
				'address' => '51 okpe-isoko road',
				'application_status' => 'LTO Issued',
				'to_zopscon' => 'true',
				'to_ADO' => NULL,
				'to_head_gas' => NULL,
				'to_team_lead' => NULL,
				'to_staff' => NULL,
				'created_at' => '2019-02-06 23:59:45',
				'updated_at' => '2019-02-26 20:23:20',
			),
			23 =>
			array(
				'id' => 29,
				'application_id' => 'DPRAPPLICATION00024',
				'state_id' => '7',
				'local_govt_id' => '128',
				'office' => 'Warri',
				'marketer_id' => 'DPRMKT00008',
				'company_id' => 'DPRCOMP00004',
				'name_of_gas_plant' => 'platz gas',
				'application_type' => 'ADD-ON',
				'sub_category' => 'ADD-ON ATI',
				'plant_type' => 'Auto Gas Plant',
				'capacity_of_tank' => NULL,
				'state' => 'Benue State',
				'lga' => 'Konshisha',
				'town' => 'konshisha',
				'address' => '12 konshisha road',
				'application_status' => 'ATI Issued',
				'to_zopscon' => 'true',
				'to_ADO' => NULL,
				'to_head_gas' => NULL,
				'to_team_lead' => NULL,
				'to_staff' => NULL,
				'created_at' => '2019-02-11 21:28:31',
				'updated_at' => '2019-02-12 19:24:17',
			),
			24 =>
			array(
				'id' => 30,
				'application_id' => 'DPRAPPLICATION00025',
				'state_id' => '1',
				'local_govt_id' => '11',
				'office' => 'Warri',
				'marketer_id' => 'DPRMKT00008',
				'company_id' => 'DPRCOMP00004',
				'name_of_gas_plant' => 'reality gas',
				'application_type' => 'ADD-ON',
				'sub_category' => 'ADD-ON LTO',
				'plant_type' => 'Auto Gas Plant',
				'capacity_of_tank' => '67000',
				'state' => 'Abia State',
				'lga' => 'Osisioma',
				'town' => 'Osisioma',
				'address' => '45 kings palace way',
				'application_status' => 'Application Pending',
				'to_zopscon' => 'true',
				'to_ADO' => NULL,
				'to_head_gas' => NULL,
				'to_team_lead' => NULL,
				'to_staff' => NULL,
				'created_at' => '2019-02-12 06:28:20',
				'updated_at' => '2019-02-12 18:04:17',
			),
			25 =>
			array(
				'id' => 32,
				'application_id' => 'DPRAPPLICATION00026',
				'state_id' => '10',
				'local_govt_id' => '210',
				'office' => 'Warri',
				'marketer_id' => 'DPRMKT00008',
				'company_id' => 'DPRCOMP00004',
				'name_of_gas_plant' => NULL,
				'application_type' => 'CAT-D',
				'sub_category' => 'CAT-D LTO',
				'plant_type' => NULL,
				'capacity_of_tank' => '71000',
				'state' => 'Delta State',
				'lga' => 'Warri South',
				'town' => 'warri',
				'address' => '12 airport road',
				'application_status' => 'Application Pending',
				'to_zopscon' => 'true',
				'to_ADO' => NULL,
				'to_head_gas' => NULL,
				'to_team_lead' => NULL,
				'to_staff' => NULL,
				'created_at' => '2019-02-13 05:53:11',
				'updated_at' => '2019-02-13 07:46:17',
			),
			26 =>
			array(
				'id' => 37,
				'application_id' => 'DPRAPPLICATION00027',
				'state_id' => '10',
				'local_govt_id' => '199',
				'office' => 'Warri',
				'marketer_id' => 'DPRMKT00008',
				'company_id' => 'DPRCOMP00004',
				'name_of_gas_plant' => 'vans',
				'application_type' => 'LPG Retailer Outlets',
				'sub_category' => 'ATC',
				'plant_type' => 'Refilling Plant',
				'capacity_of_tank' => NULL,
				'state' => 'Delta State',
				'lga' => 'Okpe',
				'town' => 'okpe',
				'address' => '24, okpe road',
				'application_status' => 'ATC Issued',
				'to_zopscon' => 'true',
				'to_ADO' => NULL,
				'to_head_gas' => NULL,
				'to_team_lead' => NULL,
				'to_staff' => NULL,
				'created_at' => '2019-03-02 18:54:35',
				'updated_at' => '2019-03-02 20:08:11',
			),
			27 =>
			array(
				'id' => 45,
				'application_id' => 'DPRAPPLICATION00028',
				'state_id' => '10',
				'local_govt_id' => '199',
				'office' => 'Warri',
				'marketer_id' => 'DPRMKT00008',
				'company_id' => 'DPRCOMP00003',
				'name_of_gas_plant' => 'sedco plant',
				'application_type' => 'LPG Retailer Outlets',
				'sub_category' => 'Renewal',
				'plant_type' => 'Industrial Plant',
				'capacity_of_tank' => '34500',
				'state' => 'Delta State',
				'lga' => 'Okpe',
				'town' => 'okpe',
				'address' => '51 okpe-isoko road',
				'application_status' => 'Application Pending',
				'to_zopscon' => 'true',
				'to_ADO' => NULL,
				'to_head_gas' => NULL,
				'to_team_lead' => NULL,
				'to_staff' => NULL,
				'created_at' => '2019-03-02 23:20:16',
				'updated_at' => '2019-03-03 07:12:15',
			),
			28 =>
			array(
				'id' => 52,
				'application_id' => 'DPRAPPLICATION00029',
				'state_id' => '10',
				'local_govt_id' => '199',
				'office' => 'Warri',
				'marketer_id' => 'DPRMKT00008',
				'company_id' => 'DPRCOMP00004',
				'name_of_gas_plant' => 'vans',
				'application_type' => 'LPG Retailer Outlets',
				'sub_category' => 'Pressure Testing',
				'plant_type' => 'Refilling Plant',
				'capacity_of_tank' => NULL,
				'state' => 'Delta State',
				'lga' => 'Okpe',
				'town' => 'okpe',
				'address' => '24, okpe road',
				'application_status' => 'Pressure Test Succesful',
				'to_zopscon' => 'true',
				'to_ADO' => NULL,
				'to_head_gas' => NULL,
				'to_team_lead' => NULL,
				'to_staff' => NULL,
				'created_at' => '2019-03-03 20:48:38',
				'updated_at' => '2019-03-05 20:04:49',
			),
			29 =>
			array(
				'id' => 53,
				'application_id' => 'DPRAPPLICATION00030',
				'state_id' => '10',
				'local_govt_id' => '199',
				'office' => 'Warri',
				'marketer_id' => 'DPRMKT00008',
				'company_id' => 'DPRCOMP00004',
				'name_of_gas_plant' => 'vans',
				'application_type' => 'LPG Retailer Outlets',
				'sub_category' => 'LTO',
				'plant_type' => 'Refilling Plant',
				'capacity_of_tank' => '18000',
				'state' => 'Delta State',
				'lga' => 'Okpe',
				'town' => 'okpe',
				'address' => '24, okpe road',
				'application_status' => 'Application Pending',
				'to_zopscon' => 'true',
				'to_ADO' => NULL,
				'to_head_gas' => NULL,
				'to_team_lead' => NULL,
				'to_staff' => NULL,
				'created_at' => '2019-03-05 21:49:34',
				'updated_at' => '2019-03-05 22:00:00',
			),
			30 =>
			array(
				'id' => 55,
				'application_id' => 'DPRAPPLICATION00031',
				'state_id' => '10',
				'local_govt_id' => '199',
				'office' => 'Warri',
				'marketer_id' => 'DPRMKT00008',
				'company_id' => 'DPRCOMP00003',
				'name_of_gas_plant' => 'sedco plant',
				'application_type' => 'LPG Retailer Outlets',
				'sub_category' => 'ATC',
				'plant_type' => 'Industrial Plant',
				'capacity_of_tank' => NULL,
				'state' => 'Delta State',
				'lga' => 'Okpe',
				'town' => 'okpe',
				'address' => '51 okpe-isoko road',
				'application_status' => 'ATC Issued',
				'to_zopscon' => 'true',
				'to_ADO' => NULL,
				'to_head_gas' => NULL,
				'to_team_lead' => NULL,
				'to_staff' => NULL,
				'created_at' => '2019-03-09 13:08:00',
				'updated_at' => '2019-03-09 13:13:24',
			),
			31 =>
			array(
				'id' => 56,
				'application_id' => 'DPRAPPLICATION00032',
				'state_id' => '10',
				'local_govt_id' => '199',
				'office' => NULL,
				'marketer_id' => 'DPRMKT00008',
				'company_id' => 'DPRCOMP00003',
				'name_of_gas_plant' => 'aloesoothe',
				'application_type' => 'LPG Retailer Outlets',
				'sub_category' => 'ATC',
				'plant_type' => 'Industrial Plant',
				'capacity_of_tank' => NULL,
				'state' => 'Delta State',
				'lga' => 'Okpe',
				'town' => 'okpe',
				'address' => '1, okpe road',
				'application_status' => 'ATC Issued',
				'to_zopscon' => 'true',
				'to_ADO' => NULL,
				'to_head_gas' => NULL,
				'to_team_lead' => NULL,
				'to_staff' => NULL,
				'created_at' => '2019-03-17 11:41:12',
				'updated_at' => '2019-03-17 11:43:30',
			),
			32 =>
			array(
				'id' => 57,
				'application_id' => 'DPRAPPLICATION00033',
				'state_id' => '10',
				'local_govt_id' => '199',
				'office' => NULL,
				'marketer_id' => 'DPRMKT00008',
				'company_id' => 'DPRCOMP00003',
				'name_of_gas_plant' => 'aloesoothe',
				'application_type' => 'LPG Retailer Outlets',
				'sub_category' => 'Pressure Testing',
				'plant_type' => 'Industrial Plant',
				'capacity_of_tank' => NULL,
				'state' => 'Delta State',
				'lga' => 'Okpe',
				'town' => 'okpe',
				'address' => '1, okpe road',
				'application_status' => 'Pressure Test Succesful',
				'to_zopscon' => 'true',
				'to_ADO' => NULL,
				'to_head_gas' => NULL,
				'to_team_lead' => NULL,
				'to_staff' => NULL,
				'created_at' => '2019-03-17 11:57:20',
				'updated_at' => '2019-03-17 11:58:45',
			),
			33 =>
			array(
				'id' => 58,
				'application_id' => 'DPRAPPLICATION00034',
				'state_id' => '10',
				'local_govt_id' => '199',
				'office' => NULL,
				'marketer_id' => 'DPRMKT00008',
				'company_id' => 'DPRCOMP00003',
				'name_of_gas_plant' => 'aloesoothe',
				'application_type' => 'LPG Retailer Outlets',
				'sub_category' => 'LTO',
				'plant_type' => 'Industrial Plant',
				'capacity_of_tank' => '33000',
				'state' => 'Delta State',
				'lga' => 'Okpe',
				'town' => 'okpe',
				'address' => '1, okpe road',
				'application_status' => 'Application Pending',
				'to_zopscon' => 'true',
				'to_ADO' => NULL,
				'to_head_gas' => NULL,
				'to_team_lead' => NULL,
				'to_staff' => NULL,
				'created_at' => '2019-03-17 12:00:25',
				'updated_at' => '2019-03-17 12:00:41',
			),
		));

		factory(AppDocReview::class, 70)->create()->each(function ($doc) {
			// dump(['sub_category' => $doc->sub_category, 'application_type' => $doc->application_type, 'application_status' => $doc->application_status]);
			if ($doc->sub_category == 'ATC' && $doc->application_type == 'LPG Retailer Outlets' && $doc->application_status != 'Not Submitted') {
				$doc->issued_atc_licenses()->save(factory(IssuedAtcLicense::class)->make());
				$doc->job_assignment()->save(factory(JobAssignment::class)->make());
			} elseif ($doc->sub_category == 'Site Suitability Inspection') {
				$doc->site_suitability_inspection_documents()->save(factory(SiteSuitabilityInspectionDocuments::class)->make());
				$doc->job_assignment()->save(factory(JobAssignment::class)->make());
			}
		});
	}
}
