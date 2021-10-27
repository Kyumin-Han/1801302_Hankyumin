<template>
    <app-layout>
        <subject-list :sub="subject"/>
    </app-layout>
</template>

<script>
import AppLayout from '@/Layouts/AppLayout.vue';
import SubjectList from './SubjectList.vue';

export default ({
    props: ['subject'],
    components:{
        AppLayout,
        SubjectList,
    }
})
</script>
