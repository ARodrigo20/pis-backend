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
    -d '{"email":"veniam","password":"voluptatum"}'

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
    "email": "veniam",
    "password": "voluptatum"
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
    -G "http://localhost/api/usuarios/cargos/get/ut" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/usuarios/cargos/get/ut"
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
    -d '{"des_car":"itaque"}'

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
    "des_car": "itaque"
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
    "http://localhost/api/usuarios/cargos/update/laborum" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"des_car":"omnis"}'

```

```javascript
const url = new URL(
    "http://localhost/api/usuarios/cargos/update/laborum"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "des_car": "omnis"
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
    -G "http://localhost/api/usuarios/cargos/delete/ipsam" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/usuarios/cargos/delete/ipsam"
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
    -G "http://localhost/api/clientes/get/voluptatem" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/clientes/get/voluptatem"
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
    -d '{"razsoc_cli":"officia","numdoc_cli":"sunt","ema_cli":"aperiam","id_tipodoc":4}'

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
    "razsoc_cli": "officia",
    "numdoc_cli": "sunt",
    "ema_cli": "aperiam",
    "id_tipodoc": 4
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
    "http://localhost/api/clientes/update/eaque" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"razsoc_cli":"dolorem","numdoc_cli":"distinctio","ema_cli":"velit","id_tipodoc":5}'

```

```javascript
const url = new URL(
    "http://localhost/api/clientes/update/eaque"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "razsoc_cli": "dolorem",
    "numdoc_cli": "distinctio",
    "ema_cli": "velit",
    "id_tipodoc": 5
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
    -G "http://localhost/api/clientes/delete/sunt" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/clientes/delete/sunt"
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
    "http://localhost/api/clientes/admconydir/est" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"contactos":[],"direcciones":[]}'

```

```javascript
const url = new URL(
    "http://localhost/api/clientes/admconydir/est"
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

<!-- START_c3a05690973b165b5b7d092ff97937cd -->
## api/clientes/createContacto
> Example request:

```bash
curl -X POST \
    "http://localhost/api/clientes/createContacto" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/clientes/createContacto"
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
`POST api/clientes/createContacto`


<!-- END_c3a05690973b165b5b7d092ff97937cd -->

<!-- START_0ea9e54cd52cc81af0634d2881a21051 -->
## api/clientes/createDireccion
> Example request:

```bash
curl -X POST \
    "http://localhost/api/clientes/createDireccion" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/clientes/createDireccion"
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
`POST api/clientes/createDireccion`


<!-- END_0ea9e54cd52cc81af0634d2881a21051 -->

#CotizacionCliente

APIs para cotizaciones de clientes
<!-- START_5df881ff73d3ad0ba216495a06435f1b -->
## Retornar cotizaciones

Retorna todos las cotizaciones activas y anuladas

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/cotizacion-cliente/get" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/cotizacion-cliente/get"
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
            "solcli_id": 0,
            "solcli_cod": "string",
            "solcli_fec": "date",
            "solcli_proy_nom": "string",
            "solcli_cli_nom": "string",
            "solcli_cli_dir": "string",
            "solcli_cli_con": "string",
            "est_reg": "string"
        }
    ],
    "size": 0
}
```

### HTTP Request
`GET api/cotizacion-cliente/get`


<!-- END_5df881ff73d3ad0ba216495a06435f1b -->

<!-- START_2a4d06ae000d56028419bba69e2fe409 -->
## Retornar cotizacion

Retorna cotizacion por Id

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/cotizacion-cliente/get/reprehenderit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/cotizacion-cliente/get/reprehenderit"
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
    "cotizacion": {
        "solcli_id": 0,
        "solcli_cod": "string",
        "solcli_fec": "string",
        "id_proy": 0,
        "solcli_proy_nom": "string",
        "solcli_proy_cod": "string",
        "id_cli": 0,
        "solcli_cli_nom": "string",
        "solcli_cli_numdoc": "string",
        "solcli_cli_tipdoc": "algo",
        "solcli_cli_dir": "string",
        "solcli_cli_id_dir": 0,
        "solcli_cli_con": "string",
        "solcli_cli_id_con": 0,
        "id_col": 0,
        "solcli_col_nom": "string",
        "est_reg": "string",
        "cotizacion_detalle": [
            {
                "solclidet_id": 0,
                "solcli_id": 0,
                "solclidet_prod_serv": 0,
                "solclidet_des": "string",
                "id_prod": 0,
                "solclidet_prod_can": 0,
                "solclidet_prod_codint": "string",
                "solclidet_prod_numpar": "string",
                "solclidet_prod_fabr": "string",
                "solclidet_prod_marc": "string",
                "solclidet_prod_unimed": "string",
                "solclidet_prod_stock": 0
            }
        ]
    },
    "logo": "string",
    "extension": "string"
}
```

### HTTP Request
`GET api/cotizacion-cliente/get/{id}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `id` |  required  | El ID de la cotizacion.

<!-- END_2a4d06ae000d56028419bba69e2fe409 -->

<!-- START_aa93d737b9efeb95d7fa883948a13110 -->
## Crear Cotizacion Cliente

Crea una Cotizacion de cliente

> Example request:

```bash
curl -X POST \
    "http://localhost/api/cotizacion-cliente/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"id_cli":12,"solcli_cli_nom":"id","solcli_cli_numdoc":"cumque","solcli_cli_tipdoc":"harum","solcli_cli_dir":"aut","solcli_cli_id_dir":19,"solcli_cli_con":"voluptate","solcli_cli_id_con":17,"id_col":16,"solcli_col_nom":"corrupti","cotizacion_detalle":[]}'

```

```javascript
const url = new URL(
    "http://localhost/api/cotizacion-cliente/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "id_cli": 12,
    "solcli_cli_nom": "id",
    "solcli_cli_numdoc": "cumque",
    "solcli_cli_tipdoc": "harum",
    "solcli_cli_dir": "aut",
    "solcli_cli_id_dir": 19,
    "solcli_cli_con": "voluptate",
    "solcli_cli_id_con": 17,
    "id_col": 16,
    "solcli_col_nom": "corrupti",
    "cotizacion_detalle": []
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
    "resp": "cotizacion creada"
}
```

### HTTP Request
`POST api/cotizacion-cliente/create`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `id_cli` | integer |  required  | Id del cliente.
        `solcli_cli_nom` | string |  optional  | Nombre del cliente.
        `solcli_cli_numdoc` | string |  optional  | Numero de documento del cliente.
        `solcli_cli_tipdoc` | string |  optional  | Tipo de documento del cliente.
        `solcli_cli_dir` | string |  optional  | Direccion del cliente.
        `solcli_cli_id_dir` | integer |  optional  | Id de la direccion del cliente.
        `solcli_cli_con` | string |  optional  | Contacto del cliente.
        `solcli_cli_id_con` | integer |  optional  | Id del contacto del cliente.
        `id_col` | integer |  optional  | Id del colaborador.
        `solcli_col_nom` | string |  optional  | Nombre del colaborador.
        `cotizacion_detalle` | array |  required  | Ejemplo: [{"solcli_id": 0,"solclidet_prod_serv": 1,"solclidet_des":"string","id_prod":0,"solclidet_prod_can":0,"solclidet_prod_codint":"string","solclidet_prod_numpar": "string","solclidet_prod_fabr": "string","solclidet_prod_marc": "string","solclidet_prod_unimed": "string","solclidet_prod_stock": 0}]
    
<!-- END_aa93d737b9efeb95d7fa883948a13110 -->

<!-- START_c49b49d21f55b151e904abe4ef1c7e5e -->
## Anular cotizacion

Anula una cotizacion

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/cotizacion-cliente/annul/pariatur" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/cotizacion-cliente/annul/pariatur"
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
    "resp": "Cotizacion anulada"
}
```

### HTTP Request
`GET api/cotizacion-cliente/annul/{id}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `id` |  required  | El ID de la cotizacion.

<!-- END_c49b49d21f55b151e904abe4ef1c7e5e -->

<!-- START_bcc79200153b5497e64c3c6017d8deb7 -->
## Modifica cotizacion cliente cabecera

> Example request:

```bash
curl -X POST \
    "http://localhost/api/cotizacion-cliente/update-header/culpa" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"id_proy":"possimus","id_cli":18,"solcli_proy_cod":"officiis","solcli_proy_nom":"repellendus","solcli_cli_nom":"maxime","solcli_cli_numdoc":"sint","solcli_cli_tipdoc":"fugit","solcli_cli_dir":"aut","solcli_cli_id_dir":17,"solcli_cli_con":"atque","solcli_cli_id_con":2,"id_col":4,"solcli_col_nom":"et","est_reg":"maxime"}'

```

```javascript
const url = new URL(
    "http://localhost/api/cotizacion-cliente/update-header/culpa"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "id_proy": "possimus",
    "id_cli": 18,
    "solcli_proy_cod": "officiis",
    "solcli_proy_nom": "repellendus",
    "solcli_cli_nom": "maxime",
    "solcli_cli_numdoc": "sint",
    "solcli_cli_tipdoc": "fugit",
    "solcli_cli_dir": "aut",
    "solcli_cli_id_dir": 17,
    "solcli_cli_con": "atque",
    "solcli_cli_id_con": 2,
    "id_col": 4,
    "solcli_col_nom": "et",
    "est_reg": "maxime"
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
    "resp": "descripcion seccion actualizado"
}
```

### HTTP Request
`POST api/cotizacion-cliente/update-header/{id}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `id` |  required  | El ID de la cabecera de la cotizacion cliente.
#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `id_proy` | num |  required  | Id de proyecto.
        `id_cli` | integer |  required  | Id del cliente.
        `solcli_proy_cod` | string |  optional  | 
        `solcli_proy_nom` | string |  optional  | 
        `solcli_cli_nom` | string |  optional  | Nombre del cliente.
        `solcli_cli_numdoc` | string |  optional  | Numero de documento del cliente.
        `solcli_cli_tipdoc` | string |  optional  | Tipo de documento del cliente.
        `solcli_cli_dir` | string |  optional  | Direccion del cliente.
        `solcli_cli_id_dir` | integer |  optional  | Id de la direccion del cliente.
        `solcli_cli_con` | string |  optional  | Contacto del cliente.
        `solcli_cli_id_con` | integer |  optional  | Id del contacto del cliente.
        `id_col` | integer |  optional  | Id del colaborador.
        `solcli_col_nom` | string |  optional  | Nombre del colaborador.
        `est_reg` | char |  optional  | Estado de registro.
    
<!-- END_bcc79200153b5497e64c3c6017d8deb7 -->

<!-- START_36fe17e60f1d994a0920dbe81d702957 -->
## Modifica el detalle de una cotizacion cliente

> Example request:

```bash
curl -X POST \
    "http://localhost/api/cotizacion-cliente/update-detail/nulla" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"solclidet_prod_serv":"labore","solclidet_des":"maiores","id_prod":"omnis","solclidet_prod_can":"quae","solclidet_prod_codint":1,"solclidet_prod_numpar\":":"est","solclidet_prod_fabr":"non","solclidet_prod_marc\":":"odit","solclidet_prod_unimed":"quo","solclidet_prod_stock\":":"sed"}'

```

```javascript
const url = new URL(
    "http://localhost/api/cotizacion-cliente/update-detail/nulla"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "solclidet_prod_serv": "labore",
    "solclidet_des": "maiores",
    "id_prod": "omnis",
    "solclidet_prod_can": "quae",
    "solclidet_prod_codint": 1,
    "solclidet_prod_numpar\":": "est",
    "solclidet_prod_fabr": "non",
    "solclidet_prod_marc\":": "odit",
    "solclidet_prod_unimed": "quo",
    "solclidet_prod_stock\":": "sed"
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
    "resp": "Cotizacion cliente detalle actualizado"
}
```

### HTTP Request
`POST api/cotizacion-cliente/update-detail/{id}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `id` |  required  | El ID del detalle de la cotizacion cliente a modificar.
#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `solclidet_prod_serv` | num. |  optional  | 
        `solclidet_des` | string |  optional  | Descripcion.
        `id_prod` | num |  optional  | Id de producto.
        `solclidet_prod_can` | num |  optional  | Cantidad:0,
        `solclidet_prod_codint` | integer |  optional  | 
        `solclidet_prod_numpar&quot;:` | &quot;string |  optional  | 
        `solclidet_prod_fabr` | &quot;string&quot; |  optional  | 
        `solclidet_prod_marc&quot;:` | &quot;string&quot;. |  optional  | 
        `solclidet_prod_unimed` | string |  optional  | Unidad de meduda.
        `solclidet_prod_stock&quot;:` | num |  optional  | Stock.
    
<!-- END_36fe17e60f1d994a0920dbe81d702957 -->

<!-- START_805da2d51f249f09f856fb35146cd80b -->
## Actualizacion Cotizacion Cliente Cabecera y detalle

Actualiza una Cotizacion de cliente completa

> Example request:

```bash
curl -X POST \
    "http://localhost/api/cotizacion-cliente/update-complete/cumque" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"id_cli":9,"solcli_cli_nom":"excepturi","solcli_cli_numdoc":"maxime","solcli_cli_tipdoc":"quia","solcli_cli_dir":"impedit","solcli_cli_id_dir":4,"solcli_cli_con":"maiores","solcli_cli_id_con":3,"id_col":7,"solcli_col_nom":"quia","est_reg":"vero","cotizacion_detalle":[]}'

