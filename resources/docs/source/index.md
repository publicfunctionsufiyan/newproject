---
title: API Reference

language_tabs:
- bash
- javascript

includes:

search: true

toc_footers:
- <a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a>
---
<!-- START_INFO -->
# Info

Welcome to the generated API reference.
[Get Postman Collection](http://localhost/docs/collection.json)

<!-- END_INFO -->

#general


<!-- START_0c068b4037fb2e47e71bd44bd36e3e2a -->
## Authorize a client to access the user&#039;s account.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/oauth/authorize" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/oauth/authorize"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET oauth/authorize`


<!-- END_0c068b4037fb2e47e71bd44bd36e3e2a -->

<!-- START_e48cc6a0b45dd21b7076ab2c03908687 -->
## Approve the authorization request.

> Example request:

```bash
curl -X POST \
    "http://localhost/oauth/authorize" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/oauth/authorize"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST oauth/authorize`


<!-- END_e48cc6a0b45dd21b7076ab2c03908687 -->

<!-- START_de5d7581ef1275fce2a229b6b6eaad9c -->
## Deny the authorization request.

> Example request:

```bash
curl -X DELETE \
    "http://localhost/oauth/authorize" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/oauth/authorize"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE oauth/authorize`


<!-- END_de5d7581ef1275fce2a229b6b6eaad9c -->

<!-- START_a09d20357336aa979ecd8e3972ac9168 -->
## Authorize a client to access the user&#039;s account.

> Example request:

```bash
curl -X POST \
    "http://localhost/oauth/token" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/oauth/token"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST oauth/token`


<!-- END_a09d20357336aa979ecd8e3972ac9168 -->

<!-- START_d6a56149547e03307199e39e03e12d1c -->
## Get all of the authorized tokens for the authenticated user.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/oauth/tokens" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/oauth/tokens"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET oauth/tokens`


<!-- END_d6a56149547e03307199e39e03e12d1c -->

<!-- START_a9a802c25737cca5324125e5f60b72a5 -->
## Delete the given token.

> Example request:

```bash
curl -X DELETE \
    "http://localhost/oauth/tokens/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/oauth/tokens/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE oauth/tokens/{token_id}`


<!-- END_a9a802c25737cca5324125e5f60b72a5 -->

<!-- START_abe905e69f5d002aa7d26f433676d623 -->
## Get a fresh transient token cookie for the authenticated user.

> Example request:

```bash
curl -X POST \
    "http://localhost/oauth/token/refresh" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/oauth/token/refresh"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST oauth/token/refresh`


<!-- END_abe905e69f5d002aa7d26f433676d623 -->

<!-- START_babcfe12d87b8708f5985e9d39ba8f2c -->
## Get all of the clients for the authenticated user.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/oauth/clients" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/oauth/clients"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET oauth/clients`


<!-- END_babcfe12d87b8708f5985e9d39ba8f2c -->

<!-- START_9eabf8d6e4ab449c24c503fcb42fba82 -->
## Store a new client.

> Example request:

```bash
curl -X POST \
    "http://localhost/oauth/clients" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/oauth/clients"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST oauth/clients`


<!-- END_9eabf8d6e4ab449c24c503fcb42fba82 -->

<!-- START_784aec390a455073fc7464335c1defa1 -->
## Update the given client.

> Example request:

```bash
curl -X PUT \
    "http://localhost/oauth/clients/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/oauth/clients/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT oauth/clients/{client_id}`


<!-- END_784aec390a455073fc7464335c1defa1 -->

<!-- START_1f65a511dd86ba0541d7ba13ca57e364 -->
## Delete the given client.

> Example request:

```bash
curl -X DELETE \
    "http://localhost/oauth/clients/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/oauth/clients/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE oauth/clients/{client_id}`


<!-- END_1f65a511dd86ba0541d7ba13ca57e364 -->

<!-- START_9e281bd3a1eb1d9eb63190c8effb607c -->
## Get all of the available scopes for the application.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/oauth/scopes" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/oauth/scopes"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET oauth/scopes`


<!-- END_9e281bd3a1eb1d9eb63190c8effb607c -->

<!-- START_9b2a7699ce6214a79e0fd8107f8b1c9e -->
## Get all of the personal access tokens for the authenticated user.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/oauth/personal-access-tokens" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/oauth/personal-access-tokens"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET oauth/personal-access-tokens`


<!-- END_9b2a7699ce6214a79e0fd8107f8b1c9e -->

<!-- START_a8dd9c0a5583742e671711f9bb3ee406 -->
## Create a new personal access token for the user.

> Example request:

```bash
curl -X POST \
    "http://localhost/oauth/personal-access-tokens" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/oauth/personal-access-tokens"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST oauth/personal-access-tokens`


<!-- END_a8dd9c0a5583742e671711f9bb3ee406 -->

<!-- START_bae65df80fd9d72a01439241a9ea20d0 -->
## Delete the given token.

> Example request:

```bash
curl -X DELETE \
    "http://localhost/oauth/personal-access-tokens/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/oauth/personal-access-tokens/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE oauth/personal-access-tokens/{token_id}`


<!-- END_bae65df80fd9d72a01439241a9ea20d0 -->

<!-- START_c3fa189a6c95ca36ad6ac4791a873d23 -->
## api/login
> Example request:

```bash
curl -X POST \
    "http://localhost/api/login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/login"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/login`


<!-- END_c3fa189a6c95ca36ad6ac4791a873d23 -->

<!-- START_d7b7952e7fdddc07c978c9bdaf757acf -->
## api/register
> Example request:

```bash
curl -X POST \
    "http://localhost/api/register" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/register"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/register`


<!-- END_d7b7952e7fdddc07c978c9bdaf757acf -->

<!-- START_0e7c361ef47aef4c3745b91c2e1867f6 -->
## api/update-user/{id}
> Example request:

```bash
curl -X POST \
    "http://localhost/api/update-user/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/update-user/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/update-user/{id}`


<!-- END_0e7c361ef47aef4c3745b91c2e1867f6 -->

<!-- START_ed493466de40b1f566233e41efefa9d8 -->
## api/delete-user/{id}
> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/delete-user/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/delete-user/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/delete-user/{id}`


<!-- END_ed493466de40b1f566233e41efefa9d8 -->

<!-- START_a6ab280bf040d4a75addae76e8f0eaa3 -->
## api/show-all-users
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/show-all-users" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/show-all-users"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
[
    {
        "id": 1,
        "name": "sufiyan",
        "email": "sufiyan@gmail.com",
        "user_type": 0,
        "email_verified_at": null,
        "created_at": "2020-04-04T20:14:01.000000Z",
        "updated_at": "2020-04-04T20:14:01.000000Z"
    },
    {
        "id": 2,
        "name": "ali",
        "email": "ali@gmail.com",
        "user_type": 0,
        "email_verified_at": null,
        "created_at": "2020-04-04T20:15:06.000000Z",
        "updated_at": "2020-04-04T20:15:06.000000Z"
    },
    {
        "id": 3,
        "name": "siddik",
        "email": "siddik@gmail.com",
        "user_type": 0,
        "email_verified_at": null,
        "created_at": "2020-04-04T20:15:43.000000Z",
        "updated_at": "2020-04-04T20:15:43.000000Z"
    },
    {
        "id": 4,
        "name": "owais",
        "email": "owais@gmail.com",
        "user_type": 1,
        "email_verified_at": null,
        "created_at": "2020-04-04T20:17:10.000000Z",
        "updated_at": "2020-04-04T20:17:10.000000Z"
    },
    {
        "id": 5,
        "name": "hassan",
        "email": "hassan@gmail.com",
        "user_type": 1,
        "email_verified_at": null,
        "created_at": "2020-04-04T20:18:51.000000Z",
        "updated_at": "2020-04-04T20:18:51.000000Z"
    },
    {
        "id": 6,
        "name": "hussain",
        "email": "hussain@gmail.com",
        "user_type": 2,
        "email_verified_at": null,
        "created_at": "2020-04-04T20:19:48.000000Z",
        "updated_at": "2020-04-04T20:19:48.000000Z"
    },
    {
        "id": 7,
        "name": "amir",
        "email": "amir@gmail.com",
        "user_type": 1,
        "email_verified_at": null,
        "created_at": "2020-04-04T20:20:07.000000Z",
        "updated_at": "2020-04-04T20:20:07.000000Z"
    }
]
```

### HTTP Request
`GET api/show-all-users`


<!-- END_a6ab280bf040d4a75addae76e8f0eaa3 -->

<!-- START_ba7e46f3f34872b8a319b8482b235c90 -->
## api/show-user-by-id/{id}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/show-user-by-id/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/show-user-by-id/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "id": 1,
    "name": "sufiyan",
    "email": "sufiyan@gmail.com",
    "user_type": 0,
    "email_verified_at": null,
    "created_at": "2020-04-04T20:14:01.000000Z",
    "updated_at": "2020-04-04T20:14:01.000000Z"
}
```

### HTTP Request
`GET api/show-user-by-id/{id}`


<!-- END_ba7e46f3f34872b8a319b8482b235c90 -->

<!-- START_43dc5a5767fb18024a8b24707c2395af -->
## api/create-hotel
> Example request:

```bash
curl -X POST \
    "http://localhost/api/create-hotel" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/create-hotel"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/create-hotel`


