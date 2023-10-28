<script>

import {Link, router} from "@inertiajs/vue3";
import MainLayout from "@/Layouts/MainLayout.vue";

export default {
    name: "Index",

    //layout: MainLayout,

    props: [
        'posts',
    ],

    components: {
        Link, MainLayout
    },

    methods: {
        deletePost(id) {
            router.delete('/posts/' + id);
            //console.log(id)
        }
    },
}
</script>

<template>
    <MainLayout>
        <h1 class="text-lg mb-8">Posts</h1>
        <div class="mb-8">
            <Link :href="route('post.create')"
                  class="block p-2 w-32 bg-sky-500 rounded-lg text-center text-white border-sky-500 border
                       hover:bg-white hover:text-sky-500">Add post
            </Link>
        </div>

        <div v-if="posts">
            <div v-for="post in posts" class="mt-4 pt-8">
                <div>id: {{ post.id }}</div>
                <div>title: {{ post.title }}</div>
                <div>content: {{ post.content }}</div>
                <div class="text-sm text-right">date: {{ post.date }}</div>
                <div class="text-sm text-right">
                    <Link :href="route('post.show', post.id)" class="text-sky-500">Show</Link>
                </div>
                <div class="text-sm text-right">
                    <Link :href="route('post.edit', post.id)" class="text-sky-500">Edit</Link>
                </div>
                <div class="text-sm text-right">
                    <p @click="deletePost(post.id)" class="text-red-500 cursor-pointer">Delete</p>
                </div>
            </div>
        </div>
    </MainLayout>
</template>

<style scoped>

</style>
