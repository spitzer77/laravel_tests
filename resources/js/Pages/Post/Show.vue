<script>

import {Link} from "@inertiajs/vue3";
import MainLayout from "@/Layouts/MainLayout.vue";

export default {
    name: "Show",

    layout: MainLayout,

    props: [
        'post',
    ],

    components: {
        Link
    },
}
</script>

<template>
        <h1 class="text-lg mb-2">Post</h1>
        <div class="mb-8">
            <Link :href="route('post.index')" class="text-sm mb-8 text-sky-500">Back</Link>
        </div>

       <div v-if="post">
           <div class="mt-4 pt-8">
               <div>id: {{ post.id }}</div>
               <div>title: {{ post.title }}</div>
               <div>content: {{ post.content }}</div>
           </div>
       </div>
</template>

<style scoped>

</style>
