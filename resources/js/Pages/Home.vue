<template>
    <Layout>
        <section id="masthead" class="py-12 md:py-40">
            <div class="container max-w-5xl mx-auto">
                <div class="md:flex items-center justify-between">
                    <div id="masthead-text" class="flex-1 text-left">
                        <div class="flex flex-col gap-8">
                            <h4
                                class="text-primary-light text-sm font-bold h-1"
                            >
                                <span id="typed-formula">&nbsp;</span>
                            </h4>
                            <h1 class="text-white text-6xl font-bold">
                                Explore the magical numbers starting from 1 to
                                <span class="text-primary-light">Infinty</span>
                                here.
                            </h1>
                            <h3 class="text-white text-xl leading-5">
                                <i
                                    >"Pure mathematics is, in its way, the
                                    poetry of logical ideas"</i
                                >
                                ~ <b>Albert Einstein</b>
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
                        <h3 class="mt-4 text-lg">Unique</h3>
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
                        <h3 class="mt-4 text-lg">Magical</h3>
                    </div>
                    <div>
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            stroke="currentColor"
                            class="mx-auto h-24 w-24 rounded-lg bg-gradient-to-br from-green-900 to-green-400 p-4 text-white"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M4.745 3A23.933 23.933 0 003 12c0 3.183.62 6.22 1.745 9M19.5 3c.967 2.78 1.5 5.817 1.5 9s-.533 6.22-1.5 9M8.25 8.885l1.444-.89a.75.75 0 011.105.402l2.402 7.206a.75.75 0 001.104.401l1.445-.889m-8.25.75l.213.09a1.687 1.687 0 002.062-.617l4.45-6.676a1.688 1.688 0 012.062-.618l.213.09"
                            />
                        </svg>
                        <h3 class="mt-4 text-lg">Intrigue</h3>
                    </div>
                    <div>
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            stroke="currentColor"
                            class="mx-auto h-24 w-24 rounded-lg bg-gradient-to-br from-purple-700 to-fuchsia-400 p-4 text-white"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M14.25 6.087c0-.355.186-.676.401-.959.221-.29.349-.634.349-1.003 0-1.036-1.007-1.875-2.25-1.875s-2.25.84-2.25 1.875c0 .369.128.713.349 1.003.215.283.401.604.401.959v0a.64.64 0 01-.657.643 48.39 48.39 0 01-4.163-.3c.186 1.613.293 3.25.315 4.907a.656.656 0 01-.658.663v0c-.355 0-.676-.186-.959-.401a1.647 1.647 0 00-1.003-.349c-1.036 0-1.875 1.007-1.875 2.25s.84 2.25 1.875 2.25c.369 0 .713-.128 1.003-.349.283-.215.604-.401.959-.401v0c.31 0 .555.26.532.57a48.039 48.039 0 01-.642 5.056c1.518.19 3.058.309 4.616.354a.64.64 0 00.657-.643v0c0-.355-.186-.676-.401-.959a1.647 1.647 0 01-.349-1.003c0-1.035 1.008-1.875 2.25-1.875 1.243 0 2.25.84 2.25 1.875 0 .369-.128.713-.349 1.003-.215.283-.4.604-.4.959v0c0 .333.277.599.61.58a48.1 48.1 0 005.427-.63 48.05 48.05 0 00.582-4.717.532.532 0 00-.533-.57v0c-.355 0-.676.186-.959.401-.29.221-.634.349-1.003.349-1.035 0-1.875-1.007-1.875-2.25s.84-2.25 1.875-2.25c.37 0 .713.128 1.003.349.283.215.604.401.96.401v0a.656.656 0 00.658-.663 48.422 48.422 0 00-.37-5.36c-1.886.342-3.81.574-5.766.689a.578.578 0 01-.61-.58v0z"
                            />
                        </svg>
                        <h3 class="mt-4 text-lg">Enigmatic</h3>
                    </div>
                </div>
            </div>
        </section>
    </Layout>
</template>

<script setup>
import Layout from "../Shared/Layout.vue";
import MastheadGraph from "../../img/masthead-graph.png";
import Typed from "typed.js";
setTimeout(function () {
    new Typed("#typed-formula", {
        strings: ["K = 2NuP K = u"],
        typeSpeed: 75,
        showCursor: false,
        smartBackspace: false,
    });
}, 1000);

// @todo REFACTOR - To collection.js file
const collection = [
    {
        number: "1",
        words: "one",
        preview: "/build/collection/one.jpg",
        opensea: "https:/opensea.io/assets/ethereum/asset-address-will-be-here",
        published_at: "2023-05-07",
    },
];
// K = 2NuP K = u
</script>
