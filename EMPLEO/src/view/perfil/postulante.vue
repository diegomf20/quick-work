<template>
    <div class="row">
        <card-postulante></card-postulante>
         <div class="col-sm-8">
            <div class="card">
                <div class="card-body">
                    <h5>Postulaciones</h5>
                    <hr>
                    <div class="col-12">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Fecha Postulación</th>
                                    <th>Título de publicación</th>
                                    <th>Empresa</th>
                                    <th>Estado</th>
                                    <th>Publicación</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="postulacion in postulaciones">
                                    <td>{{ postulacion.created_at }}</td>
                                    <td>{{ postulacion.publicacion.titulo }}</td>
                                    <td>{{ postulacion.empresa.nombre }}</td>
                                    <td>{{ postulacion.estado }}</td>
                                    <td>
                                        <router-link :to="'/oferta/'+postulacion.publicacion_id" class="btn btn-danger">
                                            ver
                                        </router-link>
                                    </td>
                                </tr>
                                <tr v-if="postulaciones.length==0">
                                    <td colspan="3" class="text-center">Ninguna Postulación realizada.</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
import cardPostulante from "../../component/card-Postulante.vue";

export default {
    components:{
        cardPostulante
    },
    data() {
        return {
            postulaciones:[]
        }
    },
    mounted() {
        axios.get(api_link+'postulacion',{params:{postulante_id: JSON.parse(local.getItem('cuenta')).id}})
        .then(response=>{
            this.postulaciones=response.data;
        });
    },
    methods: {
        base(url){
            return public_base+url;
        }
    },
}
</script>