<template>
    <div>
        <div v-if="tipo=='empresa'">
            <empresa></empresa>
        </div>
        <div v-if="tipo=='postulante'">
            <postulante></postulante>
        </div>
    </div>
</template>
<script>
import empresa from "./empresa.vue";
import postulante from "./postulante.vue";
export default {
    components:{
        empresa: empresa,
        postulante: postulante
    },
    data() {
        return {
            tipo: (local.getItem('tipo_cuenta') !== undefined) ? local.getItem('tipo_cuenta'): ""
        }
    },

}
</script>