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

#Autenticacion

APIs para autenticarse en el sistema
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

<!-- START_c3fa189a6c95ca36ad6ac4791a873d23 -->
## Login

Login del sistema

> Example request:

```bash
curl -X POST \
    "http://localhost/api/login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
<<<<<<< HEAD
    -d '{"email":"sed","password":"tenetur"}'
=======
    -d '{"email":"vero","password":"aliquam"}'
>>>>>>> 8ba5c69ef87bd079902ec7ae884b0a13892072c6

```

```javascript
const url = new URL(
    "http://localhost/api/login"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
<<<<<<< HEAD
    "email": "sed",
    "password": "tenetur"
=======
    "email": "vero",
    "password": "aliquam"
>>>>>>> 8ba5c69ef87bd079902ec7ae884b0a13892072c6
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "token": "string",
    "user": {
        "id_col": 0,
        "nom_col": "string",
        "ape_col": "string"
    }
}
```

### HTTP Request
`POST api/login`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `email` | string |  required  | Email del usuario
        `password` | string |  required  | Contraseña del usuario
    
<!-- END_c3fa189a6c95ca36ad6ac4791a873d23 -->

#Cargos

APIs para cargos
<!-- START_6a159f37e98d2787080a0361914c16b7 -->
## Retornar cargos

Retorna todos los cargos

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/usuarios/cargos/get" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/usuarios/cargos/get"
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
    "data": [
        {
            "id_car": 0,
            "des_car": "string",
            "est_reg": "string"
        }
    ],
    "size": 0
}
```

### HTTP Request
`GET api/usuarios/cargos/get`


<!-- END_6a159f37e98d2787080a0361914c16b7 -->

<!-- START_5d6d88c0a27be855c36229dab0bc77f5 -->
## Retornar cargo

Retorna cargo por Id

> Example request:

```bash
curl -X GET \
<<<<<<< HEAD
    -G "http://localhost/api/usuarios/cargos/get/eum" \
=======
    -G "http://localhost/api/usuarios/cargos/get/quam" \
>>>>>>> 8ba5c69ef87bd079902ec7ae884b0a13892072c6
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
<<<<<<< HEAD
    "http://localhost/api/usuarios/cargos/get/eum"
=======
    "http://localhost/api/usuarios/cargos/get/quam"
>>>>>>> 8ba5c69ef87bd079902ec7ae884b0a13892072c6
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
    "id_car": 0,
    "des_car": "string",
    "est_reg": "string"
}
```

### HTTP Request
`GET api/usuarios/cargos/get/{id}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `id` |  required  | El ID del cargo.

<!-- END_5d6d88c0a27be855c36229dab0bc77f5 -->

<!-- START_8509d7915502b8778e2514fb95cab1d4 -->
## Crear cargo

Crea un cargo

> Example request:

```bash
curl -X POST \
    "http://localhost/api/usuarios/cargos/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
<<<<<<< HEAD
    -d '{"des_car":"atque"}'
=======
    -d '{"des_car":"eos"}'
>>>>>>> 8ba5c69ef87bd079902ec7ae884b0a13892072c6

```

```javascript
const url = new URL(
    "http://localhost/api/usuarios/cargos/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
<<<<<<< HEAD
    "des_car": "atque"
=======
    "des_car": "eos"
>>>>>>> 8ba5c69ef87bd079902ec7ae884b0a13892072c6
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "resp": "cargo creado"
}
```

### HTTP Request
`POST api/usuarios/cargos/create`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `des_car` | string |  required  | Descripcion del cargo.
    
<!-- END_8509d7915502b8778e2514fb95cab1d4 -->

<!-- START_1bd0782303cf645e644ff3a72767c57f -->
## Modificar cargo

Modifica un cargo

> Example request:

```bash
curl -X POST \
<<<<<<< HEAD
    "http://localhost/api/usuarios/cargos/update/enim" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"des_car":"qui"}'
=======
    "http://localhost/api/usuarios/cargos/update/et" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"des_car":"et"}'
>>>>>>> 8ba5c69ef87bd079902ec7ae884b0a13892072c6

```

```javascript
const url = new URL(
<<<<<<< HEAD
    "http://localhost/api/usuarios/cargos/update/enim"
=======
    "http://localhost/api/usuarios/cargos/update/et"
>>>>>>> 8ba5c69ef87bd079902ec7ae884b0a13892072c6
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
<<<<<<< HEAD
    "des_car": "qui"
=======
    "des_car": "et"
>>>>>>> 8ba5c69ef87bd079902ec7ae884b0a13892072c6
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "resp": "cargo actualizado"
}
```

### HTTP Request
`POST api/usuarios/cargos/update/{id}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `id` |  required  | El ID del cargo.
#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `des_car` | string |  required  | Descripcion del cargo.
    
<!-- END_1bd0782303cf645e644ff3a72767c57f -->

<!-- START_93bfece250d52bb56473605e79c8eb52 -->
## Eliminar cargo

Elimina un cargo

> Example request:

```bash
curl -X GET \
<<<<<<< HEAD
    -G "http://localhost/api/usuarios/cargos/delete/assumenda" \
=======
    -G "http://localhost/api/usuarios/cargos/delete/autem" \
>>>>>>> 8ba5c69ef87bd079902ec7ae884b0a13892072c6
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
<<<<<<< HEAD
    "http://localhost/api/usuarios/cargos/delete/assumenda"
=======
    "http://localhost/api/usuarios/cargos/delete/autem"
>>>>>>> 8ba5c69ef87bd079902ec7ae884b0a13892072c6
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
    "resp": "cargo eliminado"
}
```

### HTTP Request
`GET api/usuarios/cargos/delete/{id}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `id` |  required  | El ID del cargo.

<!-- END_93bfece250d52bb56473605e79c8eb52 -->

#Clientes

APIs para clientes
<!-- START_469566eb9e6cfefd45346acdb027924b -->
## Retornar clientes

Retorna todos los clientes

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/clientes/get" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/clientes/get"
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
    "data": [
        {
            "id_cli": 0,
            "razsoc_cli": "string",
            "numdoc_cli": "string",
            "ema_cli": "string",
            "id_tipodoc": 0,
            "est_reg": "string",
            "tipo_documento": {
                "id_tipdoc": 0,
                "des_tipdoc": "string"
            },
            "contactos": [
                {
                    "id_cli_con": 0,
                    "nom_cli_con": "string",
                    "ema_cli_con": "string",
                    "tel_cli_con": 0,
                    "id_cli": 0,
                    "est_reg": "string"
                }
            ],
            "direcciones": [
                {
                    "id_cli_dir": 0,
                    "ciu_cli": "string",
                    "dir_cli": "string",
                    "tel_cli": 0,
                    "id_cli": 0,
                    "est_reg": "string"
                }
            ]
        }
    ],
    "size": 0
}
```

### HTTP Request
`GET api/clientes/get`


<!-- END_469566eb9e6cfefd45346acdb027924b -->

<!-- START_5008ad09ec4e00207ded4538c54dd748 -->
## Retornar cliente

Retorna cliente por Id

> Example request:

```bash
curl -X GET \
<<<<<<< HEAD
    -G "http://localhost/api/clientes/get/beatae" \
=======
    -G "http://localhost/api/clientes/get/omnis" \
>>>>>>> 8ba5c69ef87bd079902ec7ae884b0a13892072c6
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
<<<<<<< HEAD
    "http://localhost/api/clientes/get/beatae"
=======
    "http://localhost/api/clientes/get/omnis"
>>>>>>> 8ba5c69ef87bd079902ec7ae884b0a13892072c6
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
    "id_cli": 0,
    "razsoc_cli": "string",
    "numdoc_cli": "string",
    "ema_cli": "string",
    "id_tipodoc": 0,
    "est_reg": "string",
    "tipo_documento": {
        "id_tipdoc": 0,
        "des_tipdoc": "string"
    },
    "contactos": [
        {
            "id_cli_con": 0,
            "nom_cli_con": "string",
            "ema_cli_con": "string",
            "tel_cli_con": 0,
            "id_cli": 0,
            "est_reg": "string"
        }
    ],
    "direcciones": [
        {
            "id_cli_dir": 0,
            "ciu_cli": "string",
            "dir_cli": "string",
            "tel_cli": 0,
            "id_cli": 0,
            "est_reg": "string"
        }
    ]
}
```

### HTTP Request
`GET api/clientes/get/{id}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `id` |  required  | El ID del cliente.

<!-- END_5008ad09ec4e00207ded4538c54dd748 -->

<!-- START_a0d7178e5a6e1a47b5726394c2332557 -->
## Crear cliente

Crea un cliente

> Example request:

```bash
curl -X POST \
    "http://localhost/api/clientes/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
<<<<<<< HEAD
    -d '{"razsoc_cli":"illo","ciu_cli":"sed","dir_cli":"qui","numdoc_cli":"dolor","tel_cli":"esse","cel_cli":"aut","ema_cli":"neque","id_tipodoc":17}'
=======
    -d '{"razsoc_cli":"facilis","numdoc_cli":"ratione","ema_cli":"ipsum","id_tipodoc":20}'
>>>>>>> 8ba5c69ef87bd079902ec7ae884b0a13892072c6

```

