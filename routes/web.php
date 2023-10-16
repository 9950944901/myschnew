<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\School\Dashboard;
use App\Http\Controllers\School\FrontOffice;
use App\Http\Controllers\School\StudentInformation;
use App\Http\Controllers\School\FeesCollection;
use App\Http\Controllers\School\Income;
use App\Http\Controllers\School\Expenses;
use App\Http\Controllers\School\Attendance;
use App\Http\Controllers\School\Examinations;
use App\Http\Controllers\School\LessonPlan;
use App\Http\Controllers\School\Academics;
use App\Http\Controllers\School\HumanResource;
use App\Http\Controllers\School\Communicate;
use App\Http\Controllers\School\DownloadCenter;
use App\Http\Controllers\School\Alumni;
use App\Http\Controllers\School\Reports;
use App\Http\Controllers\School\SystemSettings;
use App\Http\Controllers\School\Pages;
use App\Http\Controllers\School\Admin_Login;
use App\Http\Controllers\School\HomeWorks;
use App\Http\Controllers\School\FrontCMS;
// ------------------Teacher----------------//
use App\Http\Controllers\Teacher\Teacher_Login;
use App\Http\Controllers\Teacher\T_StudentInformation;
use App\Http\Controllers\Teacher\T_Examinations;
use App\Http\Controllers\Teacher\T_LessonPlan;
use App\Http\Controllers\Teacher\T_Academics;
use App\Http\Controllers\Teacher\T_HumanResource;
use App\Http\Controllers\Teacher\T_Communicate;
use App\Http\Controllers\Teacher\T_DownloadCenter;
use App\Http\Controllers\Teacher\T_Pages;
use App\Http\Controllers\Teacher\T_Reports;
use App\Http\Controllers\Teacher\T_HomeWork;
use App\Http\Controllers\Teacher\T_Attendance;
// -----------------Student------------------//
use App\Http\Controllers\Student\Student_Login;
use App\Http\Controllers\Student\Student_Dashboard;
// ------------------------Site-----------------//
use App\Http\Controllers\Site\Web;
use App\Http\Controllers\School\CSV;
use App\Http\Controllers\School\Report_card;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/








Route::get('/', function () {
    return view('welcome');
});

