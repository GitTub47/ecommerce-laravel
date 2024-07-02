protected function mapApiRoutes()
{
    Route::prefix('api')
         ->middleware('api')
         ->namespace($this->namespace)  // Make sure this is set correctly
         ->group(base_path('routes/api.php'));
}