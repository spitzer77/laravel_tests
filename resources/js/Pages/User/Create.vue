<script>

import {Link, router} from "@inertiajs/vue3";
import TaskLayout from "@/Layouts/TaskLayout.vue";

export default {
    name: "User Create",

    components: {
        Link, TaskLayout
    },

    props: [
        'errors'
    ],

    data() {
        return {
            name: '',
            email: '',
            password: '',
            password_confirmation: '',
        }
    },
    methods: {
        store() {
            //this.$inertia.post
            router.post('/users', {
                name: this.name,
                email: this.email,
                password: this.password,
                password_confirmation: this.password_confirmation
            })
        }
    }
}
</script>

<template>
    <TaskLayout>
        <div>
            <div class="row" id="table-hover-row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Managers</h4>
                        </div>
                        <div class="card-body">
                            <Link :href="route('user.index')" class="btn btn-primary me-1 waves-effect waves-float waves-light">Back</Link>
                        </div>
                        <div class="table-responsive w-3/4">

                            <!-- -->
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Horizontal Form</h4>
                                </div>
                                <div class="card-body">
                                    <form @submit.prevent="store" class="form form-horizontal">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="mb-1 row">
                                                    <div class="col-sm-3">
                                                        <label class="col-form-label" for="first-name">Name</label>
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <input v-model="name" type="text" id="first-name"
                                                               class="form-control rounded-lg border-1 border-gray-400"
                                                               placeholder="Name">
                                                        <span v-if="errors.name" class="error">{{ errors.name }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="mb-1 row">
                                                    <div class="col-sm-3">
                                                        <label class="col-form-label" for="email-id">Email</label>
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <input v-model="email" type="email" id="email-id"
                                                               class="form-control rounded-lg border-1 border-gray-400"
                                                               name="email-id" placeholder="Email">
                                                        <span v-if="errors.email" class="error">{{
                                                                errors.email
                                                            }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="mb-1 row">
                                                    <div class="col-sm-3">
                                                        <label class="col-form-label" for="password">Password</label>
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <input v-model="password" type="password" id="password"
                                                               class="form-control rounded-lg border-1 border-gray-400"
                                                               name="password" placeholder="Password">
                                                        <span v-if="errors.password" class="error">{{
                                                                errors.password
                                                            }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="mb-1 row">
                                                    <div class="col-sm-3">
                                                        <label class="col-form-label" for="password">Re-Password</label>
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <input v-model="password_confirmation" type="password"
                                                               id="re-password"
                                                               class="form-control rounded-lg border-1 border-gray-400"
                                                               name="re-password" placeholder="Password">
                                                        <span v-if="errors.password_confirmation"
                                                              class="error">{{ errors.password_confirmation }}</span>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-9 offset-sm-3">
                                                <button type="submit"
                                                        class="btn btn-primary me-1 waves-effect waves-float waves-light">
                                                    Store
                                                </button>
                                                <button type="reset" class="btn btn-outline-secondary waves-effect">
                                                    Reset
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </TaskLayout>
</template>

<style scoped>

</style>
