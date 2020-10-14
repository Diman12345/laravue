<template>
  <div>
    <div class="row">
      <div class="col-md-6">
        <br>
        <br>
        <h4>Create new data</h4>
        <br>
        <!-- prevent form submit untuk reload halaman, kemudian memanggil function addData() -->
        <form @submit.prevent="addData()">
          <div class="form-group">
            <label>Nama</label>
            <input
              type="textfield"
              class="form-control"
              placeholder="Input your first name"
              v-model="form.nama"
              required
            >
          </div>
          <div class="form-group">
            <label>Umur</label>
            <input
              type="textfield"
              class="form-control"
              placeholder="Input your last name"
              v-model="form.umur"
              required
            >
          </div>
          <div class="form-group">
            <label>Alamat</label>
            <input
              type="textfield"
              class="form-control"
              placeholder="Input your last name"
              v-model="form.alamat"
              required
            >
          </div>
          <div class="form-group">
            <label>Gender</label>
            <input
              type="textfield"
              class="form-control"
              placeholder="Input your last name"
              v-model="form.gender"
              required
            >
          </div>
          <div class="form-group">
            <label>HP</label>
            <input
              type="textfield"
              class="form-control"
              placeholder="Input your last name"
              v-model="form.hp"
              required
            >
          </div>
          <div class="form-group">
            <label>Pekerjaan</label>
            <input
              type="textfield"
              class="form-control"
              placeholder="Input your last name"
              v-model="form.pekerjaan"
              required
            >
          </div>
          <button class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data(){
    return{
      form:{
        nama: '',
        umur: '',
        alamat: '',
        gender: '',
        hp: '',
        pekerjaan: ''
      }
    }
  },
  methods: {
    addData() {
      // post data ke api menggunakan axios
      axios
        .post("http://127.0.0.1:8000/api/person/add", {
          nama: this.form.nama,
          umur: this.form.umur,
          alamat: this.form.alamat,
          gender: this.form.gender,
          hp: this.form.hp,
          pekerjaan: this.form.pekerjaan
        })
        .then(response => {
          // push router ke read data
          this.$router.push("/");
        });
    }
  }
};
</script>