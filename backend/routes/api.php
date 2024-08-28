<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\User;

Route::get('/hello', function () {
    return response()->json(['message' => 'Hello from Laravel API!']);
});

// Example endpoint to get users (ensure you have User model and migration)
Route::get('/users', function () {
    $users = User::all(['id', 'name', 'email', 'role']); // Adjust fields as necessary
    return response()->json(['users' => $users]);
});


Route::options('{any}', function (Request $request) {
    return response()->json([], 200);
})->where('any', '.*');

?>