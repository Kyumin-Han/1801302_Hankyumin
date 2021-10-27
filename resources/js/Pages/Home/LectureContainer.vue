<template>
    <app-layout>
        <lecture/>
    </app-layout>
</template>

<script>
import AppLayout from '@/Layouts/AppLayout.vue';
import Lectrue from './LectureList.vue'

export default ({
    components:{
        AppLayout,
        Lectrue,
    }
})
</script>
