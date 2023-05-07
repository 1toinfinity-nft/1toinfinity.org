<template>
    <Layout>
        <section id="collection" class="py-12">
            <div class="container max-w-5xl mx-auto">
                <div class="grid grid-cols-3 gap-12 items-center">
                    <img
                        class="h-30 w-full rounded-xl object-cover"
                        :src="item.preview"
                        :alt="item.words"
                        :key="item.number"
                        v-for="item in collection.reverse()"
                    />
                </div>
            </div>
        </section>
    </Layout>
</template>

<script setup>
import Layout from "../Shared/Layout.vue";

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
