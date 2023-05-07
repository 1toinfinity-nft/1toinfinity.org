<template>
    <Head title="About" />
    <Layout>
        <section id="about" class="py-12">
            <div class="container max-w-5xl mx-auto">
                <div class="grid grid-cols-3 gap-12 items-center">
                    <div>
                        <img
                            class="h-30 w-full rounded-xl object-cover"
                            :src="PlaceholderNft"
                            alt="1 to infinity logo"
                        />
                    </div>
                    <div class="col-span-2">
                        <h1 class="text-4xl font-bold text-primary-light">
                            About
                        </h1>
                        <p class="text-justify text-lg">
                            1ToInfinity is a collection of NFTs for one of the most magical and intriguing things humans have ever discovered, <i>Numbers</i>. 1ToInfinity will be minting one number per week from 1 to infinity.   
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section id="why-started" class="py-12 bg-primary md:py-40">
            <div class="container max-w-5xl mx-auto">
                <h1
                    class="text-4xl font-bold text-center text-primary-light mb-12"
                >
                    Why 1 to infinity
                </h1>
                <p class="text-justify text-lg">
                    The goal is to make 1ToInfinity a community driven non-profit project and all the money made from selling these NFT's will be given back in the folowing ways:
                    <ol class="list-disc list-inside">
                        <li>33% to sponsor ongoing projects in the web3 space</li>
                        <li>33% to creators/artists that'll make these NFT's</li>
                        <li>33% to 1ToInfinity</li>
                        <li>1% to <a href="https://carbon180.org/">Carbon180</a> to help remove CO2 from the atmosphere in an attemp to change the course of climate change</li>
                    </ol>
                </p>
            </div>
        </section>
        <section id="why-started" class="py-12 md:py-40">
            <div class="container max-w-5xl mx-auto">
                <div class="grid grid-cols-3 gap-12 items-center">
                    <div class="order-last">
                        <img
                            class="h-30 w-full rounded-xl object-cover"
                            :src="TauseefShah"
                            alt="1 to infinity logo"
                        />
                    </div>
                    <div class="col-span-2">
                        <h1 class="text-4xl font-bold text-primary-light">
                            Creator
                        </h1>
                        <p class="text-justify text-lg">
                            I am Tauseef Shah, creator of <i>1ToInfinity</i>. I
                            am a tech enthusiast currently working as a backend
                            engineer at
                            <a href="https://civicdatalab.in/" target="_blank"
                                >CivicDataLab</a
                            >. I am a Computer Science Engineering graduate who
                            loves fullstack web development, building things and
                            solving provlems. I got introduced to web3 in 2016
                            when i first heard about Bitcoin and the blockchain
                            and ever since wanted to build something in this
                            space.
                        </p>
                        <ul class="list-none mt-4 flex gap-12 justify-center">
                            <li>
                                <a
                                    href="https://twitter.com/tauseefsshah"
                                    target="_blank"
                                >
                                    Twitter
                                </a>
                            </li>
                            <li>
                                <a
                                    href="https://github.com/tauseefsshah"
                                    target="_blank"
                                >
                                    Github
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </Layout>
</template>

<script setup>
import Layout from "../Shared/Layout.vue";
import PlaceholderNft from "../../img/placeholder-nft.jpg";
import TauseefShah from "../../img/tauseef-shah.jpg";
import { Head } from "@inertiajs/vue3";
</script>
