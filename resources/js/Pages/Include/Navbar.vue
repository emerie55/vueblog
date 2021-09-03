<template>
    <div class="h-12 bg-blue-900  py-3">
        <div class="container max-w-6xl mx-auto">
            <Link :href="route('home')" :class="navclasses">
                Home
            </Link>
            <Link :href="route('about')" :class="navclasses">
                About Us
            </Link>
        </div>
    </div>
</template>

<script>
import NavLink from '../../Jetstream/NavLink.vue'
import {Link} from "@inertiajs/inertia-vue3";
export default {
    components: { NavLink, Link },
    data(){
        return {
            navclasses : 'text-md text-white px-3 hover:text-gray-300 font-semibold'
        }
    }
}
</script>

<style>

</style>