<!-- END_43dc5a5767fb18024a8b24707c2395af -->

<!-- START_9df0314a31c083f8bfe8b3f553c7fbf5 -->
## api/update-hotel/{id}
> Example request:

```bash
curl -X POST \
    "http://localhost/api/update-hotel/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/update-hotel/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/update-hotel/{id}`


<!-- END_9df0314a31c083f8bfe8b3f553c7fbf5 -->

<!-- START_3afe73b370162d96e7587316e9210e45 -->
## api/delete-hotel/{id}
> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/delete-hotel/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/delete-hotel/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/delete-hotel/{id}`


<!-- END_3afe73b370162d96e7587316e9210e45 -->

<!-- START_e1b1c1849ed98df22988149263608c48 -->
## api/show-all-hotels
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/show-all-hotels" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/show-all-hotels"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
[
    {
        "id": 1,
        "name": "hotel1",
        "address": "karachi, pakistan",
        "rating": "3",
        "blocks": 2,
        "created_at": "2020-04-04T20:27:26.000000Z",
        "updated_at": "2020-04-04T20:27:26.000000Z"
    }
]
```

### HTTP Request
`GET api/show-all-hotels`


<!-- END_e1b1c1849ed98df22988149263608c48 -->

<!-- START_86dc399b71a227e40aca184c557a8f7d -->
## api/show-hotel-by-id/{id}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/show-hotel-by-id/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/show-hotel-by-id/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "id": 1,
    "name": "hotel1",
    "address": "karachi, pakistan",
    "rating": "3",
    "blocks": 2,
    "created_at": "2020-04-04T20:27:26.000000Z",
    "updated_at": "2020-04-04T20:27:26.000000Z"
}
```

### HTTP Request
`GET api/show-hotel-by-id/{id}`


<!-- END_86dc399b71a227e40aca184c557a8f7d -->

<!-- START_08f1b64296102c2fe39a9a7b98694d3d -->
## api/create-amenity
> Example request:

```bash
curl -X POST \
    "http://localhost/api/create-amenity" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/create-amenity"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/create-amenity`


