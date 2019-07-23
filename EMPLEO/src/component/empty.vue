<template>
    <div>
        <cHeader></cHeader>
        <div class="container my-3" >
            <slot/>
        </div>
    </div>
</template>
<script>
import cHeader from './cHeader.vue'
export default {
    components:{
        'cHeader': cHeader,
    },
}
</script>
