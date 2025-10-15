<?php

use Inertia\Inertia;
use App\Models\About;
use App\Models\Report;
use App\Models\Contact;
use App\Models\Statute;
use App\Models\Agreement;
use App\Models\Direction;
use App\Models\Announcement;
use App\Models\BenefitTopic;
use App\Models\BlogCategory;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\FormIndexController;
use App\Http\Middleware\AuthClientMiddleware;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\Auth\AuthClientController;
use App\Http\Controllers\Client\BlogPageController;
use App\Http\Controllers\Client\HomePageController;
use App\Http\Controllers\Client\AboutPageController;
use App\Http\Controllers\Client\EventPageController;
use App\Http\Controllers\Client\RegionPageController;
use App\Http\Controllers\Client\BenefitPageController;
use App\Http\Controllers\Client\ContactPageController;
use App\Http\Controllers\Client\ProjectPageController;
use App\Http\Controllers\Client\JuridicoPageController;
use App\Http\Controllers\Client\NoticiesPageController;
use App\Http\Controllers\Auth\PasswordEmailClientController;
use App\Http\Controllers\Auth\ResetPasswordClientController;

require __DIR__ . '/dashboard.php';

Route::get('/', function () {
    return redirect()->route('index');
});

Route::post('login.do', [AuthClientController::class, 'authenticate'])
->name('client.user.authenticate');

// Rota para processar o formulário "Esqueci a senha"
Route::post('/password/email', [PasswordEmailClientController::class, 'passwordEmail'])
->name('client.password.email');

Route::get('/email-enviado-com-sucesso', [PasswordEmailClientController::class, 'showSuccess'])
->name('send-success-client');

// Rota para processar a redefinição de senha
Route::post('/password/reset', [ResetPasswordClientController::class, 'processPasswordReset'])
->name('client-password.update');

// Rota para exibir o formulário de redefinição de senha
Route::get('password/reset/{token}', [ResetPasswordClientController::class, 'showResetForm'])
->name('client.password.reset');


Route::get('/senha-alterada-com-sucesso', function () {
    return view('emails.password-success-client-reset');
})->name('client-success-reset-password');

Route::get('contato', [ContactPageController::class, 'index'])
->name('contact');
Route::post('send-contact', [FormIndexController::class, 'store'])->name('send-contact');
Route::get('projeto/{slug}', [ProjectPageController::class, 'project'])
->name('project');
Route::post('send-newsletter', [NewsletterController::class, 'store'])->name('send-newsletter');

Route::post('cliente/cadastro', [ClientController::class, 'store'])->name('register-client');
Route::get('home', [HomePageController::class, 'index'])->name('index');
Route::get('sobre', [AboutPageController::class, 'index'])->name('about');
Route::get('portfolio', [ProjectPageController::class, 'portfolio'])->name('portfolio');

Route::get('home/blog/filter/{category?}', [HomePageController::class, 'filterByCategory'])
    ->name('blog.filter');


View::composer('client.core.client', function ($view) {
    $contact = Contact::first();
    $abouts = About::active()->sorting()->get();

    return $view->with('contact', $contact)
    ->with('abouts', $abouts);
});