// ------------------- SCHOOL PANEL -----------------------//
Route::prefix('school-management')->middleware('adminlogins')->group(function () {


Route::prefix('panel')->controller(Dashboard::class)->group(function () {
    Route::get('/','index')->name('SCHOOL.Home');

});

// -------------------------------FRONT CMS-------------------------------------//
Route::prefix('front-cms')->controller(FrontCMS::class)->group(function () {
    Route::get('setting','index')->name('SCHOOL.Front.Setting');
    Route::post('setting_data','setting_data')->name('Front.Web.Page.Setting');
    Route::get('gallery','gallery')->name('Front.CMS.Gallery');
    Route::post('gallery_data','gallery_data')->name('Front.Web.Page.Gallery');
    Route::get('gallery_delete/{id}','gallery_delete')->name('Front.Cms.Gallery.Delete');
    Route::get('parents-say','parents_say')->name('Front.CMS.Parents.Say');
    Route::post('parents_say_data','parents_say_data')->name('Front.Web.parents.Data');
    Route::get('parents_say_delete/{id}','parents_say_delete')->name('Parents.Delete');
    Route::get('teachers','teachers')->name('Front.CMS.Teachers');
    Route::post('teachers_data','teachers_data')->name('Front.Web.teacher.Data');
    Route::post('teachers_update/{id}','teachers_update')->name('Front.Web.teacher.update');
    Route::get('teachers_delete/{id}','teachers_delete')->name('Front.Teacher.Delete');
    Route::get('teachers-edit/{id}','teachers_edit')->name('Front.Teacher.Edit');
    Route::get('contect-request','contect_request')->name('Front.CMS.Contect.Req');
    Route::get('contect_request_delete/{id}','contect_request_delete')->name('Contect.Request.Delete');
    Route::get('career-request','career_request')->name('Front.CMS.Career.Req');
    Route::get('career_request_delete/{id}','career_request_delete')->name('Career.Request.Delete');
    Route::get('openings','openings')->name('Front.CMS.Openings');
    Route::post('openings_data','openings_data')->name('Openings.Data');
    Route::post('openings_update/{id}','openings_update')->name('Openings.Update');
    Route::get('openings_delete/{id}','openings_delete')->name('Openings.Delete');
    Route::get('openings_active/{id}','openings_active')->name('Openings.Active');
    Route::get('openings_inactive/{id}','openings_inactive')->name('Openings.InActive');
    Route::get('openings-request-view/{id}','openings_view')->name('Openings.View');
    Route::get('openings_view_delete/{id}','openings_view_delete')->name('Openings.View.Delete');

});

// ------------------------------------------------------------------//
Route::prefix('front-office')->controller(FrontOffice::class)->group(function () {
    Route::get('admission-enquiry','index')->name('SCHOOL.Admission.Enquiry');
    Route::get('visitor-book','book')->name('SCHOOL.Visitor.Book');
    Route::get('phone-call-log','phone')->name('SCHOOL.phone-call-log');
    Route::post('visitor-data','visitor_data')->name('Visitor.DAta');
    Route::get('visitor-delete/{id}','visitor_delete')->name('Visitor.Delete');
    Route::post('phone-call-data','phone_call_data')->name('Phone.Call.Data');
    Route::get('phone-delete/{id}','phone_delete')->name('Phone.Delete');
    Route::post('admission-enquiry','admission_enquiry')->name('Admission.Enquiry');
    Route::get('admission_enquiry_delete/{id}','admission_enquiry_delete')->name('Admission.Enquiry.Delete');
    Route::post('admission_enquiry_update/{id}','admission_enquiry_update')->name('Admission.Update');

});

Route::prefix('student-information')->controller(StudentInformation::class)->group(function () {
    Route::get('student-details','index')->name('SCHOOL.Student.Details');
    Route::get('student-details-edit/{id}','student_details_edit')->name('SCHOOL.student-details-edit');
    Route::get('student-admission','student_admission')->name('SCHOOL.student-admission');
    Route::get('student-admission-import','student_admission_import')->name('SCHOOL.student-admission-import');
    Route::get('add-class','online_admission')->name('SCHOOL.online-admission');
    Route::get('disabled-students','disabled_students')->name('SCHOOL.disabled-students');
    Route::get('bulk-delete','bulk_delete')->name('SCHOOL.bulk-delete');
    Route::get('student-categories','student_categories')->name('SCHOOL.student-categories');
    Route::get('disabled-reason','disabled_reason')->name('SCHOOL.disabled-reason');
    Route::post('student-admission-data','student_admission_data')->name('SCHOOL.Student.Admission');
    Route::post('add_class','add_class')->name('SCHOOL.ADD.Class');
    Route::post('edit_class/{id}','edit_class')->name('SCHOOL.EDIT.Class');
    Route::post('add_section','add_section')->name('SCHOOL.ADD.Section');
    Route::post('edit_section/{id}','edit_section')->name('SCHOOL.Edit.Section');
    Route::get('delete/{id}','delete_sec')->name('Delete.Section');
    Route::get('deletec/{id}','delete_class')->name('Delete.Class');
    Route::get('student-details-delete/{id}','student_details_delete')->name('SCHOOL.student-details-delete');
    Route::post('student-edit_detatils/{id}','student_edit_detatils')->name('SCHOOL.Student.Admission.Edit');
    Route::get('student-details-page','student_details')->name('Show.Student.Details.filter');
    Route::get('student-details-show/{id}','student_details_show')->name('SCHOOL.student-details-show');
    Route::get('student-details-Active/{id}','student_Active')->name('SCHOOL.student-details-Active');
    Route::get('student-details-inactive/{id}','details_inactive')->name('SCHOOL.student-details-inactive');

    
});

Route::prefix('homework')->controller(HomeWorks::class)->group(function () {
    Route::get('index','index')->name('SCHOOL.homework');
    Route::post('homework_data','homework_data')->name('SCHOOL.Add.HomeWork');
    Route::get('homework_delete/{id}','homework_delete')->name('SCHOOL.HomeWork.Delete');
    Route::post('homework_update/{id}','homework_update')->name('SCHOOL.Update.HomeWork');
});


Route::prefix('fees-collection')->controller(FeesCollection::class)->group(function () {
    Route::get('collect-fees','index')->name('SCHOOL.collect-fees');
    Route::get('collect-fees-action/{id}','collect_fees_action')->name('SCHOOL.collect-fees-action');
    Route::get('search-fees-payment','search_fees_payment')->name('SCHOOL.search-fees-payment');
    Route::get('search-due-fees','search_due_fees')->name('SCHOOL.search-due-fees');
    Route::get('fees-master','fees_master')->name('SCHOOL.fees-master');
    Route::get('fees-group','fees_group')->name('SCHOOL.fees-group');
    Route::get('fees-type','fees_type')->name('SCHOOL.fees-type');
    Route::get('fees-Class','fees_discount')->name('SCHOOL.fees-discount');
    Route::get('fees-carry-forward','fees_carry_forward')->name('SCHOOL.fees-carry-forward');
    Route::get('fees-reminder','fees_reminder')->name('SCHOOL.fees-reminder');
    Route::get('due-fees-add-fees','due_fees_add_fees')->name('SCHOOL.due-fees-add-fees');
    // ---------------------------------//-------------------------------------------//
    Route::post('collect-fees-data','collect_fees_data')->name('Fees.Collection.Add');
    Route::get('fees-gorup-delete/{id}','fees_gorup_delete')->name('Fees.Group.Delete');
    Route::post('fees-edit-coll/{id}','fees_edit_coll')->name('Fees.edit.Coll');
    Route::post('fees-type-data','fees_type_data')->name('Fees.Type.Add');
    Route::get('fees_type_delete/{id}','fees_type_delete')->name('Fees.Type.Delete');
    Route::post('fees_type_edit/{id}','fees_type_edit')->name('Fees.edit.Type');
    Route::post('fees_discount_add','fees_discount_add')->name('Fees.Discount.Add');
    Route::get('fees_discount_delete/{id}','fees_discount_delete')->name('Fees.Discount.Delete');
    Route::post('fees_discount_edit/{id}','fees_discount_edit')->name('Fees.edit.discount');
    Route::post('fees-master-data','fees_master_data')->name('Fees.master.Data');
    Route::post('collect_fees_datas','collect_fees_datas')->name('Collect.Fees.Data');
    Route::get('collect_fees_delete/{id}','collect_fees_delete')->name('Fees.collect.Delete');
    Route::post('collect_fees_update/{id}','collect_fees_update')->name('Collect.Fees.Update');
    Route::get('master_fees_delete/{id}','master_fees_delete')->name('Fees.Master.Delete');
    Route::post('master_fees_update/{id}','master_fees_update')->name('Fees.Update.Master');
    Route::post('fees_carry_data/{id}','fees_carry_data')->name('Fees.Carry.Data');

    
});

Route::prefix('income')->controller(Income::class)->group(function () {
    Route::get('add-income','index')->name('SCHOOL.add-income');
    Route::get('search-income','search_income')->name('SCHOOL.search-income');
    Route::get('income-head','income_head')->name('SCHOOL.income-head');
    Route::post('income-head-data','income_head_data')->name('Income.Head.Data');
    Route::get('income-head-delete/{id}','income_head_delete')->name('Income.Head.Delete');
    Route::post('add-income-data','add_income_data')->name('ADD.Income.Data');
    Route::post('income_head_update/{id}','income_head_update')->name('Income.head.Update');
    Route::get('add-data-delete/{id}','add_data_delete')->name('Income.Data.Delete');
    Route::post('update-income-data/{id}','update_income_data')->name('Update.Income.Data');

});

Route::prefix('expenses')->controller(Expenses::class)->group(function () {
    Route::get('add-expense','index')->name('SCHOOL.add-expense');
    Route::get('search-expense','search_expense')->name('SCHOOL.search-expense');
    Route::get('expense-head','expense_head')->name('SCHOOL.expense-head');
    Route::post('expense-data','expense_data')->name('Expense.Data');
    Route::get('expense-delete/{id}','expense_delete')->name('Expense.Delete');
    Route::post('expense-update/{id}','expense_update')->name('Expense.Update');
    Route::post('Expense_Data_up/{id}','Expense_Data_up')->name('Update.Expense.Data');
    Route::post('add-expense-data','add_expense_data')->name('ADD.Expense.Data');
    Route::get('expense-data-delete/{id}','expense_data_delete')->name('Expense.Data.Delete');

});

Route::prefix('attendance')->controller(Attendance::class)->group(function () {
    Route::get('student-attendance','index')->name('SCHOOL.student-attendance');
    Route::get('attendance-by-date','attendance_by_date')->name('SCHOOL.attendance-by-date');
    Route::get('approve-leave','approve_leave')->name('SCHOOL.approve-leave');
    Route::post('approve_leave_data','approve_leave_data')->name('Add.Student.Leave');
    Route::get('student_appr_delete/{id}','student_appr_delete')->name('Student.Approve.Delete');
    Route::get('student_appr_change_status/{id}','student_appr_change_status')->name('Student.Approve.Change.Status');

});

Route::prefix('examinations')->controller(Examinations::class)->group(function () {
    Route::get('exam-group','index')->name('SCHOOL.exam-group');
    Route::get('exam-schedule','exam_schedule')->name('SCHOOL.exam-schedule');
    Route::get('exam-result','exam_result')->name('SCHOOL.exam-result');
    Route::get('marks-grade','marks_grade')->name('SCHOOL.marks-grade');
    Route::post('add_exam','add_exam')->name('Add.Exam.Group');
    Route::get('delete_exam/{id}','delete_exam')->name('Exam.Group.Delete');
    Route::post('update_exam/{id}','update_exam')->name('Update.Exam.Group');
    Route::post('add_exam_schedule','add_exam_schedule')->name('Add.Exam.Schedule');
    Route::get('delete_exam_schedule/{id}','delete_exam_schedule')->name('Exam.schedule.Delete');
    Route::post('update_exam_schedule/{id}','update_exam_schedule')->name('Update.Exam.Schedule');

    
    Route::get('delete_exam_result/{id}','delete_exam_result')->name('Exam.Result.Delete');
// Route::post('update_exam_result/{id}','update_exam_result')->name('Update.Exam.Result');

// Abhishek
    Route::get('examresult','examresult')->name('SCHOOL.examresult');
    // Route::post('rollnumber','rollnumber')->name('school.rollnumber');
    // Route::post('admission','admission')->name('school.admission');
    // Route::post('student','student')->name('school.student');
    // Route::post('student','student')->name('school.student');

    Route::get('exam_result_edit/{id}','exam_result_edit')->name('school.resutl.exam_result_edit');

    Route::post('Student_result_in','Student_result_in')->name('SCHOOL.Student.result.in');
    Route::post('Student_result_up/{id}','Student_result_up')->name('SCHOOL.Student.result.up');


});

Route::prefix('lesson-plan')->controller(LessonPlan::class)->group(function () {
    Route::get('manage-lesson-plan','index')->name('SCHOOL.manage-lesson-plan');
    Route::get('manage-syllabus-status','manage_syllabus_status')->name('SCHOOL.manage-syllabus-status');
    Route::get('lesson','lesson')->name('SCHOOL.lesson');
    Route::get('topic','topic')->name('SCHOOL.topic');
    Route::post('add-lesson','add_lesson')->name('Add.Lesson');
    Route::get('delete-lesson/{id}','delete_lesson')->name('Lesson.Delete');
    Route::get('edit-lesson/{id}','edit_lesson')->name('Lesson.Edit');
    Route::post('update_lesson/{id}','update_lesson')->name('Update.Lesson');
    Route::post('add_topic','add_topic')->name('Add.Topic');
    Route::get('delete_topic/{id}','delete_topic')->name('Topic.Delete');
    Route::get('edit-topic/{id}','edit_topic')->name('Topic.Edit');
    Route::post('update_topic/{id}','update_topic')->name('Update.Topic');
    Route::get('manage_status','manage_status')->name('manage.Status');

});

Route::prefix('academics')->controller(Academics::class)->group(function () {
    Route::get('class-timetable','index')->name('SCHOOL.class-timetable');
    Route::get('teachers-timetable','teachers_timetable')->name('SCHOOL.teachers-timetable');
    Route::get('assign-class-teacher','assign_class_teacher')->name('SCHOOL.assign-class-teacher');
    Route::get('promote-students','promote_students')->name('SCHOOL.promote-students');
    Route::get('subject-group','subject_group')->name('SCHOOL.subject-group');
    Route::get('subjects','subjects')->name('SCHOOL.subjects');
    Route::post('subjects_data','subjects_data')->name('Add.Subject.Data');
    Route::get('subjects_delete/{id}','subjects_delete')->name('Subject.Delete');
    Route::post('subjects_update/{id}','subjects_update')->name('Update.Subject');
    Route::post('subjects_group_data','subjects_group_data')->name('Subject.Group.Data');
    Route::get('subjects_group_delete/{id}','subjects_group_delete')->name('Subject.Group.Delete');
    Route::post('subjects_group_update/{id}','subjects_group_update')->name('Update.Subject.Group');
    Route::get('class','class')->name('SCHOOL.Aclass');
    Route::get('sections','sections')->name('SCHOOL.sections');
    Route::post('assign-teacher-data','assign_teacher_data')->name('Assign.Class.Teacher.Data');
    Route::get('assign-delete/{id}','assign_delete')->name('Assign .Delete');
    Route::post('assign-update/{id}','assign_update')->name('Update.Class.Teacher');
    Route::post('teacher_time_data','teacher_time_data')->name('Teacher.Time.Data');
    Route::get('teacher_time_delete/{id}','teacher_time_delete')->name('Teacher.Timetable.Delete');
    Route::post('class_time_data','class_time_data')->name('Class.Time.Data');
    Route::get('class_time_delete/{id}','class_time_delete')->name('Class.Timetable.Delete');
    Route::post('promote_student_data/{id}','promote_student_data')->name('Promote.Students.Data');

});

Route::prefix('human-resource')->controller(HumanResource::class)->group(function () {
    Route::get('staff-directory','index')->name('SCHOOL.staff-directory');
    Route::get('staff-attendance2','staff_attendance2')->name('SCHOOL.staff-attendance2');
    Route::get('staff-attendance2_list','attendance2_list')->name('SCHOOL.staff-attendance2_list');
    Route::post('teache_Attendance_Sent','attendance_sent')->name('SCHOOL.teache.Attendance.Sent');


    Route::get('staff-attendance','staff_attendance')->name('SCHOOL.staff-attendance');
    Route::get('payroll','payroll')->name('SCHOOL.payroll');
    Route::get('approve-leave-request','approve_leave_request')->name('SCHOOL.approve-leave-request');
    Route::get('apply-leave','apply_leave')->name('SCHOOL.apply-leave');
    Route::get('leave-type','leave_type')->name('SCHOOL.leave-type');
    Route::get('teachers-rating','teachers_rating')->name('SCHOOL.teachers-rating');
    Route::get('department','department')->name('SCHOOL.department');
    Route::get('disabled-staff','disabled_staff')->name('SCHOOL.disabled-staff');
    Route::get('staff-directory-add-staff','staff_directory_add_staff')->name('SCHOOL.staff-directory-add-staff');
    Route::get('staff-directory-show/{id}','staff_directory_show')->name('SCHOOL.staff-directory-show');
    Route::post('add-leave-type','add_leave_type')->name('Add.Leave.Type');
    Route::get('leave-type-delete/{id}','leave_type_delete')->name('Leave.Type.Delete');
    Route::post('add-leave-type-update/{id}','add_leave_type_update')->name('Add.Leave.Type.Update');
    Route::post('add-department','add_department')->name('Add.Department');
    Route::get('department-delete/{id}','department_delete')->name('Department.Delete');
    Route::post('department-update/{id}','department_update')->name('Department.Update');
    Route::post('leave-request','leave_request')->name('Leave.Request.data');
    Route::get('leave-request-delete/{id}','leave_request_delete')->name('Leave.Request.Delete');
    Route::post('leave_request_up/{id}','leave_request_up')->name('leave_request.Up');
    Route::post('view_request_update/{id}','view_request_update')->name('View.Request.Update');
    Route::post('add_staff','add_staff')->name('Add.Staff');
    Route::get('edit-staff/{id}','edit_staff')->name('SCHOOL.staff-directory-edit-staff');
    Route::post('update_staff/{id}','update_staff')->name('Update.Staff');
    Route::post('attend_staff','attend_staff')->name('Staff.Attend');
    Route::get('attend_staff_delete/{id}','attend_staff_delete')->name('Attendance.Delete');
    Route::post('attend_staff_update/{id}','attend_staff_update')->name('Staff.Attend.Update');
    Route::get('generate-payroll','generate_payroll')->name('SCHOOL.generate-payroll');
    
    Route::get('staff-directory-del/{id}','staff_directory_del')->name('SCHOOL.staff-directory-del');


    

});

Route::prefix('communicate')->controller(Communicate::class)->group(function () {
    Route::get('notice-board','index')->name('SCHOOL.notice-board');
    Route::post('add_notice','add_notice')->name('Add.Notice');
    Route::get('delete_notice/{id}','delete_notice')->name('Notice.Delete');
    Route::post('update_notice/{id}','update_notice')->name('Update.Notice');
    Route::get('send-email','send_email')->name('SCHOOL.send-email');
    Route::get('send-sms','send_sms')->name('SCHOOL.send-sms');
    Route::get('email-sms-log','email_sms_log')->name('SCHOOL.email-sms-log');

});

Route::prefix('download-center')->controller(DownloadCenter::class)->group(function () {
    Route::get('upload-content','index')->name('SCHOOL.upload-content');
    Route::post('upload-content-data','upload_content_data')->name('Upload.Content.Data');
    Route::get('content-delete/{id}','content_delete')->name('Content.Delete');
    Route::post('content_update/{id}','content_update')->name('Update.Content');
    Route::get('assignments','assignments')->name('SCHOOL.assignments');
    Route::get('study-material','study_material')->name('SCHOOL.study-material');
    Route::get('syllabus','syllabus')->name('SCHOOL.syllabus');
    Route::get('other-downloads','other_downloads')->name('SCHOOL.other-downloads');
    Route::post('add_syllabus_data','add_syllabus_data')->name('Add.Syllabus.Data');
    Route::get('syllabus_delete/{id}','syllabus_delete')->name('Syllabus.Delete');
    Route::post('syllabus_update/{id}','syllabus_update')->name('Update.Syllabus.Data');

});

Route::prefix('alumni')->controller(Alumni::class)->group(function () {
    Route::get('events','index')->name('SCHOOL.Aevents');

});

Route::prefix('Report/Card')->controller(Report_card::class)->group(function () {
    Route::get('report_card','index')->name('SCHOOL.Report.card');
    Route::get('report_add','report_add')->name('admin.School.report.add');
    Route::get('reportview','reportview')->name('SCHOOL.Report.reportview');
    Route::get('viewreport/{id}','viewreport')->name('SCHOOL.viewreport');
    Route::get('report_edit/{id}','report_edit')->name('SCHOOL.Report.report_edit');
    Route::post('Repotcard_up/{id}','Repotcard_up')->name('SCHOOL.Repotcard.up');
    Route::get('student_report_del/{id}','student_report_del')->name('SCHOOL.student_report.del');
    Route::post('school_information_in','school_information_in')->name('SCHOOL.school.information.in');
    Route::post('school_information_up/{id}','school_information_up')->name('SCHOOL.school.information.up');

});

Route::prefix('csv/upload')->controller(CSV::class,)->group(function(){
    Route::get('/file-import','importView')->name('import-view');
    Route::post('/import','import')->name('import');
    // Route::post('/update_import','up_import')->name('update_import');
    Route::get('/export-users','exportUsers')->name('export-users');
});




Route::prefix('reports')->controller(Reports::class)->group(function () {
    Route::get('student-information','index')->name('SCHOOL.student-information');
    Route::get('finance','finance')->name('SCHOOL.finance');
    Route::get('attendance','attendance')->name('SCHOOL.attendance');
    Route::get('examinations','examinations')->name('SCHOOL.examinations');
    Route::get('online-examination','online_examination')->name('SCHOOL.online-examination');
    Route::get('lesson-plan','lesson_plan')->name('SCHOOL.lesson-plan');
    Route::get('human-resource','human_resource')->name('SCHOOL.human-resource');
    Route::get('transport','transport')->name('SCHOOL.transport');
    Route::get('alumni','alumni')->name('SCHOOL.alumni');
    Route::get('user-log','user_log')->name('SCHOOL.user-log');
});






Route::prefix('system-settings')->controller(SystemSettings::class)->group(function () {
    Route::get('general-setting','index')->name('SCHOOL.general-setting');
    Route::post('general_setting_data','general_setting_data')->name('General.Setting.Data');
    Route::post('General_Setting_up/{id}','General_Setting_up')->name('General.Setting.up');
    Route::get('notification-setting','notification_setting')->name('SCHOOL.notification-setting');
    Route::get('student-profile-update','student_profile_update')->name('SCHOOL.student-profile-update');

});

Route::prefix('pages')->controller(Pages::class)->group(function () {
    Route::get('users-profile','index')->name('SCHOOL.users-profile');
    Route::view('pages-register','school.pages.pages-register')->name('SCHOOL.pages-register');
    Route::view('pages-login','school.pages.pages-login')->name('SCHOOL.pages-login');
    Route::post('profile-update','profile_update')->name('ADMIN.Profile.Update');
    Route::post('profile_change_pass','profile_change_pass')->name('profile.change.pass');

});


});

