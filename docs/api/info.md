# info

// get info on repositories
        $app->get('/1/{repositoryName}/info', 'AnyContent\Repository\Modules\Core\Repositories\RepositoryController::index');
        $app->get('/1/{repositoryName}/info/{workspace}', 'AnyContent\Repository\Modules\Core\Repositories\RepositoryController::index');

// get info about available content types

/1/{repositoryName}/content

  // list configs
        $app->get('/1/{repositoryName}/config', 'AnyContent\Repository\Controller\ConfigController::index');

## cmdl
        // get cmdl for a content type
        $app->get('/1/{repositoryName}/content/{contentTypeName}/cmdl', 'AnyContent\Repository\Modules\Core\Repositories\RepositoryController::cmdl');
        $app->get('/1/{repositoryName}/content/{contentTypeName}/cmdl/{locale}', 'AnyContent\Repository\Modules\Core\Repositories\RepositoryController::cmdl');
