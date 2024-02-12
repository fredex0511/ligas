<script>
import Formulario from '@/components/LFormulario.vue';
import Navbar from '@/Components/Navbar.vue';


export default {
    components: {
        Formulario,
        Navbar,
    },
}
</script>

<template>
  <Navbar />
  <div class="container">
    <h1>Crear Liga</h1>
    <Formulario :ruta="'/lstore'" :metodo="'post'" />
  </div>
</template>



<style scoped>
  .container {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    margin: 0 auto;
    padding: 20px;
    background-color: #d9dce0;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.15);
  }
</style>
