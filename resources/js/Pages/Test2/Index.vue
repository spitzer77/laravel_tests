<script>
import TaskLayout from "@/Layouts/TaskLayout.vue";
import {Link, router} from "@inertiajs/vue3";

export default {
    name: "Test Index",
    components: {
        Link,
        TaskLayout,
    },
    props: [
        'tests',
        'auth_user',
    ],
    methods: {}
}
</script>

<template>
    <TaskLayout>
        <div>
            <div class="row" id="table-hover-row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Tests</h4>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-hover" v-if="tests">
                                <thead>
                                <tr>
                                    <th>Person</th>
                                    <th>Test date</th>
                                    <th>Location</th>
                                    <th>Score</th>
                                    <th>Criterion</th>
                                    <th>Manager</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr v-for="test in tests">
                                    <td>{{ test.person }}</td>
                                    <td>{{ test.test_date }}</td>
                                    <td>{{ test.location }}</td>
                                    <td>{{ test.score }}</td>
                                    <td>{{ test.criterion }}</td>
                                    <td>{{ test.user.name }}</td>
                                    <td>
                                        <div class="flex justify-content-left">

                                            <Link :href="route('test2.edit', test.id)">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-edit-2 me-50">
                                                    <path
                                                        d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
                                                </svg>
                                                <span>Edit</span>
                                            </Link>

                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </TaskLayout>
</template>

<style scoped>

</style>