```javascript
const url = new URL(
    "http://localhost/api/clientes/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
<<<<<<< HEAD
    "razsoc_cli": "illo",
    "ciu_cli": "sed",
    "dir_cli": "qui",
    "numdoc_cli": "dolor",
    "tel_cli": "esse",
    "cel_cli": "aut",
    "ema_cli": "neque",
    "id_tipodoc": 17
=======
    "razsoc_cli": "facilis",
    "numdoc_cli": "ratione",
    "ema_cli": "ipsum",
    "id_tipodoc": 20
>>>>>>> 8ba5c69ef87bd079902ec7ae884b0a13892072c6
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "resp": "cliente creado"
}
```

### HTTP Request
`POST api/clientes/create`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `razsoc_cli` | string |  required  | Razon social del cliente.
        `numdoc_cli` | string |  required  | Numero de documento del cliente.
        `ema_cli` | string |  optional  | Email del cliente.
        `id_tipodoc` | integer |  optional  | Tipo de documento del cliente.
    
<!-- END_a0d7178e5a6e1a47b5726394c2332557 -->

<!-- START_154df38aecb171bb5d97700f8f1a6d55 -->
## Modificar cliente

Modifica un cliente

> Example request:

```bash
curl -X POST \
<<<<<<< HEAD
    "http://localhost/api/clientes/update/non" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"razsoc_cli":"dolor","ciu_cli":"eum","dir_cli":"officiis","numdoc_cli":"quis","tel_cli":"ab","cel_cli":"rem","ema_cli":"assumenda","id_tipodoc":16}'
=======
    "http://localhost/api/clientes/update/aut" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"razsoc_cli":"aut","numdoc_cli":"doloribus","ema_cli":"dolorum","id_tipodoc":13}'
>>>>>>> 8ba5c69ef87bd079902ec7ae884b0a13892072c6

```

```javascript
const url = new URL(
<<<<<<< HEAD
    "http://localhost/api/clientes/update/non"
=======
    "http://localhost/api/clientes/update/aut"
>>>>>>> 8ba5c69ef87bd079902ec7ae884b0a13892072c6
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
<<<<<<< HEAD
    "razsoc_cli": "dolor",
    "ciu_cli": "eum",
    "dir_cli": "officiis",
    "numdoc_cli": "quis",
    "tel_cli": "ab",
    "cel_cli": "rem",
    "ema_cli": "assumenda",
    "id_tipodoc": 16
=======
    "razsoc_cli": "aut",
    "numdoc_cli": "doloribus",
    "ema_cli": "dolorum",
    "id_tipodoc": 13
>>>>>>> 8ba5c69ef87bd079902ec7ae884b0a13892072c6
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "resp": "cliente actualizado"
}
```

### HTTP Request
`POST api/clientes/update/{id}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `id` |  required  | El ID del cliente.
#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `razsoc_cli` | string |  required  | Razon social del cliente.
        `numdoc_cli` | string |  required  | Numero de documento del cliente.
        `ema_cli` | string |  optional  | Email del cliente.
        `id_tipodoc` | integer |  optional  | Tipo de documento del cliente.
    
<!-- END_154df38aecb171bb5d97700f8f1a6d55 -->

<!-- START_bd1413105f139350c3c2fe553f75b8a6 -->
## Eliminar cliente

Elimina un cliente

> Example request:

```bash
curl -X GET \
<<<<<<< HEAD
    -G "http://localhost/api/clientes/delete/vitae" \
=======
    -G "http://localhost/api/clientes/delete/iste" \
>>>>>>> 8ba5c69ef87bd079902ec7ae884b0a13892072c6
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
<<<<<<< HEAD
    "http://localhost/api/clientes/delete/vitae"
=======
    "http://localhost/api/clientes/delete/iste"
>>>>>>> 8ba5c69ef87bd079902ec7ae884b0a13892072c6
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
    "resp": "cliente eliminado"
}
```

### HTTP Request
`GET api/clientes/delete/{id}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `id` |  required  | El ID del cliente.

<!-- END_bd1413105f139350c3c2fe553f75b8a6 -->

<!-- START_936e0e1b667533ff25ada85e4aa31a56 -->
## Administrar contactos y direcciones

Crea, Actualiza y elimina, contactos y direcciones de un cliente

> Example request:

```bash
curl -X POST \
    "http://localhost/api/clientes/admconydir/magni" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"contactos":[],"direcciones":[]}'

```

```javascript
const url = new URL(
    "http://localhost/api/clientes/admconydir/magni"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "contactos": [],
    "direcciones": []
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "resp": "contactos y direcciones actualizados"
}
```

### HTTP Request
`POST api/clientes/admconydir/{id}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `id` |  required  | El ID del cliente.
#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `contactos` | array |  required  | Ejemplo: [{"id_cli_con": 0,"nom_cli_con":"string","ema_cli_con":"string","cel_cli_con":"string","ane_cli_con":"string","car_cli_con":"string","est_reg": "string"}]
        `direcciones` | array |  required  | Ejemplo: [{"id_cli_dir": 0,"ciu_cli":"string","dir_cli":"string","tel_cli":"string","est_reg": "string"}]
    
<!-- END_936e0e1b667533ff25ada85e4aa31a56 -->

#Fabricantes

APIs para fabricantes
<!-- START_ed1154e29d4306ade3e2407e81d331ad -->
## Retornar fabricantes

Retorna todos los fabricantes

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/almacen/fabricantes/get" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/almacen/fabricantes/get"
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
    "data": [
        {
            "id_fab": 0,
            "des_fab": "string",
            "est_reg": "string",
            "created_at": "2020-06-14T06:07:02.419Z",
            "updated_at": "2020-06-14T06:07:02.419Z"
        }
    ],
    "size": 0
}
```

### HTTP Request
`GET api/almacen/fabricantes/get`


<!-- END_ed1154e29d4306ade3e2407e81d331ad -->

<!-- START_8165b5852b1554588f015c10fedad905 -->
## Retornar fabricante

Retorna fabricante por Id

> Example request:

```bash
curl -X GET \
<<<<<<< HEAD
    -G "http://localhost/api/almacen/fabricantes/get/sequi" \
=======
    -G "http://localhost/api/almacen/fabricantes/get/at" \
>>>>>>> 8ba5c69ef87bd079902ec7ae884b0a13892072c6
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
<<<<<<< HEAD
    "http://localhost/api/almacen/fabricantes/get/sequi"
=======
    "http://localhost/api/almacen/fabricantes/get/at"
>>>>>>> 8ba5c69ef87bd079902ec7ae884b0a13892072c6
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
    "id_fab": 0,
    "des_fab": "string",
    "est_reg": "string",
    "created_at": "2020-06-14T06:07:02.419Z",
    "updated_at": "2020-06-14T06:07:02.419Z"
}
```

### HTTP Request
`GET api/almacen/fabricantes/get/{id}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `id` |  required  | El ID del fabricante.

<!-- END_8165b5852b1554588f015c10fedad905 -->

<!-- START_1e959666509ff036e57740b703012195 -->
## Crear fabricante

Crea un fabricante

> Example request:

```bash
curl -X POST \
    "http://localhost/api/almacen/fabricantes/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
<<<<<<< HEAD
    -d '{"des_fab":"explicabo"}'
=======
    -d '{"des_fab":"eveniet"}'
>>>>>>> 8ba5c69ef87bd079902ec7ae884b0a13892072c6

```

```javascript
const url = new URL(
    "http://localhost/api/almacen/fabricantes/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
<<<<<<< HEAD
    "des_fab": "explicabo"
=======
    "des_fab": "eveniet"
>>>>>>> 8ba5c69ef87bd079902ec7ae884b0a13892072c6
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "resp": "fabricante creado"
}
```

### HTTP Request
`POST api/almacen/fabricantes/create`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `des_fab` | string |  required  | Descripcion del fabricante.
    
<!-- END_1e959666509ff036e57740b703012195 -->

<!-- START_182689a1e28df85353bc86c1ed28d98e -->
## Modificar fabricante

Modifica un fabricante

> Example request:

```bash
curl -X POST \
<<<<<<< HEAD
    "http://localhost/api/almacen/fabricantes/update/sit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"des_fab":"sed"}'
=======
    "http://localhost/api/almacen/fabricantes/update/consectetur" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"des_fab":"ad"}'
>>>>>>> 8ba5c69ef87bd079902ec7ae884b0a13892072c6

```

```javascript
const url = new URL(
<<<<<<< HEAD
    "http://localhost/api/almacen/fabricantes/update/sit"
=======
    "http://localhost/api/almacen/fabricantes/update/consectetur"
>>>>>>> 8ba5c69ef87bd079902ec7ae884b0a13892072c6
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
<<<<<<< HEAD
    "des_fab": "sed"
=======
    "des_fab": "ad"
>>>>>>> 8ba5c69ef87bd079902ec7ae884b0a13892072c6
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "resp": "fabricante actualizado"
}
```

### HTTP Request
`POST api/almacen/fabricantes/update/{id}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `id` |  required  | El ID del fabricante.
#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `des_fab` | string |  required  | Descripcion del fabricante.
    
<!-- END_182689a1e28df85353bc86c1ed28d98e -->

<!-- START_46ca20df31bce23f3c78e2aaec00303c -->
## Eliminar fabricante

Elimina un fabricante

> Example request:

