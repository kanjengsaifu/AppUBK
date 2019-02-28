<div class="col-lg-12">
    <div class="card">
        <div class="card-body card-block">
                <div class="form-group">
                    <div class="input-group">
                        <input @keyup.enter="addClass()" v-model="kelas.nama" type="text" placeholder="Nama Kelas" class="form-control">
                    </div>
                </div>
                <div class="form-actions form-group">
                    <input @click="addClass()" class="btn btn-secondary btn-sm" type="button" value="Submit">
                </div>
        </div>
    </div>
</div>
<div class="table-responsive">
    <div class="card-body">
        <table class="table table-bordered">
            <thead class="thead-dark">
                <th scope="col" class="text-center">No</th>
                <th scope="col">Nama Kelas</th>
                <th scope="col">Action</th>
            </thead>
            <tbody>
                <tr v-for="(data,key) in dataKelas">
                    <td>{{key+1}}</td>
                    <td>{{data.nama_kelas}}</td>
                    <td>
                        <button @click="deleteClass(key,data.id_kelas)" class="btn btn-danger">Hapus</button>
                        <button class="btn btn-info" @click="editKelas.form=true,editKelas.id_kelas=data.id_kelas,editKelas.key=key">Edit</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>