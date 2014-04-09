
// get repository status (additional query parameters: timeshift, language)
$app->get('/1/{repositoryName}/info', 'AnyContent\Repository\Controller\RepositoryController::index')->before($before1)->before($before2);
$app->get('/1/{repositoryName}/info/{workspace}', 'AnyContent\Repository\Controller\RepositoryController::index')->before($before1)->before($before2);

// get cmdl for a content type
$app->get('/1/{repositoryName}/cmdl/{contentTypeName}', 'AnyContent\Repository\Controller\RepositoryController::cmdl')->before($before1)->before($before2);


// get records (additional query parameters: timeshift, language, order, properties, limit, page, subset, filter)
$app->get('/1/{repositoryName}/content/{contentTypeName}', 'AnyContent\Repository\Controller\ContentController::getMany')->before($before1)->before($before2);
$app->get('/1/{repositoryName}/content/{contentTypeName}/{workspace}', 'AnyContent\Repository\Controller\ContentController::getMany')->before($before1)->before($before2);
$app->get('/1/{repositoryName}/content/{contentTypeName}/{workspace}/{clippingName}', 'AnyContent\Repository\Controller\ContentController::getMany')->before($before1)->before($before2);

// get distinct record (additional query parameters: timeshift, language)
$app->get('/1/{repositoryName}/content/{contentTypeName}/{id}', 'AnyContent\Repository\Controller\ContentController::getOne')->before($before1)->before($before2);
$app->get('/1/{repositoryName}/content/{contentTypeName}/{id}/{workspace}', 'AnyContent\Repository\Controller\ContentController::getOne')->before($before1)->before($before2);
$app->get('/1/{repositoryName}/content/{contentTypeName}/{id}/{workspace}/{clippingName}', 'AnyContent\Repository\Controller\ContentController::getOne')->before($before1)->before($before2);

// delete record (additional query parameter: language)
$app->delete('/1/{repositoryName}/content/{contentTypeName}/{id}', 'AnyContent\Repository\Controller\ContentController::deleteOne')->before($before1)->before($before2);
$app->delete('/1/{repositoryName}/content/{contentTypeName}/{id}/{workspace}', 'AnyContent\Repository\Controller\ContentController::deleteOne')->before($before1)->before($before2);

// insert/update record (additional query parameters: language)
$app->post('/1/{repositoryName}/content/{contentTypeName}', 'AnyContent\Repository\Controller\ContentController::post')->before($before1)->before($before2);
$app->post('/1/{repositoryName}/content/{contentTypeName}/{workspace}/{clippingName}', 'AnyContent\Repository\Controller\ContentController::post')->before($before1)->before($before2);


// list files
$app->get('/1/{repositoryName}/files/{workspace}/list', 'AnyContent\Repository\Controller\FilesController::scan')->before($before1)->before($before2);
$app->get('/1/{repositoryName}/files/{workspace}/list/', 'AnyContent\Repository\Controller\FilesController::scan')->before($before1)->before($before2);
$app->get('/1/{repositoryName}/files/{workspace}/list/{path}', 'AnyContent\Repository\Controller\FilesController::scan')->before($before1)->before($before2)->assert('path', '.+');;


list all accessible content types
{base-repository-url}/



get definition for a content type
{base-repository-url}/cmdl/{content-type-name}


BASIC OPERATIONS


list all records from a content_type (GET)
repository/content/{content-type-name}/

sorting
?order = id/id+/pos/pos-/change/change-/creation/creation-/status/status-/name/name-

filtering
?limit = 100

?page = 1
?label = x,x

get a specific record: (GET)
repository/content/content_type/1


insert a new record: (POST)
repository/content/content_type



update a record: (POST)


repository/content/content_type

?record=<object>
To update a record your record object's id must refer to an existing record, otherwise a new record is created.




delete a record: (DELETE)


/

DELETE {base-repository-url}/content/{content-type-name}/{workspace}/{id}



NAVIGATIONAL SORTING
?subset = node/include/depth






=========================================================


FILES
BASIC OPERATIONS


list all files within a folder (GET)
repository/files/folder/



get info on a file (GET)
repository/file/folder/filename



insert/update a file (POST)
repository/folder/filename



delete a file (DELETE)
repository/folder/filename
