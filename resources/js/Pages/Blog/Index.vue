<template>
    <Layout>
        <section id="blog" class="py-12">
            <div class="container max-w-5xl mx-auto">
                <h1 class="text-4xl text-center">Blog</h1>
                <div class="flex flex-col gap-12">
                    <div v-for="blog in blogs.data">
                        <h2 class="text-xl">
                            <Link
                                :href="
                                    route('front.blog.show', {
                                        slug: blog.slug,
                                    })
                                "
                            >
                                {{ blog.title }}
                            </Link>
                        </h2>
                        <p>{{ blog.excerpt }}</p>
                        <p>{{ blog.created_at }}</p>
                        <p>{{ blog.author.name }}</p>
                    </div>
                </div>
            </div>
        </section>
    </Layout>
</template>

<script setup>
import { Link } from "@inertiajs/vue3";
import Layout from "../../Shared/Layout.vue";

const props = defineProps({
    blogs: Object,
});
</script>