// ----------------------END ADMIN---------------------------//

// ----------------------ADMIN LOGIN---------------------------//

Route::prefix('school')->controller(Admin_Login::class)->group(function () {
    Route::view('login','school.pages.admin-login')->name('SCHOOL.ADmin.Login');
    Route::post('Check','Check')->name('ADMIN.Check.Data');
    Route::get('signout','signout')->name('SignOut.Data');
    Route::view('forget-password','school.pages.forget-password')->name('Admin.Froget.pass');
    Route::post('verify','verify')->name('ADMIN.Check.Verify');
    Route::post('otp','check_otp')->name('ADMIN.Check.otp');
    Route::post('new_pass','new_pass')->name('ADMIN.New.pass');

});

// -------------------------TEACHER LOGIN-------------------------//

Route::prefix('teacher')->controller(Teacher_Login::class)->group(function () {
    Route::view('login','teacher.pages.teacher-login')->name('Teacher.Login');
    Route::post('Check','Check')->name('Teacher.Login.Data');
    Route::get('signout','signout')->name('SignOut.Teacher');



    Route::view('forget-password','teacher.pages.forget-password')->name('teacher.forget.pass');
    Route::post('verify','teacher_verify')->name('teacher.Check.Verify');
    Route::post('otp','teacher_check_otp')->name('teacher.Check.otp');
    Route::post('new_pass','teacher_new_pass')->name('teacher.New.pass');




});




