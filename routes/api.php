<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\v1\AuthController;

use App\Http\Controllers\v1\EditorialController;
use App\Http\Controllers\v1\SitepageController;
use App\Http\Controllers\v1\UserController;
use App\Http\Controllers\v1\RoleController;
use App\Http\Controllers\v1\PermissionController;
use App\Http\Controllers\v1\TeamController;
use App\Http\Controllers\v1\PortifolioController;
use App\Http\Controllers\v1\GalleryController;
use App\Http\Controllers\v1\PostController;
use App\Http\Controllers\v1\PermissionRoleController;
use App\Http\Controllers\v1\RoleUserController;
use App\Http\Controllers\v1\ItemsgalleryController;



Route::get('/', function () {
    return view('welcome');
});

Route::prefix('v1')->group(function () {

    Route::middleware(['api'])->prefix('auth')->group(function () {
        Route::post('/login', [AuthController::class, 'login']);
        Route::post('/logout', [AuthController::class, 'logout']);
        Route::post('/refresh', [AuthController::class, 'refresh']);
        Route::get('/me', [AuthController::class, 'me']);
        Route::post('/validateToken', [AuthController::class, 'validateToken']);
    });

    Route::middleware(['api'])->group(function () {



		Route::prefix('editorials')->group(function () {
			Route::get('/', [EditorialController::class, 'index']);
			Route::get('/cb', [EditorialController::class, 'comboBox']);
			Route::get('/{id}', [EditorialController::class, 'show']);
			Route::get('/{id}/details', [EditorialController::class, 'details']);
			Route::post('/', [EditorialController::class, 'store']);
			Route::put('/{id}', [EditorialController::class, 'update']);
			Route::delete('/{id}', [EditorialController::class, 'delete']);
			Route::get('/trash', [EditorialController::class, 'trash']);
			Route::post('/trash/{id}', [EditorialController::class, 'restore']);
		});

		Route::prefix('sitepages')->group(function () {
			Route::get('/', [SitepageController::class, 'index']);
			Route::get('/{id}', [SitepageController::class, 'show']);
			Route::get('/{id}/details', [SitepageController::class, 'details']);
			Route::post('/', [SitepageController::class, 'store']);
			Route::put('/{id}', [SitepageController::class, 'update']);
			Route::delete('/{id}', [SitepageController::class, 'delete']);
			Route::get('/trash', [SitepageController::class, 'trash']);
			Route::post('/trash/{id}', [SitepageController::class, 'restore']);
		});

		Route::prefix('users')->group(function () {
			Route::get('/', [UserController::class, 'index']);
			Route::get('/cb', [UserController::class, 'comboBox']);
			Route::get('/{id}', [UserController::class, 'show']);
			Route::get('/{id}/details', [UserController::class, 'details']);
			Route::post('/', [UserController::class, 'store']);
			Route::put('/{id}', [UserController::class, 'update']);
			Route::delete('/{id}', [UserController::class, 'delete']);
			Route::get('/trash', [UserController::class, 'trash']);
			Route::post('/trash/{id}', [UserController::class, 'restore']);
		});

		Route::prefix('roles')->group(function () {
			Route::get('/', [RoleController::class, 'index']);
			Route::get('/cb', [RoleController::class, 'comboBox']);
			Route::get('/{id}', [RoleController::class, 'show']);
			Route::get('/{id}/details', [RoleController::class, 'details']);
			Route::post('/', [RoleController::class, 'store']);
			Route::put('/{id}', [RoleController::class, 'update']);
			Route::delete('/{id}', [RoleController::class, 'delete']);
			Route::get('/trash', [RoleController::class, 'trash']);
			Route::post('/trash/{id}', [RoleController::class, 'restore']);
		});

		Route::prefix('permissions')->group(function () {
			Route::get('/', [PermissionController::class, 'index']);
			Route::get('/cb', [PermissionController::class, 'comboBox']);
			Route::get('/{id}', [PermissionController::class, 'show']);
			Route::get('/{id}/details', [PermissionController::class, 'details']);
			Route::post('/', [PermissionController::class, 'store']);
			Route::put('/{id}', [PermissionController::class, 'update']);
			Route::delete('/{id}', [PermissionController::class, 'delete']);
			Route::get('/trash', [PermissionController::class, 'trash']);
			Route::post('/trash/{id}', [PermissionController::class, 'restore']);
		});

		Route::prefix('teams')->group(function () {
			Route::get('/', [TeamController::class, 'index']);
			Route::get('/{id}', [TeamController::class, 'show']);
			Route::get('/{id}/details', [TeamController::class, 'details']);
			Route::post('/', [TeamController::class, 'store']);
			Route::put('/{id}', [TeamController::class, 'update']);
			Route::delete('/{id}', [TeamController::class, 'delete']);
			Route::get('/trash', [TeamController::class, 'trash']);
			Route::post('/trash/{id}', [TeamController::class, 'restore']);
		});

		Route::prefix('portifolios')->group(function () {
			Route::get('/', [PortifolioController::class, 'index']);
			Route::get('/{id}', [PortifolioController::class, 'show']);
			Route::get('/{id}/details', [PortifolioController::class, 'details']);
			Route::post('/', [PortifolioController::class, 'store']);
			Route::put('/{id}', [PortifolioController::class, 'update']);
			Route::delete('/{id}', [PortifolioController::class, 'delete']);
			Route::get('/trash', [PortifolioController::class, 'trash']);
			Route::post('/trash/{id}', [PortifolioController::class, 'restore']);
		});

		Route::prefix('galleries')->group(function () {
			Route::get('/', [GalleryController::class, 'index']);
			Route::get('/{id}', [GalleryController::class, 'show']);
			Route::get('/{id}/details', [GalleryController::class, 'details']);
			Route::post('/', [GalleryController::class, 'store']);
			Route::put('/{id}', [GalleryController::class, 'update']);
			Route::delete('/{id}', [GalleryController::class, 'delete']);
			Route::get('/trash', [GalleryController::class, 'trash']);
			Route::post('/trash/{id}', [GalleryController::class, 'restore']);
		});

		Route::prefix('posts')->group(function () {
			Route::get('/', [PostController::class, 'index']);
			Route::get('/cb', [PostController::class, 'comboBox']);
			Route::get('/{id}', [PostController::class, 'show']);
			Route::get('/{id}/details', [PostController::class, 'details']);
			Route::post('/', [PostController::class, 'store']);
			Route::put('/{id}', [PostController::class, 'update']);
			Route::delete('/{id}', [PostController::class, 'delete']);
			Route::get('/trash', [PostController::class, 'trash']);
			Route::post('/trash/{id}', [PostController::class, 'restore']);
		});

		Route::prefix('permission_role')->group(function () {
			Route::get('/', [PermissionRoleController::class, 'index']);
			Route::get('/cb', [PermissionRoleController::class, 'comboBox']);
			Route::get('/{id}', [PermissionRoleController::class, 'show']);
			Route::get('/{id}/details', [PermissionRoleController::class, 'details']);
			Route::post('/', [PermissionRoleController::class, 'store']);
			Route::put('/{id}', [PermissionRoleController::class, 'update']);
			Route::delete('/{id}', [PermissionRoleController::class, 'delete']);
			Route::get('/trash', [PermissionRoleController::class, 'trash']);
			Route::post('/trash/{id}', [PermissionRoleController::class, 'restore']);
		});

		Route::prefix('role_user')->group(function () {
			Route::get('/', [RoleUserController::class, 'index']);
			Route::get('/cb', [RoleUserController::class, 'comboBox']);
			Route::get('/{id}', [RoleUserController::class, 'show']);
			Route::get('/{id}/details', [RoleUserController::class, 'details']);
			Route::post('/', [RoleUserController::class, 'store']);
			Route::put('/{id}', [RoleUserController::class, 'update']);
			Route::delete('/{id}', [RoleUserController::class, 'delete']);
			Route::get('/trash', [RoleUserController::class, 'trash']);
			Route::post('/trash/{id}', [RoleUserController::class, 'restore']);
		});

		Route::prefix('itemsgalleries')->group(function () {
			Route::get('/', [ItemsgalleryController::class, 'index']);
			Route::get('/{id}', [ItemsgalleryController::class, 'show']);
			Route::get('/{id}/details', [ItemsgalleryController::class, 'details']);
			Route::post('/', [ItemsgalleryController::class, 'store']);
			Route::put('/{id}', [ItemsgalleryController::class, 'update']);
			Route::delete('/{id}', [ItemsgalleryController::class, 'delete']);
			Route::get('/trash', [ItemsgalleryController::class, 'trash']);
			Route::post('/trash/{id}', [ItemsgalleryController::class, 'restore']);
		});


    });

});
