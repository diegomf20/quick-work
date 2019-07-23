<template>
    <div class="row">
        <card-empresa></card-empresa>
        <div class="col-sm-8">
            <div class="card">
                <div class="card-body">
                    <h5>Crear Publicación</h5>
                    <hr>
                    <div class="row form-group">
                        <div class="col-sm-4">
                            <p><b>Título</b></p>
                        </div>
                        <div class="col-sm-8">
                            <input v-model="publicacion.titulo" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <p><b>Ubicación</b></p>
                        </div>
                        <div class="col-sm-8">
                            <select v-model="publicacion.lugar" class="form-control">
                                <option value="LAMBAYEQUE">LAMBAYEQUE</option>
                                <option value="TRUJILLO">TRUJILLO</option>
                                <option value="PIURA">PIURA</option>
                                <option value="LIMA">LIMA</option>
                                <option value="CAJAMARCA">CAJAMARCA</option>
                                <option value="TUMBES">TUMBES</option>
                            </select>
                        </div>
                    </div>
                    <p><b>Descripción</b></p>
                    <textarea v-model="publicacion.descripcion" class="form-control mb-2" rows="5">

                    </textarea>
                    <p><b>Requerimientos</b></p>
                    <div class="row form-group">
                        <div class="col-sm-4">
                            <label for="">Educación mínima:</label>
                        </div>
                        <div class="col-sm-8">
                            <select v-model="publicacion.educacion" class="form-control">
                                <option value="UNIVERSITARIA">UNIVERSITARIA</option>
                                <option value="TECNICA">TECNICA</option>
                                <option value="SECUNDARIA">SECUNDARIA</option>
                            </select>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-sm-4">
                            <label for="">
                                Años de experiencia: 
                            </label>
                        </div>
                        <div class="col-sm-8">
                            <input type="number" v-model="publicacion.experiencia" class="form-control" min="0">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-sm-4">
                            <label for="">Edad:</label>
                        </div>
                        <div class="col-sm-8">
                            <input type="text" v-model="publicacion.edad" class="form-control">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-sm-4">
                            Conocimientos: 
                        </div>
                        <div class="col-sm-8">
                            <input type="text" v-model="publicacion.conocimiento" class="form-control">
                        </div>
                    </div>
                    <div class="col-12 text-center">
                        <button class="btn btn-primary">PUBLICAR</button>
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
            publicacion:{
                titulo:"",
                descripcion: "",
                educacion: "UNIVERSITARIA",
                experiencia: 0,
                edad: "",
                conocimiento: "",
                lugar: "LAMBAYEQUE",
                empresa_id: JSON.parse(local.getItem('cuenta')).id
            }
        }
    },
    methods: {
        
    },
}
</script>

