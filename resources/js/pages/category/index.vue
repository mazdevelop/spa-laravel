<template>
  <div class="container lg:px-32 px-6 mx-auto mt-4">
    <div class="grid grid-cols-2 text-gray-500">
      <div class="flex self-center">
        <p>Category</p>
      </div>
      <div class="flex justify-self-end">
        <router-link
          :to="{ name: 'create-category' }"
          class="px-4 py-4 text-white bg-indigo-400 rounded-sm text-sm mr-3 flex items-center"
          ><i class="fa fa-plus"></i
        ></router-link>
        <a href="" class="px-4 py-2 border border-gray-400 rounded-sm"
          >sort <i class="ml-3 fa fa-sort"></i
        ></a>
      </div>
    </div>
    <div
      class="grid grid-cols-4 gap-4 bg-indigo-500 text-gray-200 text-center mt-4 px-6 py-3 rounded-md"
    >
      <div class="">id</div>
      <div class="">name</div>
      <div class="">slug</div>
      <div class="">Action</div>
    </div>
  </div>
</template>

<script>
export default {};
</script>

<style>
</style>vue