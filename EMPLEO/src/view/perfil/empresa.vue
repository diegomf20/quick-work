<template>
    <div class="row">
        <card-empresa></card-empresa>
        <div class="col-sm-8">
            <div class="card">
                <div class="card-body">
                    <h5>Convocatorias de Personal</h5>
                    <hr>                    
                    <div class="col-12 text-center my-3">
                        <router-link to="publicacion/crear" class="btn btn-primary">
                            Nueva Convocatoria
                        </router-link>
                    </div>
                    <div class="col-12">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>FECHA</th>
                                    <th>TITULO DE PUBLICACIÓN</th>
                                    <th>ESTADO</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="publicacion in publicaciones">
                                    <td>{{ publicacion.created_at }}</td>
                                    <td>{{ publicacion.titulo }}</td>
                                    <td>{{ (publicacion.estado=='0')? 'Publicado': 'Contratado' }}</td>
                                    <td>
                                        <button class="btn btn-info">Ver CVs</button>
                                    </td>
                                </tr>
                                <tr v-if="publicaciones.length==0">
                                    <td colspan="3" class="text-center">Ninguna Publicación realizada.</td>
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
import cardEmpresa from "../../component/card-empresa.vue";
export default {
    components:{
        cardEmpresa
    },
    data() {
        return {
            publicaciones:[]
        }
    },
    mounted() {
        axios.get(api_link+'publicacion',{params:{id: JSON.parse(local.getItem('cuenta')).id}})
        .then(response=>{
            this.publicaciones=response.data;
        });
    },
    methods: {
        
    },
}
</script>