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
    methods: {
        deleteTest(id){
            //console.log('delete test ' + id)
            router.delete('/tests/' + id);
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

                                            <Link :href="route('test.edit', test.id)">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-edit-2 me-50">
                                                    <path
                                                        d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
                                                </svg>
                                                <span>Edit</span>
                                            </Link>

                                            <a @click.prevent="deleteTest(test.id)" href="#" class="ml-6" v-if="auth_user.is_admin===1">
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
                        <a href="/tests/create" class="btn btn-primary waves-effect waves-float waves-light" type="submit">New test</a>
                    </div>
                </div>
            </div>
        </div>
    </TaskLayout>
</template>

<style scoped>

</style>