<!-- END_08f1b64296102c2fe39a9a7b98694d3d -->

<!-- START_7fcd6fd42b4ac6be2e112ff264e82a19 -->
## api/update-amenity/{id}
> Example request:

```bash
curl -X POST \
    "http://localhost/api/update-amenity/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/update-amenity/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/update-amenity/{id}`


<!-- END_7fcd6fd42b4ac6be2e112ff264e82a19 -->

<!-- START_d14e334cf0c95dd9f2681510a12fddce -->
## api/delete-amenity/{id}
> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/delete-amenity/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/delete-amenity/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/delete-amenity/{id}`


<!-- END_d14e334cf0c95dd9f2681510a12fddce -->

<!-- START_30b88fb6f251b0ed80bfe03bfb48c81b -->
## api/show-all-amenities
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/show-all-amenities" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/show-all-amenities"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
[
    {
        "id": 1,
        "name": "parking",
        "created_at": "2020-04-04T20:38:20.000000Z",
        "updated_at": "2020-04-04T20:38:20.000000Z"
    }
]
```

### HTTP Request
`GET api/show-all-amenities`


<!-- END_30b88fb6f251b0ed80bfe03bfb48c81b -->

<!-- START_e3098b14c49cb1f1a16c91a6f82954ce -->
## api/show-amenity-by-id/{id}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/show-amenity-by-id/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/show-amenity-by-id/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "id": 1,
    "name": "parking",
    "created_at": "2020-04-04T20:38:20.000000Z",
    "updated_at": "2020-04-04T20:38:20.000000Z"
}
```

### HTTP Request
`GET api/show-amenity-by-id/{id}`


<!-- END_e3098b14c49cb1f1a16c91a6f82954ce -->

<!-- START_29ec1b924f67c08281f512aef3768856 -->
## api/create-block
> Example request:

```bash
curl -X POST \
    "http://localhost/api/create-block" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/create-block"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/create-block`


