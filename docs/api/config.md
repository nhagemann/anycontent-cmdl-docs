

        // get cmdl for a config type
        $app->get('/1/{repositoryName}/config/{configTypeName}/cmdl', 'AnyContent\Repository\Controller\ConfigController::cmdl');
        $app->get('/1/{repositoryName}/config/{configTypeName}/cmdl/{locale}', 'AnyContent\Repository\Controller\ConfigController::cmdl');

        // get config (additional query parameters: timeshift, language)
        $app->get('/1/{repositoryName}/config/{configTypeName}/record', 'AnyContent\Repository\Controller\ConfigController::getConfig');
        $app->get('/1/{repositoryName}/config/{configTypeName}/record/{workspace}', 'AnyContent\Repository\Controller\ConfigController::getConfig');

        // insert/update config (additional query parameters: language)
        $app->post('/1/{repositoryName}/config/{configTypeName}/record', 'AnyContent\Repository\Controller\ConfigController::post');
        $app->post('/1/{repositoryName}/config/{configTypeName}/record/{workspace}', 'AnyContent\Repository\Controller\ConfigController::post');
