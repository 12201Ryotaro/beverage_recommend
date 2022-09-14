<template>
    <div>
  <button v-on:click="toggle_switch()">Toggle Button</button>
  <p v-if="isActive === false">初期表示の内容
  </p>
  <p v-else>クリックで切り替わった内容
  </p>
 </div>
</template>

<script>
    export default {
  data: function() {
   return {
    isActive: false
   }
  },
  methods: {
   toggle_switch: function() {
    this.isActive = !this.isActive
   }
  }
 }
</script>