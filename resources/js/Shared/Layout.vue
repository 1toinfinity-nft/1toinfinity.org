<template>
    <header class="sticky inset-0 bg-transparent py-4 bg backdrop-blur-md z-50">
        <div class="container max-w-5xl mx-auto">
            <div class="flex justify-between items-center">
                <div id="logo">
                    <h1 class="text-center uppercase text-xl font-bold">
                        1-to-Infinity
                    </h1>
                </div>
                <nav id="desktop-navigation" class="hidden md:block">
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
                <nav
                    :class="{
                        'absolute inset-0 bg-primary-dark border-y-2 p-4 w-full h-screen z-50 md:hidden': true,
                        hidden: !isMobileSidebarOpen,
                    }"
                >
                    <div
                        id="mobile-navigation-toggle"
                        class="font-bold text-lg text-right"
                        @click="toggleMobileSidebar()"
                    >
                        X
                    </div>
                    <ul class="list-none flex flex-col gap-12">
                        <li
                            class="flex items-center text-white text-2xl font-bold"
                            v-for="navigationItem in navigationItems"
                        >
                            <a :href="navigationItem.link">
                                {{ navigationItem.label }}
                            </a>
                        </li>
                        <li
                            class="flex items-center text-white text-2xl font-bold"
                        >
                            <a
                                href="https://opensea.io/collection/1toinfinity-nft"
                                class="flex items-center gap-2"
                                target="_blank"
                            >
                                <span>OpenSea</span>
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
                        </li>
                    </ul>
                </nav>
                <div id="desktop-call-to-action" class="hidden md:block">
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
                <div
                    id="mobile-sidebar-toggle"
                    class="block md:hidden"
                    @click="toggleMobileSidebar()"
                >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.5"
                        stroke="currentColor"
                        class="w-6 h-6"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"
                        />
                    </svg>
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
import { ref } from "vue";

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
        isActive:
            route().current("front.blog") || route().current("front.blog.*"),
    },
];

const isMobileSidebarOpen = ref(false);

const toggleMobileSidebar = () => {
    isMobileSidebarOpen.value = !isMobileSidebarOpen.value;
};
</script>
