<template>
    <Layout>
        <section id="collection" class="py-12">
            <div class="container max-w-5xl mx-auto">
                <div class="grid grid-cols-3 gap-12 items-center">
                    <img
                        class="h-30 w-full rounded-xl object-cover"
                        :src="PlaceholderNft"
                        alt="NFT"
                    />
                    <img
                        class="h-30 w-full rounded-xl object-cover"
                        :src="PlaceholderNft"
                        alt="NFT"
                    />
                    <img
                        class="h-30 w-full rounded-xl object-cover"
                        :src="PlaceholderNft"
                        alt="NFT"
                    />
                    <img
                        class="h-30 w-full rounded-xl object-cover"
                        :src="PlaceholderNft"
                        alt="NFT"
                    />
                    <img
                        class="h-30 w-full rounded-xl object-cover"
                        :src="PlaceholderNft"
                        alt="NFT"
                    />
                    <img
                        class="h-30 w-full rounded-xl object-cover"
                        :src="PlaceholderNft"
                        alt="NFT"
                    />
                </div>
            </div>
        </section>
    </Layout>
</template>

<script setup>
import Layout from "../Shared/Layout.vue";
import PlaceholderNft from "../../img/placeholder-nft.jpg";
</script>
