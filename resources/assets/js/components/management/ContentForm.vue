<template>
    <form @submit.prevent="handleSubmit" method="post">
        <div class="form-wrapper" v-for="(content, index) in inputs"
        :key="content.index">
            <div class="row">
                <div class="form-group col-md-3">
                    <label>Bulan</label>
                    <input type="text" v-model="content.month" class="form-control">
                </div>
                <div class="form-group col-md-3">
                    <label>Estimasi opening</label>
                    <input type="text" v-model="content.opening_estimation" class="form-control">
                </div>
                <div class="form-group col-md-3">
                    <label>Lokasi store</label>
                    <input type="text" v-model="content.store_location" class="form-control">
                </div>
                <div class="form-group col-md-3">
                    <label>Pemilik store</label>
                    <input type="text" v-model="content.store_owner" class="form-control">
                </div>
            </div>
            <div class="row py-4">
                <div class="form-group col-md-1 text-center offset-2">
                    <label>H-44</label>
                    <input type="text" v-model="content.h_44" class="form-control">
                </div>
                <div class="form-group col-md-1 text-center">
                    <label>H-32</label>
                    <input type="text" v-model="content.h_32" class="form-control">
                </div>
                <div class="form-group col-md-1 text-center">
                    <label>H-22</label>
                    <input type="text" v-model="content.h_22" class="form-control">
                </div>
                <div class="form-group col-md-1 text-center">
                    <label>H-21</label>
                    <input type="text" v-model="content.h_21" class="form-control">
                </div>
                <div class="form-group col-md-1 text-center">
                    <label>H-8</label>
                    <input type="text" v-model="content.h_8" class="form-control">
                </div>
                <div class="form-group col-md-1 text-center">
                    <label>H-3</label>
                    <input type="text" v-model="content.h_3" class="form-control">
                </div>
                <div class="form-group col-md-1 text-center">
                    <label>H-2</label>
                    <input type="text" v-model="content.h_2" class="form-control">
                </div>
                <div class="form-group col-md-1 text-center">
                    <label>H</label>
                    <input type="text" v-model="content.h" class="form-control">
                </div>
            </div>
            <div class="row">
                <div class="col-md-2 offset-5">
                    <button class="btn btn-block btn-danger" @click="deleteRow(index)">Hapus data</button>
                </div>
            </div>
        <hr>
        </div>
        <div class="row">
            <div class="col-md-3 offset-3">
                <button class="btn btn-block btn-outline-success" @click="addRow">Tambah data</button>
            </div>
            <div class="col-md-3">
                <button class="btn btn-block btn-primary">Submit</button>
            </div>
        </div>
    </form>
</template>

<script>
export default {
    data() {
        return {
            inputs: [{}]
        }
    },
    methods: {
        addRow() {
            this.inputs.push({
                month: '',
                opening_estimation: '',
                store_location: '',
                store_owner: '',
                h_44: '',
                h_44: '',
                h_32: '',
                h_22: '',
                h_21: '',
                h_8: '',
                h_3: '',
                h_2: '',
                h: '',
            })
        },

        deleteRow(index) {
            this.inputs.splice(index, 1)
        },

        handleSubmit() {
            // post data to server
            axios.post('/create', this.$data)
            .then(response => {
                swal({
                    title: 'Berhasil!',
                    text: response.data,
                    type: 'success',
                    confirmButtonText: 'OK'
                })
            }) // throw response if success
            .catch(error => {
                console.log(error)
            }) // throw error if error
        }
    }
}
</script>
