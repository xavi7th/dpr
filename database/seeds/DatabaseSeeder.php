<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
	/**
	 * Seed the application's database.
	 *
	 * @return void
	 */
	public function run()
	{
		// $this->call(UsersTableSeeder::class);
		$this->call(StatesTableSeeder::class);
		$this->call(LocalGovtsTableSeeder::class);
		$this->call(CompaniesTableSeeder::class);
		$this->call(StaffTableSeeder::class);
		$this->call(IssuedAtcLicensesTableSeeder::class);
		$this->call(JobAssignmentsTableSeeder::class);
		$this->call(AddonAtiInspectionDocumentsTableSeeder::class);
		$this->call(AddonLtoInspectionDocumentsTableSeeder::class);
		$this->call(AdoInboxesTableSeeder::class);
		$this->call(AdoOutboxesTableSeeder::class);
		$this->call(SiteSuitabilityInspectionDocumentsTableSeeder::class);
		$this->call(AppDocReviewsTableSeeder::class);
		$this->call(ApplicationCommentsTableSeeder::class);
		$this->call(AtcInspectionDocumentsTableSeeder::class);
		$this->call(CatdLtoApplicationExtentionsTableSeeder::class);
		$this->call(CatdLtoInspectionDocumentsTableSeeder::class);
		$this->call(CompletedJobsTableSeeder::class);
		$this->call(HeadgasInboxesTableSeeder::class);
		$this->call(HeadgasOutboxesTableSeeder::class);
		$this->call(InboxesTableSeeder::class);
		$this->call(IssuedAddonAtiLicensesTableSeeder::class);
		$this->call(IssuedAddonLtoLicensesTableSeeder::class);
		$this->call(IssuedLtoLicensesTableSeeder::class);
		$this->call(JobsTimelinesTableSeeder::class);
		$this->call(LtoInspectionDocumentsTableSeeder::class);
		$this->call(LtoLicenseRenewalsTableSeeder::class);
		$this->call(OutboxesTableSeeder::class);
		$this->call(PressureTestLicensesTableSeeder::class);
		$this->call(PressureTestRecordsTableSeeder::class);
		$this->call(RenewedLtoLicensesTableSeeder::class);
		$this->call(ReportDocumentsTableSeeder::class);
		$this->call(SiteSuitabilityReportsTableSeeder::class);
		$this->call(StaffInboxesTableSeeder::class);
		$this->call(StaffOutboxesTableSeeder::class);
		$this->call(TakeoverInspectionDocumentsTableSeeder::class);
		$this->call(TakeoverReviewsTableSeeder::class);
		$this->call(TeamleadInboxesTableSeeder::class);
		$this->call(TeamleadOutboxesTableSeeder::class);
		$this->call(ZopsconInboxesTableSeeder::class);
		$this->call(UserNotificationsSeeder::class);
	}
}
