<template>
  <div
    class="grid grid-cols-4 gap-4 text-gray-700 text-center mt-4 px-6 py-3 opacity-0"
  >
    <div class="">{{ category.id }}</div>
    <div class="">{{ category.name }}</div>
    <div class="tracking-wide uppercase">{{ category.slug }}</div>
    <div class="place-self-center">
      <div class="grid grid-cols-2 gap-3">
        <button
          @click="deleteCategory(category.id)"
          class="bg-red-700 rounded-md px-4 py-1 shadow-lg border-none outline-none cursor-pointer capitalize text-yellow-500"
        >
          delete
        </button>
        <router-link
          :to="{ name: 'edit-category', params: { id: category.id } }"
          class="bg-blue-500 rounded-md px-4 py-1 shadow-lg border-none outline-none cursor-pointer capitalize text-white"
        >
          update
        </router-link>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: {
    category: Object,
  },
  methods: {
    deleteCategory(id) {
      axios.delete(`/api/category/${id}`).then(() => {
        this.$emit("removeItem", [id]);
      });
    },
  },
};
</script>

<style>
</style>