```

```javascript
const url = new URL(
    "http://localhost/api/cotizacion-cliente/update-complete/cumque"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "id_cli": 9,
    "solcli_cli_nom": "excepturi",
    "solcli_cli_numdoc": "maxime",
    "solcli_cli_tipdoc": "quia",
    "solcli_cli_dir": "impedit",
    "solcli_cli_id_dir": 4,
    "solcli_cli_con": "maiores",
    "solcli_cli_id_con": 3,
    "id_col": 7,
    "solcli_col_nom": "quia",
    "est_reg": "vero",
    "cotizacion_detalle": []
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
    "resp": "Cotizacion cliente Cabecera y detalle Actualizado con exito"
}
```

### HTTP Request
`POST api/cotizacion-cliente/update-complete/{id}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `id` |  required  | El ID de la cabecera de la cotizacion cliente.
#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `id_cli` | integer |  required  | Id del cliente.
        `solcli_cli_nom` | string |  optional  | Nombre del cliente.
        `solcli_cli_numdoc` | string |  optional  | Numero de documento del cliente.
        `solcli_cli_tipdoc` | string |  optional  | Tipo de documento del cliente.
        `solcli_cli_dir` | string |  optional  | Direccion del cliente.
        `solcli_cli_id_dir` | integer |  optional  | Id de la direccion del cliente.
        `solcli_cli_con` | string |  optional  | Contacto del cliente.
        `solcli_cli_id_con` | integer |  optional  | Id del contacto del cliente.
        `id_col` | integer |  optional  | Id del colaborador.
        `solcli_col_nom` | string |  optional  | Nombre del colaborador.
        `est_reg` | string |  optional  | Estado del registro cabecera
        `cotizacion_detalle` | array |  required  | Ejemplo: [{"solcli_id": 0,"solclidet_prod_serv": 1,"solclidet_des":"string","id_prod":0,"solclidet_prod_can":0,"solclidet_prod_codint":"string","solclidet_prod_numpar": "string","solclidet_prod_fabr": "string","solclidet_prod_marc": "string","solclidet_prod_unimed": "string","solclidet_prod_stock": 0, "est_reg":"A"}]
    
<!-- END_805da2d51f249f09f856fb35146cd80b -->

#CotizacionProveedor

APIs para cotizaciones de proveedores
<!-- START_7b6c9de3325a64044644f49773b49a21 -->
## Retornar cotizaciones

Retorna todos las cotizaciones activas y anuladas

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/cotizacion-proveedor/get" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/cotizacion-proveedor/get"
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
            "cotprov_id": 0,
            "solcli_id": 0,
            "id_proy": 0,
            "id_cli": 0,
            "id_prov": 0,
            "cotprov_fec": "date",
            "cotprov_razsoc": "string",
            "cotprov_ruc": "char",
            "cotprov_tipdoc": "char",
            "cotprov_dir": "string",
            "cotprov_con": "string",
            "cotprov_ema": "string",
            "est_reg": "char",
            "est_env": "char",
            "cotprov_cod": "string",
            "id_col": 0,
            "cotprov_col_nom": "string",
            "cotprov_col_usu": "string",
            "proyecto": {
                "id_proy": 0,
                "nom_proy": "string",
                "ser_proy": "string",
                "num_proy": 0,
                "id_cli": 0,
                "est_reg": "A"
            },
            "cotizacion_cliente": {
                "solcli_id": 0,
                "solcli_cod": "string"
            }
        }
    ],
    "size": 0
}
```

### HTTP Request
`GET api/cotizacion-proveedor/get`


<!-- END_7b6c9de3325a64044644f49773b49a21 -->

<!-- START_f15ae1d1fad431d62b8756dec266bed8 -->
## Retornar cotizacion del proveedor

Retorna cotizacion del proveedor por medio de su Id

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/cotizacion-proveedor/get/sapiente" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/cotizacion-proveedor/get/sapiente"
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
    "cotizacion": {
        "cotprov_id": 0,
        "solcli_id": 0,
        "id_proy": 0,
        "id_cli": 0,
        "id_prov": 0,
        "cotprov_fec": "date",
        "cotprov_razsoc": "string",
        "cotprov_ruc": "char",
        "cotprov_tipdoc": "char",
        "cotprov_dir": "string",
        "cotprov_con": "string",
        "cotprov_ema": "string",
        "est_reg": "char",
        "est_env": "char",
        "cotprov_cod": "string",
        "id_col": 0,
        "cotprov_col_nom": "string",
        "cotprov_col_usu": "string",
        "proyecto": {
            "id_proy": 0,
            "nom_proy": "string",
            "ser_proy": "NTWC-P-",
            "num_proy": 0,
            "id_cli": 0,
            "est_reg": "A",
            "cliente": {}
        },
        "cotizacion_proveedor_detalle": [
            {
                "cotprovdet_id": 0,
                "cotprovdet_cant": "string",
                "cotprovdet_desc": "string",
                "cotprov_id": 0,
                "id_prod": 0,
                "cotprovdet_prod_codint": "string",
                "cotprovdet_prod_numpar": "string",
                "cotprovdet_prod_fabr": "string",
                "cotprovdet_prod_marc": "string",
                "cotprovdet_prod_unimed": "string"
            }
        ]
    },
    "size": 0
}
```

### HTTP Request
`GET api/cotizacion-proveedor/get/{id}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `id` |  required  | El ID de la cotizacion del proveedor.

<!-- END_f15ae1d1fad431d62b8756dec266bed8 -->

<!-- START_bc2475008b2d3e2a2dfccf505113e712 -->
## Crear Cotizacion Proveedor

Crea una Cotizacion de Proveedor

> Example request:

```bash
curl -X POST \
    "http://localhost/api/cotizacion-proveedor/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"solcli_id":8,"id_proy":18,"id_cli":1,"id_prov":6,"cotprov_razsoc":"eum","cotprov_ruc":"odio","cotprov_tipdoc":"vitae","cotprov_dir":"illum","cotprov_con":"ea","cotprov_ema":"consectetur","id_col":"est","cotprov_col_nom":"consequuntur","cotprov_col_usu":"aliquid","cotizacion_proveedor_detalle":[]}'

```

```javascript
const url = new URL(
    "http://localhost/api/cotizacion-proveedor/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "solcli_id": 8,
    "id_proy": 18,
    "id_cli": 1,
    "id_prov": 6,
    "cotprov_razsoc": "eum",
    "cotprov_ruc": "odio",
    "cotprov_tipdoc": "vitae",
    "cotprov_dir": "illum",
    "cotprov_con": "ea",
    "cotprov_ema": "consectetur",
    "id_col": "est",
    "cotprov_col_nom": "consequuntur",
    "cotprov_col_usu": "aliquid",
    "cotizacion_proveedor_detalle": []
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
    "resp": "cotizacion Proveedor creada"
}
```

### HTTP Request
`POST api/cotizacion-proveedor/create`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `solcli_id` | integer |  optional  | Id de la solicitud de cotizacion del cliente.
        `id_proy` | integer |  optional  | Id del proyecto.
        `id_cli` | integer |  optional  | Id del cliente.
        `id_prov` | integer |  optional  | Id del proveedor.
        `cotprov_razsoc` | string |  optional  | razon social del Proveedor.
        `cotprov_ruc` | char |  optional  | numero ruc de la empresa a quien se realiza la cotizacion.
        `cotprov_tipdoc` | char |  optional  | Tipo de documento del proveedor.
        `cotprov_dir` | string |  optional  | Direccion del Proveedor.
        `cotprov_con` | string |  optional  | Contacto del Proveedor.
        `cotprov_ema` | string |  optional  | Email del contacto a quien se enviara.
        `id_col` | string |  optional  | Id del usuario.
        `cotprov_col_nom` | string |  optional  | Nombre del usuario.
        `cotprov_col_usu` | string |  optional  | Usuario o email del usuario.
        `cotizacion_proveedor_detalle` | array |  required  | Ejemplo: [{"cotprov_id": 0,"cotprovdet_cant":"int","id_prod":"int","cotprovdet_desc":"char","cotprovdet_prod_codint":"string","cotprovdet_prod_numpar":"string","cotprovdet_prod_fabr":"string","cotprovdet_prod_marc":"string",cotprovdet_prod_unimed":"char"}]
    
<!-- END_bc2475008b2d3e2a2dfccf505113e712 -->

<!-- START_4eb8ac6ee6cd4769fac1784bf1626181 -->
## Anular cotizacion del Proveedor

Anula una cotizacion

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/cotizacion-proveedor/annul/facere" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/cotizacion-proveedor/annul/facere"
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
    "resp": "Cotizacion anulada"
}
```

### HTTP Request
`GET api/cotizacion-proveedor/annul/{id}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `id` |  required  | El ID de la cotizacion del proveedor.

<!-- END_4eb8ac6ee6cd4769fac1784bf1626181 -->

<!-- START_126369a3c9f6e3baacf611008f8b11d3 -->
## api/cotizacion-proveedor/send/{id}
> Example request:

```bash
curl -X POST \
    "http://localhost/api/cotizacion-proveedor/send/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/cotizacion-proveedor/send/1"
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
`POST api/cotizacion-proveedor/send/{id}`


<!-- END_126369a3c9f6e3baacf611008f8b11d3 -->

#Emails

APIs para enviar correos
<!-- START_83c9a47ef6bb718c2632ac2f5af9d1d1 -->
## Enviar Email

Envia un correo (Usar Body-> form-data en Postman, FormData en Angular)

> Example request:

```bash
curl -X POST \
    "http://localhost/api/email/send-email" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"archivo":"dolorum","asunto":"aut","cc":"et","mensaje":"sequi","destinatario":"consequatur","tabla":"aliquam","doc_referencia":"et"}'

```

```javascript
const url = new URL(
    "http://localhost/api/email/send-email"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "archivo": "dolorum",
    "asunto": "aut",
    "cc": "et",
    "mensaje": "sequi",
    "destinatario": "consequatur",
    "tabla": "aliquam",
    "doc_referencia": "et"
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
    "resp": "Correo Enviado"
}
```

### HTTP Request
`POST api/email/send-email`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `archivo` | blob |  optional  | Archivo adjunto.
        `asunto` | string |  optional  | Asunto del correo.
        `cc` | string |  optional  | Correo Adjunto (correo del usuario logueado).
        `mensaje` | string |  optional  | Mensaje del correo.
        `destinatario` | string |  required  | Correo destino.
        `tabla` | string |  optional  | Tabla de Referencia para actualizacion de estado de envio (Cotizacion de proveedor: 'cot-prov', Proforma: 'proforma').
        `doc_referencia` | string |  optional  | ID del documento de referencia de la Tabla para actualizacion de estado de envio.
    
<!-- END_83c9a47ef6bb718c2632ac2f5af9d1d1 -->

#Empresa

APIs para empresa
<!-- START_282bdf941517c490a5d95eeb07b9dd26 -->
## api/empresa/logo
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/empresa/logo" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/empresa/logo"
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
`GET api/empresa/logo`


<!-- END_282bdf941517c490a5d95eeb07b9dd26 -->

<!-- START_db51a856044c6ddba32b92c2dccd2dd1 -->
## Modificar Empresa

Modifica datos de la empresa (Usar Body-> form-data en Postman)

> Example request:

```bash
curl -X POST \
    "http://localhost/api/empresa/update" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"logo":"mollitia","nom_emp":"laudantium","numdoc_emp":"quis","dir_emp":"quasi","dis_emp":"sapiente","ciu_emp":"vel","tel_emp":"consequuntur","cel_emp":"non","codciu_emp":"exercitationem","id_tipodoc":3}'

```

```javascript
const url = new URL(
    "http://localhost/api/empresa/update"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "logo": "mollitia",
    "nom_emp": "laudantium",
    "numdoc_emp": "quis",
    "dir_emp": "quasi",
    "dis_emp": "sapiente",
    "ciu_emp": "vel",
    "tel_emp": "consequuntur",
    "cel_emp": "non",
    "codciu_emp": "exercitationem",
    "id_tipodoc": 3
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
    "resp": "Datos actualizados"
}
```

### HTTP Request
`POST api/empresa/update`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `logo` | blob |  optional  | Logotipo de la empresa usar form-data para subir.
        `nom_emp` | string |  optional  | Nombre de la Empresa.
        `numdoc_emp` | string |  optional  | Numero de Documento de la empresa.
        `dir_emp` | string |  optional  | Direccion de la empresa.
        `dis_emp` | string |  optional  | Distrito de la empresa.
        `ciu_emp` | string |  optional  | Ciudad de la empresa.
        `tel_emp` | string |  optional  | Telefono de la empresa.
        `cel_emp` | string |  optional  | Celular de la empresa.
        `codciu_emp` | string |  optional  | Codigo de ciudad de la empresa.
        `id_tipodoc` | integer |  optional  | Tipo de documento de la empresa.
    
<!-- END_db51a856044c6ddba32b92c2dccd2dd1 -->

<!-- START_2ab6aba2163afe2a159d9781adaade1d -->
## Retornar empresa

Retorna empresa

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/empresa/get" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/empresa/get"
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
    "empresa": {
        "id_emp": 0,
        "nom_emp": "string",
        "numdoc_emp": "string",
        "dir_emp": "string",
        "dis_emp": "string",
        "ciu_emp": "string",
        "tel_emp": "string",
        "cel_emp": "string",
        "codciu_emp": "string",
        "img_emp": "string",
        "imgext_emp": "string",
        "id_tipdoc": 0,
        "tipo_documento": {
            "id_tipdoc": 0,
            "des_tipdoc": "string"
        }
    },
    "logo": "Archivo codificado en base 64"
}
```

### HTTP Request
`GET api/empresa/get`


<!-- END_2ab6aba2163afe2a159d9781adaade1d -->

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
    -G "http://localhost/api/almacen/fabricantes/get/minima" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/almacen/fabricantes/get/minima"
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
    -d '{"des_fab":"totam"}'

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
    "des_fab": "totam"
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
    "http://localhost/api/almacen/fabricantes/update/ducimus" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"des_fab":"sapiente"}'

```

