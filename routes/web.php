<?php
# Backend Controllers
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\AgentsController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\WebsiteFrontController;
use App\Http\Controllers\FrontendAgentController;
use App\Http\Controllers\FrontendProfileController;
use App\Http\Controllers\Backend\BackendFaqController;
use App\Http\Controllers\Backend\BackendTagController;
use App\Http\Controllers\Backend\BackendBlogController;
use App\Http\Controllers\Backend\BackendFileController;
use App\Http\Controllers\Backend\BackendMenuController;
use App\Http\Controllers\Backend\BackendPageController;
use App\Http\Controllers\Backend\BackendRoleController;
use App\Http\Controllers\Backend\BackendTestController;
use App\Http\Controllers\Backend\BackendUserController;
use App\Http\Controllers\Backend\BackendAdminController;
use App\Http\Controllers\Backend\BackendOfferController;
use App\Http\Controllers\Backend\BackendAgentsController;
use App\Http\Controllers\Backend\BackendHelperController;
use App\Http\Controllers\Backend\BackendPluginController;
use App\Http\Controllers\Backend\BackendXmlLogController;
use App\Http\Controllers\Backend\BackendArticleController;
use App\Http\Controllers\Backend\BackendContactController;
use App\Http\Controllers\Backend\BackendProfileController;
use App\Http\Controllers\Backend\BackendSettingController;
use App\Http\Controllers\Backend\BackendSiteMapController;


# Frontend Controllers
use App\Http\Controllers\Backend\BackendCategoryController;
use App\Http\Controllers\Backend\BackendMenuLinkController;
use App\Http\Controllers\Backend\BackendTrafficsController;
use App\Http\Controllers\Backend\BackendUserRoleController;
use App\Http\Controllers\Backend\BackendPermissionController;
use App\Http\Controllers\Backend\BackendAgentMarkupController;
use App\Http\Controllers\Backend\BackendRedirectionController;
use App\Http\Controllers\Backend\BackendSalesReportController;
use App\Http\Controllers\Backend\BackendTransactionController;
use App\Http\Controllers\Backend\BackendAnnouncementController;
use App\Http\Controllers\Backend\BackendContactReplyController;
use App\Http\Controllers\Backend\BackendDepositeMoneyController;
use App\Http\Controllers\Backend\BackendNotificationController;
use App\Http\Controllers\Backend\BackendArticleCommentController;
use App\Http\Controllers\Backend\BackendBookingReportsController;
use App\Http\Controllers\Backend\BackendManualBookingsController;
use App\Http\Controllers\Backend\BackendSupportTicketsController;
use App\Http\Controllers\Backend\BackendTopDestinationController;
use App\Http\Controllers\Backend\BackendUserPermissionController;
use App\Http\Controllers\Backend\BackendBookingStatisticsController;

Auth::routes();


Route::prefix('/')->name('website.')->group(function () {
    Route::get('/', [WebsiteFrontController::class,'home'])->name('home');
    Route::get('about', [WebsiteFrontController::class,'about'])->name('about');
    Route::get('contact-us', [WebsiteFrontController::class,'contact'])->name('contact-us');
});

Route::post('agent/login', [\App\Http\Controllers\Agent\Auth\LoginController::class, 'postLogin'])->name('agent.login');
Route::post('agent/logout', [\App\Http\Controllers\Agent\Auth\LogoutController::class, 'logout'])->name('agent.logout');
Route::post('agent/register', [\App\Http\Controllers\Agent\Auth\RegisterController::class, 'register'])->name('agent.register');
Route::get('agent/register', [\App\Http\Controllers\Agent\Auth\LoginController::class, 'getRegister'])->name('agent.getRegister');

Route::prefix('employee')->middleware(['auth:employee','employee'])->name('employee.')->group(function () {

    Route::get('/', [FrontendAgentController::class,'employee'])->name('home');
    Route::get('profile', [FrontendAgentController::class,'profile'])->name('profile');

});


