<template>
    <div>
        <!-- Header -->
        <slot name="page_head"></slot>
        <!-- Navbar -->
        <navbar></navbar>

        <slot></slot>
        
        <!-- Footer -->
        <footer></footer>
    </div>
</template>

<script>
import Footer from '../Pages/Include/Footer.vue'
import Navbar from '../Pages/Include/Navbar.vue'
export default {
  components: { Navbar, Footer },
    
}
</script>