```javascript
const url = new URL(
    "http://localhost/api/almacen/fabricantes/update/ducimus"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "des_fab": "sapiente"
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
    -G "http://localhost/api/almacen/fabricantes/delete/consequuntur" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/almacen/fabricantes/delete/consequuntur"
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

#Factura

APIs para crear factura o boleta internamente
<!-- START_95bfc452756073b0cd94294f8a050da6 -->
## Retornar  facturas

Retorna todas las factura sin ningun filtro adicional

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/factura/get" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/factura/get"
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
            "id_factura": 2,
            "tipoDoc": 1,
            "serie": "F001",
            "correlativo": 1,
            "fechaEmision": "2020-12-11 23:59:12",
            "solcli_id": null,
            "id_cli": 1,
            "id_emp": 1,
            "tipoMoneda": "PEN",
            "sumOtrosCargos": 0,
            "mtoOperGravadas": 100,
            "mtoOperInafectas": 0,
            "mtoOperExoneradas": 0,
            "mtoOperExportacion": 0,
            "mtoIGV": 18,
            "mtoISC": 0,
            "mtoOtrosTributos": 0,
            "icbper": 0,
            "mtoImpVenta": 118,
            "id_det_fac": null,
            "id_legends": null,
            "id_guias": null,
            "id_relDocs": null,
            "observacion": "my observacion :)",
            "compra": null,
            "mtoBaseIsc": 0,
            "mtoBaseOth": 0,
            "totalImpuestos": 18,
            "ublVersion": 2,
            "tipoOperacion": 1,
            "fecVencimiento": "2021-01-20",
            "sumDsctoGlobal": 0,
            "mtoDescuentos": 0,
            "mtoOperGratuitas": 0,
            "totalAnticipos": 0,
            "id_guiaEmbebida": null,
            "id_seller": null,
            "id_direccion_entrega": null,
            "descuentos": 0,
            "id_cargo": null,
            "mtoCargos": 0,
            "valorVenta": 118,
            "observaciones": null,
            "est_reg": "A",
            "est_env": "P",
            "cliente": {
                "id_cli": 1,
                "razsoc_cli": "LA PRUEBA CLEITNE SAC",
                "numdoc_cli": 9842255555,
                "ema_cli": "prueba@cliente.com",
                "id_tipdoc": 1,
                "est_reg": "A",
                "tipo_documento": {},
                "contactos": {},
                "direcciones": {},
                "proyectos": {},
                "ordenes_compras": {}
            },
            "factura_det": [
                {
                    "id_det_fac": 1,
                    "unidad": "NIU",
                    "cantidad": 12,
                    "codProducto": "string",
                    "codProdSunat": "string",
                    "codProdGS1": "string",
                    "descripcion": "PRODUCTO 1",
                    "mtoValorUnitario": 100,
                    "descuento": 0,
                    "igv": 18,
                    "tipAfeIgv": 10,
                    "isc": 0,
                    "tipSisIsc": "string",
                    "totalImpuestos": 18,
                    "mtoPrecioUnitario": 118,
                    "mtoValorVenta": 100,
                    "mtoValorGratuito": 0,
                    "mtoBaseIgv": 0,
                    "porcentajeIgv": 0,
                    "mtoBaseIsc": 0,
                    "porcentajeIsc": 0,
                    "mtoBaseOth": 0,
                    "porcentajeOth": 0,
                    "otroTributo": 0,
                    "icbper": 0,
                    "factorIcbper": 0,
                    "est_reg": "A",
                    "id_factura": 2,
                    "id_prod": 1,
                    "producto": {
                        "id_prod": 1,
                        "cod_prod": 2121312,
                        "num_parte_prod": 1,
                        "stk_prod": 0,
                        "des_prod": "desarmador 3 pulgadas",
                        "pre_com_prod": 125,
                        "mon_prod": null,
                        "id_unimed": null,
                        "id_mar": null,
                        "id_mod": null,
                        "id_fab": null,
                        "est_reg": "A",
                        "marca": null,
                        "modelo": {},
                        "fabricante": {},
                        "unidad_medida": null
                    }
                }
            ]
        }
    ],
    "size": 0
}
```

### HTTP Request
`GET api/factura/get`


<!-- END_95bfc452756073b0cd94294f8a050da6 -->

<!-- START_6077d7b232329127b0c3170475f3a17c -->
## Retornar una factura

Retorna una factura por medio de su Id

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/factura/get/natus" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/factura/get/natus"
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
`GET api/factura/get/{id}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `id` |  required  | El ID de la factura cabecera

<!-- END_6077d7b232329127b0c3170475f3a17c -->

<!-- START_5a429d3767ad898374c9fd9a990120f5 -->
## Crear Factura

Crea una guia de remision de transporte

> Example request:

```bash
curl -X POST \
    "http://localhost/api/factura/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"tipoDoc":"et","serie":"molestias","solcli_id":"et","id_cli":"consequuntur","tipoMoneda":"sapiente","sumOtrosCargos":11626690.5914,"mtoOperGravadas":20667003.3162773,"mtoOperInafecta":462143128.6233932,"mtoOperExoneradas":752.39054,"mtoOperExportacion":17321.234,"mtoIGV":2359552,"mtoISC":0.2,"mtoOtrosTributos":0.469108875,"icbper":30494745.36329932,"mtoImpVenta":30.6,"id_legends":"dolorem","id_guias":"animi","id_relDocs":"officia","observacion":"ad","compra":"qui","mtoBaseIsc":33819670.38,"mtoBaseOth":21542151.6626062,"totalImpuestos":107.4,"tipoOperacion":"quisquam","fecVencimiento":"non","sumDsctoGlobal":23.313885333,"mtoDescuentos":"quia","mtoOperGratuitas":93011.81043309,"totalAnticipos":38.9573285,"id_guiaEmbebida":"hic","id_seller":"nostrum","id_direccion_entrega":"veniam","descuentos":7050.0097,"id_cargo":"adipisci","mtoCargos":64823.523,"valorVenta":0.89,"est_reg":"qui","est_env":"impedit","detalle_factura":[]}'

```

```javascript
const url = new URL(
    "http://localhost/api/factura/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "tipoDoc": "et",
    "serie": "molestias",
    "solcli_id": "et",
    "id_cli": "consequuntur",
    "tipoMoneda": "sapiente",
    "sumOtrosCargos": 11626690.5914,
    "mtoOperGravadas": 20667003.3162773,
    "mtoOperInafecta": 462143128.6233932,
    "mtoOperExoneradas": 752.39054,
    "mtoOperExportacion": 17321.234,
    "mtoIGV": 2359552,
    "mtoISC": 0.2,
    "mtoOtrosTributos": 0.469108875,
    "icbper": 30494745.36329932,
    "mtoImpVenta": 30.6,
    "id_legends": "dolorem",
    "id_guias": "animi",
    "id_relDocs": "officia",
    "observacion": "ad",
    "compra": "qui",
    "mtoBaseIsc": 33819670.38,
    "mtoBaseOth": 21542151.6626062,
    "totalImpuestos": 107.4,
    "tipoOperacion": "quisquam",
    "fecVencimiento": "non",
    "sumDsctoGlobal": 23.313885333,
    "mtoDescuentos": "quia",
    "mtoOperGratuitas": 93011.81043309,
    "totalAnticipos": 38.9573285,
    "id_guiaEmbebida": "hic",
    "id_seller": "nostrum",
    "id_direccion_entrega": "veniam",
    "descuentos": 7050.0097,
    "id_cargo": "adipisci",
    "mtoCargos": 64823.523,
    "valorVenta": 0.89,
    "est_reg": "qui",
    "est_env": "impedit",
    "detalle_factura": []
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
    "resp": "Factura creada"
}
```

### HTTP Request
`POST api/factura/create`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `tipoDoc` | string |  optional  | 1,
        `serie` | string |  optional  | F001,
        `solcli_id` | id |  optional  | id de solicitud de cotizacion cliente,
        `id_cli` | id |  optional  | id del cliente,
        `tipoMoneda` | string |  optional  | Codigo de moneda,
        `sumOtrosCargos` | float |  optional  | Monto en Otros cargos,
        `mtoOperGravadas` | float |  optional  | Monto en Operaciones Gravadas,
        `mtoOperInafecta` | float |  optional  | Monto en Operaciones Inafectas,
        `mtoOperExoneradas` | float |  optional  | Monto en Operaciones Exoneradas,
        `mtoOperExportacion` | float |  optional  | Monto en Operaciones que va a Exportacion,
        `mtoIGV` | float |  optional  | Monto de igv,
        `mtoISC` | float |  optional  | 0,
        `mtoOtrosTributos` | float |  optional  | 0,
        `icbper` | float |  optional  | 0,
        `mtoImpVenta` | float |  optional  | Monto imponible,
        `id_legends` | null |  optional  | Deberia ser un id a otra tabla de legendas,
        `id_guias` | null |  optional  | Deberia ser un id a otra tabla,
        `id_relDocs` | null |  optional  | Deberia ser el id de tabla de documentos relacionados,
        `observacion` | string |  optional  | Observacion del usuario,
        `compra` | string |  optional  | Valor segun catalogo Sunat,
        `mtoBaseIsc` | float |  optional  | 0,
        `mtoBaseOth` | float |  optional  | 0,
        `totalImpuestos` | float |  optional  | 18,
        `tipoOperacion` | string |  optional  | Codigo segun sunat,
        `fecVencimiento` | date |  optional  | Fecha que vence la factura o boleta,
        `sumDsctoGlobal` | float |  optional  | Sumatoria de descuentos de todos detalley cabecera,
        `mtoDescuentos` | floar |  optional  | Suma Descuentos detalle,
        `mtoOperGratuitas` | float |  optional  | Monto de operaciones gratuitas,
        `totalAnticipos` | float |  optional  | Total en anticipos,
        `id_guiaEmbebida` | null |  optional  | ID,
        `id_seller` | null |  optional  | ID,
        `id_direccion_entrega` | null |  optional  | ID,
        `descuentos` | float |  optional  | 0,
        `id_cargo` | null |  optional  | Id,
        `mtoCargos` | float |  optional  | 0,
        `valorVenta` | float |  optional  | Valor final que el cliente pagara,
        `est_reg` | string |  optional  | estado de registro,
        `est_env` | string |  optional  | estado de envio,
        `detalle_factura` | array |  optional  | Ejemplo: [{
    
<!-- END_5a429d3767ad898374c9fd9a990120f5 -->

<!-- START_b082d383d378481393dd0909b218dc6c -->
## Anular factura

Anula una factura cabecera solo en nuestro sistema solo deve hacerse antes de ser enviada a la SUNAT sino GG

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/factura/annul/quidem" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/factura/annul/quidem"
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
    "resp": "Factura anulada"
}
```

### HTTP Request
`GET api/factura/annul/{id}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `id` |  required  | El ID de la factura es requerido

<!-- END_b082d383d378481393dd0909b218dc6c -->

#Gasto

APIs para Gastos
<!-- START_705e26aa21e375969ea32044eb205a2d -->
## Retornar Gastos

Retorna todos los gastos

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/gasto/get" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/gasto/get"
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
            "id_gas": 0,
            "gas_fec": "date",
            "gas_fac": "string",
            "gas_subtot": "float",
            "gas_igv": "float",
            "gas_tot": "float",
            "id_prov": 0,
            "prov_razsoc": "string",
            "prov_ruc": "char",
            "id_proy": 0,
            "nom_proy": "string",
            "gas_mon": "char",
            "gas_tipcam": "float",
            "gas_totdol": "float",
            "gas_desc": "string",
            "gas_fac_ser": "string",
            "est_reg": "string"
        }
    ],
    "size": 0,
    "logo": "string",
    "extension": "string"
}
```

### HTTP Request
`GET api/gasto/get`


<!-- END_705e26aa21e375969ea32044eb205a2d -->

<!-- START_cdea3928461d9d1b67db6ec6ce47b3ad -->
## Crear Gasto

Crea Gasto

> Example request:

```bash
curl -X POST \
    "http://localhost/api/gasto/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"gas_fec":"qui","gas_fac":"vel","gas_subtot":530.2,"gas_igv":1658.19697853,"gas_tot":0.1408,"id_prov":13,"prov_razsoc":"et","prov_ruc":"omnis","id_proy":2,"gas_mon":"nesciunt","gas_tipcam":3028.82437,"gas_fac_ser":"asperiores","gas_totdol":107795404,"gas_desc":"officiis"}'

```

```javascript
const url = new URL(
    "http://localhost/api/gasto/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "gas_fec": "qui",
    "gas_fac": "vel",
    "gas_subtot": 530.2,
    "gas_igv": 1658.19697853,
    "gas_tot": 0.1408,
    "id_prov": 13,
    "prov_razsoc": "et",
    "prov_ruc": "omnis",
    "id_proy": 2,
    "gas_mon": "nesciunt",
    "gas_tipcam": 3028.82437,
    "gas_fac_ser": "asperiores",
    "gas_totdol": 107795404,
    "gas_desc": "officiis"
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
    "resp": "Gasto creado"
}
```

### HTTP Request
`POST api/gasto/create`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `gas_fec` | date |  optional  | Fecha del gasto.
        `gas_fac` | string |  optional  | Nro de la factura.
        `gas_subtot` | float |  optional  | subtotal en soles del gasto formula total/1.18.
        `gas_igv` | float |  optional  | gasto con igv cumple formula subtotal*18%.
        `gas_tot` | float |  optional  | gasto total si existe moneda dolar formula tipocambio*totaldolar.
        `id_prov` | integer |  optional  | Id del proveedor.
        `prov_razsoc` | string |  optional  | razon social del proveedor.
        `prov_ruc` | string |  optional  | ruc del proveedor.
        `id_proy` | integer |  optional  | Id del proyecto.
        `gas_mon` | char |  optional  | tipo de moneda 0=sol 1=dolar.
        `gas_tipcam` | float |  optional  | tipo de cambio de moneda dolar.
        `gas_fac_ser` | string |  optional  | serie de la factura
        `gas_totdol` | float |  optional  | total en dolares
        `gas_desc` | string |  optional  | descripcion del gasto
    