// ---------------TEACHER PANEL --------------------------------//

Route::prefix('teacher')->middleware('teacherlogin')->group(function () {

Route::controller(Dashboard::class)->group(function () {
    Route::get('dashboard','teacher_index')->name('Teacher.Home');
});

Route::prefix('/student-information')->controller(T_StudentInformation::class)->group(function () {
    Route::get('student-details','index')->name('Teacher.student-details');
    Route::get('student-show-details/{id}','student_details_show12')->name('Teacher.student-details-show45');
    Route::get('disabled-students','disabled_students')->name('Teacher.disabled-students');
    Route::get('add-class','online_admission')->name('Teacher.online-admission');
    Route::post('add_class','add_class')->name('Teacher.ADD.Class');
    Route::post('edit_class/{id}','edit_class')->name('Teacher.EDIT.Class');
    Route::post('add_section','add_section')->name('Teacher.ADD.Section');
    Route::post('edit_section/{id}','edit_section')->name('Teacher.Edit.Section');
    Route::get('delete/{id}','delete_sec')->name('TDelete.Section');
    Route::get('deletec/{id}','delete_class')->name('TDelete.Class');

});

Route::prefix('examinations')->controller(T_Examinations::class)->group(function () {
    Route::get('exam-group','index')->name('Teacher.exam-group');
    Route::get('exam-schedule','exam_schedule')->name('Teacher.exam-schedule');
    Route::get('exam-result','exam_result')->name('Teacher.exam-result');
    Route::get('marks-grade','marks_grade')->name('Teacher.marks-grade');
    Route::post('add_exam','add_exam')->name('TAdd.Exam.Group');
    Route::get('delete_exam/{id}','delete_exam')->name('TExam.Group.Delete');
    Route::post('update_exam/{id}','update_exam')->name('TUpdate.Exam.Group');
    Route::post('add_exam_schedule','add_exam_schedule')->name('TAdd.Exam.Schedule');
    Route::get('delete_exam_schedule/{id}','delete_exam_schedule')->name('TExam.schedule.Delete');
    Route::post('update_exam_schedule/{id}','update_exam_schedule')->name('TUpdate.Exam.Schedule');
    Route::post('add_exam_result','add_exam_result')->name('TAdd.Exam.Result');
    Route::get('delete_exam_result/{id}','delete_exam_result')->name('TExam.Result.Delete');
    Route::post('update_exam_result/{id}','update_exam_result')->name('TUpdate.Exam.Result');
    Route::get('report_card/{id}','Student_report_card')->name('Student.report_card');
});

Route::prefix('lesson-plan')->controller(T_LessonPlan::class)->group(function () {
    Route::get('manage-lesson-plan','index')->name('Teacher.manage-lesson-plan');
    Route::get('manage-syllabus-status','manage_syllabus_status')->name('Teacher.manage-syllabus-status');
    Route::get('lesson','lesson')->name('Teacher.lesson');
    Route::get('topic','topic')->name('Teacher.topic');
    Route::post('add-lesson','add_lesson')->name('TAdd.Lesson');
    Route::get('delete-lesson/{id}','delete_lesson')->name('TLesson.Delete');
    Route::get('edit-lesson/{id}','edit_lesson')->name('TLesson.Edit');
    Route::post('update_lesson/{id}','update_lesson')->name('TUpdate.Lesson');
    Route::post('add_topic','add_topic')->name('TAdd.Topic');
    Route::get('delete_topic/{id}','delete_topic')->name('TTopic.Delete');
    Route::get('edit-topic/{id}','edit_topic')->name('TTopic.Edit');
    Route::post('update_topic/{id}','update_topic')->name('TUpdate.Topic');
    Route::get('manage_status','manage_status')->name('Tmanage.Status');

});

Route::prefix('academics')->controller(T_Academics::class)->group(function () {
    Route::get('class-timetable','index')->name('Teacher.class-timetable');
    Route::get('teachers-timetable','teachers_timetable')->name('Teacher.teachers-timetable');
    Route::get('assign-class-teacher','assign_class_teacher')->name('Teacher.assign-class-teacher');
    Route::get('promote-students','promote_students')->name('Teacher.promote-students');
    Route::get('subject-group','subject_group')->name('Teacher.subject-group');
    Route::get('subjects','subjects')->name('Teacher.subjects');
    Route::post('subjects_data','subjects_data')->name('TAdd.Subject.Data');
    Route::get('subjects_delete/{id}','subjects_delete')->name('TSubject.Delete');
    Route::post('subjects_update/{id}','subjects_update')->name('TUpdate.Subject');
    Route::post('subjects_group_data','subjects_group_data')->name('TSubject.Group.Data');
    Route::get('subjects_group_delete/{id}','subjects_group_delete')->name('TSubject.Group.Delete');
    Route::post('subjects_group_update/{id}','subjects_group_update')->name('TUpdate.Subject.Group');
    Route::post('promote_student_data/{id}','promote_student_data')->name('TPromote.Students.Data');


    

});

Route::prefix('human-resource')->controller(T_HumanResource::class)->group(function () {
    Route::get('apply-leave','apply_leave')->name('Teacher.apply-leave'); 
    Route::post('leave-request','leave_request')->name('tLeave.Request.data');

});

Route::prefix('communicate')->controller(T_Communicate::class)->group(function () {
    Route::get('notice-board','index')->name('Teacher.notice-board');

});

Route::prefix('download-center')->controller(T_DownloadCenter::class)->group(function () {
    Route::get('upload-content','index')->name('Teacher.upload-content');
    Route::post('upload-content-data','upload_content_data')->name('TUpload.Content.Data');
    Route::get('content-delete/{id}','content_delete')->name('TContent.Delete');
    Route::post('content_update/{id}','content_update')->name('TUpdate.Content');
    Route::get('assignments','assignments')->name('Teacher.assignments');
    Route::get('study-material','study_material')->name('Teacher.study-material');
    Route::get('syllabus','syllabus')->name('Teacher.syllabus');
    Route::get('other-downloads','other_downloads')->name('Teacher.other-downloads');
    Route::post('add_syllabus_data','add_syllabus_data')->name('TAdd.Syllabus.Data');
    Route::get('syllabus_delete/{id}','syllabus_delete')->name('TSyllabus.Delete');
    Route::post('syllabus_update/{id}','syllabus_update')->name('TUpdate.Syllabus.Data');

});

Route::prefix('pages')->controller(T_Pages::class)->group(function () {
    Route::get('users-profile','index')->name('Teacher.users-profile');
    Route::post('profile-update','profile_update')->name('Teacher.Profile.Update');
    Route::post('change-password','change_password')->name('teacher.change.pass');

});

Route::prefix('reports')->controller(T_Reports::class)->group(function () {
    Route::get('student-information','index')->name('Teacher.student-information');
    Route::get('finance','finance')->name('Teacher.finance');
    Route::get('attendance','attendance')->name('Teacher.attendance');
    Route::get('examinations','examinations')->name('Teacher.examinations');
    Route::get('online-examination','online_examination')->name('Teacher.online-examination');
    Route::get('lesson-plan','lesson_plan')->name('Teacher.lesson-plan');
    Route::get('human-resource','human_resource')->name('Teacher.human-resource');
    Route::get('transport','transport')->name('Teacher.transport');
    Route::get('alumni','alumni')->name('Teacher.alumni');
    Route::get('user-log','user_log')->name('Teacher.user-log');
});

Route::prefix('homework')->controller(T_HomeWork::class)->group(function () {
    Route::get('index','index')->name('Teacher.homework');
    Route::post('homework_data','homework_data')->name('Teacher.Add.HomeWork');
    Route::get('homework_delete/{id}','homework_delete')->name('Teacher.HomeWork.Delete');
    Route::post('homework_update/{id}','homework_update')->name('Teacher.Update.HomeWork');
});


Route::prefix('attendance')->controller(T_Attendance::class)->group(function () {
    Route::get('student-attendance','index')->name('Teacher.student-attendance');
    Route::get('approve-leave','approve_leave')->name('Teacher.approve-leave');
    Route::post('approve_leave_data','approve_leave_data')->name('TAdd.Student.Leave');
    Route::get('student_appr_change_status/{id}','student_appr_change_status')->name('TStudent.Approve.Change.Status');
    Route::get('student-attendance-list','student_attendance')->name('TEACHER.Student.Att');
    Route::post('stu_data','stu_data')->name('stu.Add.Data');

});

});