<!-- END_29ec1b924f67c08281f512aef3768856 -->

<!-- START_1fc9b1950b5fc6c960475739157025bc -->
## api/update-block/{id}
> Example request:

```bash
curl -X POST \
    "http://localhost/api/update-block/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/update-block/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/update-block/{id}`


<!-- END_1fc9b1950b5fc6c960475739157025bc -->

<!-- START_e3084178608b6914d4c99a13485af29c -->
## api/delete-block/{id}
> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/delete-block/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/delete-block/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/delete-block/{id}`


<!-- END_e3084178608b6914d4c99a13485af29c -->

<!-- START_dbe5d784db150a9754e81f0e9e036915 -->
## api/show-all-blocks
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/show-all-blocks" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/show-all-blocks"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
[
    {
        "id": 1,
        "hotel_id": 1,
        "name": "A",
        "floors": 20,
        "created_at": "2020-04-04T20:35:01.000000Z",
        "updated_at": "2020-04-04T20:35:01.000000Z"
    }
]
```

### HTTP Request
`GET api/show-all-blocks`


<!-- END_dbe5d784db150a9754e81f0e9e036915 -->

<!-- START_b26de09037ab0b11a75b8f33266d43cf -->
## api/show-block-by-id/{id}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/show-block-by-id/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/show-block-by-id/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "id": 1,
    "hotel_id": 1,
    "name": "A",
    "floors": 20,
    "created_at": "2020-04-04T20:35:01.000000Z",
    "updated_at": "2020-04-04T20:35:01.000000Z"
}
```

### HTTP Request
`GET api/show-block-by-id/{id}`


<!-- END_b26de09037ab0b11a75b8f33266d43cf -->

<!-- START_b061d7bf1a452ecda3c2fe169906c251 -->
## api/show-block-by-hotel/{id}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/show-block-by-hotel/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/show-block-by-hotel/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "Signed URLs": 2
}
```

### HTTP Request
`GET api/show-block-by-hotel/{id}`


<!-- END_b061d7bf1a452ecda3c2fe169906c251 -->

<!-- START_fc59d6fe0b6dd654b8f911d7cdf6384d -->
## api/create-room
> Example request:

```bash
curl -X POST \
    "http://localhost/api/create-room" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/create-room"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/create-room`


<!-- END_fc59d6fe0b6dd654b8f911d7cdf6384d -->

<!-- START_51efcf0bde5bdf95ef73e0ac953ab824 -->
## api/update-room/{id}
> Example request:

```bash
curl -X POST \
    "http://localhost/api/update-room/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/update-room/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/update-room/{id}`


<!-- END_51efcf0bde5bdf95ef73e0ac953ab824 -->