```bash
curl -X GET \
<<<<<<< HEAD
    -G "http://localhost/api/almacen/fabricantes/delete/dignissimos" \
=======
    -G "http://localhost/api/almacen/fabricantes/delete/suscipit" \
>>>>>>> 8ba5c69ef87bd079902ec7ae884b0a13892072c6
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
<<<<<<< HEAD
    "http://localhost/api/almacen/fabricantes/delete/dignissimos"
=======
    "http://localhost/api/almacen/fabricantes/delete/suscipit"
>>>>>>> 8ba5c69ef87bd079902ec7ae884b0a13892072c6
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
    "resp": "fabricante eliminado"
}
```

### HTTP Request
`GET api/almacen/fabricantes/delete/{id}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `id` |  required  | El ID del fabricante.

<!-- END_46ca20df31bce23f3c78e2aaec00303c -->

#Marcas

APIs para marcas
<!-- START_c2df0de9ffdc95845ab6f549a8829d8c -->
## Retornar marcas

Retorna todas las marcas

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/almacen/marcas/get" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/almacen/marcas/get"
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
    "data": [
        {
            "id_mar": 0,
            "des_mar": "string",
            "est_reg": "string",
            "created_at": "2020-06-14T06:07:02.419Z",
            "updated_at": "2020-06-14T06:07:02.419Z"
        }
    ],
    "size": 0
}
```

### HTTP Request
`GET api/almacen/marcas/get`


<!-- END_c2df0de9ffdc95845ab6f549a8829d8c -->

<!-- START_5aba8f9beeb54f9409ab52e1067229b7 -->
## Retornar marca

Retorna marca por Id

> Example request:

```bash
curl -X GET \
<<<<<<< HEAD
    -G "http://localhost/api/almacen/marcas/get/corrupti" \
=======
    -G "http://localhost/api/almacen/marcas/get/voluptatibus" \
>>>>>>> 8ba5c69ef87bd079902ec7ae884b0a13892072c6
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
<<<<<<< HEAD
    "http://localhost/api/almacen/marcas/get/corrupti"
=======
    "http://localhost/api/almacen/marcas/get/voluptatibus"
>>>>>>> 8ba5c69ef87bd079902ec7ae884b0a13892072c6
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
    "id_mar": 0,
    "des_mar": "string",
    "est_reg": "string",
    "created_at": "2020-06-14T06:07:02.419Z",
    "updated_at": "2020-06-14T06:07:02.419Z"
}
```

### HTTP Request
`GET api/almacen/marcas/get/{id}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `id` |  required  | El ID de la marca.

<!-- END_5aba8f9beeb54f9409ab52e1067229b7 -->

<!-- START_87a63502c5de6f9841d601dc5e99ea60 -->
## Crear marca

Crea una marca

> Example request:

```bash
curl -X POST \
    "http://localhost/api/almacen/marcas/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
<<<<<<< HEAD
    -d '{"des_mar":"eum"}'
=======
    -d '{"des_mar":"et"}'
>>>>>>> 8ba5c69ef87bd079902ec7ae884b0a13892072c6

```

```javascript
const url = new URL(
    "http://localhost/api/almacen/marcas/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
<<<<<<< HEAD
    "des_mar": "eum"
=======
    "des_mar": "et"
>>>>>>> 8ba5c69ef87bd079902ec7ae884b0a13892072c6
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "resp": "marca creada"
}
```

### HTTP Request
`POST api/almacen/marcas/create`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `des_mar` | string |  required  | Descripcion de la marca.
    
<!-- END_87a63502c5de6f9841d601dc5e99ea60 -->

<!-- START_434e3f2f0b22dbe23ae222ba03c8bb10 -->
## Modificar marca

Modifica una marca

> Example request:

```bash
curl -X POST \
<<<<<<< HEAD
    "http://localhost/api/almacen/marcas/update/doloribus" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"des_mar":"beatae"}'
=======
    "http://localhost/api/almacen/marcas/update/sit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"des_mar":"quisquam"}'
>>>>>>> 8ba5c69ef87bd079902ec7ae884b0a13892072c6

```

```javascript
const url = new URL(
<<<<<<< HEAD
    "http://localhost/api/almacen/marcas/update/doloribus"
=======
    "http://localhost/api/almacen/marcas/update/sit"
>>>>>>> 8ba5c69ef87bd079902ec7ae884b0a13892072c6
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
<<<<<<< HEAD
    "des_mar": "beatae"
=======
    "des_mar": "quisquam"
>>>>>>> 8ba5c69ef87bd079902ec7ae884b0a13892072c6
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "resp": "marca actualizada"
}
```

### HTTP Request
`POST api/almacen/marcas/update/{id}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `id` |  required  | El ID de la marca.
#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `des_mar` | string |  required  | Descripcion de la marca.
    
<!-- END_434e3f2f0b22dbe23ae222ba03c8bb10 -->

<!-- START_ae05c126fe9cc1356bda3bc783bbe2a9 -->
## Eliminar marca

Elimina una marca

> Example request:

```bash
curl -X GET \
<<<<<<< HEAD
    -G "http://localhost/api/almacen/marcas/delete/dicta" \
=======
    -G "http://localhost/api/almacen/marcas/delete/veniam" \
>>>>>>> 8ba5c69ef87bd079902ec7ae884b0a13892072c6
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
<<<<<<< HEAD
    "http://localhost/api/almacen/marcas/delete/dicta"
=======
    "http://localhost/api/almacen/marcas/delete/veniam"
>>>>>>> 8ba5c69ef87bd079902ec7ae884b0a13892072c6
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
    "resp": "marca eliminada"
}
```

### HTTP Request
`GET api/almacen/marcas/delete/{id}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `id` |  required  | El ID de la marca.

<!-- END_ae05c126fe9cc1356bda3bc783bbe2a9 -->

#Modelos

APIs para modelos
<!-- START_580de7b4e645118fa0f7d867cdd8a286 -->
## Retornar modelos

Retorna todos los modelos

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/almacen/modelos/get" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/almacen/modelos/get"
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
    "data": [
        {
            "id_mod": 0,
            "des_mod": "string",
            "est_reg": "string",
            "created_at": "2020-06-14T06:07:02.419Z",
            "updated_at": "2020-06-14T06:07:02.419Z"
        }
    ],
    "size": 0
}
```

### HTTP Request
`GET api/almacen/modelos/get`


<!-- END_580de7b4e645118fa0f7d867cdd8a286 -->

<!-- START_a07002ec47cab710b7535ba5bd0d41d1 -->
## Retornar modelo

Retorna modelo por Id

> Example request:

```bash
curl -X GET \
<<<<<<< HEAD
    -G "http://localhost/api/almacen/modelos/get/pariatur" \
=======
    -G "http://localhost/api/almacen/modelos/get/voluptatem" \
>>>>>>> 8ba5c69ef87bd079902ec7ae884b0a13892072c6
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
<<<<<<< HEAD
    "http://localhost/api/almacen/modelos/get/pariatur"
=======
    "http://localhost/api/almacen/modelos/get/voluptatem"
>>>>>>> 8ba5c69ef87bd079902ec7ae884b0a13892072c6
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
    "id_mod": 0,
    "des_mod": "string",
    "est_reg": "string",
    "created_at": "2020-06-14T06:07:02.419Z",
    "updated_at": "2020-06-14T06:07:02.419Z"
}
```

### HTTP Request
`GET api/almacen/modelos/get/{id}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `id` |  required  | El ID del modelo.

<!-- END_a07002ec47cab710b7535ba5bd0d41d1 -->

<!-- START_9ae8a5047214787eeb41592ae141ab29 -->
## Crear modelo

Crea un modelo

> Example request:

```bash
curl -X POST \
    "http://localhost/api/almacen/modelos/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
<<<<<<< HEAD
    -d '{"des_mod":"rerum"}'
=======
    -d '{"des_mod":"dolorem"}'
>>>>>>> 8ba5c69ef87bd079902ec7ae884b0a13892072c6

```

```javascript
const url = new URL(
    "http://localhost/api/almacen/modelos/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
<<<<<<< HEAD
    "des_mod": "rerum"
=======
    "des_mod": "dolorem"
>>>>>>> 8ba5c69ef87bd079902ec7ae884b0a13892072c6
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "resp": "modelo creado"
}
```

### HTTP Request
`POST api/almacen/modelos/create`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `des_mod` | string |  required  | Descripcion del modelo.
    
<!-- END_9ae8a5047214787eeb41592ae141ab29 -->

<!-- START_a8d0ba9de070da5f721f74abe7c5fe3d -->
## Modificar modelo

Modifica un modelo

> Example request:

```bash
curl -X POST \
<<<<<<< HEAD
    "http://localhost/api/almacen/modelos/update/perspiciatis" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"des_mod":"id"}'
=======
    "http://localhost/api/almacen/modelos/update/consequuntur" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"des_mod":"laudantium"}'
>>>>>>> 8ba5c69ef87bd079902ec7ae884b0a13892072c6

```

```javascript
const url = new URL(
<<<<<<< HEAD
    "http://localhost/api/almacen/modelos/update/perspiciatis"
=======
    "http://localhost/api/almacen/modelos/update/consequuntur"
>>>>>>> 8ba5c69ef87bd079902ec7ae884b0a13892072c6
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
<<<<<<< HEAD
    "des_mod": "id"
=======
    "des_mod": "laudantium"
>>>>>>> 8ba5c69ef87bd079902ec7ae884b0a13892072c6
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "resp": "modelo actualizado"
}
```

### HTTP Request
`POST api/almacen/modelos/update/{id}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `id` |  required  | El ID del modelo.
#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `des_mod` | string |  required  | Descripcion del modelo.
    
