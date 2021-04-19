<template>
  <div class="container relative lg:px-32 px-6 mx-auto mt-4">
    <transition appear @before-enter="beforeToast" @enter="enterToast">
      <Toast
        v-show="showToast"
        title="Success"
        message="Delete item by successfuly"
        color="green"
      />
    </transition>
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
    <transition-group
      tag="div"
      appear
      @before-enter="beforeEnter"
      @enter="enter"
    >
      <spa-item
        v-for="(data, index) in categories"
        :key="data.id"
        :data-index="index"
        :category="data"
        @removeItem="removeCategory(data.id)"
      ></spa-item>
    </transition-group>
  </div>
</template>

<script>
import Item from "./Item.vue";
import Toast from "../../components/Toast.vue";
import gsap from "gsap";
export default {
  components: {
    spaItem: Item,
    Toast: Toast,
  },
  data() {
    return {
      categories: [],
      showToast: false,
    };
  },
  created() {
    this.loadCategories();
  },
  methods: {
    loadCategories() {
      axios.get("/api/category").then((res) => {
        this.categories = res.data;
      });
    },
    removeCategory(id) {
      this.categories = this.categories.filter((data) => {
        data.id !== id;
      });
      this.triggerToast();
    },
    triggerToast() {
      this.showToast = true;
      setTimeout(() => (this.showToast = false), 3000);
    },
    beforeEnter(el) {
      gsap.to(el, {
        opacity: 0,
        transform: "translateX(100px)",
      });
    },
    enter(el, done) {
      gsap.to(el, {
        duration: 0.8,
        transform: "translateX(0px)",
        delay: el.dataset.index * 0.2,
        opacity: 1,
        onComplete: done,
      });
    },
    beforeToast(el) {
      gsap.to(el, {
        opacity: 0,
        transform: "translateY(100px)",
      });
    },
    enterToast(el, done) {
      gsap.to(el, {
        duration: 0.8,
        transform: "translateY(0px)",
        delay: 0.3,
        opacity: 1,
        onComplete: done,
      });
    },
  },
};
</script>

<style>
</style>