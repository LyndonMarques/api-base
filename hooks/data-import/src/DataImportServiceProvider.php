<?php

namespace DataImport;

use Illuminate\Events\Dispatcher;
use Illuminate\Support\ServiceProvider;

class DataImportServiceProvider extends ServiceProvider
{
  /**
  * Bootstrap any application services.
  *
  * @return void
  */
  public function boot()
  {
    //
  }

  /**
  * Register any application services.
  *
  * @return void
  */
  public function register()
  {
    // Load views
    $this->loadViewsFrom(__DIR__.'/../resources/views', 'data-import');

    // Add routes with Voyager's prefix (group)
    app(Dispatcher::class)->listen('voyager.admin.routing', [$this, 'addRoutes']);
  }

  public function addRoutes($router)
  {
    $namespacePrefix = '\\DataImport\\Controllers\\';

    $router->get('import', ['uses' => $namespacePrefix.'ImportController@index']);
    $router->post('import/parse', ['uses' => $namespacePrefix.'ImportController@parseImport']);
    $router->post('import/process-user', ['uses' => $namespacePrefix.'ImportController@processUsers']);
  }
}
