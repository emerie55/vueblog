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
        <div class="">
            <div class="bg-white  text-blue-900 flex justify-center border-b border-blue-900 mb-20 rounded-b-lg">
                <div class="text-center p-10 ">
                    <h1 class="text-md font-bold tracking-wider animate-pulse duration-500">ABOUT US</h1>
                </div>
            </div>
            <h1 class="font-bold text-4xl ml-8 mb-8">WHO WE ARE</h1>
            <div class="  grid lg:grid-cols-2 md:grid-cols-1 gap-8  mb-4 mx-auto max-w-7xl">
                <div class="span-col-1 p-3  shadow-md">
                    <p class=" text-justify">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque commodi,
                         quae laborum atque odit rem? Et officia error,
                         sapiente modi sint, maiores dolor explicabo quos.
                    </p>
                    <ul>
                        <li class="my-3"> <font-awesome :icon="['fas', 'check-double']" class="text-blue-900 mr-2"/> Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque commodi</li>
                        <li class="my-3"> <font-awesome :icon="['fas', 'check-double']" class="text-blue-900 mr-2"/> Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque commodi</li>
                        <li class="my-3"> <font-awesome :icon="['fas', 'check-double']" class="text-blue-900 mr-2"/> Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque commodi</li>
                    </ul>
                </div>
                <div class="span-col-1 p-3 shadow-md md:mt-3">
                    <p class=" text-">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                        Excepturi natus necessitatibus nihil cumque neque voluptates aliquam praesentium! Quisquam atque illo,
                         nemo excepturi dolore quod fuga, ipsam, aspernatur officiis autem ad?
                    </p>
                    <div class=" mt-3">
                        <button @click="isopen = !isopen" class="hover:bg-blue-900 text-blue-900 hover:transition duration-700 bg-white border border-blue-900 text-md hover:text-white py-1 px-2 rounded">Learn More..</button>
                    </div>
                </div>
            </div>

            <div class="" v-if="isopen == true" >
                <div class="grid lg:grid-cols-3 xl:grid-cols-4 md:grid-cols-2 sm:grid-cols-1 grid-cols-1 px-3 gap-4 mt-8 mb-8 mx-auto max-w-7xl" >
                    <div class=" hover:animate-pulse col-span-1 min-h-50 w-72 bg-white-50 flex justify-self-center justify-center items-center pt-4 flex-col border rounded shadow-md hover:shadow-lg">
                        <img src="img/sir.png" alt="" class="h-28 w-28 rounded-full">

                        <div class=" text-blue-700 font-bold ">
                        Mr Destiny 
                        </div>
                        <div class="text-gray-400 text-sm">
                            destinybravos@gmail.com
                        </div>
                        <div class="px-3 text-center text-sm ">
                            <div class="font-bold text-sm mb-6 ">
                                <span class="text-gray-600 ">Programmers CEO </span>
                                <div class=" text-blue-700 p-0">_________</div>
                            </div>
                        <p class=" text-justify">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, 
                                earum consequuntur tempore voluptatibus obcaecati magnam 
                                assumenda beatae voluptates natus, 
                                vitae itaque deserunt dolorem iusto facilis fugit 
                                accusamus molestias saepe dolores.
                            </p>
                        </div>
                        <div class="px-2 w-full py-3">
                            <button class="bg-blue-900 w-full h-8 text-white">Contact</button>
                        </div>
                    </div>

                    <div class=" hover:animate-pulse col-span-1 min-h-50 w-72 bg-white-50 flex justify-self-center justify-center items-center pt-4 flex-col border rounded shadow-md hover:shadow-lg">
                        <img src="img/endless.jpg" alt="" class="h-28 w-28 rounded-full">

                        <div class=" text-blue-700 font-bold ">
                        Mr Endless 
                        </div>
                        <div class="text-gray-400 text-sm">
                            Jcchi2004@yahoo.com
                        </div>
                        <div class="px-3 text-center  text-sm ">
                            <div class="font-bold text-sm mb-6 ">
                                <span class="text-gray-600 ">FullStack Web Developer </span>
                                <div class=" text-blue-700 p-0">_________</div>
                            </div>
                            <p class=" text-justify">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, 
                                earum consequuntur tempore voluptatibus obcaecati magnam 
                                assumenda beatae voluptates natus, 
                                vitae itaque deserunt dolorem iusto facilis fugit 
                                accusamus molestias saepe dolores.
                            </p>
                        </div>
                        <div class="px-2 w-full py-3">
                            <button class="bg-blue-900 w-full h-8 text-white">Contact</button>
                        </div>
                    </div>

                    <div class=" hover:animate-pulse col-span-1 min-h-50 w-72 bg-white-50 flex justify-self-center justify-center items-center pt-4 flex-col border rounded shadow-md hover:shadow-lg">
                        <img src="img/inno.jpg" alt="" class="h-28 w-28 rounded-full">

                        <div class=" text-blue-700 font-bold ">
                            Mr Innocent 
                        </div>
                        <div class="text-gray-400 text-sm">
                            emerie55@gmail.com
                        </div>
                        <div class="px-3 text-center text-sm ">
                            <div class="font-bold text-sm mb-6 ">
                                <span class="text-gray-600 ">FullStack Web Developer </span>
                                <div class=" text-blue-700 m-0">_________</div>
                            </div>
                            <p class=" text-justify">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, 
                                earum consequuntur tempore voluptatibus obcaecati magnam 
                                assumenda beatae voluptates natus, 
                                vitae itaque deserunt dolorem iusto facilis fugit 
                                accusamus molestias saepe dolores.
                            </p>
                        </div>
                        <div class="px-2 w-full py-3">
                            <button class="bg-blue-900 w-full h-8 text-white">Contact</button>
                        </div>
                    </div>
                    <div class="hover:animate-pulse col-span-1 min-h-50 w-72 bg-white-50 flex justify-self-center justify-center items-center pt-4 flex-col border rounded shadow-md hover:shadow-lg">
                        <img src="img/peter.jpg" alt="" class="h-28 w-28 rounded-full">

                        <div class=" text-blue-700 font-bold ">
                        Mr Peter
                        </div>
                        <div class="text-gray-400 text-sm">
                            peterchigozirim@gmail.com
                        </div>
                        <div class="px-3 text-center text-sm ">
                            <div class="font-bold text-sm mb-6 ">
                                <span class="text-gray-600 ">FullStack Web Developer</span>
                                <div class=" text-blue-700 p-0">_________</div>
                            </div>
                            <p class=" text-justify">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, 
                                earum consequuntur tempore voluptatibus obcaecati magnam 
                                assumenda beatae voluptates natus, 
                                vitae itaque deserunt dolorem iusto facilis fugit 
                                accusamus molestias saepe dolores.
                            </p>
                        </div>
                        <div class="px-2 w-full py-3">
                            <button class="bg-blue-900 w-full h-8 text-white">Contact</button>
                        </div>
                    </div>
                    
                </div>

                <div class="grid lg:grid-cols-3 xl:grid-cols-4 md:grid-cols-2 sm:grid-cols-1 grid-cols-1 px-3 gap-4 mt-8 mb-8 mx-auto max-w-7xl">
                <div class=" col-span-1 min-h-50 w-72 bg-white-50 flex justify-center hover:animate-pulse justify-self-center items-center pt-4 flex-col border rounded shadow-md hover:shadow-lg">
                    <img src="img/ebube.jpg" alt="" class="h-28 w-28 rounded-full">

                    <div class=" text-blue-700 font-bold ">
                       Ebube (Mr IQ)
                    </div>
                    <div class="text-gray-400 text-sm">
                        ebuberoderick@gmail.com
                    </div>
                    <div class="px-3 text-center text-sm ">
                        <div class="font-bold text-sm mb-6 ">
                            <span class="text-gray-600 ">FullStack Web Developer </span>
                            <div class=" text-blue-700 p-0">_________</div>
                        </div>
                       <p class=" text-justify">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, 
                            earum consequuntur tempore voluptatibus obcaecati magnam 
                            assumenda beatae voluptates natus, 
                            vitae itaque deserunt dolorem iusto facilis fugit 
                            accusamus molestias saepe dolores.
                        </p>
                    </div>
                    <div class="px-2 w-full py-3">
                        <button class="bg-blue-900 w-full h-8 text-white">Contact</button>
                    </div>
                </div>

                <div class=" hover:animate-pulse col-span-1 min-h-50 w-72 bg-white-50 flex justify-self-center justify-center items-center pt-4 flex-col border rounded shadow-md hover:shadow-lg">
                    <img src="img/meenah.jpg" alt="" class="h-28 w-28 rounded-full">

                    <div class=" text-blue-700 font-bold ">
                      Meenah 
                    </div>
                    <div class="text-gray-400 text-sm">
                        Meenah-gurl@yahoo.com
                    </div>
                    <div class="px-3 text-center  text-sm ">
                        <div class="font-bold text-sm mb-6 ">
                            <span class="text-gray-600 ">FullStack Web Developer </span>
                            <div class=" text-blue-700 p-0">_________</div>
                        </div>
                        <p class=" text-justify">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, 
                            earum consequuntur tempore voluptatibus obcaecati magnam 
                            assumenda beatae voluptates natus, 
                            vitae itaque deserunt dolorem iusto facilis fugit 
                            accusamus molestias saepe dolores.
                        </p>
                    </div>
                    <div class="px-2 w-full py-3">
                        <button class="bg-blue-900 w-full h-8 text-white">Contact</button>
                    </div>
                </div>

                <div class=" hover:animate-pulse col-span-1 min-h-50 w-72 bg-white-50 flex justify-self-center justify-center items-center pt-4 flex-col border rounded shadow-md hover:shadow-lg">
                    <img src="img/willy.jpg" alt="" class="h-28 w-28 rounded-full">

                    <div class=" text-blue-700 font-bold ">
                        Williams 
                    </div>
                    <div class="text-gray-400 text-sm">
                        aspart5623y@gmail.com
                    </div>
                    <div class="px-3 text-center text-sm ">
                        <div class="font-bold text-sm mb-6 ">
                            <span class="text-gray-600 ">FullStack Web Developer </span>
                            <div class=" text-blue-700 m-0">_________</div>
                        </div>
                        <p class=" text-justify">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, 
                            earum consequuntur tempore voluptatibus obcaecati magnam 
                            assumenda beatae voluptates natus, 
                            vitae itaque deserunt dolorem iusto facilis fugit 
                            accusamus molestias saepe dolores.
                        </p>
                    </div>
                    <div class="px-2 w-full py-3">
                        <button class="bg-blue-900 w-full h-8 text-white">Contact</button>
                    </div>
                </div>
                
            </div>
        </div> 
        </div>
    </web-layout>
</template>

<script>
import Button from '../Jetstream/Button.vue';
import WebLayout from "../Layouts/WebLayout.vue";
export default {
    components: {WebLayout, Button},
    data(){
        return{
            isopen:false,
        }
    }
}
</script>