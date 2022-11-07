<?php

use Illuminate\Support\Facades\Route;
use App\Models\Ticket;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\Agent;
use App\Models\Team;
use App\Models\Article;
use App\Http\Controllers\API\TicketController;

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
    return view('help-center', ['categories' => Category::all()]);
});

Route::get('/admin', function () {
    return view('admin');
});

// route for show front ticket form
Route::get('/front-ticket-form', function () {
    return view('front-ticket-form');
})->name('front-ticket-form');

Route::get('/tickets', function () {
    return view('home', ['tickets' => Ticket::all()]);
})->name('tickets');

Route::get('/tickets/create', function () {
    return view('tickets.create');
})->name('tickets.create');

Route::post('/tickets', function () {
    $data = request()->validate([
        'title' => 'required',
        'description' => 'required',
    ]);

    $ticket = new Ticket();
    $ticket->title = $data['title'];
    $ticket->description = $data['description'];
    $ticket->save();

    return redirect('/tickets');
})->name('tickets.store');

Route::get('/tickets/{ticket}', function (Ticket $ticket) {
    return view('tickets.show', ['ticket' => $ticket]);
})->name('tickets.show');

Route::get('/tickets/{ticket}/edit', function (Ticket $ticket) {
    return view('tickets.edit', ['ticket' => $ticket]);
})->name('tickets.edit');

Route::get('/ticket-detail', function () {
    return view('ticket-detail');
})->name('ticket-detail');

Route::get('/help-center', function () {
    return view('help-center', ['categories' => Category::all()]);
})->name('help-center');

Route::get('/admin', function () {
    return view('admin.index');
})->name('admin');

// open ticket detail page
Route::get('/admin/tickets/open', function () {
    return view('admin.tickets.open', ['tickets' => Ticket::all()]);
})->name('admin.tickets.open');

// Route [admin.tickets.show] not defined.
Route::get('/admin/tickets/{ticket}', function (Ticket $ticket) {
    return view('admin.tickets.show', ['ticket' => $ticket]);
})->name('admin.tickets.show');

// /admin/tickets
Route::get('/admin/tickets', function () {
    return view('admin.tickets.index', ['tickets' => Ticket::all()]);
})->name('admin.tickets.index');

// /admin/agents
Route::get('/admin/agents', function () {
    return view('admin.agents.index', ['agents' => Agent::all()]);
})->name('admin.agents.index');

// Route [admin.agents.edit] not defined.
Route::get('/admin/agents/{agent}/edit', function (Agent $agent) {
    return view('admin.agents.edit', ['agent' => $agent]);
})->name('admin.agents.edit');

// /admin/categories
Route::get('/admin/categories', function () {
    return view('admin.categories.index', ['categories' => Category::all(), 'subcategories' => Subcategory::all()]);
})->name('admin.categories.index');

// Route [admin.categories.create] not defined.
Route::get('/admin/categories/create', function () {
    return view('admin.categories.create');
})->name('admin.categories.create');

// Route [admin.categories.edit] not defined.
Route::get('/admin/categories/{category}/edit', function (Category $category) {
    return view('admin.categories.edit', ['category' => $category]);
})->name('admin.categories.edit');

// Route [admin.categories.destroy] not defined.
Route::delete('/admin/categories/{category}', function (Category $category) {
    $category->delete();
    return redirect('/admin/categories');
})->name('admin.categories.destroy');

// Route [admin.categories.update] not defined.
Route::put('/admin/categories/{category}', function (Category $category) {
    $data = request()->validate([
        'name' => 'required',
    ]);

    $category->name = $data['name'];
    $category->save();

    return redirect('/admin/categories');
})->name('admin.categories.update');

// /admin/teams
Route::get('/admin/teams', function () {
    return view('admin.teams.index', ['teams' => Team::all()]);
})->name('admin.teams.index');

// Route [admin.teams.edit] not defined.
Route::get('/admin/teams/{team}/edit', function (Team $team) {
    return view('admin.teams.edit', ['team' => $team]);
})->name('admin.teams.edit');

// Route [admin.teams.update] not defined.
Route::put('/admin/teams/{team}', function (Team $team) {
    $data = request()->validate([
        'name' => 'required',
    ]);

    $team->name = $data['name'];
    $team->save();

    return redirect('/admin/teams');
})->name('admin.teams.update');

// /admin/reports
Route::get('/admin/reports', function () {
    return view('admin.reports.index');
})->name('admin.reports.index');

// /category/{slug}
Route::get('/category/{slug}', function ($slug) {
    $category = Category::where('slug', $slug)->first();
    $subcategories = Subcategory::where('category_id', $category->id)->first();
    return view('category', ['category' => $category, 'subcategories' => $subcategories]);
})->name('category');

// /subcategory/{slug}
Route::get('/subcategory/{slug}', function ($slug) {
    $subcategory = Subcategory::where('slug', $slug)->first();
    $articles = Article::where('subcategory_id', $subcategory->id)->get();
    return view('subcategory', ['subcategory' => $subcategory, 'articles' => $articles]);
})->name('subcategory');

// /article/{slug}
Route::get('/article/{slug}', function ($slug) {
    $article = Article::where('slug', $slug)->first();
    return view('article', ['article' => $article]);
})->name('article');
