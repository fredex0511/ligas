<script>
import {Link} from "@inertiajs/vue3"


export default {
    components:{
        Link
    }
};
</script>


<template>
    <nav class="navbar">
        <ul>
        <li><Link class="nav-button" :href="'/'">Home</Link></li>
        <li><Link class="nav-button" :href="'/lcreate'">Crear Liga</Link></li>
        <li><Link class="nav-button" :href="'/ecreate'">Crear Equipo</Link></li>
        <li><Link class="nav-button" :href="'/jcreate'">Crear Jugador</Link></li>


        </ul>
    </nav>
</template>


<style scoped>
.navbar {
    background-color: #333;
    padding: 5px;
}

.navbar ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
}

.navbar li {
    float: left;
}

.nav-button {
    display: block;
    color: white;
    text-align: center;
    padding: 8px 10px;
    text-decoration: none;
    background-color: #4CAF50;
    border: none;
    margin: 2px;
    cursor: pointer;
}

.nav-button:hover {
    background-color: #45a049;
}
</style>