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
    -d '{"email":"voluptatibus","password":"inventore"}'

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
    "email": "voluptatibus",
    "password": "inventore"
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
    -G "http://localhost/api/usuarios/cargos/get/facere" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/usuarios/cargos/get/facere"
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
    -d '{"des_car":"sapiente"}'

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
    "des_car": "sapiente"
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
    "http://localhost/api/usuarios/cargos/update/vel" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"des_car":"rem"}'

```

```javascript
const url = new URL(
    "http://localhost/api/usuarios/cargos/update/vel"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "des_car": "rem"
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
    -G "http://localhost/api/usuarios/cargos/delete/non" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/usuarios/cargos/delete/non"
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
    -G "http://localhost/api/clientes/get/sequi" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/clientes/get/sequi"
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
    -d '{"razsoc_cli":"minus","numdoc_cli":"suscipit","ema_cli":"eligendi","id_tipodoc":10}'

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
    "razsoc_cli": "minus",
    "numdoc_cli": "suscipit",
    "ema_cli": "eligendi",
    "id_tipodoc": 10
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
    "http://localhost/api/clientes/update/et" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"razsoc_cli":"nobis","numdoc_cli":"ut","ema_cli":"exercitationem","id_tipodoc":2}'

```

```javascript
const url = new URL(
    "http://localhost/api/clientes/update/et"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "razsoc_cli": "nobis",
    "numdoc_cli": "ut",
    "ema_cli": "exercitationem",
    "id_tipodoc": 2
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
    -G "http://localhost/api/clientes/delete/nulla" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/clientes/delete/nulla"
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
    "http://localhost/api/clientes/admconydir/molestiae" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"contactos":[],"direcciones":[]}'

```

```javascript
const url = new URL(
    "http://localhost/api/clientes/admconydir/molestiae"
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
    -G "http://localhost/api/cotizacion-cliente/get/molestias" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/cotizacion-cliente/get/molestias"
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
    -d '{"id_cli":20,"solcli_cli_nom":"quis","solcli_cli_numdoc":"deserunt","solcli_cli_tipdoc":"tenetur","solcli_cli_dir":"provident","solcli_cli_id_dir":1,"solcli_cli_con":"officiis","solcli_cli_id_con":15,"id_col":4,"solcli_col_nom":"illum","cotizacion_detalle":[]}'

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
    "id_cli": 20,
    "solcli_cli_nom": "quis",
    "solcli_cli_numdoc": "deserunt",
    "solcli_cli_tipdoc": "tenetur",
    "solcli_cli_dir": "provident",
    "solcli_cli_id_dir": 1,
    "solcli_cli_con": "officiis",
    "solcli_cli_id_con": 15,
    "id_col": 4,
    "solcli_col_nom": "illum",
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
    -G "http://localhost/api/cotizacion-cliente/annul/voluptas" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/cotizacion-cliente/annul/voluptas"
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
    "http://localhost/api/cotizacion-cliente/update-header/quae" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"id_proy":"dolor","id_cli":15,"solcli_proy_cod":"rem","solcli_proy_nom":"aut","solcli_cli_nom":"non","solcli_cli_numdoc":"dignissimos","solcli_cli_tipdoc":"repellat","solcli_cli_dir":"ut","solcli_cli_id_dir":8,"solcli_cli_con":"et","solcli_cli_id_con":7,"id_col":16,"solcli_col_nom":"harum","est_reg":"corporis"}'

```

```javascript
const url = new URL(
    "http://localhost/api/cotizacion-cliente/update-header/quae"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "id_proy": "dolor",
    "id_cli": 15,
    "solcli_proy_cod": "rem",
    "solcli_proy_nom": "aut",
    "solcli_cli_nom": "non",
    "solcli_cli_numdoc": "dignissimos",
    "solcli_cli_tipdoc": "repellat",
    "solcli_cli_dir": "ut",
    "solcli_cli_id_dir": 8,
    "solcli_cli_con": "et",
    "solcli_cli_id_con": 7,
    "id_col": 16,
    "solcli_col_nom": "harum",
    "est_reg": "corporis"
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
    "http://localhost/api/cotizacion-cliente/update-detail/architecto" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"solclidet_prod_serv":"ad","solclidet_des":"molestiae","id_prod":"aliquam","solclidet_prod_can":"ut","solclidet_prod_codint":11,"solclidet_prod_numpar\":":"molestiae","solclidet_prod_fabr":"quae","solclidet_prod_marc\":":"et","solclidet_prod_unimed":"vitae","solclidet_prod_stock\":":"perspiciatis"}'

