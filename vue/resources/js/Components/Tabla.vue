<script>
    import { Inertia } from '@inertiajs/inertia'

    export default {
    name: 'Tabla',
    props: {
        columnas: {type: Array,required: true},
        datos: {
        type: Array,
        required: true
        },
        rutaeliminar : String,
        rutaactualizar : String
    },
    methods: {
        eliminar(id) {
            Inertia.delete(this.rutaeliminar + "/" + id)
        },
        actualizar(id) {
            Inertia.get(this.rutaactualizar + "/" + id)
        }
    }
}
</script>

<template>
    <table class="styled-table">
        <thead>
        <tr>
            <th style="width: 140px;" v-for="columna in columnas" :key="columna">{{ columna }}</th>
            <th style="width: 60px;"> Acciones </th>
        </tr>
        </thead>
        <tbody>
        <tr v-for="dato in datos" :key="dato.id">
            <td v-for="columna in columnas" :key="column">{{ dato[columna] }}</td>
            <td> 
                <button class="btn-danger" @click="eliminar(dato.id)">Eliminar</button> 
                <button class="btn-success" @click="actualizar(dato.id)">Actualizar</button>
            </td>
        </tr>
        </tbody>
    </table>
</template>


<style scoped>
.styled-table {
    width: 100%;
    border-collapse: collapse;
}

.styled-table thead tr {
    background-color: #f2f2f2;
}

.styled-table th, .styled-table td {
    padding: 10px;
    border: 1px solid #ddd;
}

.styled-table tbody tr:nth-child(even) {
    background-color: #f2f2f2;
}

.btn-danger {
    background-color: #f44336;
    border: none;
    color: white;
    padding: 10px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 13px;
    cursor: pointer;
    border-radius: 5px;
}

.btn-success {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 10px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 13px;
    cursor: pointer;
    border-radius: 5px;
}
</style>