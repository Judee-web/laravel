<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\BankTransactionController;
use App\Http\Controllers\LoanController;
use App\Http\Controllers\BankController;
use App\Http\Controllers\WithdrawalController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\DpsController;
use App\Http\Controllers\PaymentDetailsController;
use App\Http\Controllers\DepositController;
use App\Http\Controllers\FdrController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\ImageUploadController;



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
    
Route::get('/signup', function () {
    return view('auth.signup');
});



// Route::get('/signin', function () {
//     return view('auth\signin');
// });


// Route::get('/banks', [BankController::class, 'index'])->name('banks');
// Route::post('/banks/save', [BankController::class, 'store'])->name('save_bank');
Route::group(['middleware' => 'auth'], function () {
    
    
    Route::get('/icons', function () {
        return view('dashboard\depositWithdrawal');
    });
    
    
    Route::get('/profile', function () {
        return view('profile');
    });

    Route::get('/loanResult', function () {
        return view('loanStatus');
    });
    
        
    Route::get('/index', function () {
        return view('welcome');
    });

    Route::get('/paypalWithdrawMethod', function () {
        return view('withdraw.paypal');
    });

    Route::get('/bankWithdrawMethod', function () {
        return view('withdraw.bank');
    });
    Route::get('/cryptoWithdrawMethod', function () {
        return view('withdraw.crypto');
    });
    Route::get('/skrillWithdrawMethod', function () {
        return view('withdraw.skrill');
    });
    Route::get('/emailSuccess', function () {
        return view('success.emailSent');
    });
    Route::get('/paymentSuccess', function () {
        return view('success.payment');
    });
    Route::get('/cryptoDeposit', function () {
        return view('deposit.crypto');
    });
    
    Route::get('/emailSupport', function () {
        return view('support.email');
    });
    
    
    Route::get('/monetary', function () {
        return view('more');
    });

    Route::get('/card', function () {
        return view('card');
    });

    Route::get('/transactions', function () {
        return view('Transactions');
    });

    Route::get('/livechat', function () {
        return view('liveChat');
    });



    Route::get('/loanApp', function () {
        return view('loanApplication');
    });

    Route::get('/peer-to-peer-deposits', function () {
        return view('deposit.bank');
    });


    Route::post('/sendemail', [EmailController::class, 'send'])->name('sendemail');


    Route::get('/FDR', [FdrController::class, 'index'])->name('fdr');

    Route::get('/DPS', [DpsController::class, 'index'])->name('dps');

    Route::get('/depositDetails', [DepositController::class, 'index'])->name('deposit');
 

    Route::get('/support', [MessageController::class, 'index'])->name('dps');

    Route::get('/paymentCredentials', [PaymentDetailsController::class, 'index'])->name('paymentCred');
    Route::post('/credentials/save', [PaymentDetailsController::class, 'store'])->name('save_paymentCred');

    Route::get('/peer-to-peer', [DepositController::class, 'index'])->name('deposit');
    Route::post('/peer-to-peer-deposits/save', [DepositController::class, 'store'])->name('save_deposit');

    Route::get('/loanStatus', [LoanController::class, 'index'])->name('loans');
    Route::post('/loans/save', [LoanController::class, 'store'])->name('save_loan');

    Route::get('/inbox', [LoanController::class, 'index'])->name('messages');
    Route::post('/messages/save', [LoanController::class, 'store'])->name('save_messages');
        
    Route::get('/banks', [BankTransactionController::class, 'index'])->name('banks');
    Route::post('/banks/save', [BankTransactionController::class, 'store'])->name('save_bank');
    Route::post('/bank-method', [WithdrawalController::class, 'BankWithdrawal'])->name('bank-method');

    Route::post('/contact-method', [EmailController::class, 'ContactSupport'])->name('contact-method');

    Route::get('/image-upload', [ ImageUploadController::class, 'imageUpload' ])->name('image.upload');

    // /For adding an image
    Route::get('/add-image',[ImageUploadController::class,'addImage'])->name('images.add');
    
    //For storing an image
    Route::post('/store-image',[ImageUploadController::class,'storeImage'])
    ->name('images.store');
    
    //For showing an image
    Route::get('/view-image',[ImageUploadController::class,'viewImage'])->name('images.view');
    
});

    


Route::get('dashboard', [CustomAuthController::class, 'dashboard']); 
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom'); 
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom'); 
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');

Route::get('forget-password', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get');
Route::post('forget-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post'); 
Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');