<!-- END_cdea3928461d9d1b67db6ec6ce47b3ad -->

<!-- START_1e85c223fa1fc2aa329ed3f3442ff2b7 -->
## Anular Gasto

Anula un Gasto

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/gasto/annul/eum" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/gasto/annul/eum"
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
    "resp": "Gasto anulado"
}
```

### HTTP Request
`GET api/gasto/annul/{id}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `id` |  required  | El ID del Gasto.

<!-- END_1e85c223fa1fc2aa329ed3f3442ff2b7 -->

<!-- START_b629a02d3df95447aab2ffd409115565 -->
## Retornar Gasto

Retorna Gasto por Id

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/gasto/get/reiciendis" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/gasto/get/reiciendis"
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
    "Gasto": {
        "id_gas": 0,
        "gas_fec": "date",
        "gas_fac": "string",
        "gas_subtot": "float",
        "gas_igv": "float",
        "gas_tot": "float",
        "id_prov": 0,
        "prov_razsoc": "string",
        "prov_ruc": "string",
        "id_proy": 0,
        "gas_mon": "char",
        "gas_tipcam": "float",
        "gas_totdol": "float",
        "gas_fac_ser": "string",
        "gas_desc": "string"
    },
    "logo": "string",
    "extension": "string"
}
```

### HTTP Request
`GET api/gasto/get/{id}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `id` |  required  | El ID del Gasto.

<!-- END_b629a02d3df95447aab2ffd409115565 -->

<!-- START_bb3bb8d68315c587879f77159d91459a -->
## Modificar Gasto

Modifica un Gasto

> Example request:

```bash
curl -X POST \
    "http://localhost/api/gasto/update/necessitatibus" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"gas_fec":"soluta","gas_fac":"qui","gas_subtot":5034,"gas_igv":2553976.843,"gas_tot":4322.022537506,"id_prov":20,"prov_razsoc":"quia","prov_ruc":"quia","id_proy":14,"gas_mon":"illum","gas_tipcam":5312.2,"gas_totdol":0,"gas_fac_ser":"similique","gas_desc":"illum"}'

```

```javascript
const url = new URL(
    "http://localhost/api/gasto/update/necessitatibus"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "gas_fec": "soluta",
    "gas_fac": "qui",
    "gas_subtot": 5034,
    "gas_igv": 2553976.843,
    "gas_tot": 4322.022537506,
    "id_prov": 20,
    "prov_razsoc": "quia",
    "prov_ruc": "quia",
    "id_proy": 14,
    "gas_mon": "illum",
    "gas_tipcam": 5312.2,
    "gas_totdol": 0,
    "gas_fac_ser": "similique",
    "gas_desc": "illum"
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
    "resp": "Gasto  actualizado"
}
```

### HTTP Request
`POST api/gasto/update/{id}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `id` |  required  | El ID del Gasto .
#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `gas_fec` | date |  optional  | Fecha del gasto.
        `gas_fac` | string |  optional  | Nro de la factura.
        `gas_subtot` | float |  optional  | subtotal en soles del gasto formula total/1.18.
        `gas_igv` | float |  optional  | gasto con igv cumple formula subtotal*18%.
        `gas_tot` | float |  optional  | gasto total si existe moneda dolar formula tipocambio*totaldolar.
        `id_prov` | integer |  optional  | Id del proveedor.
        `prov_razsoc` | string |  optional  | razon social del proveedor.
        `prov_ruc` | string |  optional  | ruc del proveedor.
        `id_proy` | integer |  optional  | Id del proyecto.
        `gas_mon` | char |  optional  | tipo de moneda 0=sol 1=dolar.
        `gas_tipcam` | float |  optional  | tipo de cambio de moneda dolar.
        `gas_totdol` | float |  optional  | total en dolares
        `gas_fac_ser` | string |  optional  | numero de serie de la factura.
        `gas_desc` | string |  optional  | descripcion del gasto
    
<!-- END_bb3bb8d68315c587879f77159d91459a -->

<!-- START_60fa71d7b730f51d2ae4455e39a0183d -->
## Retornar Gastos Excel

Retorna todos los gastos para excel

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/gasto/getexcel" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/gasto/getexcel"
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
            "Fecha": "date",
            "Factura": "string",
            "Proveedor": "String",
            "RUC": "float",
            "Descripcion": "float",
            "Subtotal S\/": "string",
            "IGV S\/": "char",
            "Total S\/.": "string",
            "T.C $": "char",
            "Dolares $": "float"
        }
    ],
    "size": 0,
    "logo": "string",
    "extension": "string"
}
```

### HTTP Request
`GET api/gasto/getexcel`


<!-- END_60fa71d7b730f51d2ae4455e39a0183d -->

#Guia de remision

APIs para Guia de remision de transporte
<!-- START_ba35006e530814664dbcf1e927a88f95 -->
## Retornar todas las guias

Retorna todas las guias sin ningun filtro adicional

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/guia-remision/get" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/guia-remision/get"
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
            "id_guia_remision": 1,
            "tipoDoc": 1,
            "serie": "T001",
            "correlativo": 1,
            "observacion": "observacion xd",
            "fechaEmision": "2020-12-11 00:40:01",
            "id_emp": 1,
            "id_cli": 1,
            "id_envio": 4,
            "observaciones": null,
            "solcli_id": null,
            "est_reg": "",
            "est_env": "A",
            "cliente": {
                "id_cli": 1,
                "razsoc_cli": "LA PRUEBA CLEITNE SAC",
                "numdoc_cli": 9842255555,
                "ema_cli": "prueba@cliente.com",
                "id_tipdoc": 1,
                "est_reg": "A",
                "tipo_documento": {},
                "contactos": {},
                "direcciones": {},
                "proyectos": {},
                "ordenes_compras": {}
            },
            "guia_remision_det": [
                {
                    "id_guia_remision_det": 1,
                    "id_guia_remision": 1,
                    "codigo": "PROD1",
                    "descripcion": "PRODUCTO 1",
                    "unidad": "ZZ",
                    "cantidad": 2,
                    "codProdSunat": "P001",
                    "id_prod": null,
                    "est_reg": "A",
                    "producto": null
                }
            ],
            "envio": {
                "id_envio": 4,
                "codTraslado": 1,
                "desTraslado": "VENTA",
                "indTransbordo": 0,
                "pesoTotal": 10,
                "undPesoTotal": "KGM",
                "numBultos": 2,
                "modTraslado": 1,
                "fecTraslado": "2019-09-14 23:21:12",
                "numContenedor": "XD-2232",
                "codPuerto": 123,
                "id_transportista": 1,
                "ubigueoLlegada": 4255565,
                "direccionLlegada": "Calle los alamos de la molina 312",
                "ubigueoSalida": 415855,
                "direccionSalida": "Via evitamiento KM 42",
                "est_reg": "A",
                "transportista": {
                    "id_transportista": 1,
                    "TipoDoc": 1,
                    "NumDoc": 72585555865,
                    "RznSocial": "Mega centro SAC",
                    "Placa": "vi-412",
                    "ChoferTipoDoc": 2,
                    "ChoferDoc": 78528582588,
                    "est_reg": "A"
                }
            },
            "solicitud_cotizacion_cliente": {}
        }
    ],
    "size": 0
}
```

### HTTP Request
`GET api/guia-remision/get`


<!-- END_ba35006e530814664dbcf1e927a88f95 -->

<!-- START_59a43eb788aed9cc920305352c1819df -->
## Retornar una guia

Retorna una guia de remision por medio de su Id

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/guia-remision/get/cumque" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/guia-remision/get/cumque"
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
`GET api/guia-remision/get/{id}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `id` |  required  | El ID de la guia de remision .

<!-- END_59a43eb788aed9cc920305352c1819df -->

<!-- START_fd49dc232ae7a6714f560665b2cafceb -->
## Crear Guia de remision

Crea una guia de remision de transporte

> Example request:

```bash
curl -X POST \
    "http://localhost/api/guia-remision/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"tipoDoc":"et","serie":"maxime","observacion":"et","id_cli":"sunt","envio":[],"est_reg":"accusamus","est_env":"architecto","solcli_id":"beatae","guia_remision_det":[]}'

```

```javascript
const url = new URL(
    "http://localhost/api/guia-remision/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "tipoDoc": "et",
    "serie": "maxime",
    "observacion": "et",
    "id_cli": "sunt",
    "envio": [],
    "est_reg": "accusamus",
    "est_env": "architecto",
    "solcli_id": "beatae",
    "guia_remision_det": []
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
    "resp": "Guia de remision  creada"
}
```

### HTTP Request
`POST api/guia-remision/create`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `tipoDoc` | string |  optional  | 1,
        `serie` | string |  optional  | T001,
        `observacion` | string |  optional  | Observacion,
        `id_cli` | id |  optional  | id del cliente,
        `envio` | array |  optional  | Ejemplo: [{"codTraslado": "01", "desTraslado": "VENTA", "indTransbordo": false, "pesoTotal": 10, "undPesoTotal": "KGM", "numBultos": 2, "modTraslado": "01", "fecTraslado": "2019-09-14T23:21:12+01:00", "numContenedor": "XD-2232", "codPuerto": "123", "id_transportista" : 1, "ubigueoLlegada": "4255565", "direccionLlegada": "Calle los alamos de la molina 312", "ubigueoSalida": "0415855", "direccionSalida" :  "Via evitamiento KM 42", "est_reg": "A" } ],
        `est_reg` | string |  optional  | estado de registro
        `est_env` | string |  optional  | estado de envio
        `solcli_id` | num |  optional  | Id de la solicitud de cotizacion cliente,
        `guia_remision_det` | array |  optional  | Ejemplo:[ {"id_guia_remision_det": 1,"id_guia_remision": 1,"codigo": "PROD1","descripcion": "PRODUCTO 1","unidad": "ZZ","cantidad": 2,"codProdSunat": "P001","id_prod": null,"est_reg": "A","producto": null}]
    
<!-- END_fd49dc232ae7a6714f560665b2cafceb -->

<!-- START_0bc3e235b76a9ed1d8e6b1fb7d9abfa9 -->
## Anular guia de remision

Anula una guia de remision solo en nuestro sistema solo deve hacerse antes de ser enviada a la SUNAT sino GG

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/guia-remision/annul/ut" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/guia-remision/annul/ut"
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
    "resp": "Guia de remision Anulada"
}
```

### HTTP Request
`GET api/guia-remision/annul/{id}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `id` |  required  | El ID de la guia es requeridp

<!-- END_0bc3e235b76a9ed1d8e6b1fb7d9abfa9 -->

#Kardex

APIs para kardex
<!-- START_f7edaff054ce7bc8aa6007436deea493 -->
## Retornar Kardex

Retorna todos los productos de ingreso y de salida

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/kardex/get" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/kardex/get"
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
            "id_kar": 0,
            "fec_kar": "date",
            "cod_kar": "string",
            "id_ord_det": 0,
            "id_ord_com": 0,
            "prod_desc": "string",
            "prod_numpar": "string",
            "prod_unimed": "char",
            "prod_cant": "float",
            "prov_razsoc": "string",
            "fac_kar": "string",
            "guirem_kar": "string",
            "bol_kar": "string",
            "tip_kar": "char",
            "id_col": 0,
            "col_usu": "string",
            "est_reg": "char"
        }
    ],
    "size": 0,
    "logo": "string",
    "extension": "string"
}
```

### HTTP Request
`GET api/kardex/get`


<!-- END_f7edaff054ce7bc8aa6007436deea493 -->

<!-- START_fbea6a3a38baf9ed2083d16128672d13 -->
## Retornar ordenes pendites o incompletas

Retorna todos las ordenes de compra que tengan en el detalle pendiente o incompleto a la hora de realizar la entrega del producto

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/kardex/getpendiente" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/kardex/getpendiente"
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
            "id_ord_com": 0,
            "ord_comfec": "date",
            "ord_com_cod": "string",
            "usu_ema": 0,
            "id_col": 0,
            "prov_razsoc": "string"
        }
    ],
    "size": 0
}
```

### HTTP Request
`GET api/kardex/getpendiente`


<!-- END_fbea6a3a38baf9ed2083d16128672d13 -->

<!-- START_e9a1a17a599c602f16b0a46d98ac4d31 -->
## Retornar ordenes pendientes o incompletas por ID

Retorna todos las ordenes de compra por ID que tengan en el detalle pendiente o incompleto a la hora de realizar la entrega del producto

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/kardex/getpendiente/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/kardex/getpendiente/1"
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
            "id_ord_com": 0,
            "ord_comfec": "date",
            "ord_com_cod": "string",
            "usu_ema": 0,
            "prov_razsoc": "string"
        }
    ],
    "size": 0
}
```

### HTTP Request
`GET api/kardex/getpendiente/{id}`


<!-- END_e9a1a17a599c602f16b0a46d98ac4d31 -->

<!-- START_e09fe76b9a7e9ca35b9a4a99de360aba -->
## Crear Kardex

Crea un Kardex

> Example request:

```bash
curl -X POST \
    "http://localhost/api/kardex/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"kardex_ingreso":[]}'

