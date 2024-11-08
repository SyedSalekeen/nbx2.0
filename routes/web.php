<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebsiteController;




use App\Http\Controllers\AdvantageController;
use App\Http\Controllers\CMSController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FooterController;
use App\Http\Controllers\HomeRehabController;
use App\Http\Controllers\LandmarkSectionFirstController;
use App\Http\Controllers\LandmarkSectionSecondController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PropertiesListingController;
use App\Http\Controllers\PropertyManagementController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TestimonialController;
use App\Models\LandmarkSectionFirst;
use App\Models\PropertiesListing;
use App\Models\PropertyManagement;



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




Route::get('login', [LoginController::class, 'login'])->name('login');
Route::post('login_submit', [LoginController::class, 'login_submit'])->name('login_submit');
Route::group(['middleware' => ['auth']], function () {
    Route::get('dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::get('home-page', [DashboardController::class, 'home_page'])->name('home_page');
    Route::get('services', [DashboardController::class, 'services'])->name('services');



    // property managements
    Route::get('all-services', [PropertyManagementController::class, 'index'])->name('all-services');
    Route::get('all-services/add', [PropertyManagementController::class, 'create'])->name('all-services-add');
    Route::post('all-services-store', [PropertyManagementController::class, 'store'])->name('all-services-store');
    Route::get('all-services/edit/{id}', [PropertyManagementController::class, 'edit'])->name('all-services_edit');
    Route::put('all-services-update/{id}', [PropertyManagementController::class, 'update'])->name('all-services-update');
    Route::get('all-services/remove/{id}', [PropertyManagementController::class, 'remove'])->name('all-services_remove');


    // home rehabs
    Route::get('home-rehabs', [HomeRehabController::class, 'index'])->name('home-rehabs');
    Route::get('home-rehabs/add', [HomeRehabController::class, 'create'])->name('home-rehabs-add');
    Route::post('home-rehabs-store', [HomeRehabController::class, 'store'])->name('home-rehab-store');
    Route::get('home-rehabs/edit/{id}', [HomeRehabController::class, 'edit'])->name('home_rehab_edit');
    Route::put('home-rehab-update/{id}', [HomeRehabController::class, 'update'])->name('home-rehab-update');
    Route::get('home-rehabs/remove/{id}', [HomeRehabController::class, 'remove'])->name('home_rehab_store');


    // properties - listing
    Route::get('properties-listing', [PropertiesListingController::class, 'index'])->name('properties_listing');
    Route::get('properties-listing-add', [PropertiesListingController::class, 'create'])->name('properties-listing-add');
    Route::post('save_property_listing', [PropertiesListingController::class, 'store'])->name('save_property_listing');
    Route::get('property-listng/edit/{id}', [PropertiesListingController::class, 'edit'])->name('property_listng_edit');
    Route::put('update_property_listing/{id}',[PropertiesListingController::class, 'update'])->name('update_property_listing');
    Route::get('preview-listing-page/{id}',[PropertiesListingController::class, "preview"])->name('preview_listing_page');
    Route::get('property-listng/delete/{id}',[PropertiesListingController::class, 'delete']);
    // cms
    Route::get('cms',[CMSController::class, 'index'])->name('cms');
    Route::get('cms-add',[CMSController::class, "create"])->name('cms_add');
    Route::post('cms_store',[CMSController::class, 'store'])->name('cms_store');
    Route::get('cms-edit/{id}',[CMSController::class, 'edit'])->name('cms_edit');
    Route::put('cms-update/{id}',[CMSController::class, 'update'])->name('cms_update');
    // case studies
    Route::get('case-studies',[CMSController::class, 'case_studies'])->name('case_studies');
    Route::get('case-studies-create',[CMSController::class, 'case_studies_create'])->name('case_studies_create');
    Route::post('case_studies_store',[CMSController::class, 'case_studies_store'])->name('case_studies_store');
    Route::get('case-studies-edit/{id}',[CMSController::class, 'case_studies_edit'])->name('case-studies-edit');
    Route::put('case_studies_update/{id}',[CMSController::class, 'case_studies_update'])->name('case_studies_update');
    // about us
    Route::get('update-about-us',[CMSController::class, 'update_about_us'])->name('update_about_us');
    Route::post('about_us_save',[CMSController::class, 'about_us_save'])->name('about_us_save');
    // footer
    Route::get('footer',[FooterController::class, 'index'])->name('footer');
    Route::post('footer_update',[FooterController::class, 'update'])->name('footer_update');
    // contact us message

    Route::get('contact-us-message',[FooterController::class, 'contact_us_message'])->name('contact_us_message');
    Route::get('lead-details/{id}',[FooterController::class, 'lead_details'])->name('lead_details');
    // testemonials
    Route::get('testemonials',[TestimonialController::class, 'index'])->name('testemonials');
    Route::get('testemonials-add',[TestimonialController::class, 'create'])->name('testemonials_add');
    Route::post('testimonials_store',[TestimonialController::class, 'store'])->name('testimonials_store');
    Route::get('testimonials-edit/{id}',[TestimonialController::class, 'edit'])->name('testimonials_edit');
    Route::put('testimonials_update/{id}',[TestimonialController::class, 'update'])->name('testimonials_update');

    Route::get('home',[CMSController::class, 'home'])->name('home');
    // advantage
    Route::get('advantage',[AdvantageController::class, 'index'])->name('advantage');
    Route::get('advantage_add',[AdvantageController::class, 'craete'])->name('advantage_add');
    Route::post('advantage_store',[AdvantageController::class, 'store'])->name('advantage_store');
    Route::get('advantage-edit/{id}',[AdvantageController::class, 'edit'])->name('advantage_edit');
    Route::put('advantage_update/{id}',[AdvantageController::class, 'update'])->name('advantage_update');

    // service_section
    Route::get('service-section',[ServiceController::class, 'index'])->name('service_section');
    Route::get('service_section_create',[ServiceController::class, 'create'])->name('service_section_create');
    Route::post('service_section_store',[ServiceController::class, 'store'])->name('service_section_store');
    Route::get('service-section-edit/{id}',[ServiceController::class, 'edit'])->name('service-section-edit');
    Route::get('construction-page',[ServiceController::class, 'construction'])->name('construction_page');
    Route::post('service_section_construction_store',[ServiceController::class, 'service_section_construction_store'])->name('service_section_construction_store');
    Route::get('service_construction_edit/{id}',[ServiceController::class, 'servicce_construction_edit'])->name('servicce_construction_edit');
    Route::put('/service-section-construction-update/{id}', [ServiceController::class, 'service_section_construction_update'])->name('service_section_construction_update');
    Route::get('financing-page',[ServiceController::class, 'financing'])->name('financing_page');
    Route::post('service_section_financing_store',[ServiceController::class, 'service_section_financing_store'])->name('service_section_financing_store');
    Route::get('home-buying-page',[ServiceController::class, 'home_buying'])->name('home_buying_page');
    Route::post('service_section_home_buying_store',[ServiceController::class, 'service_section_home_buying_store'])->name('service_section_home_buying_store');


    // landmark_section_first
    Route::get('landmark-section-first',[LandmarkSectionFirstController::class, 'index'])->name('landmark_section_first');
    Route::get('landmark-section-first-craete',[LandmarkSectionFirstController::class, 'create'])->name('landmark_section_first_craete');
    Route::post('landmark_section_first_store',[LandmarkSectionFirstController::class, 'store'])->name('landmark_section_first_store');
    Route::put('landmark_section_first_update/{id}',[LandmarkSectionFirstController::class, 'update'])->name('landmark_section_first_update');
    Route::get('landmark_section-edit/{id}',[LandmarkSectionFirstController::class, 'edit']);


        // landmark_section_second
        Route::get('landmark-section-second',[LandmarkSectionSecondController::class, 'index'])->name('landmark_section_second');
        Route::get('landmark-section-second-craete',[LandmarkSectionSecondController::class, 'create'])->name('landmark_section_second_craete');
        Route::post('landmark_section_second_store',[LandmarkSectionSecondController::class, 'store'])->name('landmark_section_second_store');
        Route::put('landmark_section_second_update/{id}',[LandmarkSectionSecondController::class, 'update'])->name('landmark_section_second_update');
        Route::get('landmark_section-second-edit/{id}',[LandmarkSectionSecondController::class, 'edit']);
});


// website routes
Route::get('/', [WebsiteController::class, 'index'])->name('index');
Route::get('about_us', [WebsiteController::class, 'about_us'])->name('about_us');
Route::get('construction', [WebsiteController::class, 'construction'])->name('construction');
Route::get('financing', [WebsiteController::class, 'financing'])->name('financing');
Route::get('home_buying', [WebsiteController::class, 'home_buying'])->name('home_buying');
Route::get('home_rehab', [WebsiteController::class, 'home_rehab'])->name('home_rehab');
Route::get('wholesale', [WebsiteController::class, 'wholesale'])->name('wholesale');
Route::get('property_management', [WebsiteController::class, 'property_management'])->name('property_management');
Route::get('case_studies', [WebsiteController::class, 'case_studies'])->name('case_studies');
Route::get('case-studies-detail', [WebsiteController::class, 'case_studies_detail'])->name('case_studies_detail');
