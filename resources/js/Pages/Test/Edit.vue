<script>

import {Link, router} from "@inertiajs/vue3";
import TaskLayout from "@/Layouts/TaskLayout.vue";

export default {
    name: "Test Edit",

    components: {
        Link, TaskLayout
    },

    props: [
        'errors',
        'users',
        'test'
    ],

    data(){
        return {
            id: this.test.id,
            person: this.test.person,
            test_date: this.test.test_date,
            location: this.test.location,
            score: this.test.score,
            criterion: this.test.criterion,
            user_id: this.test.user_id,
        }
    },
    methods:{
        update(){
            //console.log(this.user_id)
            //this.$inertia.post
            router.patch('/tests/' + this.id, {
                person: this.person,
                test_date: this.test_date,
                location: this.location,
                score: this.score,
                criterion: this.criterion,
                user_id: this.user_id,
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
                            <h4 class="card-title">Tests</h4>
                        </div>
                        <div class="card-body">
                            <Link :href="route('test.index')" class="btn btn-primary me-1 waves-effect waves-float waves-light">Back</Link>
                        </div>
                        <div class="table-responsive w-3/4">

                            <!-- -->
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Horizontal Form</h4>
                                </div>
                                <div class="card-body">
                                    <form @submit.prevent="update" class="form form-horizontal">
                                        <div class="row">

                                            <div class="col-12">
                                                <div class="mb-1 row">
                                                    <div class="col-sm-3">
                                                        <label class="col-form-label" for="input-person">Person</label>
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <input v-model="person" type="text" id="input-person" class="form-control rounded-lg border-1 border-gray-400" placeholder="Person">
                                                        <span v-if="errors.person" class="error">{{ errors.person }}</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="mb-1 row">
                                                    <div class="col-sm-3">
                                                        <label class="col-form-label" for="input-test-date">Test date</label>
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <input v-model="test_date" type="date" id="input-test-date" class="form-control rounded-lg border-1 border-gray-400" placeholder="Test date">
                                                        <span v-if="errors.test_date" class="error">{{ errors.test_date }}</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="mb-1 row">
                                                    <div class="col-sm-3">
                                                        <label class="col-form-label" for="input-location">Location</label>
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <input v-model="location" id="input-location" type="text" class="form-control rounded-lg border-1 border-gray-400" placeholder="Location">
                                                        <span v-if="errors.location" class="error">{{ errors.location }}</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="mb-1 row">
                                                    <div class="col-sm-3">
                                                        <label class="col-form-label" for="input-score">Score</label>
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <input v-model="score" id="input-score" type="text" class="form-control rounded-lg border-1 border-gray-400" placeholder="Score">
                                                        <span v-if="errors.score" class="error">{{ errors.score }}</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="mb-1 row">
                                                    <div class="col-sm-3">
                                                        <label class="col-form-label" for="input-criterion">Criterion</label>
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <input v-model="criterion" id="input-criterion" type="text" class="form-control rounded-lg border-1 border-gray-400" placeholder="Criterion">
                                                        <span v-if="errors.criterion" class="error">{{ errors.criterion }}</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="mb-1 row">
                                                    <div class="col-sm-3">
                                                        <label class="col-form-label" for="input-criterion">Manager</label>
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <select v-model="user_id" class="form-control">
                                                            <option value="" disabled selected>Выберите менеджера</option>
                                                            <option v-for="user in users" :key="user.id" :value="user.id">{{ user.name }}</option>
                                                        </select>
                                                        <span v-if="errors.user_id" class="error">{{ errors.user_id }}</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-sm-9 offset-sm-3">
                                                <button type="submit" class="btn btn-primary me-1 waves-effect waves-float waves-light">Update</button>
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
