<template>
  <div class="border-double border-b-4 border-light-blue-500">
    <!-- navbar goes header -->
    <header
      class="lg:px-16 px-6 bg-white flex flex-wrap items-center lg:py-0 py-2 mb-3"
    >
      <div class="flex-1 flex justify-between items-center">
        <!-- logo -->
        <a href="#" class="text-gray-700 flex items-center">
          <svg
            class="h-6 w-6 mr-2"
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M13 10V3L4 14h7v7l9-11h-7z"
            />
          </svg>
          <router-link :to="{ name: 'home' }" class="capitalize text-sm"
            >maz develop</router-link
          >
        </a>
      </div>
      <!-- humberger menu -->
      <label for="menu-toggle" class="lg:hidden cursor-pointer">
        <svg
          class="h-6 w-6"
          xmlns="http://www.w3.org/2000/svg"
          fill="none"
          viewBox="0 0 24 24"
          stroke="currentColor"
        >
          <path
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            d="M4 6h16M4 12h16m-7 6h7"
          />
        </svg>
      </label>
      <input
        type="checkbox"
        name="menu-toggle"
        id="menu-toggle"
        class="hidden"
      />
      <!-- primary nav -->
      <div class="hidden lg:flex lg:items-center lg:w-auto w-full" id="menu">
        <nav>
          <ul
            class="lg:flex items-center justify-between text-base text-gray-700 pt-4 lg:pt-0"
          >
            <li>
              <router-link
                :to="{ name: 'home' }"
                class="lg:p-4 capitalize py-3 px-0 block border-b-2 text-center border-transparent hover:text-indigo-400"
              >
                home
              </router-link>
            </li>
            <li>
              <router-link
                :to="{ name: 'category-list' }"
                class="lg:p-4 capitalize py-3 px-0 block border-b-2 text-center border-transparent hover:text-indigo-400"
              >
                category
              </router-link>
            </li>
          </ul>
        </nav>
      </div>
    </header>
  </div>
</template>

<script>
export default {};
</script>
<style scoped>
#menu-toggle:checked + #menu {
  display: block;
}
</style>