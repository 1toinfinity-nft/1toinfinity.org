<template>
    <Layout>
        <section id="blog" class="py-12">
            <div class="container max-w-5xl mx-auto">
                <h1 class="text-4xl text-center">
                    {{ blog.title }}
                </h1>
            </div>
        </section>
    </Layout>
</template>

<script setup>
import Layout from "../../Shared/Layout.vue";

const props = defineProps({
    blog: Object,
});
</script>