// ---------------------STUDENT-------------------------------------------------//
    Route::prefix('student/login')->group(function () {
        Route::view('/','student.pages.index')->name('Student.Login');
    });
    Route::post('login',[Student_Login::class,'login_data'])->name('Student.Login.Data');



Route::prefix('student')->middleware('students')->group(function () {
        Route::prefix('dashboard')->group(function () {
        Route::controller(Student_Dashboard::class)->group(function (){
        Route::get('/','dashboard')->name('Student.Home');
        Route::get('fees','stu_fees')->name('Student.Fees');
        Route::get('lesson_plan','lesson_plan')->name('student.lesson_plan');
        Route::get('home_work','home_work')->name('student.home-work');
        Route::get('apply_leave','apply_leave')->name('student.apply-leave');
        Route::post('add_leave','add_leave')->name('student.add_leave');
        Route::get('notice','notice')->name('student.notice');
        Route::get('student_syllabus','student_syllabus')->name('student.syllabus');
        Route::get('student_exam-schedule1','exam_schedule1')->name('student.exam-schedule');
        Route::get('exam-result','exam_result')->name('student.exam-result');
        Route::get('study-material','study_material')->name('student.study-material');
        Route::get('class-timetable','Stu_class_time')->name('Student.class-timetable');
        Route::get('student-attendance','student_attendance')->name('student.attendance');

        Route::get('stu_report_card/{id}','stu_report_card')->name('student_panel.report_card');

      });

        Route::get('signout',[Student_Login::class,'signout'])->name('Student.SignOut.Data');
    });



});


  Route::controller(Student_Dashboard::class)->group(function (){
    Route::get('froget-password','student_froget_password')->name('student.Froget.pass');
    Route::post('verifys','verify')->name('student.Check.Verify');
    Route::post('otp','check_otp')->name('student.Check.otp');
    Route::post('new_pass','new_pass')->name('student.New.pass');
    
  });



//   --------------------SITE-------------------------------------------//

Route::controller(Web::class)->group(function () {
    Route::get('/','index')->name('Site.Home');
    Route::get('gallery','gallery')->name('Site.gallery');
    Route::get('about','about')->name('Site.About');
    Route::get('teachers','teachers')->name('Site.teacher');
    Route::get('contact','contact')->name('Site.Contact');
    Route::post('contact_request','contact_request')->name('Site.Contect.Request');
    Route::get('career','career')->name('Site.Blog');
    Route::post('career_request','career_request')->name('Site.Career.Request');
    Route::get('career/apply/{id}','career_apply')->name('Career.apply');
    Route::post('career_opening_req','career_opening_req')->name('Site.Openings.Request');
    
    // Route::view('teacher-details','site.teacher-details')->name('Site.teacher-details');
    // Route::view('classes','site.classes')->name('Site.classes');
    // Route::view('class-single','site.class-single')->name('Site.class-single');
    // Route::view('event','site.event')->name('Site.event');
    // Route::view('event-details','site.event-details')->name('Site.event-details');
    // Route::view('single','site.single')->name('Site.Single');
    
});

Route::view('login','site.login.index')->name('Site.Login');