```

```javascript
const url = new URL(
    "http://localhost/api/cotizacion-cliente/update-detail/architecto"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "solclidet_prod_serv": "ad",
    "solclidet_des": "molestiae",
    "id_prod": "aliquam",
    "solclidet_prod_can": "ut",
    "solclidet_prod_codint": 11,
    "solclidet_prod_numpar\":": "molestiae",
    "solclidet_prod_fabr": "quae",
    "solclidet_prod_marc\":": "et",
    "solclidet_prod_unimed": "vitae",
    "solclidet_prod_stock\":": "perspiciatis"
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
    "http://localhost/api/cotizacion-cliente/update-complete/est" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"id_cli":9,"solcli_cli_nom":"quis","solcli_cli_numdoc":"et","solcli_cli_tipdoc":"odio","solcli_cli_dir":"sit","solcli_cli_id_dir":8,"solcli_cli_con":"voluptatem","solcli_cli_id_con":17,"id_col":18,"solcli_col_nom":"omnis","est_reg":"aspernatur","cotizacion_detalle":[]}'

```

```javascript
const url = new URL(
    "http://localhost/api/cotizacion-cliente/update-complete/est"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "id_cli": 9,
    "solcli_cli_nom": "quis",
    "solcli_cli_numdoc": "et",
    "solcli_cli_tipdoc": "odio",
    "solcli_cli_dir": "sit",
    "solcli_cli_id_dir": 8,
    "solcli_cli_con": "voluptatem",
    "solcli_cli_id_con": 17,
    "id_col": 18,
    "solcli_col_nom": "omnis",
    "est_reg": "aspernatur",
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
    -G "http://localhost/api/cotizacion-proveedor/get/voluptatem" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/cotizacion-proveedor/get/voluptatem"
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
    -d '{"solcli_id":15,"id_proy":6,"id_cli":8,"id_prov":4,"cotprov_razsoc":"veniam","cotprov_ruc":"ea","cotprov_tipdoc":"dolorem","cotprov_dir":"ex","cotprov_con":"eum","cotprov_ema":"et","id_col":"aut","cotprov_col_nom":"quis","cotprov_col_usu":"expedita","cotizacion_proveedor_detalle":[]}'

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
    "solcli_id": 15,
    "id_proy": 6,
    "id_cli": 8,
    "id_prov": 4,
    "cotprov_razsoc": "veniam",
    "cotprov_ruc": "ea",
    "cotprov_tipdoc": "dolorem",
    "cotprov_dir": "ex",
    "cotprov_con": "eum",
    "cotprov_ema": "et",
    "id_col": "aut",
    "cotprov_col_nom": "quis",
    "cotprov_col_usu": "expedita",
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
    -G "http://localhost/api/cotizacion-proveedor/annul/unde" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/cotizacion-proveedor/annul/unde"
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
    -d '{"archivo":"perspiciatis","asunto":"et","cc":"deleniti","mensaje":"expedita","destinatario":"nostrum","tabla":"voluptatem","doc_referencia":"sit"}'

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
    "archivo": "perspiciatis",
    "asunto": "et",
    "cc": "deleniti",
    "mensaje": "expedita",
    "destinatario": "nostrum",
    "tabla": "voluptatem",
    "doc_referencia": "sit"
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
    -d '{"logo":"doloribus","nom_emp":"sint","numdoc_emp":"et","dir_emp":"nihil","dis_emp":"sint","ciu_emp":"architecto","tel_emp":"porro","cel_emp":"aut","codciu_emp":"doloremque","id_tipodoc":19}'

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
    "logo": "doloribus",
    "nom_emp": "sint",
    "numdoc_emp": "et",
    "dir_emp": "nihil",
    "dis_emp": "sint",
    "ciu_emp": "architecto",
    "tel_emp": "porro",
    "cel_emp": "aut",
    "codciu_emp": "doloremque",
    "id_tipodoc": 19
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
    -G "http://localhost/api/almacen/fabricantes/get/at" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/almacen/fabricantes/get/at"
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
    -d '{"des_fab":"eum"}'

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
    "des_fab": "eum"
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
    "http://localhost/api/almacen/fabricantes/update/illum" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"des_fab":"vero"}'

