<!--
<template>
    <div class="container">
        <div v-if="seen">
            <form @submit.prevent="savedata">
                <div class="form-group">
                    <input type="text" class="form-control" v-model="form.title" name="title" id="title" placeholder="title"
                           required>
                </div>

                <div class="form-group">
                    <input type="text" class="form-control" v-model="form.overview" name="overview" id="overview"
                           placeholder="overview" required>
                </div>

                <div class="form-group">
                <input type="text" class="form-control" v-model="form.release_year" name="release_year" id="release_year" placeholder="release_year"
                       required>
        </div>

        <div class="form-group">
            <input type="text" class="form-control" v-model="form.run_time" name="run_time" id="run_time"
                   placeholder="run_time" required>
        </div>
                <div class="form-group">
                    <input type="text" class="form-control" v-model="form.director_name" name="director_name" id="director_name"
                           placeholder="director_name" required>
                </div>
                <button type="submit" style="float: right" id="btn" class="btn btn-secondary w-5">Add</button>
            </form>
        </div>

        <div v-else>
            <form @submit.prevent="updatedata">
                <div class="form-group">
                    <input type="text" class="form-control" v-model="form.title" name="title" id="title" placeholder="title"
                           required>
                </div>

                <div class="form-group">
                    <input type="text" class="form-control" v-model="form.overview" name="overview" id="overview"
                           placeholder="overview" required>
                </div>

                <div class="form-group">
                    <input type="text" class="form-control" v-model="form.release_year" name="release_year" id="release_year" placeholder="release_year"
                           required>
                </div>

                <div class="form-group">
                    <input type="text" class="form-control" v-model="form.run_time" name="run_time" id="run_time"
                           placeholder="run_time" required>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" v-model="form.director_name" name="director_name" id="director_name"
                           placeholder="director_name" required>
                </div>
                <button type="submit" id="btn" class="btn btn-secondary w-5">update</button>
            </form>

        </div>
        <br>
        <br>
        <div>


        </div>


    </div>
</template>

<script>
export default {
    // name: "addMovie-Component",
    // components: {
    data() {
        return {
            seen: true,
            movies: '',
            form: new Form({
                name: '',
                address: '',
            })
        }
    },
    methods: {

        gettodos() {
            axios.get('/Addmovie').then((res) => {
                this.todos = res.data
            }).catch((error) => {
                console.log(error)
            })
        },

        savedata() {
            let data = new FormData();
            data.append('title', this.form.title)
            data.append('overview', this.form.overview)
            data.append('release_year', this.form.release_year)
            data.append('run_time', this.form.run_time)
            data.append('director_name', this.form.director_name)

            axios.post('/addmovie', data).then((res) => {
                this.form.reset()
                this.gettodos()
            })
        },


    },
    mounted() {
        this.gettodos()

    }
}
</script>

<style scoped>

</style>
-->
