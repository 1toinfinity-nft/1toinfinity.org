<template>
    <header class="sticky inset-0 bg-transparent py-4 bg backdrop-blur-md">
        <div class="container max-w-5xl mx-auto">
            <div class="flex justify-between items-center">
                <div id="logo">
                    <h1 class="text-center uppercase text-xl font-bold">
                        1-to-Infinity
                    </h1>
                </div>
                <nav id="navigation">
                    <ol class="flex gap-8 text-sm font-bold">
                        <Link
                            :href="navigationItem.link"
                            :class="{
                                'hover:underline decoration-2 underline-offset-8': true,
                                underline: navigationItem.isActive,
                            }"
                            v-for="navigationItem in navigationItems"
                        >
                            {{ navigationItem.label }}
                        </Link>
                    </ol>
                </nav>
                <div id="call-to-action">
                    <a
                        class="bg-gray-500 hover:bg-gray-600 px-4 py-2 rounded-lg font-bold flex items-center gap-2"
                        href="https://opensea.io/collection/1toinfinity-nft"
                        target="_blank"
                    >
                        <span> OpenSea </span>
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="3"
                            stroke="currentColor"
                            class="w-4 h-4"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M4.5 19.5l15-15m0 0H8.25m11.25 0v11.25"
                            />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </header>

    <slot />

    <footer class="py-12">
        <div class="container max-w-5xl mx-auto">
            <div
                class="flex flex-col justify-between items-center text-sm md:flex-row"
            >
                <ul class="flex items-center gap-6">
                    <li>
                        <a
                            href="https://instagram.com/1toinfinity_nft"
                            class="hover:underline decoration-2 underline-offset-8"
                            target="_blank"
                            >Instagram</a
                        >
                    </li>
                    <li>
                        <a
                            href="https://twitter.com/1toinfinity_nft"
                            class="hover:underline decoration-2 underline-offset-8"
                            target="_blank"
                            >Twitter</a
                        >
                    </li>
                    <li>
                        <a
                            href="https://github.com/1toinfinity-nft"
                            class="hover:underline decoration-2 underline-offset-8"
                            target="_blank"
                            >Github</a
                        >
                    </li>
                </ul>
                <p>&copy; 2023. 1ToInfinity.org</p>
            </div>
        </div>
    </footer>
</template>

<script setup>
import { Link } from "@inertiajs/vue3";

const navigationItems = [
    {
        label: "Home",
        link: route("front.home"),
        isActive: route().current("front.home"),
    },
    {
        label: "Collection",
        link: route("front.collection"),
        isActive: route().current("front.collection"),
    },
    {
        label: "About",
        link: route("front.about"),
        isActive: route().current("front.about"),
    },
    {
        label: "Roadmap",
        link: route("front.roadmap"),
        isActive: route().current("front.roadmap"),
    },
    {
        label: "Blog",
        link: route("front.blog"),
        isActive: route().current("front.blog"),
    },
];
</script>
