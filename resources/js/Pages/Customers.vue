<template>
  <div>
    <input v-model="search" @input="loadCustomers" placeholder="Search by name" />
    <table>
      <thead><tr><th>Name</th><th>Email</th></tr></thead>
      <tbody>
        <tr v-for="c in customers" :key="c.id">
          <td>{{ c.name }}</td>
          <td>{{ c.email }}</td>
        </tr>
      </tbody>
    </table>
  </div>
</template>

<script setup>
import axios from '../axios.js'
import { ref, onMounted } from 'vue'

const search = ref('')
const customers = ref([])

const loadCustomers = async () => {
  const { data } = await axios.get('/customers', { params: { search: search.value } })
  customers.value = data.data
}

onMounted(loadCustomers)
</script>
