<template>
    <div class="row" v-if="publicacion!=null">
        <div class="col-sm-4">
            <div class="card">
                <div class="card-portada">
                </div>
                <div class="card-icon">
                    <img :src="base('empresa.png')" alt="">
                </div>
                <div class="card-body">
                    <h5>{{ publicacion.empresa.nombre }}</h5>
                    <p>
                        {{ publicacion.empresa.descripcion}}
                    </p>
                    <p class="resumen"><b>URL:</b> https://tottus.com/</p>
                    <p class="resumen"><b>Dirección:</b> {{ publicacion.empresa.direccion }}</p>
                </div>
            </div>    
        </div>
        <div class="col-sm-8">
            <div class="card">
                <div class="card-body">
                    <h5>{{ publicacion.titulo }}</h5>
                    <h6>{{ publicacion.lugar }}</h6>
                    <hr>
                    <p><b>Descripción</b></p>
                    <p>
                        {{ publicacion.descripcion}}
                    </p>
                    <p><b>Requerimientos</b></p>
                    <p>Educación mínima: {{publicacion.educacion }}</p>
                    <p>Años de experiencia: {{ (publicacion.experiencia==0)? 'Sin Experiencia' : publicacion.experiencia }}</p>
                    <p>Edad: {{ publicacion.edad }}</p>
                    <p>Conocimientos: {{ publicacion.conocimiento }}</p>
                    <div v-if="publicacion.estado=='0'" class="col-12 text-center">
                        <button class="btn btn-primary" @click="postular">POSTULAR</button>
                    </div>
                    <div v-else class="col-sm-12">
                        <h6>Proceso Terminado</h6>
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
            publicacion: null,
        }
    },
    mounted() {
        axios.get(api_link+'publicacion/'+this.$route.params.id)
        .then(response =>{
            this.publicacion=response.data;
        });
    },
    methods: {
        base(url){
            return public_base+url;
        },
        postular(){
            if (local.getItem('tipo_cuenta')!==null&&local.getItem('tipo_cuenta')=="postulante") {
                
                axios.post(api_link+'postulacion',{
                    publicacion_id: this.$route.params.id,
                    postulante_id: JSON.parse(local.getItem('cuenta')).id
                })
                .then(response=>{
                    var data=response.data;
                    if(data.status=="OK"){
                        swal({
                            icon:"success",
                            text: "Postulación Presentada", 
                            timer: 3000
                        });
                        this.$router.push({path: "/perfil"} );
                    }else{
                        swal({
                            icon:"info",
                            text: data.data, 
                            timer: 3000
                        });
                    }
                });
            }else{
                this.$router.push({path: "/login"} );
            }
        }
    },
}
</script>