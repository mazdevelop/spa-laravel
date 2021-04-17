<template>
  <transition appear @before-enter="beforeEnter" @enter="enter" @leave="leave">
    <div
      :class="[
        'border my-3 px-10 py-3 z-10 rounded absolute inset-x-3 max-w-max mx-auto container opacity-0',
        colorAlert,
      ]"
      role="alert"
      v-show="isActive"
    >
      <strong class="font-bold capitalize">{{ title }}</strong>
      <span class="block sm:inline">{{ message }}</span>
      <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
        <svg
          :class="['fill-current h-6 w-6', dismissAlert]"
          role="button"
          @click="isActive = false"
          xmlns="http://www.w3.org/2000/svg"
          viewBox="0 0 20 20"
        >
          <title>Close</title>
          <path
            d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"
          />
        </svg>
      </span>
    </div>
  </transition>
</template>
<script>
import gsap from "gsap";
export default {
  props: ["color", "title", "message"],
  data() {
    return {
      colorAlert: `bg-${this.color}-100 border-${this.color}-400 text-${this.color}-700`,
      dismissAlert: `text-${this.color}-700`,
      isActive: true,
    };
  },
  methods: {
    beforeEnter(el) {
      gsap.to(el, {
        y: 0,
      });
    },
    enter(el) {
      gsap.to(el, {
        duration: 0.8,
        y: 20,
        delay: 0.4,
        opacity: 1,
      });
    },
    leave(el) {
      gsap.to(el, {
        duration: 0.4,
        y: 0,
        opacity: 0,
      });
    },
  },
};
</script>
<style>
</style>