<!-- START_8852501ea781b72804fe22eb9cbbd04b -->
## api/delete-room/{id}
> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/delete-room/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/delete-room/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/delete-room/{id}`


<!-- END_8852501ea781b72804fe22eb9cbbd04b -->

<!-- START_81c1780f6587ac2a63d1a1b875b22b6e -->
## api/show-all-rooms
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/show-all-rooms" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/show-all-rooms"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
[
    {
        "id": 1,
        "block_id": 1,
        "room_type_id": 1,
        "floor": 4,
        "price": 100,
        "availablity": 1,
        "created_at": "2020-04-04T20:37:24.000000Z",
        "updated_at": "2020-04-04T20:37:24.000000Z"
    }
]
```

### HTTP Request
`GET api/show-all-rooms`


<!-- END_81c1780f6587ac2a63d1a1b875b22b6e -->

<!-- START_17ede08fe32c4e71fca42ff343f74f08 -->
## api/show-room-by-id/{id}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/show-room-by-id/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/show-room-by-id/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "id": 1,
    "block_id": 1,
    "room_type_id": 1,
    "floor": 4,
    "price": 100,
    "availablity": 1,
    "created_at": "2020-04-04T20:37:24.000000Z",
    "updated_at": "2020-04-04T20:37:24.000000Z"
}
```

### HTTP Request
`GET api/show-room-by-id/{id}`


<!-- END_17ede08fe32c4e71fca42ff343f74f08 -->

<!-- START_c56e3d5b153a7e33e82479498090d4d9 -->
## api/show-room-by-hotel/{id}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/show-room-by-hotel/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/show-room-by-hotel/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/show-room-by-hotel/{id}`


<!-- END_c56e3d5b153a7e33e82479498090d4d9 -->

<!-- START_ad143cf7813c26609a5f34146211c71a -->
## api/create-room-type
> Example request:

```bash
curl -X POST \
    "http://localhost/api/create-room-type" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/create-room-type"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/create-room-type`


<!-- END_ad143cf7813c26609a5f34146211c71a -->

<!-- START_3b3b2c128ddfcfdac21479a2581e26ff -->
## api/update-room-type/{id}
> Example request:

```bash
curl -X POST \
    "http://localhost/api/update-room-type/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/update-room-type/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/update-room-type/{id}`


<!-- END_3b3b2c128ddfcfdac21479a2581e26ff -->

<!-- START_bfb40c6b485b8f671d81a0d65513b426 -->
## api/delete-room-type/{id}
> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/delete-room-type/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/delete-room-type/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/delete-room-type/{id}`


<!-- END_bfb40c6b485b8f671d81a0d65513b426 -->

<!-- START_0815f59cce0433451cd50d705133c574 -->
## api/show-all-room-types
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/show-all-room-types" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/show-all-room-types"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
[
    {
        "id": 1,
        "name": "family",
        "size": "325 square feet",
        "beds": "3\/double",
        "created_at": "2020-04-04T20:36:33.000000Z",
        "updated_at": "2020-04-04T20:36:33.000000Z"
    }
]
```

### HTTP Request
`GET api/show-all-room-types`


<!-- END_0815f59cce0433451cd50d705133c574 -->

<!-- START_95b4540b0e8d31406f1806ea71b92b19 -->
## api/show-room-type-by-id/{id}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/show-room-type-by-id/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/show-room-type-by-id/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "id": 1,
    "name": "family",
    "size": "325 square feet",
    "beds": "3\/double",
    "created_at": "2020-04-04T20:36:33.000000Z",
    "updated_at": "2020-04-04T20:36:33.000000Z"
}
```

### HTTP Request
`GET api/show-room-type-by-id/{id}`


<!-- END_95b4540b0e8d31406f1806ea71b92b19 -->

<!-- START_be7ec0b1a8bb4bed1b112cb9577d589c -->
## api/create-booking
> Example request:

```bash
curl -X POST \
    "http://localhost/api/create-booking" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/create-booking"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/create-booking`


<!-- END_be7ec0b1a8bb4bed1b112cb9577d589c -->

<!-- START_c1aa8ed6fa0effe1a5ad2e0ed533c489 -->
## api/update-booking/{id}
> Example request:

```bash
curl -X POST \
    "http://localhost/api/update-booking/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/update-booking/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/update-booking/{id}`


