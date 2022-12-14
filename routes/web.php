<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\Login;
use App\Http\Controllers\Backend\StoryController;
use App\Http\Controllers\Backend\AttendanceController;
use App\Http\Controllers\Backend\videoController;

use App\Http\Controllers\Frontend\BookManageController;

use App\Http\Controllers\Backend\CalenderController;

use App\Http\Controllers\Backend\UploadProgramController;
use App\Http\Controllers\Backend\Teacher\TeacherController;
use App\Http\Controllers\Frontend\StoryManageController;
use App\Http\Controllers\Backend\ProfileController;
use App\Http\Controllers\Frontend\StudentDashboardController;
use App\Http\Controllers\Backend\ClassRoutineController;
use App\Http\Controllers\Backend\ResultController;
use App\Http\Controllers\Frontend\NoticeManageController;
use App\Http\Controllers\Frontend\StudentResultManagementController;
use App\Http\Controllers\studentmsgController;



Route::get('/', [StoryManageController::class, 'ViewStory'])->name('story');

Route::get('/login', [Login::class, 'Login'])->name('login');
Route::post('/login', [Login::class, 'loginSubmitted'])->name('login');
Route::get('/registration', [RegisterController::class, 'register'])->name('registration');
Route::get('/user', [RegisterController::class, 'Users'])->name('user');
Route::get('/get.user', [RegisterController::class, 'GetRegisteredUser'])->name('get_user');
Route::get('/delete_user/{id}', [RegisterController::class, 'DeleteUser'])->name('delete_user');
Route::get('/delete_reg/{id}', [RegisterController::class, 'DeleteReg'])->name('delete_reg');
Route::get('/active_student', [RegisterController::class, 'ActiveStudent'])->name('active_student');
Route::get('/search_active_student', [RegisterController::class, 'SearchActiveStudent'])->name('search_active_student');
Route::get('/add_active_student', [RegisterController::class, 'AddActiveStudent'])->name('add_active_student');
Route::get('/valid_student', [RegisterController::class, 'FilterValidStudent'])->name('valid_student');
Route::get('/invalid', [RegisterController::class, 'Invalid'])->name('invalid');
//Story Controller

Route::get('/upload_story', [StoryController::class, 'Story'])->name('story_upload');
Route::post('/upload_story', [StoryController::class, 'UploadStory'])->name('story_upload');
Route::get('/story_crud', [StoryController::class, 'Story_Crud'])->name('Story_Crud');
Route::get('/delete_story/{id}', [StoryController::class, 'DeleteStory'])->name('delete_story');
Route::get('/edit_story/{id}', [StoryController::class, 'EditStory'])->name('edit_story');
Route::post('/edit_story', [StoryController::class, 'EditStorySubmitted'])->name('edit_story');
Route::get('/story/{id}', [StoryManageController::class, 'Story'])->name('story');
Route::get('/viewstory', [StoryManageController::class, 'ViewStory'])->name('story');

Route::get('/upload_story', [StoryController::class, 'Story'])->name('story_upload');
Route::post('/upload_story', [StoryController::class, 'UploadStory'])->name('story_upload');
Route::get('/story_crud', [StoryController::class, 'Story_Crud'])->name('Story_Crud');
Route::get('/delete_story/{id}', [StoryController::class, 'DeleteStory'])->name('delete_story');
Route::get('/edit_story/{id}', [StoryController::class, 'EditStory'])->name('edit_story');
Route::post('/edit_story', [StoryController::class, 'EditStorySubmitted'])->name('edit_story');
Route::get('/story/{id}', [StoryManageController::class, 'Story'])->name('story');





Route::get('video-upload', [videoController::class, 'getVideoUploadForm'])->name('get.video.upload');
Route::post('video-upload', [videoController::class, 'UploadVideo'])->name('store.video');


//home Controller

Route::get('/home', [StoryManageController::class, 'ViewStory'])->name('story');

//Route::get('/home',[BookManageController::class,'ViewBooks'])->name('book');



