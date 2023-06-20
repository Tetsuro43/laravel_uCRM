<script setup>
import { Head, Link } from '@inertiajs/inertia-vue3';
// import { onMounted } from 'vue';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import FlashMessage from '@/Components/FlashMessage.vue';
import Pagination from '@/Components/Pagination.vue'


const props = defineProps({
    customers: Object
});

// onMounted(() => {
//     console.log(props.customers.links.length);
// })


</script>

<template>
    <ul v-for="customer in customers.data" :key="customer.id">
		<li>{{ customer.id }}</li>
		<li>{{ customer.name }}</li>
	</ul>
	<Pagination class="mt-6" :links="customers.links"></Pagination>
</template>
