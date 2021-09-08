<template>
    <web-layout>
        <template #page_head>
            <header class="bg-white text-blue-900">
                <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-2 py-3">
                    <div>
                        <h2 class="text-xl">
                            Home
                        </h2>
                    </div>

                    <div class="text-right hidden md:block">
                        <span class="text-sm">
                            Home / Post Details
                        </span>
                    </div>
                </div>
            </header>
        </template>
        
        <!-- <div class="flex gap-2">
            <button class="p-2 bg-gray-100" v-on:click="a--">Sub</button>
            <div class="px-2 py-1">
                {{ a }}
            </div>
            <button class="p-2 bg-gray-100" @click="a++">Add</button>
        </div> -->






    </web-layout>
</template>

<script>
import WebLayout from '../Layouts/WebLayout.vue'
export default {
    components: { WebLayout },
    data(){
        return {
            a:0
        }
    }
}
</script>

<style>

</style>