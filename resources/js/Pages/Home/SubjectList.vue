<template>
    <div>
        교과 목록
        <li v-for="s in sub" :key="s.id">{{ s.name }}</li>
    </div>
</template>

<script>
export default {
    props: ['sub']
}
</script>