```

```javascript
const url = new URL(
    "http://localhost/api/almacen/fabricantes/update/illum"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "des_fab": "vero"
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
    -G "http://localhost/api/almacen/fabricantes/delete/molestiae" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/almacen/fabricantes/delete/molestiae"
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
            "est_reg": "string"
        }
    ],
    "size": 0
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
    -d '{"gas_fec":"quibusdam","gas_fac":"accusantium","gas_subtot":270.223486,"gas_igv":1691.6,"gas_tot":106087575.14619425,"id_prov":7,"prov_razsoc":"soluta","prov_ruc":"perspiciatis","id_proy":14,"gas_mon":"non","gas_tipcam":49.62152806,"gas_totdol":522.13,"gas_desc":"velit"}'

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
    "gas_fec": "quibusdam",
    "gas_fac": "accusantium",
    "gas_subtot": 270.223486,
    "gas_igv": 1691.6,
    "gas_tot": 106087575.14619425,
    "id_prov": 7,
    "prov_razsoc": "soluta",
    "prov_ruc": "perspiciatis",
    "id_proy": 14,
    "gas_mon": "non",
    "gas_tipcam": 49.62152806,
    "gas_totdol": 522.13,
    "gas_desc": "velit"
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
        `gas_totdol` | float |  optional  | total en dolares
        `gas_desc` | string |  optional  | descripcion del gasto
    
<!-- END_cdea3928461d9d1b67db6ec6ce47b3ad -->

<!-- START_1e85c223fa1fc2aa329ed3f3442ff2b7 -->
## Anular Gasto

Anula un Gasto

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/gasto/annul/illo" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/gasto/annul/illo"
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
    -G "http://localhost/api/gasto/get/est" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/gasto/get/est"
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
    "http://localhost/api/gasto/update/nobis" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"gas_fec":"consequuntur","gas_fac":"nostrum","gas_subtot":18.9018,"gas_igv":636988.1034098,"gas_tot":33490944.475146,"id_prov":7,"prov_razsoc":"debitis","prov_ruc":"atque","id_proy":12,"gas_mon":"id","gas_tipcam":4981910.64231,"gas_totdol":12.3,"gas_desc":"minus"}'

```

```javascript
const url = new URL(
    "http://localhost/api/gasto/update/nobis"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "gas_fec": "consequuntur",
    "gas_fac": "nostrum",
    "gas_subtot": 18.9018,
    "gas_igv": 636988.1034098,
    "gas_tot": 33490944.475146,
    "id_prov": 7,
    "prov_razsoc": "debitis",
    "prov_ruc": "atque",
    "id_proy": 12,
    "gas_mon": "id",
    "gas_tipcam": 4981910.64231,
    "gas_totdol": 12.3,
    "gas_desc": "minus"
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
        `gas_desc` | string |  optional  | descripcion del gasto
    
<!-- END_bb3bb8d68315c587879f77159d91459a -->

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
    -G "http://localhost/api/almacen/marcas/get/voluptatem" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/almacen/marcas/get/voluptatem"
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
    -d '{"des_mar":"est"}'

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
    "des_mar": "est"
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
    "http://localhost/api/almacen/marcas/update/laboriosam" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"des_mar":"quia"}'

```

```javascript
const url = new URL(
    "http://localhost/api/almacen/marcas/update/laboriosam"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "des_mar": "quia"
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
    -G "http://localhost/api/almacen/marcas/delete/voluptatibus" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/almacen/marcas/delete/voluptatibus"
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
    -G "http://localhost/api/almacen/modelos/get/sequi" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/almacen/modelos/get/sequi"
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
    -d '{"des_mod":"cum"}'

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
    "des_mod": "cum"
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
    "http://localhost/api/almacen/modelos/update/ullam" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"des_mod":"nihil"}'