```

```javascript
const url = new URL(
    "http://localhost/api/kardex/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "kardex_ingreso": []
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
    "resp": "Kardex Registrado"
}
```

### HTTP Request
`POST api/kardex/create`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `kardex_ingreso` | array |  required  | Ejemplo: [{"cod_kar": "String", "id_ord_det":0, "id_ord_com":0, "prod_desc":"string", "prod_numpar":"string", "prod_unimed":"char", "prod_cant":"float", "prov_razsoc":"string", "fac_kar":"string", "guirem_kar":"string", "bol_kar":"string", "tip_kar":"char","id_col":0,"col_usu":"string", "ord_com_det_est":"char", "ord_com_det_feclleg":"date", "ord_com_det_canent":"float", "ord_com_det_canfal":"float"}].
    
<!-- END_e09fe76b9a7e9ca35b9a4a99de360aba -->

<!-- START_8ded75822d04226ab770a0cb6075fd6d -->
## Retornar Kardex para excel

Retorna todos los kardex para el excel

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/kardex/getexcel" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/kardex/getexcel"
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
            "fecha": "date",
            "codigo": "string",
            "descripcion del producto": "string",
            "Numero de parte": "string",
            "Unidad de medida": "char",
            "Cantidad": "float",
            "Proveedor_Cliente": "string",
            "Factura": "string",
            "Guia Remision": "string",
            "Boleta": "string",
            "Tipo": "char",
            "Usuario": "string"
        }
    ]
}
```

### HTTP Request
`GET api/kardex/getexcel`


<!-- END_8ded75822d04226ab770a0cb6075fd6d -->

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
    -G "http://localhost/api/almacen/marcas/get/aspernatur" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/almacen/marcas/get/aspernatur"
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
    -d '{"des_mar":"aliquam"}'

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
    "des_mar": "aliquam"
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
    "http://localhost/api/almacen/marcas/update/odit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"des_mar":"ducimus"}'

```

```javascript
const url = new URL(
    "http://localhost/api/almacen/marcas/update/odit"
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
    -G "http://localhost/api/almacen/marcas/delete/alias" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/almacen/marcas/delete/alias"
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
    -G "http://localhost/api/almacen/modelos/get/suscipit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/almacen/modelos/get/suscipit"
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
    -d '{"des_mod":"dolore"}'

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
    "des_mod": "dolore"
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
    "http://localhost/api/almacen/modelos/update/veniam" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"des_mod":"maiores"}'

```

```javascript
const url = new URL(
    "http://localhost/api/almacen/modelos/update/veniam"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "des_mod": "maiores"
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
    -G "http://localhost/api/almacen/modelos/delete/dolore" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/almacen/modelos/delete/dolore"
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

#OrdenDeCompra

APIs para orden de compra
<!-- START_4b3c7f8645e085addf73575b47d2a0e7 -->
## api/orden-compra/get
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/orden-compra/get" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/orden-compra/get"
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
`GET api/orden-compra/get`


<!-- END_4b3c7f8645e085addf73575b47d2a0e7 -->

<!-- START_4d240a3e25043cc4e50c1287f18d7472 -->
## Retornar orden de compra

Retorna orden de compra por medio de su Id

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/orden-compra/get/maiores" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/orden-compra/get/maiores"
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
`GET api/orden-compra/get/{id}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `id` |  required  | El ID de la orden de compra.

<!-- END_4d240a3e25043cc4e50c1287f18d7472 -->

<!-- START_dc3555b1d5202f52ddf2334c7a7730af -->
## Crear Orden de Compra

Crea una orden de compra

> Example request:

```bash
curl -X POST \
    "http://localhost/api/orden-compra/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"cotprov_id":12,"ord_com_prov_id":18,"ord_com_prov_dir":"laborum","ord_com_prov_con":"libero","ord_com_prov_ema":"aliquam","ord_com_term":"quia","id_col":17,"ord_com_bas_imp":188.0786,"ord_com_igv":540563.75,"ord_com_tot":3779866.64602787,"id_pro":14,"id_cli":13,"ord_med_ent":"veritatis","orden_detalle":[]}'

```

```javascript
const url = new URL(
    "http://localhost/api/orden-compra/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "cotprov_id": 12,
    "ord_com_prov_id": 18,
    "ord_com_prov_dir": "laborum",
    "ord_com_prov_con": "libero",
    "ord_com_prov_ema": "aliquam",
    "ord_com_term": "quia",
    "id_col": 17,
    "ord_com_bas_imp": 188.0786,
    "ord_com_igv": 540563.75,
    "ord_com_tot": 3779866.64602787,
    "id_pro": 14,
    "id_cli": 13,
    "ord_med_ent": "veritatis",
    "orden_detalle": []
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
    "resp": "orden de compra creada"
}
```

### HTTP Request
`POST api/orden-compra/create`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `cotprov_id` | integer |  optional  | Id de la cotizacion de proveedor.
        `ord_com_prov_id` | integer |  optional  | Id del proveedor.
        `ord_com_prov_dir` | string |  optional  | Direccion del proveedor.
        `ord_com_prov_con` | string |  optional  | Contacto del proveedor.
        `ord_com_prov_ema` | string |  optional  | Correo del contacto del proveedor.
        `ord_com_term` | string |  optional  | Terminos de la orden de compra.
        `id_col` | integer |  optional  | Id del colaborador.
        `ord_com_bas_imp` | float |  optional  | Base imponible.
        `ord_com_igv` | float |  optional  | IGV, 18% de la base imponible.
        `ord_com_tot` | float |  optional  | Total, suma de base imponible y el igv.
        `id_pro` | integer |  optional  | Id de la proforma de cliente.
        `id_cli` | integer |  optional  | Id del cliente.
        `ord_med_ent` | string |  optional  | Medio de entrega de la orden de compra.
        `orden_detalle` | array |  required  | Ejemplo: [{"id_prod": 0,"ord_com_det_numpar": "string", "ord_com_det_fab": "string","ord_com_det_des": "string","ord_com_det_can": 0,"ord_com_det_unimed": "string","ord_com_det_preuni": 0, "ord_com_det_est":"string", "ord_com_det_feclleg": "2020-25-10", "ord_com_det_canent": 0,"ord_com_det_canfal": 0, "ord_com_prod_serv":"string"}]
    
<!-- END_dc3555b1d5202f52ddf2334c7a7730af -->

<!-- START_eb20eb60509bb90f9f08409acfbeb4a9 -->
## Anular orden de compra

Anula una orden de compra

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/orden-compra/annul/omnis" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/orden-compra/annul/omnis"
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
    "resp": "Orden de compra anulada"
}
```

### HTTP Request
`GET api/orden-compra/annul/{id}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `id` |  required  | El ID de la orden de compra.

<!-- END_eb20eb60509bb90f9f08409acfbeb4a9 -->

#OrdenDeCompraCliente

APIs para orden de compra cliente
<!-- START_0947538d912eb5bb26e0068d9feccdd6 -->
## api/orden-compra-cliente/get
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/orden-compra-cliente/get" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/orden-compra-cliente/get"
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
`GET api/orden-compra-cliente/get`


<!-- END_0947538d912eb5bb26e0068d9feccdd6 -->

<!-- START_a59b2fb9438296350ca90661b113965c -->
## Retornar orden de compra Cliente

Retorna orden de compra por medio de su Id

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/orden-compra-cliente/get/autem" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/orden-compra-cliente/get/autem"
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
`GET api/orden-compra-cliente/get/{id}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `id` |  required  | El ID de la orden de compra.

<!-- END_a59b2fb9438296350ca90661b113965c -->

<!-- START_3b8d4f00ce7e196d2bc75ed453be69d1 -->
## Crear Orden de Compra

Crea una orden de compra

> Example request:

```bash
curl -X POST \
    "http://localhost/api/orden-compra-cliente/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"cotprov_id":14,"ord_com_prov_id":9,"ord_com_prov_dir":"consequatur","ord_com_prov_con":"et","ord_com_prov_ema":"incidunt","ord_com_term":"maxime","id_col":16,"ord_com_bas_imp":823.915216564,"ord_com_igv":2303.9203011,"ord_com_tot":346.51,"id_pro":4,"id_cli":9,"ord_med_ent":"sit","orden_detalle":[]}'

```

```javascript
const url = new URL(
    "http://localhost/api/orden-compra-cliente/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "cotprov_id": 14,
    "ord_com_prov_id": 9,
    "ord_com_prov_dir": "consequatur",
    "ord_com_prov_con": "et",
    "ord_com_prov_ema": "incidunt",
    "ord_com_term": "maxime",
    "id_col": 16,
    "ord_com_bas_imp": 823.915216564,
    "ord_com_igv": 2303.9203011,
    "ord_com_tot": 346.51,
    "id_pro": 4,
    "id_cli": 9,
    "ord_med_ent": "sit",
    "orden_detalle": []
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
    "resp": "orden de compra creada"
}
```

### HTTP Request
`POST api/orden-compra-cliente/create`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `cotprov_id` | integer |  optional  | Id de la cotizacion de proveedor.
        `ord_com_prov_id` | integer |  optional  | Id del proveedor.
        `ord_com_prov_dir` | string |  optional  | Direccion del proveedor.
        `ord_com_prov_con` | string |  optional  | Contacto del proveedor.
        `ord_com_prov_ema` | string |  optional  | Correo del contacto del proveedor.
        `ord_com_term` | string |  optional  | Terminos de la orden de compra.
        `id_col` | integer |  optional  | Id del colaborador.
        `ord_com_bas_imp` | float |  optional  | Base imponible.
        `ord_com_igv` | float |  optional  | IGV, 18% de la base imponible.
        `ord_com_tot` | float |  optional  | Total, suma de base imponible y el igv.
        `id_pro` | integer |  optional  | Id de la proforma de cliente.
        `id_cli` | integer |  optional  | Id del cliente.
        `ord_med_ent` | string |  optional  | Medio de entrega de la orden de compra.
        `orden_detalle` | array |  required  | Ejemplo: [{"id_prod": 0,"ord_com_det_numpar": "string", "ord_com_det_fab": "string","ord_com_det_des": "string","ord_com_det_can": 0,"ord_com_det_unimed": "string","ord_com_det_preuni": 0, "ord_com_det_est":"string", "ord_com_det_feclleg": "2020-25-10", "ord_com_det_canent": 0,"ord_com_det_canfal": 0, "ord_com_prod_serv":"string"}]
    
<!-- END_3b8d4f00ce7e196d2bc75ed453be69d1 -->

<!-- START_65a86cdc56b96ff6bd3c33f8a770a9dc -->
## Anular orden de compra Cliente

Anula una orden de compra Cliente

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/orden-compra-cliente/annul/harum" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/orden-compra-cliente/annul/harum"
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
    "resp": "Orden de compra anulada"
}
```

### HTTP Request
`GET api/orden-compra-cliente/annul/{id}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `id` |  required  | El ID de la orden de compra.

<!-- END_65a86cdc56b96ff6bd3c33f8a770a9dc -->

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
            "mon_prod": 0,
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
    -G "http://localhost/api/almacen/productos/get/dolore" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/almacen/productos/get/dolore"
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
    "mon_prod": 0,
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
    -d '{"cod_prod":"voluptas","num_parte_prod":"placeat","stk_prod":12,"des_prod":"id","pre_com_prod":18,"mon_prod":1,"id_unimed":6,"id_mar":2,"id_mod":15,"id_fab":5}'

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
    "cod_prod": "voluptas",
    "num_parte_prod": "placeat",
    "stk_prod": 12,
    "des_prod": "id",
    "pre_com_prod": 18,
    "mon_prod": 1,
    "id_unimed": 6,
    "id_mar": 2,
    "id_mod": 15,
    "id_fab": 5
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
        `mon_prod` | integer |  optional  | Moneda del producto (1=sol, 2=dolar).
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
    "http://localhost/api/almacen/productos/update/dolor" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"cod_prod":"velit","num_parte_prod":"est","stk_prod":18,"des_prod":"fugiat","pre_com_prod":12,"mon_prod":17,"id_unimed":2,"id_mar":18,"id_mod":1,"id_fab":13}'

```

```javascript
const url = new URL(
    "http://localhost/api/almacen/productos/update/dolor"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "cod_prod": "velit",
    "num_parte_prod": "est",
    "stk_prod": 18,
    "des_prod": "fugiat",
    "pre_com_prod": 12,
    "mon_prod": 17,
    "id_unimed": 2,
    "id_mar": 18,
    "id_mod": 1,
    "id_fab": 13
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
        `mon_prod` | integer |  optional  | Moneda del producto (1=sol, 2=dolar).
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
    -G "http://localhost/api/almacen/productos/delete/accusamus" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/almacen/productos/delete/accusamus"
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

#ProformaCliente

APIs para proforma cliente
<!-- START_ce5c9a0e49ad72537d56e2f2646fabea -->
## Retornar proformas cliente

Retorna todas las proformas cliente activas y anuladas

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/proforma-cliente/get" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/proforma-cliente/get"
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
            "id_pro": 0,
            "id_cli": 0,
            "prof_fec": "date",
            "prof_mon": 0,
            "id_proy": 0,
            "id_col": 0,
            "solcli_id": 0,
            "prof_cre": 0,
            "prof_imp_ini": 0,
            "prof_int": 0,
            "prof_cuo": 0,
            "prof_val": "string",
            "prof_tie_ent": "string",
            "prof_cos_dir": 0,
            "prof_gas_ind": 0,
            "prof_uti": 0,
            "prof_bas_imp": 0,
            "prof_tie_ins": "string",
            "prof_con_pag": "string",
            "prof_igv": 0,
            "prof_neto": 0,
            "prof_fac": 0,
            "prof_finan": 0,
            "prof_val_cuo": 0,
            "prof_cli_id_dir": 0,
            "prof_cli_id_con": 0,
            "prof_cli_ciu": "String",
            "prof_cod": "2020-1",
            "est_reg": "string",
            "est_env": "string",
            "proyecto": {
                "id_proy": 0,
                "nom_proy": "string",
                "ser_proy": "string",
                "num_proy": 0,
                "id_cli": 0,
                "est_reg": "string"
            },
            "cliente": {
                "id_cli": 0,
                "razsoc_cli": "string",
                "numdoc_cli": 0,
                "ema_cli": "string",
                "id_tipdoc": 0,
                "est_reg": "string"
            },
            "usuario": {
                "id_col": 0,
                "nom_col": "string",
                "ape_col": "string"
            },
            "cliente_contacto": {
                "nom_cli_con": "string",
                "ema_cli_con": "string"
            }
        }
    ],
    "size": 0
}
```

### HTTP Request
`GET api/proforma-cliente/get`


<!-- END_ce5c9a0e49ad72537d56e2f2646fabea -->

<!-- START_15e0dac84c2175c76804aed58435e1c8 -->
## Retornar proforma del cliente

Retorna proforma del cliente por medio de su Id

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/proforma-cliente/get/sit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/proforma-cliente/get/sit"
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
`GET api/proforma-cliente/get/{id}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `id` |  required  | El ID de la proforma del cliente.

