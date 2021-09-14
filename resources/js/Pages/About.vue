<template>
    <web-layout>
        <template #page_head>
            <header class="bg-white text-blue-900">
                <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-2 py-3">
                    <div>
                        <h2 class="text-xl">
                            About
                        </h2>
                    </div>

                    <div class="text-right hidden md:block">
                        <span class="text-sm">
                            Home / About
                        </span>
                    </div>
                </div>
            </header>
        </template>

        
    </web-layout>
</template>

<script>
import WebLayout from "../Layouts/WebLayout.vue";
export default {
    components: {WebLayout}
}
</script>