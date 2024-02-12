<script>
  export default {
    props: {
      user: Object
    }
  }
</script>

<template>
  <div class="container">
    <h1 class="title">Editar Usuario</h1>
    <div class="info">
      <p><strong>ID:</strong> {{ user.id }}</p>
      <p><strong>Name:</strong> {{ user.name }}</p>
      <p><strong>Email:</strong> {{ user.email }}</p>
    </div>
  </div>
</template>

<style scoped>
.container {
  width: 100%;
  max-width: 1200px;
  margin: 0 auto;
  padding: 20px;
}

.title {
  margin-bottom: 20px;
  font-size: 30px;
}

.info p {
  margin-bottom: 10px;
  font-size: 30px;
}

.info strong {
  font-weight: bold;
  font-size: 30px;
}
</style>
  