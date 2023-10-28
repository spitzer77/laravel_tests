<script>

import {Link, router} from "@inertiajs/vue3";
import MainLayout from "@/Layouts/MainLayout.vue";

export default {
    name: "Index",

    layout: MainLayout,

    components: {
        Link
    },

    props: [
        'errors'
    ],

    data(){
        return {
            title: '',
            content: '',
        }
    },
    methods:{
        store(){
            //this.$inertia.post
            router.post('/posts', {title: this.title, content: this.content})
        }
    }
}
</script>

<template>
        <h1 class="text-lg mb-8">Create</h1>
        <div class="mb-8">
        <Link :href="route('post.index')" class="text-sm mb-8 text-sky-500">Back</Link>
        </div>

        <form @submit.prevent="store">
            <div>
                <input v-model="title" type="text" placeholder="title" class="w-full rounded-lg border-gray-400">
                <div v-if="errors.title" class="text-red-600 text-sm">{{ errors.title }}</div>
            </div>
            <div class="mt-4">
                <textarea placeholder="content" v-model="content" class="w-full rounded-lg border-gray-400 mb-0 pb-0"></textarea>
                <div v-if="errors.content" class="text-red-600 text-sm">{{ errors.content }}</div>
            </div>
            <div class="mt-4">
                <button type="submit"
                    class="ml-auto block p-2 w-32 bg-sky-500 rounded-lg text-center text-white border-sky-500 border hover:bg-white hover:text-sky-500"
                >Store</button>
            </div>

        </form>
</template>

<style scoped>

</style>
