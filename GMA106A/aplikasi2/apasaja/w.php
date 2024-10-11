Route::middleware([NoLogin::class])-> group(function(){});

Route::middleware(['auth'])->group(function(){});