<!-- END_15e0dac84c2175c76804aed58435e1c8 -->

<!-- START_550dec3863c742c784a86037e5411937 -->
## Crear Proforma Cliente

Crea una proforma cliente

> Example request:

```bash
curl -X POST \
    "http://localhost/api/proforma-cliente/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"id_cli":20,"prof_mon":5,"id_proy":13,"id_col":18,"solcli_id":5,"prof_cre":15,"prof_imp_ini":0.8812051,"prof_int":3.8,"prof_cuo":5,"prof_val":"consequatur","prof_tie_ent":"a","prof_cos_dir":2.0566024,"prof_gas_ind":13804.4494268,"prof_uti":239.17296787,"prof_bas_imp":302149.3797,"prof_igv":1265.30218664,"prof_neto":660187.764,"prof_fac":275238234,"prof_finan":401083.54,"prof_val_cuo":504,"prof_cli_id_dir":8,"prof_cli_id_con":15,"prof_obs":"iusto","prof_tie_ins":"eligendi","prof_con_pag":"beatae","prof_desc":33882999.381008595,"prof_cli_ciu":"praesentium","proforma_detalle":[]}'

```

```javascript
const url = new URL(
    "http://localhost/api/proforma-cliente/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "id_cli": 20,
    "prof_mon": 5,
    "id_proy": 13,
    "id_col": 18,
    "solcli_id": 5,
    "prof_cre": 15,
    "prof_imp_ini": 0.8812051,
    "prof_int": 3.8,
    "prof_cuo": 5,
    "prof_val": "consequatur",
    "prof_tie_ent": "a",
    "prof_cos_dir": 2.0566024,
    "prof_gas_ind": 13804.4494268,
    "prof_uti": 239.17296787,
    "prof_bas_imp": 302149.3797,
    "prof_igv": 1265.30218664,
    "prof_neto": 660187.764,
    "prof_fac": 275238234,
    "prof_finan": 401083.54,
    "prof_val_cuo": 504,
    "prof_cli_id_dir": 8,
    "prof_cli_id_con": 15,
    "prof_obs": "iusto",
    "prof_tie_ins": "eligendi",
    "prof_con_pag": "beatae",
    "prof_desc": 33882999.381008595,
    "prof_cli_ciu": "praesentium",
    "proforma_detalle": []
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
    "resp": "proforma cliente creada"
}
```

### HTTP Request
`POST api/proforma-cliente/create`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `id_cli` | integer |  optional  | Id del cliente.
        `prof_mon` | integer |  optional  | Moneda de la proforma.
        `id_proy` | integer |  optional  | Id del proyecto.
        `id_col` | integer |  optional  | Id del colaborador.
        `solcli_id` | integer |  optional  | Id de la solicitud de cliente.
        `prof_cre` | integer |  optional  | Codigo de seleccion del cliente (1-2-3).
        `prof_imp_ini` | float |  optional  | Importe inicial.
        `prof_int` | float |  optional  | Interes, Porcentaje de Interes.
        `prof_cuo` | integer |  optional  | Cuotas.
        `prof_val` | string |  optional  | Validez de la proforma.
        `prof_tie_ent` | string |  optional  | Tiempo de entrega.
        `prof_cos_dir` | float |  optional  | Costo directo.
        `prof_gas_ind` | float |  optional  | Gastos indirectos.
        `prof_uti` | float |  optional  | Utilidad.
        `prof_bas_imp` | float |  optional  | Base imponible.
        `prof_igv` | float |  optional  | float IGV.
        `prof_neto` | float |  optional  | Neto a pagar.
        `prof_fac` | float |  optional  | Factor.
        `prof_finan` | float |  optional  | Financiacion.
        `prof_val_cuo` | float |  optional  | Valor Cuota.
        `prof_cli_id_dir` | integer |  optional  | Id de la direccion de cliente.
        `prof_cli_id_con` | integer |  optional  | Id del contacto de cliente.
        `prof_obs` | char |  optional  | observaciones del cliente.
        `prof_tie_ins` | char |  optional  | proforma tiempo de instalacion.
        `prof_con_pag` | char |  optional  | Condiciones de pago.
        `prof_desc` | float |  optional  | procentaje de descuento.
        `prof_cli_ciu` | Direccion |  optional  | del cliente.
        `proforma_detalle` | array |  required  | Ejemplo: [{"id_prof_det": 1,"id_pro": 5,"id_prod": 10,"prof_det_can": 10,"prof_det_pre_lis": 20,"prof_det_imp": 10,"prof_det_cos": 10,"prof_det_tcos": 10, "prof_det_por_com": 0, "prof_det_com": 10,"id_prov": 2,"id_sec": 1,"prof_prod_serv": 1,"prof_des_prod": "producto","prof_can_prod": 10,  "prof_dir_prov": "String", "prof_ema_prov": "algo@gmail.com"}]
    
<!-- END_550dec3863c742c784a86037e5411937 -->

<!-- START_525f3515dbbd2d445ae001b2eeec8143 -->
## Anular proforma de cliente

Anula una proforma

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/proforma-cliente/annul/unde" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/proforma-cliente/annul/unde"
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
    "resp": "Proforma anulada"
}
```

### HTTP Request
`GET api/proforma-cliente/annul/{id}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `id` |  required  | El ID de la proforma del cliente.

<!-- END_525f3515dbbd2d445ae001b2eeec8143 -->

<!-- START_aeb74a7c321a6996d54aa6aac79d8415 -->
## Modifica cabecera de la proforma cliente

> Example request:

```bash
curl -X POST \
    "http://localhost/api/proforma-cliente/update-header/quia" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"id_cli":13,"prof_mon":16,"id_proy":2,"id_col":7,"solcli_id":17,"prof_cre":18,"prof_imp_ini":0.96333158,"prof_int":272236318.106281,"prof_cuo":9,"prof_val":"cum","prof_tie_ent":"id","prof_cos_dir":27.49422,"prof_gas_ind":1213.6,"prof_uti":42145,"prof_bas_imp":205.42,"prof_igv":4963065.7,"prof_neto":31272.8282879,"prof_fac":2181.2122,"prof_finan":6044.6197,"prof_val_cuo":16.39524,"prof_cli_id_dir":14,"prof_cli_id_con":2,"prof_obs":"quaerat","prof_tie_ins":"aut","prof_con_pag":"sit","prof_desc":241763.763,"id_cli_dir":"et","prof_cli_ciu":"labore"}'

```

```javascript
const url = new URL(
    "http://localhost/api/proforma-cliente/update-header/quia"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "id_cli": 13,
    "prof_mon": 16,
    "id_proy": 2,
    "id_col": 7,
    "solcli_id": 17,
    "prof_cre": 18,
    "prof_imp_ini": 0.96333158,
    "prof_int": 272236318.106281,
    "prof_cuo": 9,
    "prof_val": "cum",
    "prof_tie_ent": "id",
    "prof_cos_dir": 27.49422,
    "prof_gas_ind": 1213.6,
    "prof_uti": 42145,
    "prof_bas_imp": 205.42,
    "prof_igv": 4963065.7,
    "prof_neto": 31272.8282879,
    "prof_fac": 2181.2122,
    "prof_finan": 6044.6197,
    "prof_val_cuo": 16.39524,
    "prof_cli_id_dir": 14,
    "prof_cli_id_con": 2,
    "prof_obs": "quaerat",
    "prof_tie_ins": "aut",
    "prof_con_pag": "sit",
    "prof_desc": 241763.763,
    "id_cli_dir": "et",
    "prof_cli_ciu": "labore"
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
null
```

### HTTP Request
`POST api/proforma-cliente/update-header/{id}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `id` |  required  | El Id de la cabecera de la proforma.
#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `id_cli` | integer |  optional  | Id del cliente.
        `prof_mon` | integer |  optional  | Moneda de la proforma.
        `id_proy` | integer |  optional  | Id del proyecto.
        `id_col` | integer |  optional  | Id del colaborador.
        `solcli_id` | integer |  optional  | Id de la solicitud de cliente.
        `prof_cre` | integer |  optional  | Codigo de seleccion del cliente (1-2-3).
        `prof_imp_ini` | float |  optional  | Importe inicial.
        `prof_int` | float |  optional  | Interes, Porcentaje de Interes.
        `prof_cuo` | integer |  optional  | Cuotas.
        `prof_val` | string |  optional  | Validez de la proforma.
        `prof_tie_ent` | string |  optional  | Tiempo de entrega.
        `prof_cos_dir` | float |  optional  | Costo directo.
        `prof_gas_ind` | float |  optional  | Gastos indirectos.
        `prof_uti` | float |  optional  | Utilidad.
        `prof_bas_imp` | float |  optional  | Base imponible.
        `prof_igv` | float |  optional  | float IGV.
        `prof_neto` | float |  optional  | Neto a pagar.
        `prof_fac` | float |  optional  | Factor.
        `prof_finan` | float |  optional  | Financiacion.
        `prof_val_cuo` | float |  optional  | Valor Cuota.
        `prof_cli_id_dir` | integer |  optional  | Id de la direccion de cliente.
        `prof_cli_id_con` | integer |  optional  | Id del contacto de cliente.
        `prof_obs` | char |  optional  | observaciones del cliente.
        `prof_tie_ins` | char |  optional  | proforma tiempo de instalacion.
        `prof_con_pag` | char |  optional  | Condiciones de pago.
        `prof_desc` | float |  optional  | porcentaje de descuento.
        `id_cli_dir` | Id |  optional  | direccion cliente.
        `prof_cli_ciu` | Direccion |  optional  | del cliente.
    
<!-- END_aeb74a7c321a6996d54aa6aac79d8415 -->

<!-- START_5c9286d2e41d9b5c8a0cc6292e44b0a7 -->
## Modifica detalle de una proforma cliente

Modifica los campos de un solo detalle, todos los campos son editable excepto el id de proforma cabecera por obvias razones XD :)

> Example request:

```bash
curl -X POST \
    "http://localhost/api/proforma-cliente/update-detail/aut" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"id_prod":"pariatur","prof_det_can":"blanditiis","prof_det_pre_lis":"qui","prof_det_imp":"sunt","prof_det_cos":"iusto","prof_det_tcos":"voluptatem","prof_det_com":"quas","id_prov":"occaecati","id_sec":"non","prof_prod_serv":"saepe","prof_des_prod":"minima","prof_can_prod":"quisquam","prof_dir_prov":"sint","prof_ema_prov":"molestias","id_prov_dir":"atque"}'

```

```javascript
const url = new URL(
    "http://localhost/api/proforma-cliente/update-detail/aut"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "id_prod": "pariatur",
    "prof_det_can": "blanditiis",
    "prof_det_pre_lis": "qui",
    "prof_det_imp": "sunt",
    "prof_det_cos": "iusto",
    "prof_det_tcos": "voluptatem",
    "prof_det_com": "quas",
    "id_prov": "occaecati",
    "id_sec": "non",
    "prof_prod_serv": "saepe",
    "prof_des_prod": "minima",
    "prof_can_prod": "quisquam",
    "prof_dir_prov": "sint",
    "prof_ema_prov": "molestias",
    "id_prov_dir": "atque"
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
    "resp": "Proforma detalle Actualizado"
}
```

### HTTP Request
`POST api/proforma-cliente/update-detail/{id}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `id` |  required  | El ID del detalle de la proforma.
#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `id_prod` | num |  optional  | Id del producto.
        `prof_det_can` | num |  optional  | cantidad.
        `prof_det_pre_lis` | num |  optional  | precio de lista.
        `prof_det_imp` | num. |  optional  | 
        `prof_det_cos` | num. |  optional  | 
        `prof_det_tcos` | num. |  optional  | 
        `prof_det_com` | num. |  optional  | 
        `id_prov` | num |  optional  | Id del proveedor.
        `id_sec` | num |  optional  | Id de la seccion.
        `prof_prod_serv` | string. |  optional  | 
        `prof_des_prod` | string |  optional  | producto.
        `prof_can_prod` | num |  optional  | cantidad de producto.
        `prof_dir_prov` | string |  optional  | direccion del proveedor.
        `prof_ema_prov` | string |  optional  | email del proveedro.
        `id_prov_dir` | num |  optional  | Id direccion proveedor.
    
<!-- END_5c9286d2e41d9b5c8a0cc6292e44b0a7 -->

<!-- START_fc1e9e47be5607df6e6dfc871dce0edd -->
## api/proforma-cliente/update/{id}
> Example request:

```bash
curl -X POST \
    "http://localhost/api/proforma-cliente/update/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/proforma-cliente/update/1"
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
`POST api/proforma-cliente/update/{id}`


<!-- END_fc1e9e47be5607df6e6dfc871dce0edd -->

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
            "num_doc_prov": "string",
            "id_tipodoc": 0,
            "est_reg": "string",
            "tipo_documento": {
                "id_tipdoc": 0,
                "des_tipdoc": "string"
            },
            "bancos": [
                {
                    "id_prov_ban": 0,
                    "tip_prov_ban": "string",
                    "cue_prov_ban": "string",
                    "ban_prov_ban": "string",
                    "id_prov": 0,
                    "com_prov_ban": "string",
                    "est_reg": "string"
                }
            ],
            "colaboradores": [
                {
                    "id_prov_col": 0,
                    "nom_prov_col": "string",
                    "ema_prov_col": "string",
                    "tel_prov_col": "string",
                    "id_prov": 0,
                    "est_reg": "string"
                }
            ],
            "direcciones": [
                {
                    "id_prov_dir": 0,
                    "ciu_prov": "string",
                    "dir_prov": "string",
                    "tel_prov": "string",
                    "id_prov": 0,
                    "est_reg": "string"
                }
            ]
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
    -G "http://localhost/api/proveedores/get/est" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/proveedores/get/est"
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
            "num_doc_prov": "string",
            "id_tipodoc": 0,
            "est_reg": "string",
            "tipo_documento": {
                "id_tipdoc": 0,
                "des_tipdoc": "string"
            },
            "bancos": [
                {
                    "id_prov_ban": 0,
                    "tip_prov_ban": "string",
                    "cue_prov_ban": "string",
                    "ban_prov_ban": "string",
                    "id_prov": 0,
                    "com_prov_ban": "string",
                    "est_reg": "string"
                }
            ],
            "colaboradores": [
                {
                    "id_prov_col": 0,
                    "nom_prov_col": "string",
                    "ema_prov_col": "string",
                    "tel_prov_col": "string",
                    "id_prov": 0,
                    "est_reg": "string"
                }
            ],
            "direcciones": [
                {
                    "id_prov_dir": 0,
                    "ciu_prov": "string",
                    "dir_prov": "string",
                    "tel_prov": "string",
                    "id_prov": 0,
                    "est_reg": "string"
                }
            ]
        }
    ],
    "size": 0
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
    -d '{"razsoc_prov":"voluptatibus","ema_prov":"laboriosam","num_doc_prov":"quis","id_tipodoc":6}'

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
    "ema_prov": "laboriosam",
    "num_doc_prov": "quis",
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
    "http://localhost/api/proveedores/update/sunt" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"razsoc_prov":"eaque","ema_prov":"dolores","num_doc_prov":"doloribus","id_tipodoc":7}'

```

```javascript
const url = new URL(
    "http://localhost/api/proveedores/update/sunt"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "razsoc_prov": "eaque",
    "ema_prov": "dolores",
    "num_doc_prov": "doloribus",
    "id_tipodoc": 7
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
    -G "http://localhost/api/proveedores/delete/magni" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/proveedores/delete/magni"
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

<!-- START_1395a7bc1a9549961d50207b08f7caeb -->
## Administrar banco, colaborador y direcciones

Crea, Actualiza y elimina, banco, colaborador y direcciones de un proveedor

> Example request:

```bash
curl -X POST \
    "http://localhost/api/proveedores/admbancolydir/ut" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"banco":[],"colaborador":[],"direcciones":[]}'

```

```javascript
const url = new URL(
    "http://localhost/api/proveedores/admbancolydir/ut"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "banco": [],
    "colaborador": [],
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
    "resp": "banco, colaborador y direcciones actualizados"
}
```

### HTTP Request
`POST api/proveedores/admbancolydir/{id}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `id` |  required  | El ID del proveedor.
#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `banco` | array |  required  | Ejemplo: [{"id_prov_ban": 0,"tip_prov_ban":"string","cue_prov_ban":"string","ban_prov_ban":"string","com_prov_ban":"string","est_reg": "string"}]
        `colaborador` | array |  required  | Ejemplo: [{"id_prov_col": 0,"nom_prov_col":"string","ema_prov_col":"string","tel_prov_col":"string","ane_prov_col":"string","car_prov_col":"string","est_reg": "string"}]
        `direcciones` | array |  required  | Ejemplo: [{"id_prov_dir": 0,"ciu_prov":"string","dir_prov":"string","tel_prov":"string","est_reg": "string"}]
    
<!-- END_1395a7bc1a9549961d50207b08f7caeb -->

#Proveeedor Banco

APIs para el Banco del proveedor
<!-- START_804de439b5dae68b95ee6a89846dcc39 -->
## Retornar banco proveedor

Retorna todos los bancos del proveedor

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/proveedores-banco/get" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/proveedores-banco/get"
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
            "id_prov_ban": 0,
            "tip_prov_ban": "string",
            "cue_prov_ban": "string",
            "ban_prov_ban": "string",
            "com_prov_ban": "string",
            "created_at": "2020-06-14T06:07:02.419Z",
            "updated_at": "2020-06-14T06:07:02.419Z"
        }
    ],
    "size": 0
}
```

### HTTP Request
`GET api/proveedores-banco/get`


<!-- END_804de439b5dae68b95ee6a89846dcc39 -->

<!-- START_da8d5c06987f76ed0cbbeaf8ea3e89c9 -->
## Retornar banco proveedor

Retorna banco del proveedor por Id

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/proveedores-banco/get/repellat" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/proveedores-banco/get/repellat"
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
    "id_prov_ban": 0,
    "tip_prov_ban": "string",
    "cue_prov_ban": "string",
    "ban_prov_ban": "string",
    "com_prov_ban": "string",
    "created_at": "2020-06-14T06:07:02.419Z",
    "updated_at": "2020-06-14T06:07:02.419Z"
}
```

### HTTP Request
`GET api/proveedores-banco/get/{id}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `id` |  required  | El ID de banco proveedor.

<!-- END_da8d5c06987f76ed0cbbeaf8ea3e89c9 -->

<!-- START_1de2d7ddea2e00d9802c11f44282b0bb -->
## Crear banco proveedor

Crea un banco proveedor

> Example request:

```bash
curl -X POST \
    "http://localhost/api/proveedores-banco/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"tip_prov_ban":"et","cue_prov_ban":"non","ban_prov_ban":"exercitationem","id_prov":13,"com_prov_ban":"ut"}'

```

```javascript
const url = new URL(
    "http://localhost/api/proveedores-banco/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "tip_prov_ban": "et",
    "cue_prov_ban": "non",
    "ban_prov_ban": "exercitationem",
    "id_prov": 13,
    "com_prov_ban": "ut"
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
    "resp": "banco proveedor creado"
}
```

### HTTP Request
`POST api/proveedores-banco/create`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `tip_prov_ban` | string |  required  | Tipo de cuenta que dispone el proveedor.
        `cue_prov_ban` | string |  required  | Nro de cuenta del banco segun el tipo .
        `ban_prov_ban` | string |  required  | Nombre del banco a quien pertenece la cuenta.
        `id_prov` | integer |  required  | id del proveedor asociado.
        `com_prov_ban` | string |  required  | Comentarios que pueda tener esta cuenta.
    
<!-- END_1de2d7ddea2e00d9802c11f44282b0bb -->

<!-- START_f3d4625d59faead7eaddb8defb1f1eb7 -->
## Modificar banco proveedor

Modifica un banco del proveedor

> Example request:

```bash
curl -X POST \
    "http://localhost/api/proveedores-banco/update/sapiente" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"tip_prov_ban":"vel","cue_prov_ban":"perferendis","ban_prov_ban":"impedit","id_prov":10,"com_prov_ban":"nihil"}'

```

```javascript
const url = new URL(
    "http://localhost/api/proveedores-banco/update/sapiente"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "tip_prov_ban": "vel",
    "cue_prov_ban": "perferendis",
    "ban_prov_ban": "impedit",
    "id_prov": 10,
    "com_prov_ban": "nihil"
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
    "resp": "banco proveedor actualizado"
}
```

### HTTP Request
`POST api/proveedores-banco/update/{id}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `id` |  required  | El ID del banco proveedor.
#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `tip_prov_ban` | string |  required  | Tipo de cuenta que dispone el proveedor.
        `cue_prov_ban` | string |  required  | Nro de cuenta del banco segun el tipo .
        `ban_prov_ban` | string |  required  | Nombre del banco a quien pertenece la cuenta.
        `id_prov` | integer |  required  | id del proveedor asociado.
        `com_prov_ban` | string |  required  | Comentarios que pueda tener esta cuenta.
    
<!-- END_f3d4625d59faead7eaddb8defb1f1eb7 -->

<!-- START_50180ca8892b33d98257618e37c35422 -->
## Eliminar banco del proveedor

Elimina un banco del proveedor

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/proveedores-banco/delete/velit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/proveedores-banco/delete/velit"
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
    "resp": "banco proveedor eliminado"
}
```

### HTTP Request
`GET api/proveedores-banco/delete/{id}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `id` |  required  | El ID del banco de proveedor.

<!-- END_50180ca8892b33d98257618e37c35422 -->

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
            "id_prov_col": 0,
            "nom_prov_col": "string",
            "ema_prov_col": "string",
            "tel_prov_col": "char",
            "ane_prov_col": "char",
            "car_prov_col": "string",
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
    -G "http://localhost/api/proveedores-colaborador/get/perferendis" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/proveedores-colaborador/get/perferendis"
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
    "ane_prov_col": "char",
    "car_prov_col": "string",
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
    -d '{"nom_prov":"esse","ema_prov":"natus","tel_prov":"iste","ane_prov_col":"quos","car_prov_col":"impedit","id_prov":18}'

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
    "nom_prov": "esse",
    "ema_prov": "natus",
    "tel_prov": "iste",
    "ane_prov_col": "quos",
    "car_prov_col": "impedit",
    "id_prov": 18
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
        `ane_prov_col` | char |  optional  | anexo del colaborador del proveedor.
        `car_prov_col` | string |  optional  | cargo del colaborador del proveedor.
        `id_prov` | integer |  required  | id del proveedor asociado.
    
<!-- END_aaaee19d4b986ebda9f33a4b700f1f00 -->

<!-- START_d369125c1aa116cb5a60db6df169d68d -->
## Modificar colaborador proveedor

Modifica un colaborador proveedor

> Example request:

```bash
curl -X POST \
    "http://localhost/api/proveedores-colaborador/update/aut" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"nom_prov":"ea","ema_prov":"quia","tel_prov":"nulla","ane_prov_col":"ea","car_prov_col":"et","id_prov":8}'

```

```javascript
const url = new URL(
    "http://localhost/api/proveedores-colaborador/update/aut"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "nom_prov": "ea",
    "ema_prov": "quia",
    "tel_prov": "nulla",
    "ane_prov_col": "ea",
    "car_prov_col": "et",
    "id_prov": 8
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
        `ema_prov` | string |  required  | email del colaborador proveedor.
        `tel_prov` | string |  optional  | telefono opcional del colaborador proveedor.
        `ane_prov_col` | char |  optional  | anexo del colaborador del proveedor.
        `car_prov_col` | string |  optional  | cargo del colaborador del proveedor.
        `id_prov` | integer |  required  | id del proveedor asociado.
    
<!-- END_d369125c1aa116cb5a60db6df169d68d -->

<!-- START_0cfc74ba23427f7b73c414a0df3b95c5 -->
## Eliminar colaborador proveedor

Elimina un colaborador proveedor

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/proveedores-colaborador/delete/ex" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/proveedores-colaborador/delete/ex"
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
    -G "http://localhost/api/proveedores-direccion/get/blanditiis" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/proveedores-direccion/get/blanditiis"
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
    "http://localhost/api/proveedores-direccion/update/repellat" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"ciu_prov":"sed","dir_prov":"fugiat","tel_prov":"voluptatem","id_prov":8}'

```

```javascript
const url = new URL(
    "http://localhost/api/proveedores-direccion/update/repellat"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "ciu_prov": "sed",
    "dir_prov": "fugiat",
    "tel_prov": "voluptatem",
    "id_prov": 8
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
        `id_prov` | integer |  required  | id del proveedor asociado.
    
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
    -d '{"ciu_prov":"vel","dir_prov":"totam","tel_prov":"omnis","id_prov":18}'

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
    "ciu_prov": "vel",
    "dir_prov": "totam",
    "tel_prov": "omnis",
    "id_prov": 18
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
        `id_prov` | integer |  required  | id del proveedor asociado.
    
<!-- END_276d47de9dc8e51a7241d0b07607ad8d -->

<!-- START_f3918fa27ae8af8ba6e606a22b8e8647 -->
## Eliminar direccion proveedor

Elimina un direccion proveedor

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/proveedores-direccion/delete/odit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/proveedores-direccion/delete/odit"
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

#Proyecto

APIs para proyecto
<!-- START_00c284ab55ec1fe6a94bd21321498aed -->
## Retornar proyectos

Retorna todos los proyectos

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/proyecto/get" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/proyecto/get"
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
            "id_proy": 0,
            "nom_proy": "string",
            "ser_proy": "NTWC-P-",
            "num_proy": "000X",
            "created_at": "2020-06-14T06:07:02.419Z",
            "updated_at": "2020-06-14T06:07:02.419Z"
        }
    ],
    "size": 0
}
```

### HTTP Request
`GET api/proyecto/get`


<!-- END_00c284ab55ec1fe6a94bd21321498aed -->

<!-- START_f6cf98b68d92280c35f29c33b68e3099 -->
## Retornar proyectos solo terminados