<!-- END_a8d0ba9de070da5f721f74abe7c5fe3d -->

<!-- START_8f6bed46b5e476ca653b6237386ecb63 -->
## Eliminar modelo

Elimina un modelo

> Example request:

```bash
curl -X GET \
<<<<<<< HEAD
    -G "http://localhost/api/almacen/modelos/delete/eveniet" \
=======
    -G "http://localhost/api/almacen/modelos/delete/id" \
>>>>>>> 8ba5c69ef87bd079902ec7ae884b0a13892072c6
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
<<<<<<< HEAD
    "http://localhost/api/almacen/modelos/delete/eveniet"
=======
    "http://localhost/api/almacen/modelos/delete/id"
>>>>>>> 8ba5c69ef87bd079902ec7ae884b0a13892072c6
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
    "resp": "modelo eliminado"
}
```

### HTTP Request
`GET api/almacen/modelos/delete/{id}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `id` |  required  | El ID del modelo.

<!-- END_8f6bed46b5e476ca653b6237386ecb63 -->

#Productos

APIs para Productos
<!-- START_f64ee4f3c13aa091c2183bcdf42ae6e3 -->
## Retornar productos

Retorna todos los productos

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/almacen/productos/get" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/almacen/productos/get"
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
    "data": [
        {
            "id_prod": 0,
            "cod_prod": "string",
            "num_parte_prod": "string",
            "stk_prod": 0,
            "des_prod": "string",
            "pre_com_prod": 0,
            "id_unimed": 0,
            "id_mar": 0,
            "id_mod": 0,
            "id_fab": 0,
            "est_reg": "string",
            "created_at": "2020-06-14T06:07:02.419Z",
            "updated_at": "2020-06-14T06:07:02.419Z",
            "unidad_medida": {
                "id_unimed": 0,
                "nom_unimed": "string"
            },
            "marca": {
                "id_mar": 0,
                "des_mar": "string"
            },
            "modelo": {
                "id_mod": 0,
                "des_mod": "string"
            },
            "fabricante": {
                "id_fab": 0,
                "des_fab": "string"
            }
        }
    ],
    "size": 0
}
```

### HTTP Request
`GET api/almacen/productos/get`


<!-- END_f64ee4f3c13aa091c2183bcdf42ae6e3 -->

<!-- START_02751239cf9e43742135f451ba959154 -->
## Retornar producto

Retorna producto por Id

> Example request:

```bash
curl -X GET \
<<<<<<< HEAD
    -G "http://localhost/api/almacen/productos/get/mollitia" \
=======
    -G "http://localhost/api/almacen/productos/get/laborum" \
>>>>>>> 8ba5c69ef87bd079902ec7ae884b0a13892072c6
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
<<<<<<< HEAD
    "http://localhost/api/almacen/productos/get/mollitia"
=======
    "http://localhost/api/almacen/productos/get/laborum"
>>>>>>> 8ba5c69ef87bd079902ec7ae884b0a13892072c6
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
    "id_prod": 0,
    "cod_prod": "string",
    "num_parte_prod": "string",
    "stk_prod": 0,
    "des_prod": "string",
    "pre_com_prod": 0,
    "id_unimed": 0,
    "id_mar": 0,
    "id_mod": 0,
    "id_fab": 0,
    "est_reg": "string",
    "created_at": "2020-06-14T06:07:02.419Z",
    "updated_at": "2020-06-14T06:07:02.419Z",
    "unidad_medida": {
        "id_unimed": 0,
        "nom_unimed": "string"
    },
    "marca": {
        "id_mar": 0,
        "des_mar": "string"
    },
    "modelo": {
        "id_mod": 0,
        "des_mod": "string"
    },
    "fabricante": {
        "id_fab": 0,
        "des_fab": "string"
    }
}
```

### HTTP Request
`GET api/almacen/productos/get/{id}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `id` |  required  | El ID del producto.

<!-- END_02751239cf9e43742135f451ba959154 -->

<!-- START_58088cd6d4e7184322baad82507f4465 -->
## Crear producto

Crea un producto

> Example request:

```bash
curl -X POST \
    "http://localhost/api/almacen/productos/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
<<<<<<< HEAD
    -d '{"cod_prod":"non","num_parte_prod":"aut","stk_prod":10,"des_prod":"dolore","pre_com_prod":8,"pre_ven_prod":1,"id_unimed":8,"id_mar":10,"id_mod":12,"id_fab":19}'
=======
    -d '{"cod_prod":"corporis","num_parte_prod":"iste","stk_prod":15,"des_prod":"mollitia","pre_com_prod":10,"id_unimed":4,"id_mar":18,"id_mod":5,"id_fab":8}'
>>>>>>> 8ba5c69ef87bd079902ec7ae884b0a13892072c6

```

```javascript
const url = new URL(
    "http://localhost/api/almacen/productos/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
<<<<<<< HEAD
    "cod_prod": "non",
    "num_parte_prod": "aut",
    "stk_prod": 10,
    "des_prod": "dolore",
    "pre_com_prod": 8,
    "pre_ven_prod": 1,
    "id_unimed": 8,
    "id_mar": 10,
    "id_mod": 12,
    "id_fab": 19
=======
    "cod_prod": "corporis",
    "num_parte_prod": "iste",
    "stk_prod": 15,
    "des_prod": "mollitia",
    "pre_com_prod": 10,
    "id_unimed": 4,
    "id_mar": 18,
    "id_mod": 5,
    "id_fab": 8
>>>>>>> 8ba5c69ef87bd079902ec7ae884b0a13892072c6
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "resp": "cliente creado"
}
```

### HTTP Request
`POST api/almacen/productos/create`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `cod_prod` | string |  optional  | Codigo del producto.
        `num_parte_prod` | string |  optional  | Numero de parte del producto.
        `stk_prod` | integer |  optional  | Stock del producto.
        `des_prod` | string |  required  | Descripcion del producto
        `pre_com_prod` | integer |  optional  | Precio de compra del producto.
        `id_unimed` | integer |  optional  | Codigo de unidad de medida.
        `id_mar` | integer |  optional  | Codigo de marca.
        `id_mod` | integer |  optional  | Codigo de modelo.
        `id_fab` | integer |  optional  | Codigo de fabricante
    
<!-- END_58088cd6d4e7184322baad82507f4465 -->

<!-- START_0b7c984f2b1e370365ad7f5939e70fb5 -->
## Modificar producto

Modifica un producto

> Example request:

```bash
curl -X POST \
<<<<<<< HEAD
    "http://localhost/api/almacen/productos/update/illum" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"cod_prod":"ullam","num_parte_prod":"repudiandae","stk_prod":11,"des_prod":"delectus","pre_com_prod":17,"pre_ven_prod":17,"id_unimed":1,"id_mar":10,"id_mod":17,"id_fab":3}'
=======
    "http://localhost/api/almacen/productos/update/unde" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"cod_prod":"libero","num_parte_prod":"dolores","stk_prod":1,"des_prod":"minima","pre_com_prod":1,"id_unimed":19,"id_mar":12,"id_mod":20,"id_fab":3}'
>>>>>>> 8ba5c69ef87bd079902ec7ae884b0a13892072c6

```

```javascript
const url = new URL(
<<<<<<< HEAD
    "http://localhost/api/almacen/productos/update/illum"
=======
    "http://localhost/api/almacen/productos/update/unde"
>>>>>>> 8ba5c69ef87bd079902ec7ae884b0a13892072c6
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
<<<<<<< HEAD
    "cod_prod": "ullam",
    "num_parte_prod": "repudiandae",
    "stk_prod": 11,
    "des_prod": "delectus",
    "pre_com_prod": 17,
    "pre_ven_prod": 17,
    "id_unimed": 1,
    "id_mar": 10,
    "id_mod": 17,
=======
    "cod_prod": "libero",
    "num_parte_prod": "dolores",
    "stk_prod": 1,
    "des_prod": "minima",
    "pre_com_prod": 1,
    "id_unimed": 19,
    "id_mar": 12,
    "id_mod": 20,
>>>>>>> 8ba5c69ef87bd079902ec7ae884b0a13892072c6
    "id_fab": 3
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "resp": "producto actualizado"
}
```

### HTTP Request
`POST api/almacen/productos/update/{id}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `id` |  required  | El ID del producto.
#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `cod_prod` | string |  optional  | Codigo del producto.
        `num_parte_prod` | string |  optional  | Numero de parte del producto.
        `stk_prod` | integer |  optional  | Stock del producto.
        `des_prod` | string |  required  | Descripcion del producto
        `pre_com_prod` | integer |  optional  | Precio de compra del producto.
        `id_unimed` | integer |  optional  | Codigo de unidad de medida.
        `id_mar` | integer |  optional  | Codigo de marca.
        `id_mod` | integer |  optional  | Codigo de modelo.
        `id_fab` | integer |  optional  | Codigo de fabricante
    
<!-- END_0b7c984f2b1e370365ad7f5939e70fb5 -->

