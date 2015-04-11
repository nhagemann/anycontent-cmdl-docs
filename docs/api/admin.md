
## admin
        // update cmdl for a content type / create content type
        $app->post('/1/{repositoryName}/content/{contentTypeName}/cmdl', 'AnyContent\Repository\Modules\Core\Repositories\RepositoryController::postContentTypeCMDL');
        $app->post('/1/{repositoryName}/content/{contentTypeName}/cmdl/{locale}', 'AnyContent\Repository\Modules\Core\Repositories\RepositoryController::postContentTypeCMDL');

        // delete content type
        $app->delete('/1/{repositoryName}/content/{contentTypeName}', 'AnyContent\Repository\Modules\Core\Repositories\RepositoryController::deleteContentType');

        // update cmdl for a config type / create config type
        $app->post('/1/{repositoryName}/config/{configTypeName}/cmdl', 'AnyContent\Repository\Modules\Core\Repositories\RepositoryController::postConfigTypeCMDL');
        $app->post('/1/{repositoryName}/config/{configTypeName}/cmdl/{locale}', 'AnyContent\Repository\Modules\Core\Repositories\RepositoryController::postConfigTypeCMDL');

        // delete config type
        $app->delete('/1/{repositoryName}/config/{configTypeName}', 'AnyContent\Repository\Modules\Core\Repositories\RepositoryController::deleteConfigType');