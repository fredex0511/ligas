<script>
import { Inertia } from '@inertiajs/inertia'

export default {  
    props: {
        ruta : String,
        liga: {
            type: Object,
            default: () => ({})
        }
    },
    data() {
        return {
            nombre: this.liga.nombre || '',
            pais: this.liga.pais || '',
            categoria: this.liga.categoria || '',
            logo: this.liga.logo || '',
        }
    },
    methods: {
        handleSubmit() {
            const data = {
                nombre: this.nombre,
                pais: this.pais,
                categoria: this.categoria,
                logo: this.logo,
            };
            if (this.liga.id) {
                Inertia.put(this.ruta , data)
            } else {
                Inertia.post(this.ruta, data)
            }
        }
    }
}
</script>


<template>
    <form @submit.prevent="handleSubmit">
        <div class="container">
            <label for="nombre">Nombre de Liga:</label>
            <input type="text" id="nombre" v-model="nombre" required>

            <label for="pais">Pais:</label>
            <input type="text" id="pais" v-model="pais" required>

            <label for="categoria">Categoria:</label>
            <input type="text" id="categoria" v-model="categoria" required>

            <label for="logo">Logo:</label>
            <input type="text" id="logo" v-model="logo" required>

            <button class="button" type="submit">Submit</button>
        </div>
    </form>
</template>

<style scoped>
.container {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    margin: 0 auto;
    padding: 20px;
    background-color: #f0f1f0;
    border-radius: 15px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.15);
}

.button {
    display: block;
    color: white;
    text-align: center;
    padding: 8px 10px;
    text-decoration: none;
    background-color: #4CAF50;
    border-radius: 15px;
    margin: 2px;
    cursor: pointer;
}
</style>