```

```javascript
const url = new URL(
    "http://localhost/api/almacen/modelos/update/ullam"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "des_mod": "nihil"
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
    -G "http://localhost/api/almacen/modelos/delete/quo" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/almacen/modelos/delete/quo"
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
    -G "http://localhost/api/orden-compra/get/repellat" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/orden-compra/get/repellat"
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
    -d '{"cotprov_id":16,"ord_com_prov_id":4,"ord_com_prov_dir":"dolor","ord_com_prov_con":"consequatur","ord_com_prov_ema":"ut","ord_com_term":"non","id_col":3,"ord_com_bas_imp":268765.7660002,"ord_com_igv":2.2,"ord_com_tot":15342.629,"id_pro":15,"id_cli":13,"ord_med_ent":"voluptatem","orden_detalle":[]}'

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
    "cotprov_id": 16,
    "ord_com_prov_id": 4,
    "ord_com_prov_dir": "dolor",
    "ord_com_prov_con": "consequatur",
    "ord_com_prov_ema": "ut",
    "ord_com_term": "non",
    "id_col": 3,
    "ord_com_bas_imp": 268765.7660002,
    "ord_com_igv": 2.2,
    "ord_com_tot": 15342.629,
    "id_pro": 15,
    "id_cli": 13,
    "ord_med_ent": "voluptatem",
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
    -G "http://localhost/api/orden-compra/annul/praesentium" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/orden-compra/annul/praesentium"
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
    -G "http://localhost/api/orden-compra-cliente/get/aut" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/orden-compra-cliente/get/aut"
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
    -d '{"cotprov_id":18,"ord_com_prov_id":1,"ord_com_prov_dir":"qui","ord_com_prov_con":"nulla","ord_com_prov_ema":"quis","ord_com_term":"aut","id_col":1,"ord_com_bas_imp":5.3276,"ord_com_igv":2491023.05577172,"ord_com_tot":35678580.679933,"id_pro":6,"id_cli":6,"ord_med_ent":"sit","orden_detalle":[]}'

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
    "cotprov_id": 18,
    "ord_com_prov_id": 1,
    "ord_com_prov_dir": "qui",
    "ord_com_prov_con": "nulla",
    "ord_com_prov_ema": "quis",
    "ord_com_term": "aut",
    "id_col": 1,
    "ord_com_bas_imp": 5.3276,
    "ord_com_igv": 2491023.05577172,
    "ord_com_tot": 35678580.679933,
    "id_pro": 6,
    "id_cli": 6,
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
    -G "http://localhost/api/orden-compra-cliente/annul/aut" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/orden-compra-cliente/annul/aut"
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
    -G "http://localhost/api/almacen/productos/get/magnam" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/almacen/productos/get/magnam"
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
    -d '{"cod_prod":"impedit","num_parte_prod":"et","stk_prod":4,"des_prod":"vitae","pre_com_prod":14,"mon_prod":11,"id_unimed":11,"id_mar":2,"id_mod":18,"id_fab":4}'

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
    "cod_prod": "impedit",
    "num_parte_prod": "et",
    "stk_prod": 4,
    "des_prod": "vitae",
    "pre_com_prod": 14,
    "mon_prod": 11,
    "id_unimed": 11,
    "id_mar": 2,
    "id_mod": 18,
    "id_fab": 4
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
    "http://localhost/api/almacen/productos/update/nemo" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"cod_prod":"velit","num_parte_prod":"ad","stk_prod":12,"des_prod":"sit","pre_com_prod":3,"mon_prod":9,"id_unimed":1,"id_mar":3,"id_mod":15,"id_fab":18}'

