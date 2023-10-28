<script>
import TaskLayout from "@/Layouts/TaskLayout.vue";
import {Link, router} from "@inertiajs/vue3";

export default {
    name: "User Index",
    components: {
        Link, TaskLayout
    },
    props: [
        'users',
    ],
    methods: {
        deleteUser(id) {
            router.delete('/users/' + id);
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
                        <div class="table-responsive">
                            <table class="table table-hover" v-if="users">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr v-for="user in users">
                                    <td>
                                        <span class="fw-bold">{{ user.name }}</span>
                                    </td>
                                    <td>{{ user.email }}</td>
                                    <td><span class="badge rounded-pill badge-light-success me-1">manager</span></td>
                                    <td>
                                        <div class="flex justify-content-left">

                                            <Link :href="route('user.edit', user.id)">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-edit-2 me-50">
                                                    <path
                                                        d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
                                                </svg>
                                                <span>Edit</span>
                                            </Link>

                                            <a @click.prevent="deleteUser(user.id)" href="#" class="ml-6">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-trash me-50">
                                                    <polyline points="3 6 5 6 21 6"></polyline>
                                                    <path
                                                        d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                                </svg>
                                                <span>Delete</span>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div>
                        <a href="/users/create" class="btn btn-primary waves-effect waves-float waves-light"
                           type="submit">New manager</a>
                    </div>
                </div>
            </div>
        </div>
    </TaskLayout>
</template>

<style scoped>

</style>
