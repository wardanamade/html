<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Ticket;
use App\Models\Agent;
use App\Models\Article;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\Team;
use App\Models\Classification;
use App\Models\Level;
use App\Models\Priority;
use App\Models\Status;
use App\Models\User;

use App\Http\Resources\TicketCollection;
use App\Http\Resources\AgentCollection;

use App\Http\Resources\TicketResource;
use App\Http\Resources\AgentResource;
use App\Http\Resources\CategoryResource;
use App\Http\Resources\SubcategoryCollection;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('v1')->group(function () {
    Route::get('/tickets', function () {
        return new TicketCollection(Ticket::all());
    });

    Route::get('/ticket/{id}', function ($id) {
        return new TicketResource(Ticket::findOrFail($id));
    });

    Route::post('/tickets', function () {
        $data = request()->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        $ticket = new Ticket();
        // generate uuid
        $ticket->uuid = (string) Str::uuid();
        // generate ticket code, which is a combination of the ticket date (YYMMDD) and 3 digits of the ticket id
        $ticket->code = date('ymd') . str_pad($ticket->id, 3, '0', STR_PAD_LEFT);
        $ticket->title = $data['title'];
        $ticket->description = $data['description'];
        $ticket->save();

        return $ticket;
    });

    Route::get('/agents', function () {
        // return agent collection
        return new AgentCollection(Agent::all());
    });

    Route::get('/agent/{id}', function ($id) {
        return new AgentResource(Agent::findOrFail($id));
    });

    Route::post('/agents', function () {
        $data = request()->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'avatar' => 'required',
            'nickname' => 'required',
            'team_id' => 'required',
            'level_id' => 'required',
        ]);

        $agent = new Agent();
        $agent->name = $data['name'];
        $agent->email = $data['email'];
        $agent->phone = $data['phone'];
        $agent->avatar = $data['avatar'];
        $agent->nickname = $data['nickname'];
        $agent->team_id = $data['team_id'];
        $agent->level_id = $data['level_id'];
        $agent->save();

        return $agent;
    });

    Route::get('/articles', function () {
        return Article::all();
    });

    Route::get('/categories', function () {
        return new CategoryResource(Category::all());
    });

    // Get a category by id
    Route::get('/category/{id}', function ($id) {
        return new CategoryResource(Category::findOrFail($id));
    });

    // Create a category
    Route::post('/categories', function () {
        $data = request()->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        $category = new Category();
        $category->name = $data['name'];
        $category->slug = Str::slug($data['name']);
        $category->description = $data['description'];
        $category->save();

        return $category;
    });

    Route::get('/subcategories', function () {
        return new SubcategoryCollection(Subcategory::all());
    });

    // Get a subcategory by id
    Route::get('/subcategory/{id}', function ($id) {
        return new SubcategoryCollection(Subcategory::findOrFail($id));
    });

    // Create a subcategory
    Route::post('/subcategories', function () {
        $data = request()->validate([
            'name' => 'required',
            'description' => 'required',
            'slug' => 'required',
            'category_id' => 'required',
            'status' => 'required',
            'created_by' => 'required',
        ]);

        $subcategory = new Subcategory();
        $subcategory->name = $data['name'];
        $subcategory->description = $data['description'];
        $subcategory->slug = $data['slug'];
        $subcategory->category_id = $data['category_id'];
        $subcategory->status = $data['status'];
        $subcategory->created_by = $data['created_by'];
        $subcategory->save();

        return $subcategory;
    });

    Route::get('/teams', function () {
        return Team::all();
    });

    // Get a team by id
    Route::get('/team/{id}', function ($id) {
        return Team::findOrFail($id);
    });

    // Create a team
    Route::post('/teams', function () {
        $data = request()->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        $team = new Team();
        $team->name = $data['name'];
        $team->description = $data['description'];
        $team->save();

        return $team;
    });

    Route::get('/classifications', function () {
        return Classification::all();
    });

    Route::get('/levels', function () {
        return Level::all();
    });

    Route::get('/priorities', function () {
        return Priority::all();
    });

    Route::get('/statuses', function () {
        return Status::all();
    });

    Route::get('/users', function () {
        return User::all();
    });
});




