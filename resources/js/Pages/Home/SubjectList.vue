<template>
    <div>
        교과 목록
        <li v-for="s in sub" :key="s.id"> 과목 명: {{ s.name }} 학점: {{ s.score }}</li>
    </div>
</template>

<script>
export default {
    props: ['sub']
}
</script>
