<template>
  <div class="container relative lg:px-32 px-6 mx-auto mt-4">
    <Toast
      v-show="showToast"
      title="Success"
      message="Your work  will be done with your majesty."
      color="green"
    />
    <div class="grid grid-cols-2 text-gray-500">
      <div class="flex self-center capitalize">
        <p>Edit Category</p>
      </div>
      <div class="flex justify-self-end">
        <router-link
          :to="{ name: 'category-list' }"
          class="px-4 py-2 bg-indigo-500 text-white rounded-sm capitalize"
          >Category List
        </router-link>
      </div>
    </div>
    <div class="lg:px-32 px-6 mt-4">
      <ValidationObserver v-slot="{ handleSubmit }">
        <form
          @submit.prevent="handleSubmit(edit)"
          class="grid gap-4 p-3 w-full"
        >
          <!-- name -->
          <ValidationProvider
            name="edit name"
            rules="required"
            v-slot="{ errors }"
          >
            <div class="grid grid-rows-2 gap-3 my-2">
              <label for="name" class="capitalize my-2 text-gray-500"
                >edit name <span class="text-red-600">*</span></label
              >
              <input
                type="text"
                name="name"
                class="text-gray-600 placeholder-gray-400 p-2 border-b-2 border-indigo-600 focus:outline-none"
                id="name"
                v-model.trim="category.name"
              />
              <span class="text-sm my-1 text-red-400">{{ errors[0] }}</span>
            </div>
          </ValidationProvider>
          <button
            class="px-6 py-3 bg-indigo-500 text-white capitalize text-sm rounded-md"
          >
            edit category
          </button>
        </form>
      </ValidationObserver>
    </div>
  </div>
</template>

<script>
import Toast from "../../components/Toast.vue";
export default {
  data() {
    return {
      showToast: false,
      category: {
        name: "",
      },
    };
  },
  components: {
    Toast: Toast,
  },
  methods: {
    edit() {
      let id = this.$route.params.id;
      axios
        .put(`/api/category/${id}`, { name: this.category.name })
        .then(() => {
          this.triggerToast();
        });
    },
    loadCategory() {
      let id = this.$route.params.id;
      axios.get(`/api/category/${id}/edit`).then((response) => {
        this.category.name = response.data.name;
      });
    },
    triggerToast() {
      this.showToast = true;
      this.rest();
      setTimeout(() => (this.showToast = false), 3000);
    },
    rest() {
      this.category.name = null;
    },
  },
  mounted() {
    this.loadCategory();
  },
};
</script>

<style>
</style>