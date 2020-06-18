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

Login del siste,a

> Example request:

```bash
curl -X POST \
    "http://localhost/api/login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"email":"assumenda","password":"voluptas"}'

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
    "email": "assumenda",
    "password": "voluptas"
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
    -G "http://localhost/api/usuarios/cargos/get/possimus" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/usuarios/cargos/get/possimus"
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
    -d '{"des_car":"vero"}'

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
    "des_car": "vero"
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
    "http://localhost/api/usuarios/cargos/update/iure" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"des_car":"qui"}'

```

```javascript
const url = new URL(
    "http://localhost/api/usuarios/cargos/update/iure"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "des_car": "qui"
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
    -G "http://localhost/api/usuarios/cargos/delete/perspiciatis" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/usuarios/cargos/delete/perspiciatis"
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
    -G "http://localhost/api/clientes/get/optio" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/clientes/get/optio"
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
    -d '{"razsoc_cli":"atque","numdoc_cli":"perspiciatis","ema_cli":"voluptatum","id_tipodoc":7,"contactos":[],"direcciones":[]}'

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
    "razsoc_cli": "atque",
    "numdoc_cli": "perspiciatis",
    "ema_cli": "voluptatum",
    "id_tipodoc": 7,
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
        `contactos` | array |  optional  | Ejemplo: {"nom_cli_con":"string","ema_cli_con":"string","tel_cli_con":"string"}
        `direcciones` | array |  optional  | Ejemplo: {"ciu_cli":"string","dir_cli":"string","tel_cli":"string"}
    
<!-- END_a0d7178e5a6e1a47b5726394c2332557 -->

<!-- START_154df38aecb171bb5d97700f8f1a6d55 -->
## Modificar cliente

Modifica un cliente

> Example request:

```bash
curl -X POST \
    "http://localhost/api/clientes/update/tenetur" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"razsoc_cli":"et","numdoc_cli":"nemo","ema_cli":"et","id_tipodoc":16,"contactos":[],"direcciones":[]}'

```

```javascript
const url = new URL(
    "http://localhost/api/clientes/update/tenetur"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "razsoc_cli": "et",
    "numdoc_cli": "nemo",
    "ema_cli": "et",
    "id_tipodoc": 16,
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
        `contactos` | array |  optional  | Ejemplo: {"id_cli_con": 0,"nom_cli_con":"string","ema_cli_con":"string","tel_cli_con":"string","est_reg": "string"}
        `direcciones` | array |  optional  | Ejemplo: {"id_cli_dir": 0,"ciu_cli":"string","dir_cli":"string","tel_cli":"string","est_reg": "string"}
    
<!-- END_154df38aecb171bb5d97700f8f1a6d55 -->

<!-- START_bd1413105f139350c3c2fe553f75b8a6 -->
## Eliminar cliente

Elimina un cliente

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/clientes/delete/quas" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/clientes/delete/quas"
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
    -G "http://localhost/api/almacen/fabricantes/get/velit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/almacen/fabricantes/get/velit"
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
    -d '{"des_fab":"porro"}'

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
    "des_fab": "porro"
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
    "http://localhost/api/almacen/fabricantes/update/consectetur" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"des_fab":"quo"}'

```

```javascript
const url = new URL(
    "http://localhost/api/almacen/fabricantes/update/consectetur"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "des_fab": "quo"
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
    -G "http://localhost/api/almacen/fabricantes/delete/sed" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/almacen/fabricantes/delete/sed"
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
    -G "http://localhost/api/almacen/marcas/get/id" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/almacen/marcas/get/id"
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
    -d '{"des_mar":"delectus"}'

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
    "des_mar": "delectus"
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
    "http://localhost/api/almacen/marcas/update/et" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"des_mar":"ducimus"}'

```

```javascript
const url = new URL(
    "http://localhost/api/almacen/marcas/update/et"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "des_mar": "ducimus"
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
    -G "http://localhost/api/almacen/marcas/delete/aperiam" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/almacen/marcas/delete/aperiam"
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
    -G "http://localhost/api/almacen/modelos/get/quo" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/almacen/modelos/get/quo"
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
    -d '{"des_mod":"fugit"}'

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
    "des_mod": "fugit"
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
    "http://localhost/api/almacen/modelos/update/saepe" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"des_mod":"est"}'

