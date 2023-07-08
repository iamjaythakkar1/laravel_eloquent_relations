<?php

use App\Models\Address;
use App\Models\Comment;
use App\Models\Post;
use App\Models\Project;
use App\Models\Student;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Resources\UserResource;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\ImageController;
use App\Models\Company;
use App\Models\Employee;

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

Route::get('/one2one', function () {
    $users = User::all();

    return view('one', ['users' => $users]);
});

Route::get('/one2one/inverse', function () {
    $adds = Address::all();

    return view('oneinverse', ['adds' => $adds]);
});

Route::get('/one2many', function () {
    $users = User::all();

    return view('onemany', ['users' => $users]);
});

Route::get('/one2many/inverse', function () {
    $posts = Post::all();

    return view('manyinverse', ['posts' => $posts]);
});

Route::get('/many2many', function () {

    // $post_num = random_int(101, 200);
    // $cmt_num = random_int(1, 100);
    // $post = Post::with(['comments'])->find($post_num);
    // $post->comments()->attach([$cmt_num]);

    // dd('Many to Many Relation Done');
    $post = Post::with(['comments'])->get();
    return view('many', ['post' => $post]);
});


Route::get('/hasone', function () {
    $projects = Project::all();

    return view('hasone', ['projects' => $projects]);
});

Route::get('/hasmany', function () {
    $projects = Project::all();

    return view('hasmany', ['projects' => $projects]);
});

Route::get('/users/data', function () {
    return UserResource::collection(User::all());
});

Route::get('/task13', function () {

    $num = rand(01, 999);

    if ($num % 2 == 0) {
        $msg = "$num is Even.";
    } else {
        $msg = "$num is Odd.";
    }
    Log::channel('custom')->info($msg);

    return 'Success';
});

Route::resource('imagecrud', ImageController::class);

Route::get('/task19', function () {
    $data = Employee::with('company')->all();

    // dd($data->company->name);
    return view('task19', ['data' => $data]);
});
