<template>
    <AppHead :title="blog.title" />
    <Layout>
        <section id="blog" class="px-4 py-12 md:px-0">
            <div class="container max-w-5xl mx-auto">
                <h1 class="text-4xl text-center">
                    {{ blog.title }}
                </h1>
                <div v-html="marked.parse(props.blog.content)"></div>
            </div>
        </section>
    </Layout>
</template>

<script setup>
import Layout from "../../Shared/Layout.vue";
import { marked } from "marked";
import AppHead from "../../Shared/AppHead.vue";

const props = defineProps({
    blog: Object,
});
</script>
