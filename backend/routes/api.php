use App\Http\Controllers\Api\TenantAuthController;
use App\Http\Controllers\Api\TenantPropertyController;

Route::post('/tenant/register', [TenantAuthController::class, 'register']);
Route::post('/tenant/login', [TenantAuthController::class, 'login']);
Route::middleware('auth:sanctum')->get('/tenant/properties', [TenantPropertyController::class, 'index']);