```

```javascript
const url = new URL(
    "http://localhost/api/almacen/productos/update/nemo"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "cod_prod": "velit",
    "num_parte_prod": "ad",
    "stk_prod": 12,
    "des_prod": "sit",
    "pre_com_prod": 3,
    "mon_prod": 9,
    "id_unimed": 1,
    "id_mar": 3,
    "id_mod": 15,
    "id_fab": 18
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
    -G "http://localhost/api/almacen/productos/delete/libero" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/almacen/productos/delete/libero"
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
    -G "http://localhost/api/proforma-cliente/get/laudantium" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/proforma-cliente/get/laudantium"
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
    -d '{"id_cli":6,"prof_mon":13,"id_proy":9,"id_col":5,"solcli_id":16,"prof_cre":5,"prof_imp_ini":5.93957,"prof_int":93858181.47,"prof_cuo":7,"prof_val":"iure","prof_tie_ent":"inventore","prof_cos_dir":62577.5316,"prof_gas_ind":8004.7267,"prof_uti":1.4,"prof_bas_imp":81156,"prof_igv":42904162.919565,"prof_neto":12.4513263,"prof_fac":3981,"prof_finan":29.97807712,"prof_val_cuo":1911.0112,"prof_cli_id_dir":16,"prof_cli_id_con":17,"prof_obs":"fuga","prof_tie_ins":"non","prof_con_pag":"ipsa","prof_desc":894.13015238,"prof_cli_ciu":"sint","proforma_detalle":[]}'

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
    "id_cli": 6,
    "prof_mon": 13,
    "id_proy": 9,
    "id_col": 5,
    "solcli_id": 16,
    "prof_cre": 5,
    "prof_imp_ini": 5.93957,
    "prof_int": 93858181.47,
    "prof_cuo": 7,
    "prof_val": "iure",
    "prof_tie_ent": "inventore",
    "prof_cos_dir": 62577.5316,
    "prof_gas_ind": 8004.7267,
    "prof_uti": 1.4,
    "prof_bas_imp": 81156,
    "prof_igv": 42904162.919565,
    "prof_neto": 12.4513263,
    "prof_fac": 3981,
    "prof_finan": 29.97807712,
    "prof_val_cuo": 1911.0112,
    "prof_cli_id_dir": 16,
    "prof_cli_id_con": 17,
    "prof_obs": "fuga",
    "prof_tie_ins": "non",
    "prof_con_pag": "ipsa",
    "prof_desc": 894.13015238,
    "prof_cli_ciu": "sint",
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
    -G "http://localhost/api/proforma-cliente/annul/vel" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/proforma-cliente/annul/vel"
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
    "http://localhost/api/proforma-cliente/update-header/voluptas" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"id_cli":16,"prof_mon":18,"id_proy":20,"id_col":6,"solcli_id":4,"prof_cre":3,"prof_imp_ini":57882.0030463,"prof_int":4897587.06684253,"prof_cuo":14,"prof_val":"placeat","prof_tie_ent":"et","prof_cos_dir":12815.266305776,"prof_gas_ind":575.46,"prof_uti":452216849.60556746,"prof_bas_imp":4.032290136,"prof_igv":0.6874235,"prof_neto":512247325.1464507,"prof_fac":48.641,"prof_finan":370258.990618,"prof_val_cuo":3849.697,"prof_cli_id_dir":18,"prof_cli_id_con":20,"prof_obs":"omnis","prof_tie_ins":"ut","prof_con_pag":"dolor","prof_desc":52286273.055170454,"id_cli_dir":"itaque","prof_cli_ciu":"eos"}'

```

```javascript
const url = new URL(
    "http://localhost/api/proforma-cliente/update-header/voluptas"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "id_cli": 16,
    "prof_mon": 18,
    "id_proy": 20,
    "id_col": 6,
    "solcli_id": 4,
    "prof_cre": 3,
    "prof_imp_ini": 57882.0030463,
    "prof_int": 4897587.06684253,
    "prof_cuo": 14,
    "prof_val": "placeat",
    "prof_tie_ent": "et",
    "prof_cos_dir": 12815.266305776,
    "prof_gas_ind": 575.46,
    "prof_uti": 452216849.60556746,
    "prof_bas_imp": 4.032290136,
    "prof_igv": 0.6874235,
    "prof_neto": 512247325.1464507,
    "prof_fac": 48.641,
    "prof_finan": 370258.990618,
    "prof_val_cuo": 3849.697,
    "prof_cli_id_dir": 18,
    "prof_cli_id_con": 20,
    "prof_obs": "omnis",
    "prof_tie_ins": "ut",
    "prof_con_pag": "dolor",
    "prof_desc": 52286273.055170454,
    "id_cli_dir": "itaque",
    "prof_cli_ciu": "eos"
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
    "http://localhost/api/proforma-cliente/update-detail/asperiores" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"id_prod":"ut","prof_det_can":"eligendi","prof_det_pre_lis":"et","prof_det_imp":"necessitatibus","prof_det_cos":"illum","prof_det_tcos":"incidunt","prof_det_com":"alias","id_prov":"eos","id_sec":"voluptatem","prof_prod_serv":"voluptate","prof_des_prod":"neque","prof_can_prod":"ut","prof_dir_prov":"enim","prof_ema_prov":"illum","id_prov_dir":"optio"}'

