<template>
    <AppHead title="Collection" />
    <Layout>
        <section id="collection" class="px-4 py-12 md:px-0">
            <div class="container max-w-5xl mx-auto">
                <div
                    class="grid grid-cols-1 gap-12 items-center md:grid-cols-3"
                >
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
import AppHead from "../Shared/AppHead.vue";
import Layout from "../Shared/Layout.vue";

// @todo REFACTOR - To collection.js file
const collection = [
    {
        number: "1",
        words: "one",
        preview: "/build/collection/one.jpg",
        opensea:
            "https://opensea.io/assets/ethereum/0x495f947276749ce646f68ac8c248420045cb7b5e/75954781589527691372109163814478728017512661675042353574069749889233477173249",
        selling_price: "0.0001ETH",
        published_at: "2023-05-07",
    },
    {
        number: "2",
        words: "two",
        preview: "/build/collection/two.jpg",
        opensea:
            "https://opensea.io/assets/ethereum/0x495f947276749ce646f68ac8c248420045cb7b5e/75954781589527691372109163814478728017512661675042353574069749890332988801025",
        selling_price: NaN,
        published_at: "2023-05-14",
    },
];
</script>
