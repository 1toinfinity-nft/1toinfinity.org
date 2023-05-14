<template>
    <AppHead title="Blog" />
    <Layout>
        <section id="blog" class="px-4 py-12 md:px-0">
            <div class="container max-w-5xl mx-auto">
                <div class="flex flex-col gap-8">
                    <h1 class="text-4xl text-center">Blog</h1>
                    <div class="flex flex-col gap-12" v-if="blogs.data">
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
                            <p>{{ blog.published_at }}</p>
                            <p>{{ blog.author.name }}</p>
                        </div>
                    </div>
                    <p class="text-xl text-center" v-else>
                        Comeback later! No Blogs Published Yet!
                    </p>
                </div>
            </div>
        </section>
    </Layout>
</template>

<script setup>
import { Link } from "@inertiajs/vue3";
import Layout from "../../Shared/Layout.vue";
import AppHead from "../../Shared/AppHead.vue";

const props = defineProps({
    blogs: Object,
});
</script>