```

```javascript
const url = new URL(
    "http://localhost/api/proforma-cliente/update-detail/asperiores"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "id_prod": "ut",
    "prof_det_can": "eligendi",
    "prof_det_pre_lis": "et",
    "prof_det_imp": "necessitatibus",
    "prof_det_cos": "illum",
    "prof_det_tcos": "incidunt",
    "prof_det_com": "alias",
    "id_prov": "eos",
    "id_sec": "voluptatem",
    "prof_prod_serv": "voluptate",
    "prof_des_prod": "neque",
    "prof_can_prod": "ut",
    "prof_dir_prov": "enim",
    "prof_ema_prov": "illum",
    "id_prov_dir": "optio"
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
    -G "http://localhost/api/proveedores/get/nisi" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/proveedores/get/nisi"
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
    -d '{"razsoc_prov":"voluptas","ema_prov":"fugit","num_doc_prov":"ullam","id_tipodoc":9}'

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
    "razsoc_prov": "voluptas",
    "ema_prov": "fugit",
    "num_doc_prov": "ullam",
    "id_tipodoc": 9
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
    "http://localhost/api/proveedores/update/cum" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"razsoc_prov":"temporibus","ema_prov":"in","num_doc_prov":"provident","id_tipodoc":6}'

```

```javascript
const url = new URL(
    "http://localhost/api/proveedores/update/cum"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "razsoc_prov": "temporibus",
    "ema_prov": "in",
    "num_doc_prov": "provident",
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
    -G "http://localhost/api/proveedores/delete/et" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/proveedores/delete/et"
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
    "http://localhost/api/proveedores/admbancolydir/id" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"banco":[],"colaborador":[],"direcciones":[]}'

```

```javascript
const url = new URL(
    "http://localhost/api/proveedores/admbancolydir/id"
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
    -G "http://localhost/api/proveedores-banco/get/voluptatem" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/proveedores-banco/get/voluptatem"
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
    -d '{"tip_prov_ban":"aut","cue_prov_ban":"quibusdam","ban_prov_ban":"perferendis","id_prov":9,"com_prov_ban":"ut"}'

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
    "tip_prov_ban": "aut",
    "cue_prov_ban": "quibusdam",
    "ban_prov_ban": "perferendis",
    "id_prov": 9,
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
    "http://localhost/api/proveedores-banco/update/itaque" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"tip_prov_ban":"quibusdam","cue_prov_ban":"nulla","ban_prov_ban":"suscipit","id_prov":11,"com_prov_ban":"perspiciatis"}'

```

```javascript
const url = new URL(
    "http://localhost/api/proveedores-banco/update/itaque"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "tip_prov_ban": "quibusdam",
    "cue_prov_ban": "nulla",
    "ban_prov_ban": "suscipit",
    "id_prov": 11,
    "com_prov_ban": "perspiciatis"
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
    -G "http://localhost/api/proveedores-banco/delete/facere" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/proveedores-banco/delete/facere"
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
    -G "http://localhost/api/proveedores-colaborador/get/itaque" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/proveedores-colaborador/get/itaque"
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
    -d '{"nom_prov":"omnis","ema_prov":"deleniti","tel_prov":"et","ane_prov_col":"aliquid","car_prov_col":"magnam","id_prov":12}'

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
    "nom_prov": "omnis",
    "ema_prov": "deleniti",
    "tel_prov": "et",
    "ane_prov_col": "aliquid",
    "car_prov_col": "magnam",
    "id_prov": 12
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
    "http://localhost/api/proveedores-colaborador/update/nostrum" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"nom_prov":"animi","ema_prov":"tempora","tel_prov":"ea","ane_prov_col":"tempora","car_prov_col":"omnis","id_prov":7}'

```

```javascript
const url = new URL(
    "http://localhost/api/proveedores-colaborador/update/nostrum"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "nom_prov": "animi",
    "ema_prov": "tempora",
    "tel_prov": "ea",
    "ane_prov_col": "tempora",
    "car_prov_col": "omnis",
    "id_prov": 7
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
    -G "http://localhost/api/proveedores-colaborador/delete/voluptatem" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/proveedores-colaborador/delete/voluptatem"
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
    -G "http://localhost/api/proveedores-direccion/get/inventore" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/proveedores-direccion/get/inventore"
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
    "http://localhost/api/proveedores-direccion/update/facilis" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"ciu_prov":"perferendis","dir_prov":"totam","tel_prov":"velit","id_prov":11}'

