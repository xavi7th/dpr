<?php

namespace App;

use App\AppDocReview;
use App\JobAssignment;
use App\Staff;
use App\CompletedJobs;
use App\ReportDocument;
use App\ApplicationComments;
use App\SiteSuitabilityInspectionDocuments;
use App\AtcInspectionDocuments;
use App\SiteSuitabilityReports;
use App\IssuedAtcLicense;
use App\IssuedLtoLicense;
use App\LtoInspectionDocument;
use App\LtoLicenseRenewal;
use App\PressureTestRecords;
use App\JobsTimeline;
use App\teamleadInbox;
use App\staffInbox;
use App\teamleadOutbox;
use App\headgasInbox;
use Carbon\Carbon;

use Auth;
use DB;
use App\CustomHelpers;

class CustomHelpers
{

    static function teamleadAssignProcess(Request $request){
        AppDocReview::where('application_id', request('application_id'))
            ->update([
                'to_team_Lead' => 'forwarded',
                'to_staff' => 'true'
            ]);

        $to = Staff::where('staff_id', request('staff_id'))->first();

        JobsTimeline::create([
            'application_id' => request('application_id'),
            'from' => Auth::user()->staff_id,
            'to' => $to->staff_id
        ]);

        teamleadInbox::where('application_id', request('id'))->update([
            'to_outbox' => 'true'
        ]);

        // add this application document to the teamlead outbox
        teamleadOutbox::create([
            'application_id' => request('id'),
            'to' => $to->staff_id,
            'role' => $to->role,
            'application_type' => request('application_type'),
            'sub_category' => request('sub_category')
        ]);

        // add to staff inbox
        staffInbox::create([
            'application_id' => request('id'),
            'from' => Auth::user()->staff_id,
            'application_type' => request('application_type'),
            'sub_category' => request('sub_category'),
            'read' => 'false',
            'to_outbox' => 'false'
        ]);

        JobAssignment::updateOrCreate(
            [
                'application_id' => request('application_id')
            ],
            [
                'application_id' => request('application_id'),
                'assigned_by' => Auth::user()->staff_id,
                'staff_id' => request('staff_id'),
                'job_application_status' => 'Assigned'
            ]
        );
    }

    static function toCompletedJobsTable(Request $request){
        $currentJob = AppDocReview::where('application_id', request('application_id'))->first();
        $jobAssigned = JobAssignment::where('application_id', request('application_id'))->first();

        CompletedJobs::create([
            'application_id' => $currentJob->application_id,
            'teamlead_id' => $jobAssigned->assigned_by,
            'staff_id' => $jobAssigned->staff_id,
            'company_id' => $currentJob->company_id,
            'marketer_id' => $currentJob->marketer_id
        ]);
    }

}
