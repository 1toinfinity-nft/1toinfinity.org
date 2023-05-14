<template>
    <AppHead title="Roadmap" />
    <Layout>
        <section id="roadmap" class="px-4 py-12 md:px-0">
            <div class="container max-w-5xl mx-auto">
                <div class="flex flex-col gap-12 max-w-lg m-auto">
                    <h1 class="text-4xl text-center">Roadmap</h1>
                    <div id="roadmap-points">
                        <p>
                            Welcome to <b>1ToInfinity's</b> Roadmap! This page
                            serves as a guide to our future plans and the
                            direction we're taking. We've created this Roadmap
                            to keep you informed about our upcoming features,
                            improvements, and innovations. We hope this Roadmap
                            will help you understand our vision and enable you
                            to provide feedback and suggestions for our future.
                        </p>
                        <ul class="list-disc list-inside mt-8">
                            <li v-for="roadmapPoint in roadmapPoints">
                                <span v-html="roadmapPoint"></span>
                            </li>
                        </ul>
                    </div>
                    <p class="text-sm">
                        <b>Note:</b> This is not the final roadmap. Will be
                        ellaborating and changing things from this roadmap
                    </p>
                </div>
            </div>
        </section>
    </Layout>
</template>

<script setup>
import AppHead from "../Shared/AppHead.vue";
import Layout from "../Shared/Layout.vue";

const roadmapPoints = [
    "Publish a complete technical blog",
    "Collborate with artists to create the numbers after number 3",
    "Build a community to run and manage 1ToInfinity",
    "Create functionality in existing website or create a separate platform where anyone will be able to create the art for numbers and post them and based on voting we can choose",
    "Maybe revamp the website design",
    "Run polls to select charities to donate money to",
];
</script>
