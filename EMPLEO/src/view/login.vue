<template>
    <div class="row justify-content-sm-center">
        <div class="col-sm-4">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12 tex-center">
                            <h4 class="text-center">LOGIN</h4>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-12">
                            <select class="form-control" v-model="login.tipo">
                                <option value="postulante">Postulante</option>
                                <option value="empresa">Empresa</option>
                            </select>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-12">
                            <label for="">Usuario (Email):</label>
                            <input v-model="login.usuario" type="email" class="form-control">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-12">
                            <label for="">Contraseña:</label>
                            <input v-model="login.contrasenia" type="password" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 text-center">
                            <button class="btn btn-info" @click="ingresar">Ingresar</button>
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
            login:{
                tipo: 'postulante',
                usuario: '',
                contrasenia: ''
            }
        }
    },
    mounted() {
    },
    methods: {
        ingresar(){
            axios.post(api_link+'login',this.login)
            .then(response=>{
                var data=response.data;
                if(data.status=="OK"){
                    if(this.login.tipo=="postulante"){
                        local.setItem('tipo_cuenta','postulante');
                    }else{
                        local.setItem('tipo_cuenta','empresa');
                    }
                    local.setItem('cuenta',JSON.stringify(data.data));
                    bus.$emit('emit-logear', 1);
                    this.$router.push({path: "/perfil"} );
                }else{
                    swal({
                        icon:"info",
                        text: data.data, 
                        timer: 3000
                    });
                }
            });
        }
    },
}
</script>
