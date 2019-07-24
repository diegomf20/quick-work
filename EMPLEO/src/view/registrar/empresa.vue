<template>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    Registro de Empresa
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
                                    <input v-model="empresa.email" type="email" class="form-control">
                                </div>
                                <div class="col-12 form-group">
                                    <label for="">Contraseña:</label>
                                    <input v-model="empresa.contrasenia" type="password" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="row">
                                <div class="col-sm-12">
                                    <h6>DATOS DE EMPRESA</h6>
                                </div>
                                <div class="col-sm-4 form-group">
                                    <label for="">RUC:</label>
                                    <input v-model="empresa.ruc" type="text" class="form-control">
                                </div>
                                <div class="col-sm-8 form-group">
                                    <label for="">Nombre de Empresa:</label>
                                    <input v-model="empresa.nombre" type="text" class="form-control">
                                </div>
                                <div class="col-sm-12 form-group">
                                    <label for="">Dirección:</label>
                                    <input v-model="empresa.direccion" type="text" class="form-control">
                                </div>
                                <div class="col-sm-12 form-group">
                                    <label for="">Descripción:</label>
                                    <textarea v-model="empresa.descripcion" rows="4" class="form-control">

                                    </textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 text-center mb-2">
                            <button class="btn btn-primary" @click="guardar()">REGISTRARSE</button>
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
            empresa:{
                email: null,
                contrasenia: null,
                ruc: null,
                nombre: null,
                direccion: null,
                descripcion: null
            }
        }
    },
    methods: {
        guardar(){
            axios.post(api_link+'empresa',this.empresa)
                .then(response=>{
                    swal({
                        icon:"success",
                        text: "Empresa Registrada", 
                        timer: 3000
                    });
                    local.setItem('tipo_cuenta','empresa');
                    local.setItem('cuenta',JSON.stringify(response.data.data));
                    this.$router.push({path: "/perfil"} );
                });
        }
    },
}
</script>