<!-- END_c1aa8ed6fa0effe1a5ad2e0ed533c489 -->

<!-- START_136ffcc768181068602406b430ef3553 -->
## api/delete-booking/{id}
> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/delete-booking/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/delete-booking/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/delete-booking/{id}`


<!-- END_136ffcc768181068602406b430ef3553 -->

<!-- START_6aa3ac45a28b70b9aca34882ec92a5ef -->
## api/show-all-bookings
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/show-all-bookings" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/show-all-bookings"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
[
    {
        "id": 1,
        "room_id": 1,
        "customer_name": "sufiyan",
        "created_at": "2020-04-04T20:39:47.000000Z",
        "updated_at": "2020-04-04T20:39:47.000000Z"
    }
]
```

### HTTP Request
`GET api/show-all-bookings`


<!-- END_6aa3ac45a28b70b9aca34882ec92a5ef -->

<!-- START_7629f9e74b033bcc372428cf03d7b3cf -->
## api/show-booking-by-id/{id}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/show-booking-by-id/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/show-booking-by-id/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "id": 1,
    "room_id": 1,
    "customer_name": "sufiyan",
    "created_at": "2020-04-04T20:39:47.000000Z",
    "updated_at": "2020-04-04T20:39:47.000000Z"
}
```

### HTTP Request
`GET api/show-booking-by-id/{id}`


<!-- END_7629f9e74b033bcc372428cf03d7b3cf -->

<!-- START_8057460c807c0dd56c43de7a0887316e -->
## api/create-hotel-amenities
> Example request:

```bash
curl -X POST \
    "http://localhost/api/create-hotel-amenities" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/create-hotel-amenities"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/create-hotel-amenities`


<!-- END_8057460c807c0dd56c43de7a0887316e -->

<!-- START_139680f59bac44623d96650f52cd9271 -->
## api/delete-hotel-amenities/{id}
> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/delete-hotel-amenities/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/delete-hotel-amenities/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/delete-hotel-amenities/{id}`


<!-- END_139680f59bac44623d96650f52cd9271 -->

<!-- START_64c48aeb95211b9e7ba90aa0d5e5f382 -->
## api/show-all-hotel-amenities
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/show-all-hotel-amenities" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/show-all-hotel-amenities"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
[
    {
        "id": 1,
        "hotel_id": 1,
        "aminity_id": 1,
        "created_at": "2020-04-04T20:47:32.000000Z",
        "updated_at": "2020-04-04T20:47:32.000000Z"
    }
]
```

### HTTP Request
`GET api/show-all-hotel-amenities`


<!-- END_64c48aeb95211b9e7ba90aa0d5e5f382 -->

<!-- START_d418fc0ebc5c2366617ab1c8027721be -->
## add-hotel
> Example request:

```bash
curl -X POST \
    "http://localhost/add-hotel" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/add-hotel"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST add-hotel`


<!-- END_d418fc0ebc5c2366617ab1c8027721be -->

<!-- START_bf162e7b3e01c09d3e7b7bc3663b1700 -->
## signin
> Example request:

```bash
curl -X GET \
    -G "http://localhost/signin" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/signin"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET signin`


<!-- END_bf162e7b3e01c09d3e7b7bc3663b1700 -->

<!-- START_093ec7e72da3a515f4f1521e292fe92c -->
## signin
> Example request:

```bash
curl -X POST \
    "http://localhost/signin" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/signin"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST signin`


<!-- END_093ec7e72da3a515f4f1521e292fe92c -->

<!-- START_3803a051c2fdcaa7f6bee86a5a17ed22 -->
## joinus
> Example request:

```bash
curl -X GET \
    -G "http://localhost/joinus" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/joinus"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET joinus`


<!-- END_3803a051c2fdcaa7f6bee86a5a17ed22 -->

<!-- START_977f01edef7bf1fd5b67845065cc44c3 -->
## joinus
> Example request:

```bash
curl -X POST \
    "http://localhost/joinus" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/joinus"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST joinus`


<!-- END_977f01edef7bf1fd5b67845065cc44c3 -->


