<template>
    <Layout>
        <section id="masthead" class="py-12 md:py-40">
            <div class="container max-w-5xl mx-auto">
                <div class="md:flex items-center justify-between">
                    <div id="masthead-text" class="flex-1 text-left">
                        <div class="flex flex-col gap-8">
                            <h4 class="text-primary-light text-sm font-bold">
                                Lorem ipsum dolor sit amet consectetur
                                adipisicing elit.
                            </h4>
                            <h1 class="text-white text-6xl font-bold">
                                Explore the magical numbers starting from 1 to
                                <span class="text-primary-light">Infinty</span>
                                here.
                            </h1>
                            <h3 class="text-white text-xl leading-5">
                                Lorem ipsum dolor sit amet consectetur
                                adipisicing elit. Consequatur nostrum rerum
                                excepturi non. Qui neque hic distinctio
                                doloremque cumque corporis?
                            </h3>
                        </div>
                    </div>
                    <div id="masthead-milestone" class="flex-1 text-right">
                        <img :src="MastheadGraph" class="h-96 mx-auto" />
                    </div>
                </div>
            </div>
        </section>

        <section
            id="recently-minted"
            class="bg-gradient-to-b from-primary to-primary-dark py-12 md:py-40"
        >
            <div class="container max-w-5xl mx-auto">
                <h2 class="text-2xl font-bold text-center mb-12">
                    Recently Minted
                </h2>
                <div class="grid grid-cols-3 gap-12 items-center">
                    <img
                        class="h-30 w-full rounded-xl object-cover"
                        :src="item.preview"
                        :alt="item.words"
                        :key="item.number"
                        v-for="item in collection.reverse().splice(0, 3)"
                    />
                </div>
            </div>
        </section>

        <section id="why-numbers" class="bg-primary py-12 md:py-40">
            <div class="container max-w-5xl mx-auto">
                <h2 class="text-2xl font-bold text-center mb-12">
                    Why Numbers
                </h2>
                <div
                    class="mx-auto grid grid-cols-1 content-center gap-4 text-center font-bold md:grid-cols-4"
                >
                    <div>
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="mx-auto h-24 w-24 rounded-lg bg-gradient-to-br from-indigo-800 to-blue-300 p-4 text-white"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M12 11c0 3.517-1.009 6.799-2.753 9.571m-3.44-2.04l.054-.09A13.916 13.916 0 008 11a4 4 0 118 0c0 1.017-.07 2.019-.203 3m-2.118 6.844A21.88 21.88 0 0015.171 17m3.839 1.132c.645-2.266.99-4.659.99-7.132A8 8 0 008 4.07M3 15.364c.64-1.319 1-2.8 1-4.364 0-1.457.39-2.823 1.07-4"
                            ></path>
                        </svg>
                        <h3 class="mt-4 text-lg">Unique Design</h3>
                    </div>
                    <div>
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="mx-auto h-24 w-24 rounded-lg bg-gradient-to-br from-pink-600 to-red-300 p-4 text-white"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"
                            ></path>
                        </svg>
                        <h3 class="mt-4 text-lg">Special Material</h3>
                    </div>
                    <div>
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="mx-auto h-24 w-24 rounded-lg bg-gradient-to-br from-green-900 to-green-400 p-4 text-white"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M9 8h6m-5 0a3 3 0 110 6H9l3 3m-3-6h6m6 1a9 9 0 11-18 0 9 9 0 0118 0z"
                            ></path>
                        </svg>
                        <h3 class="mt-4 text-lg">Great Value</h3>
                    </div>
                    <div>
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="mx-auto h-24 w-24 rounded-lg bg-gradient-to-br from-purple-700 to-fuchsia-400 p-4 text-white"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 01-2.343 5.657z"
                            ></path>
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M9.879 16.121A3 3 0 1012.015 11L11 14H9c0 .768.293 1.536.879 2.121z"
                            ></path>
                        </svg>
                        <h3 class="mt-4 text-lg">Trendiest Cards</h3>
                    </div>
                </div>
            </div>
        </section>
    </Layout>
</template>

<script setup>
import Layout from "../Shared/Layout.vue";
import MastheadGraph from "../../img/masthead-graph.png";

// @todo REFACTOR - To collection.js file
const collection = [
    {
        number: "1",
        words: "one",
        preview: "/build/assets/collection/one.jpg",
        opensea: "https:/opensea.io/assets/ethereum/asset-address-will-be-here",
        published_at: "2023-05-07",
    },
];
</script>
