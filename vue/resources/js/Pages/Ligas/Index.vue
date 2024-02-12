<script>
  import Navbar from '@/Components/Navbar.vue';
  import Tabla from '@/Components/Tabla.vue';

  export default {
      components: {
          Navbar,
          Tabla,
      },
      props: {
          ligas: {
              type: Array,
              required: true
          }
      },
      data() {
          return {
              columnas: ['id', 'nombre', 'pais', 'categoria', 'logo'],
              datos: this.ligas
          }
      }
  };
</script>

<template>
  <Navbar />
  <div class="container">
    <h1>Ligas</h1>
    <Tabla :columnas="columnas" :datos="datos" :rutaeliminar="'/ldestroy'" :rutaactualizar="'/ledit'" />
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
  width: 80%;
  background-color: #f8f9fa;
  border-radius: 5px;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.15);
}
</style>