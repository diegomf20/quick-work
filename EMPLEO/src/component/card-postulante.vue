<template>
    <div class="col-sm-4">
        <div class="card">
            <div class="card-portada">
            </div>
            <div class="card-icon">
                <img :src="base('empresa.png')" alt="">
            </div>
            <div class="card-body">
                <h5>{{ postulante.nombre + ' ' + postulante.apellido }}</h5>
                <p>
                    {{ postulante.puesto }}
                </p>
            </div>
        </div>    
    </div>
</template>
<script>
export default {
    data() {
        return {
            postulante: JSON.parse(local.getItem('cuenta'))
        }
    },
    methods:{
        base(url){
            return public_base+url;
        }
    }
}
</script>