```

```javascript
const url = new URL(
    "http://localhost/api/almacen/modelos/update/saepe"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "des_mod": "est"
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
    -G "http://localhost/api/almacen/modelos/delete/voluptatem" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/almacen/modelos/delete/voluptatem"
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
            "pre_ven_prod": 0,
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
    -G "http://localhost/api/almacen/productos/get/ut" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/almacen/productos/get/ut"
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
    "pre_ven_prod": 0,
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
    -d '{"cod_prod":"eos","num_parte_prod":"quidem","stk_prod":5,"des_prod":"aut","pre_com_prod":13,"pre_ven_prod":15,"id_unimed":16,"id_mar":9,"id_mod":17,"id_fab":8}'

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
    "cod_prod": "eos",
    "num_parte_prod": "quidem",
    "stk_prod": 5,
    "des_prod": "aut",
    "pre_com_prod": 13,
    "pre_ven_prod": 15,
    "id_unimed": 16,
    "id_mar": 9,
    "id_mod": 17,
    "id_fab": 8
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
        `num_parte_prod` | string |  required  | Numero de parte del producto.
        `stk_prod` | integer |  optional  | Stock del producto.
        `des_prod` | string |  required  | Descripcion del producto
        `pre_com_prod` | integer |  optional  | Precio de compra del producto.
        `pre_ven_prod` | integer |  optional  | Precio de venta del producto.
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
    "http://localhost/api/almacen/productos/update/optio" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"cod_prod":"porro","num_parte_prod":"maiores","stk_prod":9,"des_prod":"rerum","pre_com_prod":17,"pre_ven_prod":12,"id_unimed":20,"id_mar":13,"id_mod":19,"id_fab":17}'

```

```javascript
const url = new URL(
    "http://localhost/api/almacen/productos/update/optio"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "cod_prod": "porro",
    "num_parte_prod": "maiores",
    "stk_prod": 9,
    "des_prod": "rerum",
    "pre_com_prod": 17,
    "pre_ven_prod": 12,
    "id_unimed": 20,
    "id_mar": 13,
    "id_mod": 19,
    "id_fab": 17
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
        `num_parte_prod` | string |  required  | Numero de parte del producto.
        `stk_prod` | integer |  optional  | Stock del producto.
        `des_prod` | string |  required  | Descripcion del producto
        `pre_com_prod` | integer |  optional  | Precio de compra del producto.
        `pre_ven_prod` | integer |  optional  | Precio de venta del producto.
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
    -G "http://localhost/api/almacen/productos/delete/at" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/almacen/productos/delete/at"
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
    -G "http://localhost/api/usuarios/tiposdoc/get/error" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/usuarios/tiposdoc/get/error"
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
    -d '{"cod_tipdoc":"architecto","des_tipdoc":"neque"}'

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
    "cod_tipdoc": "architecto",
    "des_tipdoc": "neque"
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
    "http://localhost/api/usuarios/tiposdoc/update/eaque" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"cod_tipdoc":"eaque","des_tipdoc":"officiis"}'

```

```javascript
const url = new URL(
    "http://localhost/api/usuarios/tiposdoc/update/eaque"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "cod_tipdoc": "eaque",
    "des_tipdoc": "officiis"
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
    -G "http://localhost/api/usuarios/tiposdoc/delete/harum" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/usuarios/tiposdoc/delete/harum"
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
    -G "http://localhost/api/almacen/unidadesmedida/get/voluptas" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/almacen/unidadesmedida/get/voluptas"
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
    -d '{"nom_unimed":"qui","des_mar":"temporibus"}'

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
    "nom_unimed": "qui",
    "des_mar": "temporibus"
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
    "http://localhost/api/almacen/unidadesmedida/update/quo" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"nom_unimed":"fugit","des_mar":"eos"}'

```

```javascript
const url = new URL(
    "http://localhost/api/almacen/unidadesmedida/update/quo"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "nom_unimed": "fugit",
    "des_mar": "eos"
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
    -G "http://localhost/api/almacen/unidadesmedida/delete/voluptatem" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/almacen/unidadesmedida/delete/voluptatem"
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
    -G "http://localhost/api/usuarios/get/itaque" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/usuarios/get/itaque"
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
    -d '{"nom_col":"quos","ape_col":"perferendis","email":"officia","password":"vel","num_doc_col":"nihil","cod_col":"et","cel_col":"voluptas","id_tipdoc":20,"id_car":11}'

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
    "nom_col": "quos",
    "ape_col": "perferendis",
    "email": "officia",
    "password": "vel",
    "num_doc_col": "nihil",
    "cod_col": "et",
    "cel_col": "voluptas",
    "id_tipdoc": 20,
    "id_car": 11
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
    "http://localhost/api/usuarios/update/tempora" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"nom_col":"fuga","ape_col":"sequi","email":"tempora","num_doc_col":"vero","cod_col":"ducimus","cel_col":"et","id_tipdoc":7,"id_car":17}'

```

```javascript
const url = new URL(
    "http://localhost/api/usuarios/update/tempora"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "nom_col": "fuga",
    "ape_col": "sequi",
    "email": "tempora",
    "num_doc_col": "vero",
    "cod_col": "ducimus",
    "cel_col": "et",
    "id_tipdoc": 7,
    "id_car": 17
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
    -G "http://localhost/api/usuarios/delete/consequatur" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/usuarios/delete/consequatur"
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
    "message": "Unable to generate documentation file to: \"C:\\Users\\SH4-L\\Documents\\workspace\\PIS\\proyecto\\ncsrlback\\storage\\api-docs\/api-docs.json\". Please make sure directory is writable. Error: Required @OA\\Info() not found"
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