Retorna todos los proyectos

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/proyecto/getTerminados" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/proyecto/getTerminados"
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
            "id_proy": 0,
            "nom_proy": "string",
            "ser_proy": "NTWC-P-",
            "num_proy": "000X",
            "created_at": "2020-06-14T06:07:02.419Z",
            "updated_at": "2020-06-14T06:07:02.419Z"
        }
    ],
    "size": 0
}
```

### HTTP Request
`GET api/proyecto/getTerminados`


<!-- END_f6cf98b68d92280c35f29c33b68e3099 -->

<!-- START_735f2f44a3d1663f5ad59d2f055bce9b -->
## Retornar proyectos solo en proceso

Retorna todos los proyectos

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/proyecto/getProceso" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/proyecto/getProceso"
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
            "id_proy": 0,
            "nom_proy": "string",
            "ser_proy": "NTWC-P-",
            "num_proy": "000X",
            "created_at": "2020-06-14T06:07:02.419Z",
            "updated_at": "2020-06-14T06:07:02.419Z"
        }
    ],
    "size": 0
}
```

### HTTP Request
`GET api/proyecto/getProceso`


<!-- END_735f2f44a3d1663f5ad59d2f055bce9b -->

<!-- START_2b7bb4e079c717330c0d69f13269020f -->
## Retornar proyecto

Retorna proyecto  por Id

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/proyecto/get/quisquam" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/proyecto/get/quisquam"
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
    "id_proy": 0,
    "nom_proy": "string",
    "ser_proy": "NTWC-P-",
    "num_proy": "char",
    "created_at": "2020-06-14T06:07:02.419Z",
    "updated_at": "2020-06-14T06:07:02.419Z"
}
```

### HTTP Request
`GET api/proyecto/get/{id}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `id` |  required  | El ID del proyecto .

<!-- END_2b7bb4e079c717330c0d69f13269020f -->

<!-- START_9262b403430c7522a12949e559fd8622 -->
## Crear proyecto

Crea un proyecto

> Example request:

```bash
curl -X POST \
    "http://localhost/api/proyecto/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"nom_proy":"illo","id_cli":"reprehenderit"}'

```

```javascript
const url = new URL(
    "http://localhost/api/proyecto/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "nom_proy": "illo",
    "id_cli": "reprehenderit"
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
    "resp": "proyecto creado"
}
```

### HTTP Request
`POST api/proyecto/create`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `nom_proy` | string |  required  | nombre del proyecto.
        `id_cli` | del |  optional  | cliente.
    
<!-- END_9262b403430c7522a12949e559fd8622 -->

<!-- START_305244eced08de9883257580ec5a1bf4 -->
## Modificar proyecto

Modifica un proyecto

> Example request:

```bash
curl -X POST \
    "http://localhost/api/proyecto/update/recusandae" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"nom_proy":"veniam","est_reg":"deserunt","id_cli":"voluptas"}'

```

```javascript
const url = new URL(
    "http://localhost/api/proyecto/update/recusandae"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "nom_proy": "veniam",
    "est_reg": "deserunt",
    "id_cli": "voluptas"
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
    "resp": "proyecto  actualizado"
}
```

### HTTP Request
`POST api/proyecto/update/{id}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `id` |  required  | El ID del proyecto .
#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `nom_proy` | string |  required  | nombre del proyecto.
        `est_reg` | char |  optional  | Estado de registro para cambiar .
        `id_cli` | char |  optional  | Estado de registro para cambiar .
    
<!-- END_305244eced08de9883257580ec5a1bf4 -->

<!-- START_f8b71c84a9677888ea6d4e626f995af3 -->
## Eliminar proyecto

Elimina un proyecto

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/proyecto/delete/animi" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/proyecto/delete/animi"
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
    "resp": "proyecto  eliminado"
}
```

### HTTP Request
`GET api/proyecto/delete/{id}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `id` |  required  | El ID del proyecto .

<!-- END_f8b71c84a9677888ea6d4e626f995af3 -->

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

#Seccion

APIs para seccion del pdf a imprimir
<!-- START_bbc19fce7d62f5d39300cb71aaca2b7f -->
## Retornar Seccion

Retorna todos las secciones est_reg A

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/seccion/get" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/seccion/get"
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
            "id_sec": 0,
            "des_sec": "string",
            "est_reg": "string"
        }
    ],
    "size": 0
}
```

### HTTP Request
`GET api/seccion/get`


<!-- END_bbc19fce7d62f5d39300cb71aaca2b7f -->

<!-- START_0633cf1905e159c6ad06d4614af01bf5 -->
## Retornar  Seccion

Retorna seccion por Id

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/seccion/get/excepturi" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/seccion/get/excepturi"
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
`GET api/seccion/get/{id}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `id` |  required  | El ID de la seccion

<!-- END_0633cf1905e159c6ad06d4614af01bf5 -->

<!-- START_2935f8f78fe4e46d089511f18649599d -->
## Crear seccion

Crea una seccion

> Example request:

```bash
curl -X POST \
    "http://localhost/api/seccion/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"des_sec":"quae"}'

```

```javascript
const url = new URL(
    "http://localhost/api/seccion/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "des_sec": "quae"
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
`POST api/seccion/create`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `des_sec` | string |  required  | Descripcion de la seccion
    
<!-- END_2935f8f78fe4e46d089511f18649599d -->

<!-- START_939d9270817ac9cf38ff2eec1134f7d1 -->
## Modifica descripcion seccion

Modifica la descripcion seccion

> Example request:

```bash
curl -X POST \
    "http://localhost/api/seccion/update/aut" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"des_sec":"et"}'

```

```javascript
const url = new URL(
    "http://localhost/api/seccion/update/aut"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "des_sec": "et"
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
    "resp": "descripcion seccion actualizado"
}
```

### HTTP Request
`POST api/seccion/update/{id}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `id` |  required  | El ID de la seccion.
#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `des_sec` | string |  required  | Descripcion de la seccion.
    
<!-- END_939d9270817ac9cf38ff2eec1134f7d1 -->

<!-- START_a18312d3f5bef0ef67ef66ec9b591447 -->
## Eliminar seccion

Elimina una seccion

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/seccion/delete/est" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/seccion/delete/est"
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
    "resp": "seccion eliminado"
}
```

### HTTP Request
`GET api/seccion/delete/{id}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `id` |  required  | El ID de la seccion.

<!-- END_a18312d3f5bef0ef67ef66ec9b591447 -->

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
    -G "http://localhost/api/usuarios/tiposdoc/get/architecto" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/usuarios/tiposdoc/get/architecto"
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
    -d '{"cod_tipdoc":"similique","des_tipdoc":"voluptatibus"}'

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
    "cod_tipdoc": "similique",
    "des_tipdoc": "voluptatibus"
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
    "http://localhost/api/usuarios/tiposdoc/update/natus" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"cod_tipdoc":"ad","des_tipdoc":"in"}'

```

```javascript
const url = new URL(
    "http://localhost/api/usuarios/tiposdoc/update/natus"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "cod_tipdoc": "ad",
    "des_tipdoc": "in"
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
    -G "http://localhost/api/usuarios/tiposdoc/delete/ut" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/usuarios/tiposdoc/delete/ut"
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

#Transportista

APIs para tranportista
<!-- START_74c5acc71fd1905132eda751163b4df8 -->
## Retornar Transportistas

Retorna todos los transportistas activos

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/transportista/get" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/transportista/get"
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
`GET api/transportista/get`


<!-- END_74c5acc71fd1905132eda751163b4df8 -->

<!-- START_7f98f1b83400c9f2552751be46d34f9c -->
## Retornar cotizacion

Retorna transportista por Id

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/transportista/get/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/transportista/get/1"
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
`GET api/transportista/get/{id}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `id_tranportista` |  required  | El ID de transportista.

<!-- END_7f98f1b83400c9f2552751be46d34f9c -->

<!-- START_edebe2f6cca003154432cad266a7fd8f -->
## Crear Transportista

Crea un transportista

> Example request:

```bash
curl -X POST \
    "http://localhost/api/transportista/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"TipoDoc":"et","NumDoc":13,"RznSocial":"corrupti","Placa":"at","ChoferTipoDoc":"aut","est_reg":"tempore"}'

```

```javascript
const url = new URL(
    "http://localhost/api/transportista/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "TipoDoc": "et",
    "NumDoc": 13,
    "RznSocial": "corrupti",
    "Placa": "at",
    "ChoferTipoDoc": "aut",
    "est_reg": "tempore"
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
    "resp": "transportista creada"
}
```

### HTTP Request
`POST api/transportista/create`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `TipoDoc` | num |  required  | Id de proyecto.
        `NumDoc` | integer |  optional  | numero del documento (RUC mas comun o dni)
        `RznSocial` | string |  optional  | Razon social del tranportista
        `Placa` | string |  optional  | Placa de vehiculo
        `ChoferTipoDoc` | string |  optional  | Tipo de documento del chofer
        `est_reg` | char |  optional  | Estado de registro.
    
<!-- END_edebe2f6cca003154432cad266a7fd8f -->

<!-- START_5b107a9ddb08381f2b8cea07a42d8788 -->
## Eliminar transportista

Anula un transportista se cambio el estado de registro a E

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/transportista/annul/excepturi" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/transportista/annul/excepturi"
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
    "resp": "Transportista eliminado"
}
```

### HTTP Request
`GET api/transportista/annul/{id}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `id` |  required  | El ID del transportista

<!-- END_5b107a9ddb08381f2b8cea07a42d8788 -->

<!-- START_27ae5c7fe021902cd6cf61d8ee3dc0f7 -->
## Modifica transportista

> Example request:

```bash
curl -X POST \
    "http://localhost/api/transportista/update/quae" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"TipoDoc":"temporibus","NumDoc":5,"RznSocial":"earum","Placa":"est","ChoferTipoDoc":"possimus","est_reg":"dolorem"}'

```

```javascript
const url = new URL(
    "http://localhost/api/transportista/update/quae"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "TipoDoc": "temporibus",
    "NumDoc": 5,
    "RznSocial": "earum",
    "Placa": "est",
    "ChoferTipoDoc": "possimus",
    "est_reg": "dolorem"
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
    "resp": "descripcion seccion actualizado"
}
```

### HTTP Request
`POST api/transportista/update/{id}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `id` |  required  | El ID del tranpostista.
#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `TipoDoc` | num |  required  | Id de proyecto.
        `NumDoc` | integer |  optional  | numero del documento (RUC mas comun o dni)
        `RznSocial` | string |  optional  | Razon social del tranportista
        `Placa` | string |  optional  | Placa de vehiculo
        `ChoferTipoDoc` | string |  optional  | Tipo de documento del chofer
        `est_reg` | char |  optional  | Estado de registro.
    
<!-- END_27ae5c7fe021902cd6cf61d8ee3dc0f7 -->

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
    -G "http://localhost/api/almacen/unidadesmedida/get/dolorum" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/almacen/unidadesmedida/get/dolorum"
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
    -d '{"nom_unimed":"aperiam","des_mar":"voluptatem"}'

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
    "nom_unimed": "aperiam",
    "des_mar": "voluptatem"
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
    "http://localhost/api/almacen/unidadesmedida/update/ut" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"nom_unimed":"odit","des_mar":"in"}'

```

```javascript
const url = new URL(
    "http://localhost/api/almacen/unidadesmedida/update/ut"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "nom_unimed": "odit",
    "des_mar": "in"
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
    -G "http://localhost/api/almacen/unidadesmedida/delete/blanditiis" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/almacen/unidadesmedida/delete/blanditiis"
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
    -G "http://localhost/api/usuarios/get/voluptas" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/usuarios/get/voluptas"
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
    -d '{"nom_col":"nulla","ape_col":"facere","email":"nam","password":"rerum","num_doc_col":"necessitatibus","cod_col":"corporis","cel_col":"repudiandae","id_tipdoc":11,"id_car":9}'

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
    "nom_col": "nulla",
    "ape_col": "facere",
    "email": "nam",
    "password": "rerum",
    "num_doc_col": "necessitatibus",
    "cod_col": "corporis",
    "cel_col": "repudiandae",
    "id_tipdoc": 11,
    "id_car": 9
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
    "http://localhost/api/usuarios/update/dolore" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"nom_col":"sit","ape_col":"et","email":"ratione","num_doc_col":"sunt","cod_col":"natus","cel_col":"qui","id_tipdoc":18,"id_car":20}'

```

```javascript
const url = new URL(
    "http://localhost/api/usuarios/update/dolore"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "nom_col": "sit",
    "ape_col": "et",
    "email": "ratione",
    "num_doc_col": "sunt",
    "cod_col": "natus",
    "cel_col": "qui",
    "id_tipdoc": 18,
    "id_car": 20
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
    -G "http://localhost/api/usuarios/delete/ad" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/usuarios/delete/ad"
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
    "http://localhost/api/usuarios/update/password/et" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"email":"error","old_password":"saepe","new_password":"ipsam"}'

```

```javascript
const url = new URL(
    "http://localhost/api/usuarios/update/password/et"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": "error",
    "old_password": "saepe",
    "new_password": "ipsam"
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

<!-- START_ff92a5423ca22d33a6ef4148c21e249f -->
## api/usuarios/firma/{id}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/usuarios/firma/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/usuarios/firma/1"
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
`GET api/usuarios/firma/{id}`


<!-- END_ff92a5423ca22d33a6ef4148c21e249f -->

<!-- START_7f3aa448515b0c1d65b4915a40fae16c -->
## api/usuarios/update-firma
> Example request:

```bash
curl -X POST \
    "http://localhost/api/usuarios/update-firma" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/usuarios/update-firma"
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
`POST api/usuarios/update-firma`


<!-- END_7f3aa448515b0c1d65b4915a40fae16c -->

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
    "message": "Unable to generate documentation file to: \"C:\\Users\\SH4-L\\Documents\\workspace\\pis\\proyecto\\ncsrlback\\storage\\api-docs\/api-docs.json\". Please make sure directory is writable. Error: Required @OA\\Info() not found"
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


