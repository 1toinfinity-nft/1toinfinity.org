<template>
    <Head :title="title">
        <meta
            name="keywords"
            content="Numbers, NFT, 1ToInfinity, Web3, Collection, OpenSea, Blockchain"
        />
        <meta name="robots" content="index, follow" />
        <meta property="title" :content="props.metaTitle" />
        <meta property="url" :content="props.metaUrl" />
        <meta property="image" :content="props.metaImage" />
        <meta name="description" :content="props.metaDescription" />
        <meta property="og:title" :content="props.metaTitle" />
        <meta property="og:url" :content="props.metaUrl" />
        <meta property="og:image" :content="props.metaImage" />
        <meta property="og:description" :content="props.metaDescription" />
        <meta property="twitter:title" :content="props.metaTitle" />
        <meta property="twitter:url" :content="props.metaUrl" />
        <meta property="twitter:image" :content="props.metaImage" />
        <meta property="twitter:description" :content="props.metaDescription" />
        <slot />
    </Head>
</template>

<script setup>
import { Head } from "@inertiajs/vue3";

const props = defineProps({
    title: {
        type: String,
        default: null,
    },
    metaTitle: {
        type: String,
        default: "1ToInfinity",
    },
    metaUrl: {
        type: String,
        default: "https://1toinfinity.org/",
    },
    metaImage: {
        type: String,
        default: "https://1toinfinity.org/build/default.jpg",
    },
    metaDescription: {
        type: String,
        default:
            "1ToInfinity is a collection of NFTs for one of the most magical and intriguing things humans have ever discovered, Numbers.",
    },
});
</script>