<!-- START_7111f8ee9991ca0044f11045c4f92132 -->
## Eliminar producto

Elimina un producto

> Example request:

```bash
curl -X GET \
<<<<<<< HEAD
    -G "http://localhost/api/almacen/productos/delete/aliquid" \
=======
    -G "http://localhost/api/almacen/productos/delete/debitis" \
>>>>>>> 8ba5c69ef87bd079902ec7ae884b0a13892072c6
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
<<<<<<< HEAD
    "http://localhost/api/almacen/productos/delete/aliquid"
=======
    "http://localhost/api/almacen/productos/delete/debitis"
>>>>>>> 8ba5c69ef87bd079902ec7ae884b0a13892072c6
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
    "resp": "producto eliminado"
}
```

### HTTP Request
`GET api/almacen/productos/delete/{id}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `id` |  required  | El ID del producto.

<!-- END_7111f8ee9991ca0044f11045c4f92132 -->

#Proveedores

APIs para proveedores
<!-- START_fe13c639e54fea7d6d5434c99c2e19d4 -->
## Retornar proveedores

Retorna todos los proveedores

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/proveedores/get" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/proveedores/get"
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
    "data": [
        {
            "id_prov": 0,
            "razsoc_prov": "string",
            "ema_prov": "string",
            "num_doc_prov": "char",
            "id_tipdoc": 0,
            "est_reg": "char",
            "created_at": "2020-06-14T06:07:02.419Z",
            "updated_at": "2020-06-14T06:07:02.419Z",
            "tipo_documento": {
                "id_tipdoc": 0,
                "des_tipdoc": "string"
            }
        }
    ],
    "size": 0
}
```

### HTTP Request
`GET api/proveedores/get`


<!-- END_fe13c639e54fea7d6d5434c99c2e19d4 -->

<!-- START_2e3e23e27dc0c412312570deda01ac0d -->
## Retornar proveedor

Retorna proveedor por Id

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/proveedores/get/eum" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/proveedores/get/eum"
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
    "id_prov": 0,
    "razsoc_prov": "string",
    "ema_prov": "string",
    "num_doc_prov": "char",
    "id_tipdoc": 0,
    "est_reg": "char",
    "created_at": "2020-06-14T06:07:02.419Z",
    "updated_at": "2020-06-14T06:07:02.419Z",
    "tipo_documento": {
        "id_tipdoc": 0,
        "des_tipdoc": "string"
    }
}
```

### HTTP Request
`GET api/proveedores/get/{id}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `id` |  required  | El ID del proveedor.

<!-- END_2e3e23e27dc0c412312570deda01ac0d -->

<!-- START_66db8d5120748b07c7cae153ffec2df9 -->
## Crear proveedor

Crea un proveedor

> Example request:

```bash
curl -X POST \
    "http://localhost/api/proveedores/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"razsoc_prov":"voluptatibus","ema_prov":"impedit","num_doc_prov":"est","id_tipodoc":6}'

```

```javascript
const url = new URL(
    "http://localhost/api/proveedores/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "razsoc_prov": "voluptatibus",
    "ema_prov": "impedit",
    "num_doc_prov": "est",
    "id_tipodoc": 6
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "resp": "proveedor creado"
}
```

### HTTP Request
`POST api/proveedores/create`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `razsoc_prov` | string |  required  | Razon social del proveedor.
        `ema_prov` | string |  optional  | email del proveeedor.
        `num_doc_prov` | char |  required  | Numero de documento del proveedor.
        `id_tipodoc` | integer |  optional  | Tipo de documento del proveedor.
    
<!-- END_66db8d5120748b07c7cae153ffec2df9 -->

<!-- START_220eeeda41fa3bfb0ce84362efed7339 -->
## Modificar proveedor

Modifica un proveedor

> Example request:

```bash
curl -X POST \
    "http://localhost/api/proveedores/update/est" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"razsoc_prov":"odio","ema_prov":"consequatur","num_doc_prov":"et","id_tipodoc":17}'

```

```javascript
const url = new URL(
    "http://localhost/api/proveedores/update/est"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "razsoc_prov": "odio",
    "ema_prov": "consequatur",
    "num_doc_prov": "et",
    "id_tipodoc": 17
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "resp": "proveedor actualizado"
}
```

### HTTP Request
`POST api/proveedores/update/{id}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `id` |  required  | El ID del proveedor.
#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `razsoc_prov` | string |  required  | Razon social del proveedor.
        `ema_prov` | string |  optional  | email del proveeedor.
        `num_doc_prov` | char |  required  | Numero de documento del proveedor.
        `id_tipodoc` | integer |  optional  | Tipo de documento del proveedor.     *
    
<!-- END_220eeeda41fa3bfb0ce84362efed7339 -->

<!-- START_5d82d3b8419166f2c2a885264350abbb -->
## Eliminar proveedor

Elimina un proveedor

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/proveedores/delete/sequi" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/proveedores/delete/sequi"
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
    "resp": "proveedor eliminado"
}
```

### HTTP Request
`GET api/proveedores/delete/{id}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `id` |  required  | El ID del proveedor.

<!-- END_5d82d3b8419166f2c2a885264350abbb -->

#Proveeedor Colaborador

APIs para el colaborador del proveedor
<!-- START_b48b98efbfb006c034f55ecd1655622b -->
## Retornar colaboradores proveedores

Retorna todos los colaboradores proveedores

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/proveedores-colaborador/get" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/proveedores-colaborador/get"
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
    "data": [
        {
            "id_prov_Col": 0,
            "nom_prov_col": "string",
            "ema_prov_col": "string",
            "tel_prov_col": "char",
            "created_at": "2020-06-14T06:07:02.419Z",
            "updated_at": "2020-06-14T06:07:02.419Z"
        }
    ],
    "size": 0
}
```

### HTTP Request
`GET api/proveedores-colaborador/get`


<!-- END_b48b98efbfb006c034f55ecd1655622b -->

<!-- START_32bcbc57494c0491d6748426fd1fa91e -->
## Retornar colaborador proveedor

Retorna colaborador proveedor por Id

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/proveedores-colaborador/get/facilis" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/proveedores-colaborador/get/facilis"
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
    "id_prov_Col": 0,
    "nom_prov_col": "string",
    "ema_prov_col": "string",
    "tel_prov_col": "char",
    "created_at": "2020-06-14T06:07:02.419Z",
    "updated_at": "2020-06-14T06:07:02.419Z"
}
```

### HTTP Request
`GET api/proveedores-colaborador/get/{id}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `id` |  required  | El ID del colaborador proveedor.

<!-- END_32bcbc57494c0491d6748426fd1fa91e -->

<!-- START_aaaee19d4b986ebda9f33a4b700f1f00 -->
## Crear colaborador proveedor

Crea un colaborador proveedor

> Example request:

```bash
curl -X POST \
    "http://localhost/api/proveedores-colaborador/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"nom_prov":"minus","ema_prov":"rerum","tel_prov":"odio","id":"corrupti"}'

```

```javascript
const url = new URL(
    "http://localhost/api/proveedores-colaborador/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "nom_prov": "minus",
    "ema_prov": "rerum",
    "tel_prov": "odio",
    "id": "corrupti"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "resp": "colaborador proveedor creado"
}
```

### HTTP Request
`POST api/proveedores-colaborador/create`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `nom_prov` | string |  required  | nombre del colaborador del proveedor.
        `ema_prov` | string |  required  | email del colaborador proveedor.
        `tel_prov` | string |  optional  | telefono opcional del colaborador proveedor.
        `id` | del |  optional  | proveedor.
    
<!-- END_aaaee19d4b986ebda9f33a4b700f1f00 -->

<!-- START_d369125c1aa116cb5a60db6df169d68d -->
## Modificar colaborador proveedor

Modifica un colaborador proveedor

> Example request:

```bash
curl -X POST \
    "http://localhost/api/proveedores-colaborador/update/dolor" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"nom_prov":"vel","ema_prov":"ipsa","tel_prov":"eveniet","id":"voluptatem"}'

```

```javascript
const url = new URL(
    "http://localhost/api/proveedores-colaborador/update/dolor"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "nom_prov": "vel",
    "ema_prov": "ipsa",
    "tel_prov": "eveniet",
    "id": "voluptatem"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "resp": "colaborador proveedor actualizado"
}
```

### HTTP Request
`POST api/proveedores-colaborador/update/{id}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `id` |  required  | El ID del colaborador proveedor.
#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `nom_prov` | string |  required  | nombre del colaborador del proveedor.
        `ema_prov` | string |  required  | email del colaborador  proveedor.
        `tel_prov` | string |  optional  | telefono opcional del colaborador proveedor.
        `id` | del |  optional  | proveedor.
    
<!-- END_d369125c1aa116cb5a60db6df169d68d -->

<!-- START_0cfc74ba23427f7b73c414a0df3b95c5 -->
## Eliminar colaborador proveedor

Elimina un colaborador proveedor

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/proveedores-colaborador/delete/asperiores" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/proveedores-colaborador/delete/asperiores"
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
    "resp": "colaborador proveedor eliminado"
}
```