Route::prefix('agent')->middleware(['auth:agent','agent','ActiveAccount','verified'])->name('agent.')->group(function () {
    Route::get('/', [FrontendAgentController::class,'agent'])->name('home');
    Route::get('booking-list', [FrontendAgentController::class,'booking_list'])->name('booking-list');
    Route::get('profile', [FrontendAgentController::class,'profile'])->name('profile');
    Route::put('profile-update/{agent}', [FrontendAgentController::class,'profile_update'])->name('profile.update');
    Route::put('change-password/{agent}', [FrontendAgentController::class,'change_password'])->name('profile.password');
    Route::get('hotels', [FrontendAgentController::class,'hotels'])->name('hotels');
    Route::get('hotel-details', [FrontendAgentController::class,'hotel_details'])->name('hotel-details');
    Route::get('booking-info', [FrontendAgentController::class,'booking_info'])->name('booking-info');
    Route::post('register-employee', [FrontendAgentController::class,'register_employee'])->name('register-employee');
    Route::post('support-ticket', [FrontendAgentController::class,'support_ticket'])->name('support-ticket');

});

// Route::get('/', [FrontController::class,'index'])->name('home');
Route::get('/index2', function(){return view('front.index2');})->name('index2');

Route::prefix('dashboard')->middleware(['auth','ActiveAccount','verified'])->name('user.')->group(function () {
    Route::get('/', [FrontendProfileController::class,'dashboard'])->name('dashboard');
    Route::get('/support', [FrontendProfileController::class,'support'])->name('support');
    Route::get('/support/create-ticket', [FrontendProfileController::class,'create_ticket'])->name('create-ticket');
    Route::post('/support/create-ticket', [FrontendProfileController::class,'store_ticket'])->name('store-ticket');
    Route::get('/support/{ticket}', [FrontendProfileController::class,'ticket'])->name('ticket');
    Route::post('/support/{ticket}/reply', [FrontendProfileController::class,'reply_ticket'])->name('reply-ticket');
    Route::get('/notifications', [FrontendProfileController::class,'notifications'])->name('notifications');
    Route::prefix('profile')->name('profile.')->group(function () {
        Route::get('/settings',[FrontendProfileController::class,'profile_edit'])->name('edit');
        Route::put('/update',[FrontendProfileController::class,'profile_update'])->name('update');
        Route::put('/update-password',[FrontendProfileController::class,'profile_update_password'])->name('update-password');
        Route::put('/update-email',[FrontendProfileController::class,'profile_update_email'])->name('update-email');
    });
});



#Route::get('/test',[BackendTestController::class,'test']);