//pdf
Route::get('/downloadPDF/{id}', [StoryManageController::class, 'PDFDownload'])->name('pdf');
Route::get('/upload_pdf', [StoryController::class, 'Upload_Pdf'])->name('upload_pdf');
Route::post('/upload_pdf', [StoryController::class, 'Submit_PDF'])->name('submit_pdf');
Route::get('/view_pdf', [StoryController::class, 'ViewPDF'])->name('viewpdf');
Route::get('/download/{file}', [StoryController::class, 'DownloadBook'])->name('downloadBook');


Route::get('video_upload', [videoController::class, 'getVideoUploadForm'])->name('get.video.upload');
Route::post('video_upload', [videoController::class, 'UploadVideo'])->name('store.video');
Route::get('/video_crud', [VideoController::class, 'Video_Crud'])->name('Video_Crud');
Route::get('/delete_video/{id}', [VideoController::class, 'DeleteVideo'])->name('delete_video');


//home Controller


// Route::get('/dashboard', function () {
// 	return view('Frontend.studentdashboard');
// });

Route::get('/run', function () {
	return view('runvideo');
});



Route::get('/admin',[ProfileController::class,'admin'])->name('hell');

//////////////////ADMIN/////////////////
// Route::get('/admin', function () {
// 	return view('Backend/admin');
// });
//Route::get('/dashboard',[ProfileController::class,'dash'])->name('dashboard')->middleware('page');
Route::get('/admin',[ProfileController::class,'admin'])->name('admin');
Route::get('/e',[ProfileController::class,'regi'])->name('e');
Route::get('/logout',[Login::class,'logout'])->name('lout');








Route::get('calendar-event', [CalenderController::class, 'index']);
Route::post('calendar-crud-ajax', [CalenderController::class, 'calendarEvents']);
////////////profile///////////////////////
Route::get('/profile', [ProfileController::class, 'profile'])->name('pro')->middleware('page');
Route::get('/profileget', [ProfileController::class, 'imageup'])->name('imgup');
Route::get('/profileup', [ProfileController::class, 'profileup'])->name('proup')->middleware('page');
Route::post('/profileup', [ProfileController::class, 'editdone'])->name('add');
Route::get('/change', [ProfileController::class, 'change'])->name('changepass')->middleware('page');









Route::get('/notice', [NoticeManageController::class, 'ViewNotice'])->name('notice');
Route::get('/notice_crud', [CalenderController::class, 'Notice_Crud'])->name('Notice_Crud');
Route::get('/edit_notice/{id}', [CalenderController::class, 'EditNotice'])->name('edit_notice');
Route::post('/edit_notice', [CalenderController::class, 'EditNoticeSubmitted'])->name('edit_notice');
Route::get('/delete_notice/{id}', [CalenderController::class, 'DeleteNotice'])->name('delete_notice');
Route::get('/notice_details/{id}', [NoticeManageController::class, 'NoticeDetails'])->name('notice_details');

//Student Dashboard Controller
Route::get('/upload_class_routine',[ClassRoutineController::class,'GetSubject'])->name('getsubject');
Route::post('/upload_class_routine',[ClassRoutineController::class,'AddRoutine'])->name('getsubject');
Route::get('/dashboard',[StudentDashboardController::class,'Dashboard'])->name('dashboard');
Route::get('/upload_program',[UploadProgramController::class,'GetSubject'])->name('subject');
Route::post('/upload_program',[UploadProgramController::class,'AddProgram'])->name('subject');
//StudentResult controller

Route::get('/getresult', [ResultController::class, 'GetResult'])->name('getresult');
Route::get('/marksdisttibution', [ResultController::class, 'MarksDistribution'])->name('marksdisttibution');
Route::post('/marksdisttibution', [ResultController::class, 'MarksDistributionSubmitted'])->name('marksdisttibution');
Route::get('/getmarks', [StudentResultManagementController::class, 'GetMarks'])->name('getmarks');
Route::get('/sub_marks', [StudentResultManagementController::class, 'SubjectMarks'])->name('sub_marks');
Route::get('/marks_distribution', [StudentResultManagementController::class, 'SubjectMarksDistribution'])->name('marks_distribution');

//Courses Controller

Route::get('/calander',[CalenderController::class,'userCalender'])->name('userCalander');
Route::get('/upload_class_routine',[ClassRoutineController::class,'GetSubject'])->name('getsubject');