### HTTP Request
`GET api/proveedores-colaborador/delete/{id}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `id` |  required  | El ID del colaborador proveedor.

<!-- END_0cfc74ba23427f7b73c414a0df3b95c5 -->

#Proveeedor Direccion

APIs para direccion del Proveedor
<!-- START_15e0ff732c710063b0dc8df09e1b1449 -->
## Retornar direcciones proveedores

Retorna todos las direcciones de proveedores

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/proveedores-direccion/get" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/proveedores-direccion/get"
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
    "data": [
        {
            "id_prov_dir": 0,
            "ciu_prov": "string",
            "dir_prov": "string",
            "tel_prov": "char",
            "id_prov": "@",
            "est_reg": "char",
            "created_at": "2020-06-14T06:07:02.419Z",
            "updated_at": "2020-06-14T06:07:02.419Z"
        }
    ],
    "size": 0
}
```

### HTTP Request
`GET api/proveedores-direccion/get`


<!-- END_15e0ff732c710063b0dc8df09e1b1449 -->

<!-- START_87ac2326fce62dd53d8c46bef6afa79e -->
## Retornar direccion proveedor

Retorna la direccion de proveedor por Id

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/proveedores-direccion/get/modi" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/proveedores-direccion/get/modi"
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
    "id_prov_dir": 0,
    "ciu_prov": "string",
    "dir_prov": "string",
    "tel_prov": "char",
    "id_prov": "@",
    "est_reg": "char",
    "created_at": "2020-06-14T06:07:02.419Z",
    "updated_at": "2020-06-14T06:07:02.419Z",
    "proveedor_identificador": {
        "id_prov": 0,
        "razsoc_prov": "string"
    }
}
```

### HTTP Request
`GET api/proveedores-direccion/get/{id}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `id` |  required  | El ID de la direccion del proveedor.

<!-- END_87ac2326fce62dd53d8c46bef6afa79e -->

<!-- START_ba0340f18d742d4657665b13b963b428 -->
## Modificar direccion proveedor

Modifica una direccion de proveedor

> Example request:

```bash
curl -X POST \
    "http://localhost/api/proveedores-direccion/update/architecto" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"ciu_prov":"beatae","dir_prov":"reiciendis","tel_prov":"sed","id":"nihil"}'

```

```javascript
const url = new URL(
    "http://localhost/api/proveedores-direccion/update/architecto"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "ciu_prov": "beatae",
    "dir_prov": "reiciendis",
    "tel_prov": "sed",
    "id": "nihil"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "resp": "direccion proveedor actualizado"
}
```

### HTTP Request
`POST api/proveedores-direccion/update/{id}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `id` |  required  | El ID de la direccion proveedor.
#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `ciu_prov` | string |  required  | ciudad del proveedor.
        `dir_prov` | string |  required  | direccion proveedor.
        `tel_prov` | string |  optional  | telefono required del proveedor.
        `id` | del |  optional  | proveedor int identificardor del proveedor.
    
<!-- END_ba0340f18d742d4657665b13b963b428 -->

<!-- START_276d47de9dc8e51a7241d0b07607ad8d -->
## Crear proveedor

Crea una direccion de proveedor

> Example request:

```bash
curl -X POST \
    "http://localhost/api/proveedores-direccion/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"ciu_prov":"est","dir_prov":"voluptatem","tel_prov":"hic","id":"consequuntur"}'

```

```javascript
const url = new URL(
    "http://localhost/api/proveedores-direccion/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "ciu_prov": "est",
    "dir_prov": "voluptatem",
    "tel_prov": "hic",
    "id": "consequuntur"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "resp": "direccion del proveedor creado"
}
```

### HTTP Request
`POST api/proveedores-direccion/create`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `ciu_prov` | string |  required  | ciudad del proveedor.
        `dir_prov` | string |  required  | direccion proveedor.
        `tel_prov` | char |  optional  | telefono required del proveedor.
        `id` | del |  optional  | proveedor int identificardor del proveedor.
    
<!-- END_276d47de9dc8e51a7241d0b07607ad8d -->

<!-- START_f3918fa27ae8af8ba6e606a22b8e8647 -->
## Eliminar direccion proveedor

Elimina un direccion proveedor

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/proveedores-direccion/delete/similique" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/proveedores-direccion/delete/similique"
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
    "resp": "direccion proveedor eliminado"
}
```

### HTTP Request
`GET api/proveedores-direccion/delete/{id}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `id` |  required  | El ID de la direccion del proveedor.

<!-- END_f3918fa27ae8af8ba6e606a22b8e8647 -->

#Registro de Cambios

APIs para Registro de cambios
<!-- START_8098da551e46346182bb2d2cb55b6886 -->
## Retornar Registros de Cambio

Retorna todos los registros de cambio

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/logs/get" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/logs/get"
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
`GET api/logs/get`


<!-- END_8098da551e46346182bb2d2cb55b6886 -->

#Tipo de Documento

APIs para tipos de documento
<!-- START_6e2ed9234917d79887308ec01d705076 -->
## Retornar tipos de documento

Retorna todos los tipos de documento

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/usuarios/tiposdoc/get" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/usuarios/tiposdoc/get"
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
    "data": [
        {
            "id_tipdoc": 0,
            "cod_tipdoc": "string",
            "des_tipdoc": "string",
            "est_reg": "string"
        }
    ],
    "size": 0
}
```

### HTTP Request
`GET api/usuarios/tiposdoc/get`


<!-- END_6e2ed9234917d79887308ec01d705076 -->

<!-- START_7acd094ca28545da2e3fb235a1683bc5 -->
## Retornar tipo de documento

Retorna tipo de documento por Id

> Example request:

```bash
curl -X GET \
<<<<<<< HEAD
    -G "http://localhost/api/usuarios/tiposdoc/get/error" \
=======
    -G "http://localhost/api/usuarios/tiposdoc/get/et" \
>>>>>>> 8ba5c69ef87bd079902ec7ae884b0a13892072c6
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
<<<<<<< HEAD
    "http://localhost/api/usuarios/tiposdoc/get/error"
=======
    "http://localhost/api/usuarios/tiposdoc/get/et"
>>>>>>> 8ba5c69ef87bd079902ec7ae884b0a13892072c6
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
    "id_tipdoc": 0,
    "cod_tipdoc": "string",
    "des_tipdoc": "string",
    "est_reg": "string"
}
```

### HTTP Request
`GET api/usuarios/tiposdoc/get/{id}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `id` |  required  | El ID del tipo de documento.

<!-- END_7acd094ca28545da2e3fb235a1683bc5 -->

<!-- START_438e338c1db045e173ad1141746066f9 -->
## Crear tipo de documento

Crea un tipo de documento

> Example request:

```bash
curl -X POST \
    "http://localhost/api/usuarios/tiposdoc/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
<<<<<<< HEAD
    -d '{"des_tipdoc":"omnis"}'
=======
    -d '{"cod_tipdoc":"rerum","des_tipdoc":"amet"}'
>>>>>>> 8ba5c69ef87bd079902ec7ae884b0a13892072c6

```

```javascript
const url = new URL(
    "http://localhost/api/usuarios/tiposdoc/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
<<<<<<< HEAD
    "des_tipdoc": "omnis"
=======
    "cod_tipdoc": "rerum",
    "des_tipdoc": "amet"
>>>>>>> 8ba5c69ef87bd079902ec7ae884b0a13892072c6
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "resp": "tipo de documento creado"
}
```

### HTTP Request
`POST api/usuarios/tiposdoc/create`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `cod_tipdoc` | string |  required  | Codigo del tipo de documento.
        `des_tipdoc` | string |  required  | Descripcion del tipo de documento.
    
<!-- END_438e338c1db045e173ad1141746066f9 -->

<!-- START_90e006fa44f4d1fde8bdaee13a4b198a -->
## Modificar tipo de documento

Modifica un tipo de documento

> Example request:

```bash
curl -X POST \
<<<<<<< HEAD
    "http://localhost/api/usuarios/tiposdoc/update/quod" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"des_tipdoc":"a"}'
=======
    "http://localhost/api/usuarios/tiposdoc/update/qui" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"cod_tipdoc":"commodi","des_tipdoc":"voluptatum"}'
>>>>>>> 8ba5c69ef87bd079902ec7ae884b0a13892072c6

```

```javascript
const url = new URL(
<<<<<<< HEAD
    "http://localhost/api/usuarios/tiposdoc/update/quod"
=======
    "http://localhost/api/usuarios/tiposdoc/update/qui"
>>>>>>> 8ba5c69ef87bd079902ec7ae884b0a13892072c6
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
<<<<<<< HEAD
    "des_tipdoc": "a"
=======
    "cod_tipdoc": "commodi",
    "des_tipdoc": "voluptatum"
>>>>>>> 8ba5c69ef87bd079902ec7ae884b0a13892072c6
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "resp": "tipo de documento actualizado"
}
```

### HTTP Request
`POST api/usuarios/tiposdoc/update/{id}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `id` |  required  | El ID del tipo de documento.
#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `cod_tipdoc` | string |  required  | Codigo del tipo de documento.
        `des_tipdoc` | string |  required  | Descripcion del tipo de documento.
    
<!-- END_90e006fa44f4d1fde8bdaee13a4b198a -->

<!-- START_5fbb4f0e8844146c78715d42d3e19d27 -->
## Eliminar tipo de documento

Elimina un tipo de documento

> Example request:

```bash
curl -X GET \
<<<<<<< HEAD
    -G "http://localhost/api/usuarios/tiposdoc/delete/iste" \
=======
    -G "http://localhost/api/usuarios/tiposdoc/delete/qui" \
>>>>>>> 8ba5c69ef87bd079902ec7ae884b0a13892072c6
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
<<<<<<< HEAD
    "http://localhost/api/usuarios/tiposdoc/delete/iste"
=======
    "http://localhost/api/usuarios/tiposdoc/delete/qui"
>>>>>>> 8ba5c69ef87bd079902ec7ae884b0a13892072c6
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
    "resp": "tipo de documento eliminado"
}
```

### HTTP Request
`GET api/usuarios/tiposdoc/delete/{id}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `id` |  required  | El ID del tipo de documento.

<!-- END_5fbb4f0e8844146c78715d42d3e19d27 -->

#Unidades de Medida

APIs para unidades de medida
<!-- START_a45c2f2096d97df80747fec5594bfdc0 -->
## Retornar unidades de medida

Retorna todas las unidades de medida

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/almacen/unidadesmedida/get" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/almacen/unidadesmedida/get"
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
    "data": [
        {
            "id_unimed": 0,
            "nom_unimed": "string",
            "des_unimed": "string",
            "est_reg": "string",
            "created_at": "2020-06-14T06:07:02.419Z",
            "updated_at": "2020-06-14T06:07:02.419Z"
        }
    ],
    "size": 0
}
```

### HTTP Request
`GET api/almacen/unidadesmedida/get`


<!-- END_a45c2f2096d97df80747fec5594bfdc0 -->

<!-- START_42048eb4be2330c0b04bee79e749dd89 -->
## Retornar unidad de medida

Retorna unidad de medida por Id

> Example request:

```bash
curl -X GET \
<<<<<<< HEAD
    -G "http://localhost/api/almacen/unidadesmedida/get/nihil" \
=======
    -G "http://localhost/api/almacen/unidadesmedida/get/et" \
>>>>>>> 8ba5c69ef87bd079902ec7ae884b0a13892072c6
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
<<<<<<< HEAD
    "http://localhost/api/almacen/unidadesmedida/get/nihil"
=======
    "http://localhost/api/almacen/unidadesmedida/get/et"
>>>>>>> 8ba5c69ef87bd079902ec7ae884b0a13892072c6
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
    "id_unimed": 0,
    "nom_unimed": "string",
    "des_unimed": "string",
    "est_reg": "string",
    "created_at": "2020-06-14T06:07:02.419Z",
    "updated_at": "2020-06-14T06:07:02.419Z"
}
```

### HTTP Request
`GET api/almacen/unidadesmedida/get/{id}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `id` |  required  | El ID de la unidad de medida.

<!-- END_42048eb4be2330c0b04bee79e749dd89 -->

<!-- START_d0d6daad18c017bc16bc9ff0f039b43b -->
## Crear unidad de medida

Crea una unidad de medida

> Example request:

```bash
curl -X POST \
    "http://localhost/api/almacen/unidadesmedida/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
<<<<<<< HEAD
    -d '{"nom_unimed":"est","des_mar":"sunt"}'
=======
    -d '{"nom_unimed":"enim","des_mar":"sit"}'
>>>>>>> 8ba5c69ef87bd079902ec7ae884b0a13892072c6

```

```javascript
const url = new URL(
    "http://localhost/api/almacen/unidadesmedida/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
<<<<<<< HEAD
    "nom_unimed": "est",
    "des_mar": "sunt"
=======
    "nom_unimed": "enim",
    "des_mar": "sit"
>>>>>>> 8ba5c69ef87bd079902ec7ae884b0a13892072c6
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "resp": "unidad de medida creada"
}
```

### HTTP Request
`POST api/almacen/unidadesmedida/create`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `nom_unimed` | string |  required  | Nombre de la unidad de medida.
        `des_mar` | string |  optional  | Descripcion de la unidad de medida.
    
<!-- END_d0d6daad18c017bc16bc9ff0f039b43b -->

<!-- START_0c3b2a0402520912d9705a912f01427e -->
## Modificar unidad de medida

Modifica una unidad de medida

> Example request:

```bash
curl -X POST \
<<<<<<< HEAD
    "http://localhost/api/almacen/unidadesmedida/update/ut" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"nom_unimed":"quaerat","des_mar":"beatae"}'
=======
    "http://localhost/api/almacen/unidadesmedida/update/asperiores" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"nom_unimed":"eligendi","des_mar":"qui"}'
>>>>>>> 8ba5c69ef87bd079902ec7ae884b0a13892072c6

```

```javascript
const url = new URL(
<<<<<<< HEAD
    "http://localhost/api/almacen/unidadesmedida/update/ut"
=======
    "http://localhost/api/almacen/unidadesmedida/update/asperiores"
>>>>>>> 8ba5c69ef87bd079902ec7ae884b0a13892072c6
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
<<<<<<< HEAD
    "nom_unimed": "quaerat",
    "des_mar": "beatae"
=======
    "nom_unimed": "eligendi",
    "des_mar": "qui"
>>>>>>> 8ba5c69ef87bd079902ec7ae884b0a13892072c6
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "resp": "unidad de medida actualizada"
}
```

### HTTP Request
`POST api/almacen/unidadesmedida/update/{id}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `id` |  required  | El ID de la unidad de medida.
#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `nom_unimed` | string |  required  | Nombre de la unidad de medida.
        `des_mar` | string |  optional  | Descripcion de la unidad de medida.
    
<!-- END_0c3b2a0402520912d9705a912f01427e -->

<!-- START_98375b40e3b8a4fe3068c1e4b856b6bb -->
## Eliminar unidad de medida

Elimina una unidad de medida

> Example request:

```bash
curl -X GET \
<<<<<<< HEAD
    -G "http://localhost/api/almacen/unidadesmedida/delete/hic" \
=======
    -G "http://localhost/api/almacen/unidadesmedida/delete/ab" \
>>>>>>> 8ba5c69ef87bd079902ec7ae884b0a13892072c6
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
<<<<<<< HEAD
    "http://localhost/api/almacen/unidadesmedida/delete/hic"
=======
    "http://localhost/api/almacen/unidadesmedida/delete/ab"
>>>>>>> 8ba5c69ef87bd079902ec7ae884b0a13892072c6
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
    "resp": "unidad de medida eliminada"
}
```

### HTTP Request
`GET api/almacen/unidadesmedida/delete/{id}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `id` |  required  | El ID de la unidad de medida.

<!-- END_98375b40e3b8a4fe3068c1e4b856b6bb -->

#Usuarios

APIs para usuarios
<!-- START_c833fd1165a6e10c027fa9c0d22a0cd8 -->
## Retornar usuarios

Retorna todos los usuarios

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/usuarios/get" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/usuarios/get"
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
    "data": [
        {
            "id_col": 0,
            "nom_col": "string",
            "ape_col": "string",
            "email": "string",
            "num_doc_col": "string",
            "id_tipdoc": 0,
            "cod_col": "string",
            "cel_col": "string",
            "id_car": 0,
            "est_reg": "string",
            "tipo_documento": {
                "id_tipdoc": 0,
                "des_tipdoc": "string"
            },
            "cargo": {
                "id_car": 0,
                "des_car": "string"
            }
        }
    ],
    "size": 0
}
```

### HTTP Request
`GET api/usuarios/get`


<!-- END_c833fd1165a6e10c027fa9c0d22a0cd8 -->

<!-- START_cda86a80e8f24c1ae3988d85afbd11a5 -->
## Retornar usuario

Retorna usuario por Id

> Example request:

```bash
curl -X GET \
<<<<<<< HEAD
    -G "http://localhost/api/usuarios/get/architecto" \
=======
    -G "http://localhost/api/usuarios/get/aliquam" \
>>>>>>> 8ba5c69ef87bd079902ec7ae884b0a13892072c6
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
<<<<<<< HEAD
    "http://localhost/api/usuarios/get/architecto"
=======
    "http://localhost/api/usuarios/get/aliquam"
>>>>>>> 8ba5c69ef87bd079902ec7ae884b0a13892072c6
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
    "id_col": 0,
    "nom_col": "string",
    "ape_col": "string",
    "email": "string",
    "num_doc_col": "string",
    "cod_col": "string",
    "cel_col": "string",
    "id_tipdoc": 0,
    "id_car": 0,
    "est_reg": "string",
    "tipo_documento": {
        "id_tipdoc": 0,
        "des_tipdoc": "string"
    },
    "cargo": {
        "id_car": 0,
        "des_car": "string"
    }
}
```

### HTTP Request
`GET api/usuarios/get/{id}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `id` |  required  | El ID del usuario.

<!-- END_cda86a80e8f24c1ae3988d85afbd11a5 -->

<!-- START_59c971d0776052043fa5d10649291b4e -->
## Crear usuario

Crea un usuario

> Example request:

```bash
curl -X POST \
    "http://localhost/api/usuarios/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
<<<<<<< HEAD
    -d '{"nom_col":"fugiat","ape_col":"perspiciatis","email":"architecto","password":"quae","num_doc_col":"repudiandae","id_tipdoc":7,"id_car":16}'
=======
    -d '{"nom_col":"assumenda","ape_col":"ea","email":"fugiat","password":"nesciunt","num_doc_col":"autem","cod_col":"et","cel_col":"culpa","id_tipdoc":5,"id_car":9}'