Route::prefix('admin')->middleware(['auth','ActiveAccount'])->name('admin.')->group(function () {

    Route::get('/',[BackendAdminController::class,'index'])->name('index');
    Route::middleware('auth')->group(function () {
        Route::resource('announcements',BackendAnnouncementController::class);
        Route::resource('files',BackendFileController::class);
        Route::post('contacts/resolve',[BackendContactController::class,'resolve'])->name('contacts.resolve');
        Route::resource('contacts',BackendContactController::class);
        Route::resource('menus',BackendMenuController::class);
        Route::get('users/{user}/access',[BackendUserController::class,'access'])->name('users.access');
        Route::resource('users',BackendUserController::class);
        Route::resource('roles',BackendRoleController::class);
        Route::get('user-roles/{user}',[BackendUserRoleController::class,'index'])->name('users.roles.index');
        Route::put('user-roles/{user}',[BackendUserRoleController::class,'update'])->name('users.roles.update');
        Route::resource('articles',BackendArticleController::class);
        Route::post('article-comments/change_status',[BackendArticleCommentController::class,'change_status'])->name('article-comments.change_status');
        Route::resource('article-comments',BackendArticleCommentController::class);
        Route::resource('pages',BackendPageController::class);
        Route::resource('tags',BackendTagController::class);
        Route::resource('contact-replies',BackendContactReplyController::class);
        Route::post('faqs/order',[BackendFaqController::class,'order'])->name('faqs.order');
        Route::resource('faqs',BackendFaqController::class);
        Route::post('menu-links/get-type',[BackendMenuLinkController::class,'getType'])->name('menu-links.get-type');
        Route::post('menu-links/order',[BackendMenuLinkController::class,'order'])->name('menu-links.order');
        Route::resource('menu-links',BackendMenuLinkController::class);
        Route::resource('categories',BackendCategoryController::class);
        Route::resource('redirections',BackendRedirectionController::class);
        Route::resource('agents',BackendAgentsController::class);
        Route::resource('booking-reports',BackendBookingReportsController::class);
        Route::resource('manual-bookings',BackendManualBookingsController::class);
        Route::resource('booking-statistics',BackendBookingStatisticsController::class);
        Route::resource('transactions',BackendTransactionController::class);
        Route::resource('deposite-money',BackendDepositeMoneyController::class);
        Route::resource('agents-markup',BackendAgentMarkupController::class);
        Route::resource('support-tickets',BackendSupportTicketsController::class);
        Route::resource('top-destination',BackendTopDestinationController::class);
        Route::resource('blogs',BackendBlogController::class);
        Route::resource('xml-logs',BackendXmlLogController::class);
        Route::resource('offers',BackendOfferController::class);
        Route::resource('notifications',BackendNotificationController::class);
        Route::resource('sales-report',BackendSalesReportController::class);
        Route::get('traffics',[BackendTrafficsController::class,'index'])->name('traffics.index');
        Route::get('traffics/logs',[BackendTrafficsController::class,'logs'])->name('traffics.logs');
        Route::get('error-reports',[BackendTrafficsController::class,'error_reports'])->name('traffics.error-reports');
        Route::get('error-reports/{report}',[BackendTrafficsController::class,'error_report'])->name('traffics.error-report');

        Route::prefix('settings')->name('settings.')->group(function () {
            Route::get('/',[BackendSettingController::class,'index'])->name('index');
            Route::put('/update',[BackendSettingController::class,'update'])->name('update');
        });
    });

    Route::prefix('upload')->name('upload.')->group(function(){
        Route::post('/image',[BackendHelperController::class,'upload_image'])->name('image');
        Route::post('/file',[BackendHelperController::class,'upload_file'])->name('file');
        Route::post('/remove-file',[BackendHelperController::class,'remove_files'])->name('remove-file');
    });

    Route::prefix('plugins')->name('plugins.')->group(function(){
        Route::get('/',[BackendPluginController::class,'index'])->name('index');
        Route::get('/create',[BackendPluginController::class,'create'])->name('create');
        Route::post('/create',[BackendPluginController::class,'store'])->name('store');
        Route::post('/{plugin}/activate',[BackendPluginController::class,'activate'])->name('activate');
        Route::post('/{plugin}/deactivate',[BackendPluginController::class,'deactivate'])->name('deactivate');
        Route::post('/{plugin}/delete',[BackendPluginController::class,'delete'])->name('delete');
    });

    Route::prefix('profile')->name('profile.')->group(function () {
        Route::get('/',[BackendProfileController::class,'index'])->name('index');
        Route::get('/edit',[BackendProfileController::class,'edit'])->name('edit');
        Route::put('/update',[BackendProfileController::class,'update'])->name('update');
        Route::put('/update-password',[BackendProfileController::class,'update_password'])->name('update-password');
        Route::put('/update-email',[BackendProfileController::class,'update_email'])->name('update-email');
    });

});

Route::get('/login/google/redirect', [LoginController::class,'redirect_google']);
Route::get('/login/google/callback', [LoginController::class,'callback_google']);
Route::get('/login/facebook/redirect', [LoginController::class,'redirect_facebook']);
Route::get('/login/facebook/callback', [LoginController::class,'callback_facebook']);


