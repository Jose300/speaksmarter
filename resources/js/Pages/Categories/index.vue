<script>
	export default {
		name: 'CategoriesIndex'
	}
</script>

<script setup>
	import AppLayout from '@/Layouts/AppLayout.vue'
	import { Link } from '@inertiajs/vue3'

	defineProps({
		categories: {
			type: Object,
			required: true
		}
	})

	const deleteCategory = id => {
		if (confirm('Are you sure?')){
			Inertia.delete(route('categories.destroy', id))
		}
	}
</script>

<template>
	<AppLayout>
		<template #header>
			<h1 class="font-semibold text-xl text-gray-800 leading-tight">Categories</h1>
		</template>

		<div class="py-12">
			<div class="max-w-7xl mx-auto sm:px-6">

				<div class="p-6 bg-white border-b border-gray-200">
					<div class="flex justify-between">
						<button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
							<Link :href="route('categories.create')">
							Create New Category
							</Link>
						</button>
					</div>
				</div>

				<div class="grid grid-cols-2 divide-x mt-4">

					<h2><b>Listado de Categorias</b></h2>
					<br>
					<table class="border-collapse border border-slate-800 ...">
					  <thead>
					    <tr>
					      <th class="border border-slate-300">Id</th>
					      <th class="border border-slate-300">Category</th>
					      <th class="border border-slate-300">Edit</th>
					      <th class="border border-slate-300">Delete</th>
					    </tr>
					  </thead>
					  <tbody>
					    <!--Recorremos el objeto categories con el v-for -->
					    <tr v-for="category in categories.data">
					      <td class="border border-slate-300">{{ category.id }}</td>
					      <td class="border border-slate-300">{{ category.name }}</td>
					      <td class="border border-slate-300"><button class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded"><Link :href="route('categories.edit', category.id)">Edit</Link></button></td>
					      <td class="border border-slate-300"><button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded"><Link @click="deleteCategory(category.id)">Delete</Link></button></td>
					    </tr>
					  </tbody>
					</table>
				</div>

			</div>
		</div>
	</AppLayout>	
</template>