```

```javascript
const url = new URL(
    "http://localhost/api/proveedores-direccion/update/facilis"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "ciu_prov": "perferendis",
    "dir_prov": "totam",
    "tel_prov": "velit",
    "id_prov": 11
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
    -d '{"ciu_prov":"labore","dir_prov":"sint","tel_prov":"similique","id_prov":5}'

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
    "ciu_prov": "labore",
    "dir_prov": "sint",
    "tel_prov": "similique",
    "id_prov": 5
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
    -G "http://localhost/api/proveedores-direccion/delete/fugit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/proveedores-direccion/delete/fugit"
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
    -G "http://localhost/api/proyecto/get/id" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/proyecto/get/id"
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
    -d '{"nom_proy":"harum","id_cli":"libero"}'

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
    "nom_proy": "harum",
    "id_cli": "libero"
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
    "http://localhost/api/proyecto/update/dignissimos" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"nom_proy":"exercitationem","est_reg":"esse","id_cli":"veritatis"}'

```

```javascript
const url = new URL(
    "http://localhost/api/proyecto/update/dignissimos"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "nom_proy": "exercitationem",
    "est_reg": "esse",
    "id_cli": "veritatis"
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
    -G "http://localhost/api/proyecto/delete/architecto" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/proyecto/delete/architecto"
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
    -G "http://localhost/api/seccion/get/qui" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/seccion/get/qui"
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
    -d '{"des_sec":"vel"}'

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
    "des_sec": "vel"
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
    "http://localhost/api/seccion/update/error" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"des_sec":"necessitatibus"}'

```

```javascript
const url = new URL(
    "http://localhost/api/seccion/update/error"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "des_sec": "necessitatibus"
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
    -G "http://localhost/api/seccion/delete/temporibus" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/seccion/delete/temporibus"
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
    -G "http://localhost/api/usuarios/tiposdoc/get/vero" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/usuarios/tiposdoc/get/vero"
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
    -d '{"cod_tipdoc":"debitis","des_tipdoc":"eligendi"}'

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
    "cod_tipdoc": "debitis",
    "des_tipdoc": "eligendi"
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
    "http://localhost/api/usuarios/tiposdoc/update/eius" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"cod_tipdoc":"asperiores","des_tipdoc":"at"}'

```

```javascript
const url = new URL(
    "http://localhost/api/usuarios/tiposdoc/update/eius"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "cod_tipdoc": "asperiores",
    "des_tipdoc": "at"
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
    -G "http://localhost/api/usuarios/tiposdoc/delete/reiciendis" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/usuarios/tiposdoc/delete/reiciendis"
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
    -G "http://localhost/api/almacen/unidadesmedida/get/nostrum" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/almacen/unidadesmedida/get/nostrum"
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
    -d '{"nom_unimed":"corrupti","des_mar":"cumque"}'

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
    "nom_unimed": "corrupti",
    "des_mar": "cumque"
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
    "http://localhost/api/almacen/unidadesmedida/update/rerum" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"nom_unimed":"sed","des_mar":"quidem"}'

```

```javascript
const url = new URL(
    "http://localhost/api/almacen/unidadesmedida/update/rerum"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "nom_unimed": "sed",
    "des_mar": "quidem"
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
    -G "http://localhost/api/almacen/unidadesmedida/delete/sed" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/almacen/unidadesmedida/delete/sed"
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
    -G "http://localhost/api/usuarios/get/vel" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/usuarios/get/vel"
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
    -d '{"nom_col":"et","ape_col":"quae","email":"et","password":"optio","num_doc_col":"libero","cod_col":"est","cel_col":"omnis","id_tipdoc":16,"id_car":11}'

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
    "nom_col": "et",
    "ape_col": "quae",
    "email": "et",
    "password": "optio",
    "num_doc_col": "libero",
    "cod_col": "est",
    "cel_col": "omnis",
    "id_tipdoc": 16,
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
    "http://localhost/api/usuarios/update/totam" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"nom_col":"sed","ape_col":"fuga","email":"qui","num_doc_col":"et","cod_col":"explicabo","cel_col":"autem","id_tipdoc":17,"id_car":4}'

```

```javascript
const url = new URL(
    "http://localhost/api/usuarios/update/totam"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "nom_col": "sed",
    "ape_col": "fuga",
    "email": "qui",
    "num_doc_col": "et",
    "cod_col": "explicabo",
    "cel_col": "autem",
    "id_tipdoc": 17,
    "id_car": 4
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
    -G "http://localhost/api/usuarios/delete/iusto" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/usuarios/delete/iusto"
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
    "http://localhost/api/usuarios/update/password/eum" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"email":"iure","old_password":"nam","new_password":"est"}'

```

```javascript
const url = new URL(
    "http://localhost/api/usuarios/update/password/eum"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": "iure",
    "old_password": "nam",
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


