<?php

namespace App\Providers;

use Illuminate\Routing\Router;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to the controller routes in your routes file.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers';

    protected $pharmacyNamespace = 'App\Http\Controllers\Pharmacy';

    protected $inventoryNamespace = 'App\Http\Controllers\Inventory';
    protected $attendanceNamespace = 'App\Http\Controllers\Attendance';

    protected $registrationNamespace = 'App\Http\Controllers\Registration';

    protected $hospitalNamespace = 'App\Http\Controllers\Hospital';

    protected $diagnosticNamespace = 'App\Http\Controllers\Diagnostic';
    protected $accountNamespace = 'App\Http\Controllers\Account';
    protected $hrmNamespace = 'App\Http\Controllers\HRM';

    protected $birthNamespace = 'App\Http\Controllers\Birth';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @param  \Illuminate\Routing\Router  $router
     * @return void
     */
    public function boot(Router $router)
    {
        parent::boot($router);

        # Route Model Binding
        # Pharmacy
        $router->model('categories', 'App\Models\Pharmacy\Category');
        $router->model('unit', 'App\Models\Pharmacy\ProductUnit');
        $router->model('customer', 'App\Models\Pharmacy\Customer');
        $router->model('supplier', 'App\Models\Pharmacy\Supplier');
        $router->model('product_name', 'App\Models\Pharmacy\ProductName');
        $router->model('tag', 'App\Models\Pharmacy\Tag');

        # Inventory
        $router->model('category', 'App\Models\Inventory\Category');
        $router->model('product', 'App\Models\Inventory\Product');

        # User Panel
        $router->model('user', 'App\User');

        # Diagnostic
        $router->model('dues', 'App\Models\Diagnostic\DiagnosticDuesCollection');
    }

    /**
     * Define the routes for the application.
     *
     * @param  \Illuminate\Routing\Router  $router
     * @return void
     */
    public function map(Router $router)
    {
        // Authentication
        $router->group(['namespace' => $this->namespace], function($router)
        {
            require app_path('Http/Routes/route.php');
        });

        // Pharmacy
        $router->group(['namespace' => $this->pharmacyNamespace], function($router)
        {
            require app_path('Http/Routes/pharmacy.php');
        });

        //Inventory
        $router->group(['namespace' => $this->inventoryNamespace], function($router)
        {
            require app_path('Http/Routes/inventory.php');
        });


        //Registration
        $router->group(['namespace' => $this->registrationNamespace], function($router)
        {
            require app_path('Http/Routes/registration.php');
        });

        //Hospital
        $router->group(['namespace' => $this->hospitalNamespace], function($router)
        {
            require app_path('Http/Routes/hospital.php');
        });

        //Diagnostic
        $router->group(['namespace' => $this->diagnosticNamespace], function($router)
        {
            require app_path('Http/Routes/diagnostic.php');
        });
        //Account
        $router->group(['namespace' => $this->accountNamespace], function($router)
        {
            require app_path('Http/Routes/account.php');
        });

        //Hrm
        $router->group(['namespace' => $this->hrmNamespace], function() {

            require app_path('Http/Routes/HRM/meta.php');
            require app_path('Http/Routes/HRM/employee.php');
            require app_path('Http/Routes/HRM/attendance.php');
            require app_path('Http/Routes/HRM/payroll.php');


        });

        //Birth
        $router->group(['namespace' => $this->birthNamespace], function($router)
        {
            require app_path('Http/Routes/birth.php');
        });

    }
}