>>>>>>> 8ba5c69ef87bd079902ec7ae884b0a13892072c6

```

```javascript
const url = new URL(
    "http://localhost/api/usuarios/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
<<<<<<< HEAD
    "nom_col": "fugiat",
    "ape_col": "perspiciatis",
    "email": "architecto",
    "password": "quae",
    "num_doc_col": "repudiandae",
    "id_tipdoc": 7,
    "id_car": 16
=======
    "nom_col": "assumenda",
    "ape_col": "ea",
    "email": "fugiat",
    "password": "nesciunt",
    "num_doc_col": "autem",
    "cod_col": "et",
    "cel_col": "culpa",
    "id_tipdoc": 5,
    "id_car": 9
>>>>>>> 8ba5c69ef87bd079902ec7ae884b0a13892072c6
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "resp": "usuario creado"
}
```

### HTTP Request
`POST api/usuarios/create`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `nom_col` | string |  required  | Nombre del usuario
        `ape_col` | string |  required  | Apellido del usuario.
        `email` | string |  required  | Email del usuario.
        `password` | string |  optional  | Contraseña del usuario.
        `num_doc_col` | string |  required  | Numero de documento del usuario.
        `cod_col` | string |  required  | Codigo interno del usuario.
        `cel_col` | string |  optional  | Celular del usuario.
        `id_tipdoc` | integer |  optional  | codigo de Tipo de documento.
        `id_car` | integer |  optional  | codigo de Cargo.
    
<!-- END_59c971d0776052043fa5d10649291b4e -->

<!-- START_0895921cb7cebd6c32b286aaf9650920 -->
## Modificar usuario

Modifica un usuario

> Example request:

```bash
curl -X POST \
<<<<<<< HEAD
    "http://localhost/api/usuarios/update/est" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"nom_col":"nostrum","ape_col":"doloremque","email":"ipsam","num_doc_col":"sunt","id_tipdoc":8,"id_car":8}'
=======
    "http://localhost/api/usuarios/update/sunt" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"nom_col":"reprehenderit","ape_col":"quis","email":"voluptatem","num_doc_col":"quos","cod_col":"illum","cel_col":"nobis","id_tipdoc":6,"id_car":12}'
>>>>>>> 8ba5c69ef87bd079902ec7ae884b0a13892072c6

```

```javascript
const url = new URL(
<<<<<<< HEAD
    "http://localhost/api/usuarios/update/est"
=======
    "http://localhost/api/usuarios/update/sunt"
>>>>>>> 8ba5c69ef87bd079902ec7ae884b0a13892072c6
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
<<<<<<< HEAD
    "nom_col": "nostrum",
    "ape_col": "doloremque",
    "email": "ipsam",
    "num_doc_col": "sunt",
    "id_tipdoc": 8,
    "id_car": 8
=======
    "nom_col": "reprehenderit",
    "ape_col": "quis",
    "email": "voluptatem",
    "num_doc_col": "quos",
    "cod_col": "illum",
    "cel_col": "nobis",
    "id_tipdoc": 6,
    "id_car": 12
>>>>>>> 8ba5c69ef87bd079902ec7ae884b0a13892072c6
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "resp": "usuario actualizado"
}
```

### HTTP Request
`POST api/usuarios/update/{id}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `id` |  required  | El ID del usuario.
#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `nom_col` | string |  required  | Nombre del usuario
        `ape_col` | string |  required  | Apellido del usuario.
        `email` | string |  required  | Email del usuario.
        `num_doc_col` | string |  required  | Numero de documento del usuario.
        `cod_col` | string |  required  | Codigo interno del usuario.
        `cel_col` | string |  optional  | Celular del usuario.
        `id_tipdoc` | integer |  optional  | codigo de Tipo de documento.
        `id_car` | integer |  optional  | codigo de Cargo.
    
<!-- END_0895921cb7cebd6c32b286aaf9650920 -->

<!-- START_324b540109078071900da77f2e1d7db6 -->
## Eliminar usuario

Elimina un usuario

> Example request:

```bash
curl -X GET \
<<<<<<< HEAD
    -G "http://localhost/api/usuarios/delete/nemo" \
=======
    -G "http://localhost/api/usuarios/delete/molestiae" \
>>>>>>> 8ba5c69ef87bd079902ec7ae884b0a13892072c6
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
<<<<<<< HEAD
    "http://localhost/api/usuarios/delete/nemo"
=======
    "http://localhost/api/usuarios/delete/molestiae"
>>>>>>> 8ba5c69ef87bd079902ec7ae884b0a13892072c6
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
    "resp": "usuario eliminado"
}
```

### HTTP Request
`GET api/usuarios/delete/{id}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `id` |  required  | El ID del usuario.

<!-- END_324b540109078071900da77f2e1d7db6 -->

<!-- START_db4094c137e82a41fa012566ad016c41 -->
## Modificar Contraseña

Modifica la contraseña persona

> Example request:

```bash
curl -X POST \
    "http://localhost/api/usuarios/update/password/fugiat" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"email":"modi","old_password":"expedita","new_password":"est"}'

```

```javascript
const url = new URL(
    "http://localhost/api/usuarios/update/password/fugiat"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": "modi",
    "old_password": "expedita",
    "new_password": "est"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "resp": "Contraseña actualizada o credenciales no validas",
    "code": "200 o 101"
}
```

### HTTP Request
`POST api/usuarios/update/password/{id}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `id` |  required  | El ID del usuario.
#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `email` | string |  required  | Enail del usuario
        `old_password` | string |  required  | Contraseña antigua.
        `new_password` | string |  required  | Contraseña nueva.
    
<!-- END_db4094c137e82a41fa012566ad016c41 -->

#general


<!-- START_f7b7ea397f8939c8bb93e6cab64603ce -->
## Display Swagger API page.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/documentation" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/documentation"
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
`GET api/documentation`


<!-- END_f7b7ea397f8939c8bb93e6cab64603ce -->

<!-- START_1ead214f30a5e235e7140eb2aaa29eee -->
## Dump api-docs content endpoint. Supports dumping a json, or yaml file.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/docs/" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/docs/"
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


> Example response (404):

```json
{
    "message": "Unable to generate documentation file to: \"C:\\Users\\Jean\\Documents\\PIS\\billing-and-warehouse-project\\ncsrlback\\storage\\api-docs\/api-docs.json\". Please make sure directory is writable. Error: Required @OA\\Info() not found"
}
```

### HTTP Request
`GET docs/{jsonFile?}`

`POST docs/{jsonFile?}`

`PUT docs/{jsonFile?}`

`PATCH docs/{jsonFile?}`

`DELETE docs/{jsonFile?}`

`OPTIONS docs/{jsonFile?}`


<!-- END_1ead214f30a5e235e7140eb2aaa29eee -->

<!-- START_1a23c1337818a4de9e417863aebaca33 -->
## docs/asset/{asset}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/docs/asset/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/docs/asset/1"
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


> Example response (404):

```json
{
    "message": "(1) - this L5 Swagger asset is not allowed"
}
```

### HTTP Request
`GET docs/asset/{asset}`


<!-- END_1a23c1337818a4de9e417863aebaca33 -->

<!-- START_a2c4ea37605c6d2e3c93b7269030af0a -->
## Display Oauth2 callback pages.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/oauth2-callback" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/oauth2-callback"
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
`GET api/oauth2-callback`


<!-- END_a2c4ea37605c6d2e3c93b7269030af0a -->

<!-- START_fe13c639e54fea7d6d5434c99c2e19d4 -->
## api/proveedores/get
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/proveedores/get" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/proveedores/get"
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


> Example response (407):

```json
{
    "status": "Authorization Token not found"
}
```

### HTTP Request
`GET api/proveedores/get`


<!-- END_fe13c639e54fea7d6d5434c99c2e19d4 -->

<!-- START_2e3e23e27dc0c412312570deda01ac0d -->
## api/proveedores/get/{id}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/proveedores/get/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/proveedores/get/1"
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


> Example response (407):

```json
{
    "status": "Authorization Token not found"
}
```

### HTTP Request
`GET api/proveedores/get/{id}`


<!-- END_2e3e23e27dc0c412312570deda01ac0d -->

<!-- START_66db8d5120748b07c7cae153ffec2df9 -->
## api/proveedores/create
> Example request:

```bash
curl -X POST \
    "http://localhost/api/proveedores/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/proveedores/create"
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
`POST api/proveedores/create`


<!-- END_66db8d5120748b07c7cae153ffec2df9 -->

<!-- START_220eeeda41fa3bfb0ce84362efed7339 -->
## api/proveedores/update/{id}
> Example request:

```bash
curl -X POST \
    "http://localhost/api/proveedores/update/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/proveedores/update/1"
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
`POST api/proveedores/update/{id}`


<!-- END_220eeeda41fa3bfb0ce84362efed7339 -->

<!-- START_5d82d3b8419166f2c2a885264350abbb -->
## api/proveedores/delete/{id}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/proveedores/delete/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/proveedores/delete/1"
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


> Example response (407):

```json
{
    "status": "Authorization Token not found"
}
```

### HTTP Request
`GET api/proveedores/delete/{id}`


<!-- END_5d82d3b8419166f2c2a885264350abbb -->


