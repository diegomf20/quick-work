<template>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    Registro de Postulante
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="row">
                                <div class="col-sm-12">
                                    <h6>DATOS DE ACCESO</h6>
                                </div>
                                <div class="col-12 form-group">
                                    <label for="">E-mail:</label>
                                    <input v-model="postulante.email" type="email" class="form-control">
                                </div>
                                <div class="col-12 form-group">
                                    <label for="">Contraseña:</label>
                                    <input v-model="postulante.contrasenia" type="password" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="row">
                                <div class="col-sm-12">
                                    <h6>DATOS DE POSTULANTE</h6>
                                </div>
                                <div class="col-sm-6 form-group">
                                    <label for="">Nombres:</label>
                                    <input v-model="postulante.nombre" type="text" class="form-control">
                                </div>
                                <div class="col-sm-6 form-group">
                                    <label for="">Apellidos:</label>
                                    <input v-model="postulante.apellido" type="text" class="form-control">
                                </div>
                                <div class="col-sm-12 form-group">
                                    <label for="">Puesto de trabajo: </label>
                                    <input v-model="postulante.puesto" type="text" class="form-control">
                                </div>
                                <div class="col-sm-5 form-group">
                                    <label for="">Fecha de nacimiento:</label>
                                    <input v-model="postulante.nacimiento" type="date" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 text-center mb-2">
                            <button class="btn btn-primary" @click="guardar">REGISTRARSE</button>
                        </div>
                        <div class="col-sm-12 text-center">
                            <a>¿Ya tiene una cuenta?</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    data() {
        return {
            postulante:{
                email: null,
                contrasenia:null,
                nombre: null,
                apellido:null,
                puesto: null,
                nacimiento:null
            }
        }
    },
    methods: {
        guardar(){
            axios.post(api_link+'postulante',this.postulante)
                .then(response=>{
                    swal({
                        icon:"success",
                        text: "Postulante Registrado", 
                        timer: 3000
                    });
                    local.setItem('tipo_cuenta','postulante');
                    local.setItem('cuenta',JSON.stringify(response.data.data));
                    this.$router.push({path: "/perfil"} );
                });
        }
    },
}
</script>
