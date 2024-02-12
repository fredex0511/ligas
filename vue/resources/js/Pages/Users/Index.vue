<script>
  import {Link} from "@inertiajs/vue3"

  export default {
    components: {
        Link
    },
    props: {
      users: Array,
      // create_url: String
    }
  }
</script>

<template>
  <div class="container">
    <table class="table">
      <thead>
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Email</th>
          <th>Edit</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="user in users" :key="user.id">
          <td>{{ user.id }}</td>
          <td>{{ user.name }}</td>
          <td>{{ user.email }}</td>
          <td><Link :href="route('users.edit', user.id)">Edit</Link></td>
        </tr>
      </tbody>
    </table>
    <Link :href="route('users.create')" class="create-link">Create User</Link>
  </div>
</template>

<style scoped>
.container {
  width: 100%;
  max-width: 1200px;
  margin: 0 auto;
  padding: 20px;
}

.table {
  width: 100%;
  border-collapse: collapse;
}

.table th, .table td {
  border: 1px solid #ddd;
  padding: 8px;
  text-align: left;
}

.table th {
  background-color: #f2f2f2;
}

.create-link {
  display: inline-block;
  margin-top: 20px;
  padding: 10px 20px;
  background-color: #4CAF50;
  color: white;
  text-decoration: none;
}

.create-link:hover {
  background-color: #45a049;
}
</style>