Route::get('/upload_class_routine', [ClassRoutineController::class, 'GetSubject'])->name('getsubject');




Route::get('/calendar-event', [CalenderController::class, 'index'])->name('calendar-event');
Route::post('/calendar-crud-ajax', [CalenderController::class, 'calendarEvents']);

Route::get('/calender/class-routine', [CalenderController::class, 'userCalender'])->name('userCalender');
//pagination
Route::get('/pagination/paginate-data', [RegisterController::class, 'Pagination']);

//student

Route::get('/student/{id}',[RegisterController::class, 'user']);
Route::post('/studentinfo',[RegisterController::class, 'userinfo'])->name('studentinfo');

// Route::get('/teacher/{id}',[RegisterController::class, 'user']);
Route::post('/teacherinfo',[RegisterController::class, 'userinfo'])->name('teacherinfo');

// Route::get('/adminreg/{id}',[RegisterController::class, 'user']);
Route::post('/admininfo',[RegisterController::class, 'userinfo'])->name('admininfo');

Route::get('/edituser/{id}',[RegisterController::class, 'edituser'])->name('edituser');
Route::post('/editstudent',[RegisterController::class, 'editStudentSubmit'])->name('editstudent');
Route::post('/editteacher',[RegisterController::class, 'editTeacherSubmit'])->name('editteacher');

Route::post('/editadmin',[RegisterController::class, 'editAdminSubmit'])->name('editadmin');

//Teacher

Route::get('/teacherd',[TeacherController::class,'teacher'])->name('teacher'); 

Route::get('/attendance',[AttendanceController::class,'attendance'])->name('attendance');
Route::get('/filter',[AttendanceController::class,'filter'])->name('filter'); 
Route::get('/takeatten',[AttendanceController::class,'takeatten'])->name('takeatten'); 

Route::get('/atten_submit',[AttendanceController::class,'AttenSubmit'])->name('atten_submit'); 
Route::get('/atten_record',[AttendanceController::class,'AttenRecord'])->name('atten_record'); 

Route::get('/tprofile',[TeacherController::class,'tprofile'])->name('tprofile');
Route::get('/profileUpdate',[TeacherController::class,'profileUpdate'])->name('profileUpdate'); 
Route::post('/profileUpdate',[TeacherController::class,'profileUpdateSubmitted'])->name('profileUpdateSubmitted'); 
Route::get('/changePicture',[TeacherController::class,'changePicture'])->name('changePicture'); 
Route::post('/changePicture',[TeacherController::class,'changePictureSubmit'])->name('changePictureSubmit'); 

Route::get('/uploadmarks',[TeacherController::class,'uploadmarks'])->name('uploadmarks'); 
Route::get('/filterStudent',[TeacherController::class,'filterStudent'])->name('filterStudent'); 



Route::get('/teacher', function () {
	return view('Backend/Teacher/teacherDashboard');
});

//Route::get('/attendance',[ResultController::class,'Attendance'])->name('attendance'); 

// Route::get('/attendance',[ResultController::class,'Attendance'])->name('attendance'); 

Route::get('/mark',[ResultController::class,'marks'])->name('marks'); 
 Route::get('/get.mark', [ResultController::class, 'marksSubmitted'])->name('get_marks');
 // Route::post('/get.mark', [ResultController::class, 'marksSubmitted'])->name('get_marks');
Route::get('/add_subject', [TeacherController::class, 'AddSubject'])->name('add_subject');
Route::get('/add_exam', [TeacherController::class, 'AddExam'])->name('add_exam');
Route::get('/add_title', [TeacherController::class, 'AddTitle'])->name('add_title');
Route::get('/filter_student_mark', [TeacherController::class, 'FilterStudentMark'])->name('filter_student_mark');
Route::get('/add_student_marks', [TeacherController::class, 'AddStudentMark'])->name('add_student_marks');
//







////////

Route::get('studentmsg',[studentmsgController::class, 'message'])->name('studentmsg');
Route::post('studentmsg1',[studentmsgController::class, 'studentmsg'])->name('studentmsg1');