Route::get('blocked',[BackendHelperController::class,'blocked_user'])->name('blocked');
Route::get('robots.txt',[BackendHelperController::class,'robots']);
Route::get('manifest.json',[BackendHelperController::class,'manifest'])->name('manifest');
Route::get('sitemap.xml',[BackendSiteMapController::class,'sitemap']);
Route::get('sitemaps/links',[BackendSiteMapController::class,'custom_links']);
Route::get('sitemaps/{name}/{page}/sitemap.xml',[BackendSiteMapController::class,'viewer']);


Route::view('contact','front.pages.contact')->name('contact');
Route::get('page/{page}',[FrontController::class,'page'])->name('page.show');
Route::get('tag/{tag}',[FrontController::class,'tag'])->name('tag.show');
Route::get('category/{category}',[FrontController::class,'category'])->name('category.show');
Route::get('article/{article}',[FrontController::class,'article'])->name('article.show');
Route::get('blog',[FrontController::class,'blog'])->name('blog');
Route::post('contact',[FrontController::class,'contact_post'])->name('contact-post');
Route::post('comment',[FrontController::class,'comment_post'])->name('comment-post');

Route::get('get-booking-details/{id}', [AgentsController::class,'getBookingDetails'])->name('agents.getBookingDetails');
Route::get('get-messages/{id}', [AgentsController::class,'getMessages'])->name('agents.getMessages');
Route::get('agents/{id}', [AgentsController::class,'getAgent'])->name('agents.getCompanyEmail');
Route::get('monthelyReport/{id}', [AgentsController::class,'getMonthlyReport'])->name('agents.getMonthlyReport');
Route::post('adminReply/{id}', [FrontendAgentController::class,'supportTicketReply'])->name('admin.supportTicketReply');
Route::post('agentReply/{id}', [FrontendAgentController::class,'supportTicketAgentReply'])->name('agent.supportTicketReply');
Route::get('bookingsFilter', [AgentsController::class,'bookingsFilter'])->name('agent.bookingsFilter');
Route::get('pay-booking-balance/{id}', [AgentsController::class,'pay_booking_balance'])->name('pay-booking-balance');
Route::get('confirm-cancel-booking/{id}', [AgentsController::class,'confirm_cancel_booking'])->name('confirm-cancel-booking');
Route::get('check-booking-support/{id}', [AgentsController::class,'check_booking_support'])->name('check-booking-support');
Route::get('salesReportFilter', [AgentsController::class,'salesReportFilter'])->name('agent.salesReportFilter');
Route::get('salesReportCompanyNameFilter', [AgentsController::class,'salesReportCompanyNameFilter'])->name('agent.salesReportCompanyNameFilter');
Route::get('salesReportCurrencyFilter', [AgentsController::class,'salesReportCurrencyFilter'])->name('agent.salesReportCurrencyFilter');
Route::get('salesReportBoxesFilter', [AgentsController::class,'salesReportBoxesFilter'])->name('agent.salesReportBoxesFilter');
Route::get('bookingStatisticsCompanyNameFilter', [AgentsController::class,'bookingStatisticsCompanyNameFilter'])->name('agent.bookingStatisticsCompanyNameFilter');
Route::get('bookingStatisticsStatusFilter', [AgentsController::class,'bookingStatisticsStatusFilter'])->name('agent.bookingStatisticsStatusFilter');
Route::get('bookingStatisticsBoxesFilter', [AgentsController::class,'bookingStatisticsBoxesFilter'])->name('agent.bookingStatisticsBoxesFilter');
Route::get('getCompanyCurrency/{companyName}', [AgentsController::class,'getCompanyCurrency'])->name('agent.getCompanyCurrency');
Route::get('markReadNotification/{id}', [AgentsController::class,'markReadNotification'])->name('agent.markReadNotification');
