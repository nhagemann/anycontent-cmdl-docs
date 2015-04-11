# Content Records

## GET


### get record

Short: /1/{repositoryName}/content/{contentTypeName}/record/{id}

Full: /1/{repositoryName}/content/{contentTypeName}/record/{id}/{workspace}/{clippingName}

(additional query parameters: timeshift, language)


### get records

Short: /1/{repositoryName}/content/{contentTypeName}/records
Full: /1/{repositoryName}/content/{contentTypeName}/records/{workspace}/{clippingName}

additional timeshift, language, order, properties, limit, page, subset, filter

TODO: &properties verschwindet, stattdessen kommasepariert name+,status-

### insert/update records
Short: /1/{repositoryName}/content/{contentTypeName}/records
Full: /1/{repositoryName}/content/{contentTypeName}/records/{workspace}/{clippingName}

additional query parameters: record*, language


## POST

### sort records 

Short: /1/{repositoryName}/content/{contentTypeName}/sort-records#
Full: /1/{repositoryName}/content/{contentTypeName}/sort-records

additional query parameters: list*, language

## DELETE

### delete record

Short: /1/{repositoryName}/content/{contentTypeName}/record/{id}
Full: /1/{repositoryName}/content/{contentTypeName}/record/{id}/{workspace}

(additional query parameters: timeshift)


### delete records

Short: /1/{repositoryName}/content/{contentTypeName}/records
Full: /1/{repositoryName}/content/{contentTypeName}/records/{workspace}

additional: language, reset 