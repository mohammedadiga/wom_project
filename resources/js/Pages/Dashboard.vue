<template>
  <app-layout title="Dashboard">
    <template #header>
      <h2 class="h4 font-weight-bold">
        Dashboard
      </h2>
    </template>

    <welcome />
  </app-layout>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout.vue"
export default{
  components: {
    AppLayout,

  }
};
</script>
